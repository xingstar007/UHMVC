<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI RBAC
 * RBAC中默认网关页面
 */
class Index extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->config('RBAC/rbac');
		$this->load->helper('RBAC/rbac');
	}
	
	/**
	 * 主页
	 */
	public function index()
	{
		//验证是否登录
		if(!rbac_conf(array('INFO','id')))
		{
			redirect($this->config->item('rbac_auth_gateway'));
		}else{
			redirect($this->config->item('rbac_default_index'));
		}
	}
	
	/**
	 * 用户登录
	 */
	public function login()
	{
		
		$this->load->model("RBAC/rbac_model");
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username&&$password)
		{
			$STATUS = $this->rbac_model->check_user($username,md5($password));
			if($STATUS===TRUE)
			{
				success_redirct('登录成功',$this->config->item('rbac_default_index'));
			}else{
				error_return('用户名或密码错误');
			}
		}else{
			$this->load->view("RBAC/login");
		}
		
	}
	/*
	 * 用户退出
	 */
	public function logout()
	{
		session_destroy();
		success_redirct($this->config->item('rbac_auth_gateway'),"登出成功！",2);
	}

}
