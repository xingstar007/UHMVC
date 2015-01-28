<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#">
		<?php echo isset($header_title)?$header_title:isset($this->get_menu['list'][$this->uuri])?$this->get_menu['list'][$this->uuri]:""; ?>
	</a>
</div>
<ul class="nav navbar-top-links navbar-right">
	<li id="fat-menu" class="dropdown">
	<!--	<a href="#" id="user_action" role="button" class="dropdown-toggle" data-toggle="dropdown">
			<?php echo WELCOME_YOU.rbac_conf(array('INFO','nickname'));?><b class="caret"></b>
		</a>
	-->
		<ul class="dropdown-menu" role="menu" aria-labelledby="user_action">
			<li> <?php echo anchor("Index/logout","<span class='glyphicon glyphicon-log-out'></span>".LOGIN_OUT); ?></li>
		</ul>
	</li>
</ul>