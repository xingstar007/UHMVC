<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CI RBAC
 * RBAC管理后台中菜单模型
 * @author		star
 * @link		http://www.icyao.com
 */
class Menu_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('rbac',true);
	}
	
	
	/**
	 * 获取菜单页
	 * @param string $id
	 * @return array($id_list,$menu)
	 */
	function get_menu_list($id = NULL)
	{
		$rbac_where = "";
		$menu_hidden_array = $this->config->item('rbac_manage_menu_hidden');
		if(!empty($menu_hidden_array))
		{
			foreach($menu_hidden_array as $menu_hidden)
			{
				$rbac_where.= "AND title != '$menu_hidden' ";
			}
		}
		$sql = "SELECT rm.*,rn.memo,concat(' [',rn.dirc,'/',rn.cont,'/',rn.func,']') as dcf  
				FROM rbac_menu rm left join rbac_node rn on rm.node_id = rn.id 
				WHERE ".($id==NULL?"rm.p_id  is NULL":"rm.id  = '".$id."'")." {$rbac_where} 
				ORDER BY sort asc";
		$query = $this->db->query($sql);
		$return['first'] = $query->result();
		$id_list = "";
		foreach ($return['first'] as $first)
		{
			$id_list .= $first->id.",";
		}
		$id_list = substr($id_list,0,-1);
		$sql = "SELECT rm.*,rn.memo,concat(' [',rn.dirc,'/',rn.cont,'/',rn.func,']') as dcf 
				FROM rbac_menu rm left join rbac_node rn on rm.node_id = rn.id 
				WHERE rm.p_id in (".$id_list.")
				ORDER BY sort asc";
		$query = $this->db->query($sql);
		$return['second'] = $query->result();
		return $return;
	}
	
	/**
	 * 菜单新增
	 * @param string $status,$title,$icon,$sort,$node,$p_id
	 * @return boolean
	 */
	function add_menu($status,$title,$icon,$sort,$node,$p_id)
	{
		if(empty($node)||is_null($node))
		{
			$node = 0;
		}
		if(empty($p_id))
		{
			$p_id = null;
		}
		$sql = "INSERT INTO rbac_menu (`status`,`title`,`icon`,`sort`,`node_id`,`p_id`) 
				values( '{$status}','{$title}','{$icon}','{$sort}','{$node}',{$p_id})";
		$this->db->query($sql);
	}
	
	/**
	 * 显示节点
	 */
	function show_node()
	{
		$rbac_where = "";
		$node_hidden_array = $this->config->item('rbac_manage_node_hidden');
		if(!empty($node_hidden_array))
		{
			foreach($node_hidden_array as $node_hidden)
			{
				$rbac_where.= "AND dirc != '$node_hidden' ";
			}
		}
		$node_query = $this->db->query("SELECT * FROM rbac_node WHERE status = 1 {$rbac_where} ORDER BY dirc,cont");
		return $node_query->result();
	}
	
	/**
	 * 检测菜单是否存在
	 */
	function check_menu($id)
	{
		$sql = "SELECT rm.id,rm.title,rm.node_id,rm.p_id,rm.sort,rm.status,rn.memo 
				FROM rbac_menu rm left join rbac_node rn on rm.node_id = rn.id 
				WHERE rm.id =".$id;
		$query = $this->db->query($sql);
		$data = $query->row_array();
		return $data;
	}	
	
	/**
	 * 菜单删除
	 */
	function delete_menu($menu_data)
	{
		$sql = "DELETE FROM rbac_menu WHERE id in (".$menu_data["id_list"].") ";
		$this->db->query($sql);
	}

	/**
	 * 菜单编辑
	 */
	function update_menu($status,$title,$icon,$sort,$node,$p_id,$id)
	{
		if(empty($node)||is_null($node))
		{
			$node = 0;
		}
		if(empty($p_id))
		{
			$p_id = null;
		}
		$sql = "UPDATE rbac_menu SET status='{$status}',title='{$title}',icon = '{$icon}',sort='{$sort}',node_id='{$node}',{$p_id} 
				WHERE id = '{$id}'";
		$this->db->query($sql);
	}
	
}