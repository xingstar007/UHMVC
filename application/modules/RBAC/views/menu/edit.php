<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">修改子菜单</h4>
	</div><!-- panel-heading -->
	<form role="form" action="" method="post">
		<div class="panel-body">
			<div class="form-group">
				<label>标题</label>
				<input name="title" type="text" class="form-control" placeholder="在此输入标题" value="<?php echo $data['title']; ?>">
			</div>
			<div class="form-group">
				<label>图标</label>
				<input name="icon" type="text" class="form-control" placeholder="在此输入图标" value="<?php echo $data['icon']; ?>">
			</div>
			<div class="form-group">
				<label>挂接节点</label>
				<select name="node"  class="form-control" >
					<option value=''>不进行挂接</option>
					<?php 
						foreach($node as $vo)
						{
							$select = $data["node_id"]==$vo->id?"selected":"";
							echo "<option value='{$vo->id}' {$select} >{$vo->memo} [{$vo->dirc}/{$vo->cont}/{$vo->func}]</option>";
						}
					?>
			    </select>
			</div>
			<div class="form-group">
				<label>排序</label>
				<input name="sort" type="number" class="form-control" placeholder="在此输入排序" value="<?php echo $data['sort'];?>">
			</div>
			<div class="checkbox">
				<label>
					<input value="1" name="status" type="checkbox" <?php if($data["status"]){echo "checked";}?>> 是否显示
				</label>
		  	</div>
			<input type="hidden" name="level" value="<?php echo $level;?>">
			<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			<input type="hidden" name="p_id" value="<?php echo $p_id;?>">
			<button type="submit" class="btn btn-success">确认修改</button>
			<a class="btn btn-danger" href="<?php echo site_url('RBAC/menu/index'); ?>">取消修改</a>
		</div>
	</form>
</div>