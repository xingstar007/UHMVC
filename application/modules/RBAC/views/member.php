<style>
.table td:first-child{width:10%}
.table td:nth-child(2){width:20%}
</style>
<div class="table-responsive" >
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>ID</th>
            	<th>用户名</th>
				<th>昵称</th>
            	<th>Email</th>
            	<th>角色</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		foreach($data as $mb)
		{
		?>
		<tr>
			<td><?php echo $mb->id;?></td>
			<td><?php echo $mb->username;?></td>
			<td><?php echo $mb->nickname;?></td>
			<td><?php echo $mb->email;?></td>
			<td><?php echo ($mb->rolename?$mb->rolename:"暂无角色");?></td>		
			<td><?php echo ($mb->status==1?"正常":"停用");?></td>
			<td>
				<div class="btn-group  btn-group-xs">
					<a class="btn btn-default btn-xs" href="<?php echo site_url("RBAC/member/edit/".$mb->id);?>">编辑</a>
					<a class="btn btn-danger" href="<?php echo site_url("RBAC/member/delete/".$mb->id); ?>">删除</a>
				</div>
			</td>
		</tr>
		<?php 
		}
		?>
		</tbody>
	</table>
</div>
<?php echo '<a class="btn btn-success pull-right" href="'.site_url("RBAC/member/add").'">新增用户</a>'; ?>
<?php echo $this->pagination->create_links(); ?>
