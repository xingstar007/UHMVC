<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI RBAC
 * 模型
 */

class Rbac_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database('rbac',true);
	}
	
	/*
	 * 获取权限列表
	*/
	public function get_acl($role_id)
	{
		$query = $this->db->query("SELECT id,dirc,cont,func FROM `rbac_node` WHERE id in (SELECT node_id FROM `rbac_auth` WHERE role_id = ".$role_id.")");
		$role_data = $query->result();
		foreach($role_data as $vo)
		{
			$Tmp_role[$vo->dirc][$vo->cont][$vo->func] = TRUE;
		}
		rbac_conf(array('ACL'),$Tmp_role);
	}
	
	/*
	 * 用户登录检测
	*/
	public function check_user($username,$password)
	{
		$query = $this->db->query("SELECT id,password,nickname,email,role_id,status FROM `rbac_user` WHERE username = '".$username."' LIMIT 1");
		$data  = $query->row_array();
		if($data)
		{
			if($data['status']==1)
			{
				if($data['password']==$password)
				{
					rbac_conf(array('INFO','id'),$data['id']);
					rbac_conf(array('INFO','role_id'),$data['role_id']);
					rbac_conf(array('INFO','email'),$data['email']);
					rbac_conf(array('INFO','nickname'),$data['nickname']);
					$this->get_acl($data['role_id']);
					return TRUE;
				}
				else{
					return "用户密码错误！";
				}
			}else{
				return "该用户已禁用！";
			}
		}else{
			return "该用户不存！";
		}
	}
	
	/*
	 * 用户登录检测 By id
	*/
	public function check_user_by_id($id)
	{
		$query = $this->db->query("SELECT id,password,nickname,email,role_id,status FROM `rbac_user` WHERE id = '".$id."' LIMIT 1");
		$data = $query->row_array();
		if($data)
		{
			if($data['status']==1)
			{
				rbac_conf(array('INFO','id'),$data['id']);
				rbac_conf(array('INFO','role_id'),$data['role_id']);
				rbac_conf(array('INFO','email'),$data['email']);
				rbac_conf(array('INFO','nickname'),$data['nickname']);
				$this->get_acl($data['role_id']);
				return TRUE;
			}else{
				return "该用户已禁用！";
			}
		}else{
			return "该用户不存！";
		}
	}

	/*
	 * 用户登录检测 By id
	*/
	public function get_menu_father_data()
	{
		$sql = "SELECT rm.id,rm.title,rm.icon,rm.node_id,rm.p_id,rn.dirc,rn.cont,rn.func 
				FROM rbac_menu rm left join rbac_node rn on rm.node_id = rn.id 
				WHERE rm.status = 1 AND rm.p_id is NULL 
				ORDER BY sort asc";
		$query = $this->db->query($sql);
		return $query->result();
	}

	/*
	 * 用户登录检测 By id
	*/
	public function get_menu_child_data()
	{
		$sql = "SELECT rm.id,rm.title,rm.icon,rm.node_id,rm.p_id,rn.dirc,rn.cont,rn.func
				FROM rbac_menu rm left join rbac_node rn on rm.node_id = rn.id
				WHERE rm.status = 1 AND rm.p_id is not null
				ORDER BY sort asc";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
}
