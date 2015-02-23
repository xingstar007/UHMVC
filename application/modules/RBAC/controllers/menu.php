<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CI RBAC
 * RBAC管理后台中菜单控制器
 * @author		star
 * @link		http://www.icyao.com
 */
class Menu extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('RBAC/menu_model');
	}

	/**
	 * 菜单主页
	 */
	public function index()
	{
		$menu_list = $this->menu_model->get_menu_list();
		
		foreach($menu_list['first'] as $menu_first_data)
		{
			$menu_data[$menu_first_data->id]['self'] = array(
				'icon' => $menu_first_data->icon?$menu_first_data->icon:$this->config->item('default_menu_icon'),
				'title' => $menu_first_data->title,
				'node' => $menu_first_data->memo,
				'dcf' => $menu_first_data->dcf,
				'sort' => $menu_first_data->sort,
				'status' => $menu_first_data->status,
				'id' => $menu_first_data->id
			);
		}
		foreach($menu_list['second'] as $menu_second_data)
		{
			$menu_data[$menu_second_data->p_id]['child'][$menu_second_data->id]['self'] = array(
				'icon' => $menu_second_data->icon?$menu_second_data->icon:$this->config->item('default_link_icon'),
				'title' => $menu_second_data->title,
				'node' => $menu_second_data->memo,
				'dcf' => $menu_second_data->dcf,
				'sort' => $menu_second_data->sort,
				'status' => $menu_second_data->status,
				'id' => $menu_second_data->id
			);
		}
		$this->template->load_view('RBAC/menu',array('menu_data'=>$menu_data));
	}
	
	/**
	 * 菜单删除
	 */
	public function delete($id)
	{
		if($this->menu_model->check_menu($id))
		{
			if($this->input->post())
			{
				$verfiy = $this->input->post("verfiy");
				$this->menu_model->delete_menu($menu_data);
				success_redirct("菜单删除成功","RBAC/menu/index");
			}
			//获取当前节点及其子节点
			$menu_data = $this->menu_model->get_menu_list($id);
			foreach($menu_data['first'] as $menu_first_data)
			{
				$return[$menu_first_data->id]['self'] = array(
					'icon' => $menu_first_data->icon?$menu_first_data->icon:$this->config->item('default_menu_icon'),
					'title' => $menu_first_data->title,
					'node' => $menu_first_data->memo,
					'sort' => $menu_first_data->sort,
					'status' => $menu_first_data->status,
				);
			}
			if(!empty($menu_data['second']))
			{
				foreach($menu_data['second'] as $menu_second_data)
				{
					$return[$menu_second_data->p_id]['child'][$menu_second_data->id]['self'] = array(
						'icon' => $menu_second_data->icon?$menu_second_data->icon:$this->config->item('default_link_icon'),
						'title' => $menu_second_data->title,
						'node' => $menu_second_data->memo,
						'sort' => $menu_second_data->sort,
						'status' => $menu_second_data->status,
					);
				}
			}
			$this->template->load_view("RBAC/menu/delete",array('menu_data' => $return));
		}else{
			error_redirct("未找到此菜单","RBAC/menu/index");
		}
	}
	
	/**
	 * 菜单新增
	*/
	public function add($level,$p_id)
	{
		if($this->input->post())
		{
			$title = $this->input->post("title");
			$icon = $this->input->post("icon");
			$sort = $this->input->post("sort");
			$node = $this->input->post("node");
			$level = $this->input->post("level");
			if($level)
			{
				if($title)
				{
					$p_id   = $this->input->post("p_id");
					$status = $this->input->post("status")==""?"0":"1";
					$this->menu_model->add_menu($status,$title,$icon,$sort,$node,$p_id);
					success_redirct("新增菜单成功！","RBAC/menu/index");
				}else{
					error_redirct("标题不能为空！");
				}
			}else{
				error_redirct("参数不正确！");
			}
		}
		$node_data = $this->menu_model->show_node();
		$this->template->load_view("RBAC/menu/add",array("node"=>$node_data,"level"=>$level,"p_id"=>$p_id));
	}
	
	/**
	 * 菜单修改
	 */
	public function edit($id,$level,$p_id="NULL")
	{
		if($this->input->post())
		{
			$id = $this->input->post("id");
			$title = $this->input->post("title");
			$icon = $this->input->post("icon");
			$sort = $this->input->post("sort");
			$node = $this->input->post("node");
			$level = $this->input->post("level");
			if($id&&$level)
			{
				if($title)
				{
					$p_id   = $this->input->post("p_id")=="NULL"?"p_id = NULL":"p_id='{$p_id}'";
					$status = $this->input->post("status")==""?0:1;
					$icon = $this->input->post("icon");
					$this->menu_model->update_menu($status,$title,$icon,$sort,$node,$p_id,$id);
					success_redirct("菜单修改成功！","RBAC/menu/index");
				}else{
					error_redirct("标题不能为空！");
				}
			}else{
				error_redirct("参数不正确！");
			}
		}
		$data = $this->menu_model->check_menu($id);
		if($data)
		{	
			$node_data = $this->menu_model->show_node();
			$this->template->load_view("RBAC/menu/edit",array("data"=>$data,"node"=>$node_data,"level"=>$level,"p_id"=>$p_id));
		}else{
			error_redirct("未找到此菜单");
			redirect(base_url('RBAC/menu/index'));
		}
	}
	
}
