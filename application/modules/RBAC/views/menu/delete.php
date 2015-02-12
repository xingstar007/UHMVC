<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>

<h4>您确定要删除下列菜单？</h4>
<div class="table-responsive" >
<?php
// var_dump($menu_data);
foreach( $menu_data as $mn)
{
	echo '<table class="table well">';
	echo '<tr>
		  	<td><i class="fa '.$mn["self"]["icon"].'"></i>   '.$mn["self"]["title"].'</td>
		  	<td>'.($mn["self"]["node"]?$mn["self"]["node"]:"未挂接").'</td>
		  	<td>'.$mn["self"]["sort"].'</td>
		  	<td>'.($mn["self"]["status"]==1?"显示":"隐藏").'</td>
		  </tr>';
	if(isset($mn["child"]))
	{
		foreach($mn["child"] as $cmn)
		{
			echo '<tr>
			  	<td style = "padding-left:30px"><i class="fa '.$cmn["self"]["icon"].'"></i>   '.$cmn["self"]["title"].'</td>
			  	<td>'.($cmn["self"]["node"]?$cmn["self"]["node"]:"未挂接").'</td>
			  	<td>'.$cmn["self"]["sort"].'</td>
			  	<td>'.($cmn["self"]["status"]==1?"显示":"隐藏").'</td>
			  </tr>';
		}
	}
	echo '</table>';
}
?>
</div>
<form method="POST" action="">
	<input type="hidden" name="verfiy" value="1" >
	<input class="btn btn-success"  type="submit" value="确定删除">
	<a class="btn btn-danger" href="<?php echo site_url('RBAC/menu/index'); ?>">取消修改</a>
</form>
