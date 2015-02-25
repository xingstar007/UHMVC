<style>
.table td:first-child{width:10%}
.table td:nth-child(2){width:20%}
</style>
<div class="table-responsive" >
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>角色名称</th>
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
				<td><?php echo $mb->id; ?></td>
				<td><?php echo $mb->rolename; ?></td>
				<td><?php echo ($mb->status==1?"正常":"停用"); ?></td>
				<td>
					<div class="btn-group  btn-group-xs  pull-right">
						<a class="btn btn-default btn-xs" href="<?php echo site_url("RBAC/role/edit/".$mb->id); ?>">编辑角色</a>
						<a class="btn btn-info btn-xs" href="<?php echo site_url("RBAC/role/action/".$mb->id); ?>">赋权节点</a>
						<a class="btn btn-danger" href="<?php echo site_url("RBAC/role/delete/".$mb->id); ?>">删除删除</a>
					</div>
				</td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
</div>
<?php echo '<a class="btn btn-success pull-right" href="'.site_url("RBAC/role/add").'">新增角色</a>'; ?>
<?php echo $this->pagination->create_links(); ?>
