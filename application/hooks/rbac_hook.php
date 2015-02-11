<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * CI RBAC
 * RBAC钩子,用于权限验证&菜单生成&视图重写
 */
class Rbac 
{
	
	private $ci_obj;
	
	public function __construct()
	{
		$this->ci_obj = &get_instance();
	}
	
	/*
	 * 权限验证(Hook自动加载)
	 */
	public function aoto_verify()
	{
		//目录
		$directory = substr($this->ci_obj->router->fetch_directory(),11,-13);
		//控制器
		$controller = $this->ci_obj->router->fetch_class();
		//方法
		$function = $this->ci_obj->router->fetch_method();
		//UURI(MD5)
		$this->ci_obj->uuri = md5($directory.$controller.$function);
		if($directory!="")
		{
			//当非主目录
			if($this->ci_obj->config->item('rbac_auth_on'))
			{
				//开启认证
				if(!in_array($directory,$this->ci_obj->config->item('rbac_notauth_dirc')))
				{
					//需要验证的目录
					//验证是否登录
					//echo rbac_conf(array('INFO','id'));
					if(!rbac_conf(array('INFO','id')))
					{
						redirect($this->ci_obj->config->item('rbac_auth_gateway'));
						die();
					}
					if($this->ci_obj->config->item('rbac_auth_type')==2)
					{
						//若为实时认证
						$this->ci_obj->load->model("rbac_model");
						//检测用户状态
						$STATUS = $this->ci_obj->rbac_model->check_user_by_id(rbac_conf(array('INFO','id')));
						if($STATUS==FALSE)
						{
							redirect($this->config->item('rbac_auth_gateway'));
						}
						//ACL重新赋权
						$this->ci_obj->rbac_model->get_acl(rbac_conf(array('INFO','role_id')));
					}
					
					//验证ACL权限
					if(!rbac_conf(array('ACL',$directory,$controller,$function)))
					{
						error_redirct("无权访问此节点！(目录".$directory."/控制器".$controller."/方法".$function."))");
						die();
					}
				}
			}
			//已登录且有权限,获取左侧菜单
			if($this->ci_obj->config->item('rbac_auth_type')==2)
			{
				//若为实时认证
				$this->ci_obj->get_menu = $this->get_menu();
			}else{
				if(rbac_conf(array('MENU')))
				{
					$this->ci_obj->get_menu = rbac_conf(array('MENU'));
				}else{
					rbac_conf(array('MENU'),$this->get_menu());
					$this->ci_obj->get_menu = rbac_conf(array('MENU'));
				}
			}
		}
	}
		
	/*
	 * 获取左侧菜单
	*/
	private function get_menu()
	{		
		$this->ci_obj->load->model("rbac_model");
		$menu_all_data = $this->ci_obj->rbac_model->get_menu_data();
		$menu_father_data = $menu_all_data['first'];
		$menu_child_data = $menu_all_data['second'];
// 		$menu['list'][md5($cvo->dirc.$cvo->cont.$cvo->func)] = $cvo->title;
		foreach ($menu_father_data as $mf)
		{
			if(rbac_conf(array('ACL',$mf->dirc,$mf->cont,$mf->func))||!$mf->node_id)
			{
				$menu_data[$mf->id]['self'] = array(
						'title' => $mf->title,
						'icon' => $mf->icon,
						'uri' => $mf->dirc?$mf->dirc."/".$mf->cont."/".$mf->func:$mf->cont."/".$mf->func
				);
			}
		}
		if(!empty($menu_child_data))
		{
			foreach ($menu_child_data as $mc)
			{
				if(rbac_conf(array('ACL',$mc->dirc,$mc->cont,$mc->func)))
				{
					$menu_data[$mc->p_id]['child'][$mc->id]['self'] = array(
							'title' => $mc->title,
							'icon' => $mc->icon,
							'uri' => $mc->dirc?$mc->dirc."/".$mc->cont."/".$mc->func:$mc->cont."/".$mc->func
					);
				}
			}
		}
		return $menu_data;
	}
}
