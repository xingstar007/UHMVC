<style>
.table td:first-child{width:30%}
.table td:nth-child(2){width:40%}
</style>
<?php 
foreach($menu as $mn){
	$nochild = "<span class='glyphicon glyphicon-align-left'></span> " ;
	$havechild = "<span class='glyphicon glyphicon-link'></span> " ;
	echo '<div class="table-responsive" >';
	echo '<table class="table table-responsive">';
	echo '<tr>
		  	<td><b>'.($mn["self"]->node_id?$havechild:$nochild).$mn["self"]->title.'</b></td>
		  	<td>'.($mn["self"]->memo?$mn["self"]->memo.$mn["self"]->dcf:"未挂接").'</td>
		  	<td>'.$mn["self"]->sort.'</td>
		  	<td>'.($mn["self"]->status==1?"显示":"隐藏").'</td>
		  	<td class="table-action pull-left">
				<a href="'.site_url("RBAC/menu/edit/".$mn["self"]->id."/1/NULL").'">
					<i class="fa fa-pencil"></i>
				</a>
				<a href="'.site_url("RBAC/menu/delete/".$mn["self"]->id).'">
					<i class="fa fa-trash-o"></i>	
				</a>
				<a href="'.site_url("RBAC/menu/add/".$mn["self"]->id."/1/".$mn["self"]->id).'">
					<i class="fa fa-plus"></i>		
				</a>
			</td>
		  </tr>';
	if(isset($mn["child"])){
		foreach($mn["child"] as $cmn){
			echo '<tr>
			  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'.($cmn["self"]->node_id?$havechild:$nochild).$cmn["self"]->title.'</b></td>
			  	<td>'.($cmn["self"]->memo?$cmn["self"]->memo.$cmn["self"]->dcf:"未挂接").'</td>
			  	<td>'.$cmn["self"]->sort.'</td>
			  	<td>'.($cmn["self"]->status==1?"显示":"隐藏").'</td>
			  	<td class="table-action pull-left">
					  <a href="'.site_url("RBAC/menu/edit/".$cmn["self"]->id."/2/".$mn["self"]->id).'">
							<i class="fa fa-pencil"></i>
					  </a>
					  <a href="'.site_url("RBAC/menu/delete/".$cmn["self"]->id).'">
							<i class="fa fa-trash-o"></i>	
					  </a>
				</td>
			  </tr>';
		}
	}
	echo '</table>';
	echo '</div>';
}
?>
<hr/>
<div class="menu-alert alert alert-danger" style="display:none"></div>
<?php echo '<button class="add-menu btn btn-success  pull-right" href="'.site_url("RBAC/menu/add/".$mn["self"]->id."/1/NULL").'">新增一级菜单</button>'; ?>

<script type="text/javascript"> 
$(document).ready(function(){ 
	$('.add-menu').click(function(){
		$('#page-wrapper').load($(this).attr('href'));
// 		var urltmp = $(this).attr('href');

	})

	$('.add-menu').click(function(){
		$.ajax({
	    url: $(this).attr('href'),
	    type: 'post',
	    dataType: 'html',
//		data:$('#login-info').serialize(),
	    timeout: 1000,
	    error: function(){
	        alert('Error');
	    },
	    success: function(data){
//		    alert(data);
	    	$('#page-wrapper').html(data);
	        switch(data.type){
	        	case 'error':
	        		$('.menu-alert').show().html(data.contents); 
	        	  	break;
	        	case 'success':
	        		$('#page-wrapper').html(data.contents);
	        	  break;
	        }
	    }
	});

	})
})
</script>