<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI RBAC
 * RBAC中默认网关页面
 */
class Index extends MX_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->config('RBAC/rbac');
		$this->load->helper('RBAC/rbac');
		$this->load->library('memcached');
		$this->load->library('template');
	}
	
	/**
	 * 主页
	 */
	public function index()
	{
		//验证是否登录
		if(!rbac_conf(array('INFO','id')))
		{
			error_redirct($this->config->item('rbac_auth_gateway'),"请先登录！");
		}else{
			success_redirct($this->config->item('rbac_default_index'),"您已成功登录,正在跳转请稍候！","1");
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
				redirect($this->config->item('rbac_default_index'));
			}else{
				redirect($this->config->item('rbac_auth_gateway'),'refresh');
			}
		}else{
			$this->template->set_partial('header','header');
			$this->template->set_partial('footer','footer');
			$this->template->build('RBAC/login');
// 			$this->load->view("RBAC/login");
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
