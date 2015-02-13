<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>
<?php
foreach($menu_data as $menu_frist)
{
	$icon = "<span class='".$menu_frist["self"]['icon']."'></span>";
	$title = $menu_frist["self"]['title'];
	$node = ($menu_frist["self"]['node']?$menu_frist["self"]['node'].$menu_frist["self"]['dcf']:"未挂接");
	$sort = $menu_frist["self"]['sort'];
	$status = ($menu_frist["self"]['status']==1?"显示":"隐藏");
	$id = $menu_frist["self"]['id'];
?>
<div class="table-responsive" >
	<table class="table table-responsive">
	<tr>
		<td><b><?php echo $icon."    ".$title;?></b></td>
		<td><?php echo $node;?></td>
		<td><?php echo $sort;?></td>
		<td><?php echo $status;?></td>
		<td class="table-action pull-left">
			<a href="<?php echo site_url("RBAC/menu/edit/$id/1/"); ?>">
				<span class="fa fa-pencil"></span>
			</a>
			<a href="<?php echo site_url("RBAC/menu/delete/$id"); ?>">
				<span class="fa fa-trash-o"></span>	
			</a>
			<a href="<?php echo site_url("RBAC/menu/add/1/$id"); ?>">
				<span class="fa fa-plus"></span>		
			</a>
		</td>
	</tr>
	<?php 
	if(isset($menu_frist["child"]))
	{
		foreach($menu_frist["child"] as $menu_second)
		{
			$icon_child = "<span class='".$menu_second["self"]['icon']."'></span>";
			$title_child = $menu_second["self"]['title'];
			$node_child = ($menu_second["self"]['node']?$menu_second["self"]['node'].$menu_second["self"]['dcf']:"未挂接");
			$sort_child = $menu_second["self"]['sort'];
			$status_child = ($menu_second["self"]['status']==1?"显示":"隐藏");
			$id_child = $menu_second["self"]['id'];
	?>
	<tr>
		<td><b style = "margin-left:20px"><?php echo $icon_child."     ".$title_child;?></b></td>
		<td><?php echo $node_child;?></td>
		<td><?php echo $sort_child;?></td>
		<td><?php echo $status_child;?></td>
		<td class="table-action pull-left">
			<a href="<?php echo site_url("RBAC/menu/edit/$id_child/2/"); ?>">
				<span class="fa fa-pencil"></span>
			</a>
			<a href="<?php echo site_url("RBAC/menu/delete/$id_child"); ?>">
				<span class="fa fa-trash-o"></span>	
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
<a class="btn btn-success  pull-right" href = "<?php echo site_url("RBAC/menu/add/1/NULL");?> " > 新增一级菜单</a>