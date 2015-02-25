<style>
	.table td:first-child{width:30%}
	.table td:nth-child(2){width:40%}
</style>
<div class="panel panel-default">
	<div class="table-responsive" >
		<?php 
		foreach($node as $key=>$mn)
		{
		?>
		<table class="table well">
			<tr>
				<td><span class="glyphicon glyphicon-folder-open" style = "margin:0 10px 0 0;"></span><?php echo $key; ?></td>
		  		<td></td>
		  		<td></td>
		  	</tr>
		 	<?php 
			foreach($mn as $mn_key=>$cmn)
			{
			?>
			<tr>
				<td><span class="glyphicon glyphicon-list-alt" style = "margin:0 10px 0 20px;"></span><?php echo $mn_key;?></td>
				<td></td>
				<td></td>
			</tr>
			<?php 
			foreach($cmn as $cmn_key=>$gcmn)
			{
			?>
			<tr>
				<td><span class="glyphicon glyphicon-minus" style = "margin:0 10px 0 40px;"></span><?php echo $cmn_key;?></td>
				<td><?php echo $gcmn->memo;?></td>
				<td>
					<div class="btn-group  btn-group-xs pull-right">
						<a class="btn btn-default btn-<?php echo (@$rnl[$key][$mn_key][$cmn_key]?"danger":"success")?>" href="<?php echo site_url("RBAC/role/action/".$role_id."/".$gcmn->id);?>">
							<?php echo (@$rnl[$key][$mn_key][$cmn_key]?"取消授权":"节点授权") ?>
						</a>
					</div>
			  	</td>
			</tr>
			<?php 
			}
			}
			?>
		</table>
		<?php
		}
		?>
	</div>
</div>