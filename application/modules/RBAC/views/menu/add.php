<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">新增子菜单</h4>
	</div><!-- panel-heading -->
	<form role="form" action="" method="post">
		<div class="panel-body">
			<div class="form-group">
				<label>标题<span class="asterisk">*</span></label>
				<input name="title" type="text" class="form-control" placeholder="在此输入标题" value="" required />
			</div>
			<div class="form-group">
				<label>图标</label>
				<input name="icon" type="text" class="form-control" placeholder="在此输入标题" value="">
			</div>
			<div class="form-group">
				<label>挂接节点</label>
				<select name="node"  class="form-control">
				<option value='0'>不进行挂接</option>
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
				<label>排序<span class="asterisk">*</span></label>
				<input name="sort" type="number" class="form-control" placeholder="在此输入排序" value="1" required />
			</div>
			<div class="checkbox">
				<label>
					<input value="1" name="status" type="checkbox" checked> 是否显示
				</label>
			</div>
			<input type="hidden" name="level" value="<?php echo $level;?>">
			<input type="hidden" name="p_id" value="<?php echo $p_id;?>">
			<button type="submit" class="btn btn-success">确认修改</button>
			<a class="btn btn-danger" href="<?php echo site_url('RBAC/menu/index'); ?>">取消修改</a>
		</div>
	</form>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-btns">
            <a href="" class="minimize">&minus;</a>
		</div><!-- panel-btns -->
		<h4 class="panel-title">Font Awesome</h4>
	</div><!-- panel-heading -->
	<div class="panel-body">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
	          <li class="active"><a href="#new" data-toggle="tab"><strong>NEW ICONS</strong></a></li>
	          <li><a href="#web" data-toggle="tab"><strong>WEB APPLICATION</strong></a></li>
	          <li><a href="#web2" data-toggle="tab"><strong>WEB APPLICATION2</strong></a></li>
	          <li><a href="#text" data-toggle="tab"><strong>TEXT ICONS</strong></a></li>
	    </ul>
		<!-- Tab panes -->
	    <div class="tab-content mb30">
			<div class="tab-pane active" id="new">
				<ul class="row fontawesome-list">
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-automobile"></span> fa-automobile</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-bank"></span> fa-bank</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-behance"></span> fa-behance</li>
	           		<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-behance-square"></span> fa-behance-square</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-bomb"></span> fa-bomb</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-building"></span> fa-building</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-cab"></span> fa-cab</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-car"></span> fa-car</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-child"></span> fa-child</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-circle-o-notch"></span> fa-circle-o-notch</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-circle-thin"></span> fa-circle-thin</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-codepen"></span> fa-codepen</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-cube"></span> fa-cube</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-cubes"></span> fa-cubes</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-database"></span> fa-database</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-delicious"></span> fa-delicious</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-deviantart"></span> fa-deviantart</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-digg"></span> fa-digg</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-drupal"></span> fa-drupal</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-empire"></span> fa-empire</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-envelope-square"></span> fa-envelope-square</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-fax"></span> fa-fax</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-archive-o"></span> fa-file-archive-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-audio-o"></span> fa-file-audio-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-code-o"></span> fa-file-code-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-excel-o"></span> fa-file-excel-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-image-o"></span> fa-file-image-o</li>
	           		<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-movie-o"></span> fa-file-movie-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-pdf-o"></span> fa-file-pdf-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-photo-o"></span> fa-file-photo-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-picture-o"></span> fa-file-picture-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-powerpoint-o"></span> fa-file-powerpoint-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-sound-o"></span> fa-file-sound-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-video-o"></span> fa-file-video-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-word-o"></span> fa-file-word-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-file-zip-o"></span> fa-file-zip-o</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-ge"></span> fa-ge</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-git"></span> fa-git</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-git-square"></span> fa-git-square</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-google"></span> fa-google</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-graduation-cap"></span> fa-graduation-cap</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-hacker-news"></span> fa-hacker-news</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-header"></span> fa-header</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-history"></span> fa-history</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-institution"></span> fa-institution</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-joomla"></span> fa-joomla</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-jsfiddle"></span> fa-jsfiddle</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-language"></span> fa-language</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-life-bouy"></span> fa-life-bouy</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-life-ring"></span> fa-life-ring</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-life-saver"></span> fa-life-saver</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-mortar-board"></span> fa-mortar-board</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-openid"></span> fa-openid</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-paper-plane"></span> fa-paper-plane</li>
	            	<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-paper-plane-o"></span> fa-paper-plane-o</li>
	           		<li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-paragraph"></span> fa-paragraph</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-paw"></span> fa-paw</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-pied-piper"></span> fa-pied-piper</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-pied-piper-alt"></span> fa-pied-piper-alt</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-pied-piper-square"></span> fa-pied-piper-square</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-qq"></span> fa-qq</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-ra"></span> fa-ra</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-rebel"></span> fa-rebel</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-recycle"></span> fa-recycle</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-reddit"></span> fa-reddit</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-reddit-square"></span> fa-reddit-square</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-send"></span> fa-send</li>    
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-send-o"></span> fa-send-o</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-share-alt"></span> fa-share-alt</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-share-alt-square"></span> fa-share-alt-square</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-slack"></span> fa-slack</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-sliders"></span> fa-sliders</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-soundcloud"></span> fa-soundcloud</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-space-shuttle"></span> fa-space-shuttle</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-spoon"></span> fa-spoon</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-spotify"></span> fa-spotify</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-steam"></span> fa-steam</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-steam-square"></span> fa-steam-square</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-stumbleupon"></span> fa-stumbleupon</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-stumbleupon-circle"></span> fa-stumbleupon-circle</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-support"></span> fa-support</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-taxi"></span> fa-taxi</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-tencent-weibo"></span> fa-tencent-weibo</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-tree"></span> fa-tree</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-university"></span> fa-university</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-vine"></span> fa-vine</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-wechat"></span> fa-wechat</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-weixin"></span> fa-weixin</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-wordpress"></span> fa-wordpress</li>
		            <li class="fa-hover col-md-3 col-sm-4"><span class="fa fa-yahoo"></span> fa-yahoo</li>
	          	</ul>
			</div>
			<div class="tab-pane" id="web">
				<ul class="row fontawesome-list">
					<li class="col-md-3 col-sm-4"><span class="fa fa-adjust"></span> fa-adjust</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-anchor"></span> fa-anchor</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-archive"></span> fa-archive</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows"></span> fa-arrows</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-h"></span> fa-arrows-h</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-v"></span> fa-arrows-v</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-asterisk"></span> fa-asterisk</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-ban"></span> fa-ban</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bar-chart-o"></span> fa-bar-chart-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-barcode"></span> fa-barcode</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bars"></span> fa-bars</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-beer"></span> fa-beer</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bell"></span> fa-bell</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bell-o"></span> fa-bell-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bolt"></span> fa-bolt</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-book"></span> fa-book</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bookmark"></span> fa-bookmark</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bookmark-o"></span> fa-bookmark-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-briefcase"></span> fa-briefcase</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bug"></span> fa-bug</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-building-o"></span> fa-building-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bullhorn"></span> fa-bullhorn</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bullseye"></span> fa-bullseye</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-calendar"></span> fa-calendar</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-calendar-o"></span> fa-calendar-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-camera"></span> fa-camera</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-camera-retro"></span> fa-camera-retro</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-down"></span> fa-caret-square-o-down</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-left"></span> fa-caret-square-o-left</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-right"></span> fa-caret-square-o-right</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-up"></span> fa-caret-square-o-up</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-certificate"></span> fa-certificate</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-check"></span> fa-check</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-check-circle"></span> fa-check-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-check-circle-o"></span> fa-check-circle-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-check-square"></span> fa-check-square</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-check-square-o"></span> fa-check-square-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-circle"></span> fa-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-circle-o"></span> fa-circle-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-clock-o"></span> fa-clock-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cloud"></span> fa-cloud</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cloud-download"></span> fa-cloud-download</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cloud-upload"></span> fa-cloud-upload</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-code"></span> fa-code</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-code-fork"></span> fa-code-fork</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-coffee"></span> fa-coffee</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cog"></span> fa-cog</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cogs"></span> fa-cogs</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-comment"></span> fa-comment</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-comment-o"></span> fa-comment-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-comments"></span> fa-comments</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-comments-o"></span> fa-comments-o</li>
					<li class="col-md-3 col-sm-4"><span class="fa fa-compass"></span> fa-compass</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-credit-card"></span> fa-credit-card</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-crop"></span> fa-crop</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-crosshairs"></span> fa-crosshairs</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cutlery"></span> fa-cutlery</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-dashboard"></span> fa-dashboard</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-desktop"></span> fa-desktop</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-dot-circle-o"></span> fa-dot-circle-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-download"></span> fa-download</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-edit"></span> fa-edit</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-ellipsis-h"></span> fa-ellipsis-h</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-ellipsis-v"></span> fa-ellipsis-v</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-envelope"></span> fa-envelope</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-envelope-o"></span> fa-envelope-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-eraser"></span> fa-eraser</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-exchange"></span> fa-exchange</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-exclamation"></span> fa-exclamation</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-exclamation-circle"></span> fa-exclamation-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-exclamation-triangle"></span> fa-exclamation-triangle</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-external-link"></span> fa-external-link</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-external-link-square"></span> fa-external-link-square</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-eye"></span> fa-eye</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-eye-slash"></span> fa-eye-slash</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-female"></span> fa-female</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-fighter-jet"></span> fa-fighter-jet</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-film"></span> fa-film</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-filter"></span> fa-filter</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-fire"></span> fa-fire</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-fire-extinguisher"></span> fa-fire-extinguisher</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-flag"></span> fa-flag</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-flag-checkered"></span> fa-flag-checkered</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-flag-o"></span> fa-flag-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-flash"></span> fa-flash</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-flask"></span> fa-flask</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-folder"></span> fa-folder</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-folder-o"></span> fa-folder-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-folder-open"></span> fa-folder-open</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-folder-open-o"></span> fa-folder-open-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-frown-o"></span> fa-frown-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-gamepad"></span> fa-gamepad</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-gavel"></span> fa-gavel</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-gear"></span> fa-gear</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-gears"></span> fa-gears</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-gift"></span> fa-gift</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-glass"></span> fa-glass</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-globe"></span> fa-globe</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-group"></span> fa-group</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-hdd-o"></span> fa-hdd-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-headphones"></span> fa-headphones</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-heart"></span> fa-heart</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-heart-o"></span> fa-heart-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-home"></span> fa-home</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-inbox"></span> fa-inbox</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-info"></span> fa-info</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-info-circle"></span> fa-info-circle</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-key"></span> fa-key</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-keyboard-o"></span> fa-keyboard-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-laptop"></span> fa-laptop</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-leaf"></span> fa-leaf</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-legal"></span> fa-legal</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-lemon-o"></span> fa-lemon-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-level-down"></span> fa-level-down</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-level-up"></span> fa-level-up</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-lightbulb-o"></span> fa-lightbulb-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-location-arrow"></span> fa-location-arrow</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-lock"></span> fa-lock</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-magic"></span> fa-magic</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-magnet"></span> fa-magnet</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-mail-forward"></span> fa-mail-forward</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-mail-reply"></span> fa-mail-reply</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-mail-reply-all"></span> fa-mail-reply-all</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-male"></span> fa-male</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-map-marker"></span> fa-map-marker</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-meh-o"></span> fa-meh-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-microphone"></span> fa-microphone</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-microphone-slash"></span> fa-microphone-slash</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-minus"></span> fa-minus</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-circle"></span> fa-minus-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-square"></span> fa-minus-square</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-square-o"></span> fa-minus-square-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-mobile"></span> fa-mobile</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-mobile-phone"></span> fa-mobile-phone</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-money"></span> fa-money</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-moon-o"></span> fa-moon-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-music"></span> fa-music</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-pencil"></span> fa-pencil</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-pencil-square"></span> fa-pencil-square</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-pencil-square-o"></span> fa-pencil-square-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-phone"></span> fa-phone</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-phone-square"></span> fa-phone-square</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-picture-o"></span> fa-picture-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-plane"></span> fa-plane</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-plus"></span> fa-plus</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-circle"></span> fa-plus-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square"></span> fa-plus-square</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square-o"></span> fa-plus-square-o</li>
				</ul>
			</div>
			<div class="tab-pane" id="web2">
				<ul class="row fontawesome-list">
		            <li class="col-md-3 col-sm-4"><span class="fa fa-power-off"></span> fa-power-off</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-print"></span> fa-print</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-puzzle-piece"></span> fa-puzzle-piece</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-qrcode"></span> fa-qrcode</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-question"></span> fa-question</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-question-circle"></span> fa-question-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-quote-left"></span> fa-quote-left</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-quote-right"></span> fa-quote-right</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-random"></span> fa-random</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-refresh"></span> fa-refresh</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-reply"></span> fa-reply</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-reply-all"></span> fa-reply-all</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-retweet"></span> fa-retweet</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-road"></span> fa-road</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-rocket"></span> fa-rocket</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-rss"></span> fa-rss</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-rss-square"></span> fa-rss-square</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-search"></span> fa-search</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-search-minus"></span> fa-search-minus</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-search-plus"></span> fa-search-plus</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-share"></span> fa-share</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-share-square"></span> fa-share-square</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-share-square-o"></span> fa-share-square-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-shield"></span> fa-shield</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-shopping-cart"></span> fa-shopping-cart</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sign-in"></span> fa-sign-in</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sign-out"></span> fa-sign-out</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-signal"></span> fa-signal</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sitemap"></span> fa-sitemap</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-smile-o"></span> fa-smile-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort"></span> fa-sort</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-alpha-asc"></span> fa-sort-alpha-asc</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-alpha-desc"></span> fa-sort-alpha-desc</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-amount-asc"></span> fa-sort-amount-asc</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-amount-desc"></span> fa-sort-amount-desc</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-asc"></span> fa-sort-asc</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-desc"></span> fa-sort-desc</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-down"></span> fa-sort-down</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-numeric-asc"></span> fa-sort-numeric-asc</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-numeric-desc"></span> fa-sort-numeric-desc</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-up"></span> fa-sort-up</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-spinner"></span> fa-spinner</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-square"></span> fa-square</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-square-o"></span> fa-square-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-star"></span> fa-star</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half"></span> fa-star-half</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half-empty"></span> fa-star-half-empty</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half-full"></span> fa-star-half-full</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half-o"></span> fa-star-half-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-star-o"></span> fa-star-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-subscript"></span> fa-subscript</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-suitcase"></span> fa-suitcase</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-sun-o"></span> fa-sun-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-superscript"></span> fa-superscript</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-tablet"></span> fa-tablet</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-tachometer"></span> fa-tachometer</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-tag"></span> fa-tag</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-tags"></span> fa-tags</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-tasks"></span> fa-tasks</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-terminal"></span> fa-terminal</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-thumb-tack"></span> fa-thumb-tack</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-down"></span> fa-thumbs-down</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-o-down"></span> fa-thumbs-o-down</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-o-up"></span> fa-thumbs-o-up</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-up"></span> fa-thumbs-up</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-ticket"></span> fa-ticket</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-times"></span> fa-times</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-times-circle"></span> fa-times-circle</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-times-circle-o"></span> fa-times-circle-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-tint"></span> fa-tint</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-down"></span> fa-toggle-down</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-left"></span> fa-toggle-left</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-right"></span> fa-toggle-right</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-up"></span> fa-toggle-up</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-trash-o"></span> fa-trash-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-trophy"></span> fa-trophy</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-truck"></span> fa-truck</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-umbrella"></span> fa-umbrella</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-unlock"></span> fa-unlock</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-unlock-alt"></span> fa-unlock-alt</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-unsorted"></span> fa-unsorted</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-upload"></span> fa-upload</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-user"></span> fa-user</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-users"></span> fa-users</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-video-camera"></span> fa-video-camera</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-volume-down"></span> fa-volume-down</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-volume-off"></span> fa-volume-off</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-volume-up"></span> fa-volume-up</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-warning"></span> fa-warning</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-wheelchair"></span> fa-wheelchair</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-wrench"></span> fa-wrench</li>
				</ul>
			</div>
			<div class="tab-pane" id="text">
				<ul class="row fontawesome-list">
					<li class="col-md-3 col-sm-4"><span class="fa fa-align-center"></span> fa-align-center</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-align-justify"></span> fa-align-justify</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-align-left"></span> fa-align-left</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-align-right"></span> fa-align-right</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-bold"></span> fa-bold</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-chain"></span> fa-chain</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-chain-broken"></span> fa-chain-broken</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-clipboard"></span> fa-clipboard</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-columns"></span> fa-columns</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-copy"></span> fa-copy</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-cut"></span> fa-cut</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-dedent"></span> fa-dedent</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-eraser"></span> fa-eraser</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-file"></span> fa-file</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-file-o"></span> fa-file-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-file-text"></span> fa-file-text</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-file-text-o"></span> fa-file-text-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-files-o"></span> fa-files-o</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-floppy-o"></span> fa-floppy-o</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-font"></span> fa-font</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-indent"></span> fa-indent</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-italic"></span> fa-italic</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-link"></span> fa-link</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-list"></span> fa-list</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-list-alt"></span> fa-list-alt</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-list-ol"></span> fa-list-ol</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-list-ul"></span> fa-list-ul</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-outdent"></span> fa-outdent</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-paperclip"></span> fa-paperclip</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-paste"></span> fa-paste</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-repeat"></span> fa-repeat</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-rotate-left"></span> fa-rotate-left</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-rotate-right"></span> fa-rotate-right</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-save"></span> fa-save</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-scissors"></span> fa-scissors</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-strikethrough"></span> fa-strikethrough</li>   
		            <li class="col-md-3 col-sm-4"><span class="fa fa-table"></span> fa-table</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-text-height"></span> fa-text-height</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-text-width"></span> fa-text-width</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-th"></span> fa-th</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-th-large"></span> fa-th-large</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-th-list"></span> fa-th-list</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-underline"></span> fa-underline</li>
		            <li class="col-md-3 col-sm-4"><span class="fa fa-undo"></span> fa-undo</li>    
		            <li class="col-md-3 col-sm-4"><span class="fa fa-unlink"></span> fa-unlink</li>
				</ul>
			</div>
		</div>	
	</div>
</div>