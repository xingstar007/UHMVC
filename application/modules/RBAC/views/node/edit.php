<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">节点修改</h4>
	</div><!-- panel-heading -->
	<form role="form" action="" method="post">
		<div class="panel-body">
			<div class="form-group">
				<label>目录</label>
				<input name="dirc" type="text" class="form-control"  value="<?php echo $data['dirc']; ?>" disabled>
			</div>
			<div class="form-group">
				<label>控制器</label>
				<input name="cont" type="text" class="form-control"  value="<?php echo $data['cont']; ?>" disabled>
			</div>
			<div class="form-group">
				<label>方法</label>
				<input name="func" type="text" class="form-control"  value="<?php echo $data['func']; ?>" disabled>
			</div>
			<div class="form-group">
				<label>备注</label>
				<input name="memo" type="text" class="form-control" placeholder="在此输入备注" value="<?php echo $data['memo']; ?>">
			</div>
			<div class="checkbox">
				<label>
					<input value="1" name="status" type="checkbox" <?php if($data['status']){echo "checked";}?>> 是否启用
				</label>
			</div>
			<button type="submit" class="btn btn-success">确认修改</button>
			<a class="btn btn-danger" href="<?php echo site_url('RBAC/node/index'); ?>">取消操作</a>
		</div>
	</form>
</div>