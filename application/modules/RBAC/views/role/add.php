<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">新增角色</h4>
	</div><!-- panel-heading -->
	<form role="form" action="" method="post">
		<div class="panel-body">
			<div class="form-group">
    			<label>角色名</label>
    			<input name="rolename" type="text" class="form-control"  placeholder="在此输入角色名" value="">
			</div>
			<div class="checkbox">
				<label>
 					<input value="1" name="status" type="checkbox" checked > 是否启用
				</label>
			</div>
			<button type="submit" class="btn btn-success">确认新增</button>
			<a class="btn btn-danger" href="<?php echo site_url('RBAC/role/index'); ?>">取消修改</a>
		</div>
	</form>
</div>