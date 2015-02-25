<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CI RBAC
 * RBAC管理后台中成员模型
 * @author		star
 * @link		http://www.icyao.com
 */
class Member_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('rbac',true);
	}
	
	function get_member_count()
	{
		$sql = "SELECT COUNT(1) as cnt FROM rbac_user";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function get_member_list($page,$per_page)
	{
		$sql = "SELECT ru.*,rolename 
				FROM rbac_user ru LEFT JOIN rbac_role rr  ON rr.id = ru.role_id 
				LIMIT ".(($page-1)*$per_page).",".$per_page;
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function get_member_role($id)
	{
		$sql = "SELECT ru.*,rolename 
				FROM rbac_user ru LEFT JOIN rbac_role rr  ON rr.id = ru.role_id 
				WHERE ru.id = ".$id;
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function get_role()
	{
		$sql = "SELECT id,rolename FROM rbac_role WHERE status = 1";
		$query = $this->db->query($sql);
		return  $query->result();
	}
	
	function update_member($id,$password,$status,$role,$nickname,$email)
	{
		if($password)
		{
			$newpass = ",password='".md5($password2)."'";
		}else{
			$newpass="";
		}
		if($status)
		{
			$newstat = ",status='1'";
		}else{
			$newstat = ",status='0'";
		}
		if($role)
		{
			$newrole = ",role_id={$role}";
		}else{
			$newrole = ",role_id=NULL";
		}
		$sql = "UPDATE rbac_user set `nickname`='{$nickname}',`email`='{$email}' {$newpass} {$newstat} {$newrole} WHERE id = {$id}";
		$this->db->query($sql);
	}
	
	function insert_member($username,$nickname,$email,$password,$role,$status)
	{
		$sql = "SELECT * FROM rbac_user WHERE username = '".$username."'";
		$query = $this->db->query($sql);
		$data = $query->row_array();
		if(!$data)
		{
			$sql = "SELECT * FROM rbac_user WHERE email = '".$email."'";
			$query = $this->db->query($sql);
			$data = $query->row_array();
			if(!$data)
			{
				if(!$status)
				{
					$newstat = "0";
				}else{
					$newstat = "1";
				}
				$sql = "INSERT INTO rbac_user (`username`,`nickname`,`email`,`password`,`role_id`,`status`)
						values('{$username}','{$nickname}','{$email}' ,'{$password}','{$role}', '{$status}')";
				$this->db->query($sql);
				$result['flag'] = true;
			}else{
				$result['flag'] = false;
				$result['msg'] = "该Email已存在！";
			}
		}else{
			$result['flag'] = false;
			$result['msg'] = "该用户名已存在！";
		}
		return $result;
	}
	
	function get_member($id)
	{
		$sql = "SELECT * FROM rbac_user WHERE id = ".$id;
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function delete_member($id)
	{
		$sql = "DELETE FROM rbac_user WHERE id = ".$id." ";
		$this->db->query($sql);
	}
	
}