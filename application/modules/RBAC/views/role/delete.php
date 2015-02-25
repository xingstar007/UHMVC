<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">您确定要删除此角色(<?php echo $data["rolename"]; ?>)？</h4>
		<h6>删除角色将同时删除角色的所有授权，请慎重操作！</h6>
	</div><!-- panel-heading -->
	<div class="panel-body">
		<form method="POST" action="">
			<input type="hidden" name="verfiy" value="1" >
			<input class="btn btn-success"  type="submit" value="确定删除">
			<a class="btn btn-danger" href="<?php echo site_url('RBAC/role/index'); ?>">取消修改</a>
		</form>
	</div>
</div>
