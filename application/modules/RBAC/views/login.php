<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php  if(isset($template['title'])) echo $template['title']; ?></title>
		<meta name="description" content="<?php if(isset($template['description'])) echo $template['description']; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon.ico and apple-touch-icon.png -->

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="<?php echo assets_url('css/bootstrap.min.css'); ?>">
		<!-- jQuery -->
		<script src="<?php echo assets_url('js/jquery.min.js')?> "></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo assets_url('js/bootstrap.min.js')?> "></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="login-panel panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">用户登录</h3>
							</div>
							<div class="panel-body">
								<form id="login-info" role="form"  action="" method="post">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">用户</span>
											<input type="text" class="form-control" placeholder="请输入用户" name="username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">密码</span>
											<input type="password" class="form-control" placeholder="请输入密码" name="password">
										</div>
									</div>
									<!--  	<input type="hidden" name="foward" value="null"/> -->
									<input  id="login" type="button" class="btn btn-lg btn-success btn-block" value="登录" data-loading-text="正在登录"/>
								</form>
							</div>
						</div>
						<div class="alert alert-success">测试用帐号（用户:admin 密码:admin）</div>
					</div>
				</div>		
			</div>
		</div>
	</body>
	<footer>
<script type="text/javascript"> 
$(document).ready(function(){ 
	$('#login').click(function(){
		$.ajax({
		    url: '<?php echo base_url('/Index/login');?>',
		    type: 'post',
		    dataType: 'json',
		    data:$('#login-info').serialize(),
		    timeout: 1000,
		    error: function(){
		        alert('Error');
		    },
		    success: function(data){
// 		        alert(data.url);
		        switch(data.type){
		        	case 'error':
		        		$('.alert').html(data.contents); 
		        	  	break;
		        	case 'success':
		        		window.location.href = data.url; 
		        	  break;
		        }
		    }
		});
	})
})
</script>
	</footer>
</html>