<div class="row">
	<div class="col-md-7">
		<div class="signin-info">
			<div class="logopanel">
				<h1><span>[</span> bracket <span>]</span></h1>
 			</div><!-- logopanel -->
 			<div class="mb20"></div>
  			<h5><strong>Welcome to Bracket Bootstrap 3 Template!</strong></h5>
			<ul>
				<li><i class="fa fa-arrow-circle-o-right mr5"></i> Fully Responsive Layout</li>
				<li><i class="fa fa-arrow-circle-o-right mr5"></i> HTML5/CSS3 Valid</li>
				<li><i class="fa fa-arrow-circle-o-right mr5"></i> Retina Ready</li>
				<li><i class="fa fa-arrow-circle-o-right mr5"></i> WYSIWYG CKEditor</li>
				<li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
			</ul>
            <div class="mb20"></div>
		</div><!-- signin0-info -->
	</div><!-- col-sm-7 -->
	
	<div class="col-md-5">
		<form id="login-info" method="post" action="<?php echo base_url('/Index/login');?>">
			<h4 class="nomargin">Sign In</h4>
			<p class="mt5 mb20">Login to access your account.</p>
			<input type="text" name="username" class="form-control uname" placeholder="Username" />
			<input type="password" name="password" class="form-control pword" placeholder="Password" />
			<button id="login" class="btn btn-success btn-block" onclick = "" data-loading-text="正在登录">Sign In</button>
		</form>
		<div class="alert alert-success">测试用帐号（用户:admin 密码:admin）</div>
	</div><!-- col-sm-5 -->
</div><!-- row -->
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
		return false;
	})
})
</script>
