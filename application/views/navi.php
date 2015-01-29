<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.html">SB Admin</a>

</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
	<li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
			<li> <?php echo anchor("Index/logout","<span class='glyphicon glyphicon-log-out'></span>".LOGIN_OUT); ?></li>
		</ul>
	</li>
</ul>
