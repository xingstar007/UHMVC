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
			<a href="javascript:edit_menu('<?php echo site_url("RBAC/menu/edit/"); ?>',{'id':'<?php echo $id;?>','type':'1'}">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="javascript:del_menu('<?php echo site_url("RBAC/menu/delete/"); ?>','<?php echo $id;?>')">
				<i class="fa fa-trash-o"></i>	
			</a>
			<a href="javascript:add_menu('<?php echo site_url("RBAC/menu/add/"); ?>','<?php echo $id;?>','1','<?php echo $id;?>')">
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
			<a href="javascript:edit_menu('<?php echo site_url("RBAC/menu/edit/");?>',{'cid':'<?php echo $cid;?>','type':'2'}">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="javascript:del_menu('<?php echo site_url("RBAC/menu/delete/"); ?>',{'cid':'<?php echo $cid;?>'}">
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
<div class="menu-alert alert alert-danger" style="display:none"></div>
<button class="add-menu btn btn-success  pull-right" href = " <?php echo site_url("RBAC/menu/add/".$mn["self"]->id."/1/NULL");?> " > 新增一级菜单</button>

<script type="text/javascript">
function del_menu(url,mid) { 
	$.ajax({
    	url: url,
    	type: 'post',
    	dataType: 'json',
    	data: {'id' : mid},
		timeout: 1000,
 		error: function(){
			alert('Error');
		},
		success: function(data){
			switch(data.type){
				case 'error':
					$('.menu-alert').show().html(data.contents); 
 					break;
				case 'success':
					$('.contentpanel').load(data.url);
					break;
			}
		}
	});
}

function add_menu(url,mid,type,pid) { 
	$.ajax({
    	url: url,
    	type: 'post',
    	dataType: 'html',
    	data: {'id' : mid,'level' : type,'pid' : pid},
		timeout: 1000,
 		error: function(){
			alert('Error');
		},
		success: function(data){
// 			switch(data.type){
// 				case 'error':
// 					$('.menu-alert').show().html(data.contents); 
//  					break;
// 				case 'success':
					$('.contentpanel').html(data);
// 					break;
// 			}
		}
	});
}



</script>