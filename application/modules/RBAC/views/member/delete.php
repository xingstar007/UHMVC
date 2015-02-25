<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">您确定要删除此用户(<?php echo $data["nickname"]; ?>)？</h4>
	</div><!-- panel-heading -->
	<div class="panel-body">
		<form method="POST" action="">
			<input type="hidden" name="verfiy" value="1" >
			<input class="btn btn-success"  type="submit" value="确定删除">
			<a class="btn btn-danger" href="<?php echo site_url('RBAC/member/index'); ?>">取消修改</a>
	</form>
</div>
