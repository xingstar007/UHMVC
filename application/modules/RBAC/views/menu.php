<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>
<?php
$nochild = "<span class='glyphicon glyphicon-align-left'></span> " ;
$havechild = "<span class='glyphicon glyphicon-link'></span> " ;

foreach($menu as $mn){
	$title = ($mn["self"]->node_id?$havechild:$nochild).$mn["self"]->title;
	$node = ($mn["self"]->memo?$mn["self"]->memo.$mn["self"]->dcf:"未挂接");
	$sort = $mn["self"]->sort;
	$status = ($mn["self"]->status==1?"显示":"隐藏");
	$id = $mn["self"]->id;
?>
<div class="table-responsive" >
	<table class="table table-responsive">
	<tr>
		<td><b><?php echo $title;?></b></td>
		<td><?php echo $node;?></td>
		<td><?php echo $sort;?></td>
		<td><?php echo $status;?></td>
		<td class="table-action pull-left">
			<a href="<?php echo site_url("RBAC/menu/edit/$id/1/"); ?>">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?php echo site_url("RBAC/menu/delete/$id"); ?>">
				<i class="fa fa-trash-o"></i>	
			</a>
			<a href="<?php echo site_url("RBAC/menu/add/$id/1/$id"); ?>">
				<i class="fa fa-plus"></i>		
			</a>
		</td>
	</tr>
	<?php 
	if(isset($mn["child"]))
	{
		foreach($mn["child"] as $cmn)
		{
			$ctitle = ($cmn["self"]->node_id?$havechild:$nochild).$cmn["self"]->title ;
			$cnode = ($cmn["self"]->memo?$cmn["self"]->memo.$cmn["self"]->dcf:"未挂接");
			$csort = $cmn["self"]->sort;
			$cstatus = ($cmn["self"]->status==1?"显示":"隐藏");
			$cid = $cmn["self"]->id;
	?>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $ctitle;?></b></td>
		<td><?php echo $cnode;?></td>
		<td><?php echo $csort;?></td>
		<td><?php echo $cstatus;?></td>
		<td class="table-action pull-left">
			<a href="<?php echo site_url("RBAC/menu/edit/$cid/2/"); ?>">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?php echo site_url("RBAC/menu/delete/$cid"); ?>">
				<i class="fa fa-trash-o"></i>	
			</a>
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
<hr/>
<a class="btn btn-success  pull-right" href = "<?php echo site_url("RBAC/menu/add/".$mn["self"]->id."/1/NULL");?> " > 新增一级菜单</a>