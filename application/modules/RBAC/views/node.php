<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>
<?php 
// var_dump($node);
foreach($node as $key=>$mn)
{
?>
<div class="table-responsive" >
	<table class="table table-responsive">
		<tr>
			<td><span class="glyphicon glyphicon-folder-open"></span><b><?php echo "    ".$key;?></b></td>
			<td></td>
			<td></td>
			<td>
				<div class="btn-group  btn-group-xs pull-right" style="margin:0;">
					<a class="btn btn-success" href="<?php echo site_url("RBAC/node/add/".$key); ?>">新增控制器</a>
					<a class="btn btn-danger" href="<?php echo site_url("RBAC/node/delete/".$key); ?>">删除目录</a>
				</div>
			</td>
		</tr>
		<?php
		foreach($mn as $mn_key=>$cmn)
		{
		?>
		<tr>
			<td><b style = "margin-left:20px"><span class="glyphicon glyphicon-list-alt"></span><?php echo "    ".$mn_key; ?></b></td>
			<td></td>
			<td></td>
			<td>
				<div class="btn-group  btn-group-xs pull-right" style="margin:0;">
					<a class="btn btn-success" href="<?php echo site_url("RBAC/node/add/".$key."/".$mn_key); ?>">新增方法</a>
					<a class="btn btn-danger" href="<?php echo site_url("RBAC/node/delete/".$key."/".$mn_key); ?>">删除控制器</a>
				</div>
			</td>
		</tr>
		<?php
		foreach($cmn as $cmn_key=>$gcmn)
		{
		?>
		<tr>
			<td><b style = "margin-left:40px"><span class="glyphicon glyphicon-minus"></span><?php echo "    ".$cmn_key; ?></b></td>
			<td><?php echo $gcmn->memo;?></td>
			<td><?php echo ($gcmn->status==1?"启用":"停用"); ?></td>
			<td>
				<div class="btn-group  btn-group-xs pull-right" style="margin:0;">
					<a class="btn btn-success" href="<?php echo site_url("RBAC/node/edit/".$gcmn->id); ?>">修改</a>
					<a class="btn btn-danger" href="<?php echo site_url("RBAC/node/delete/".$key."/".$mn_key."/".$cmn_key); ?>">删除方法</a>
				</div>
			</td>
		</tr>
		<?php 
		}
	}
	?>
	</table>
</div>
<?php 
}
?>
<?php echo '<a class="btn btn-success pull-right" href="'.site_url("RBAC/node/add").'">新增目录</a>'; ?>
