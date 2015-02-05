<?php $time = 5; ?>;
<div class="row" style="padding-top:100px">
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-default">
            <div class="panel-heading">
            	<h4 class="panel-title">
            		<?php echo $type;?>
            	</h4>
            </div><!-- panel-heading -->
			<div class="panel-body">
				<div class="alert alert-info fade in nomargin">		
					<h4>
						<span id="cnt"><?php echo $time; ?></span>秒钟后自动跳转！【<a href="<?php echo $url; ?>">立即跳转</a>】
					</h4>
    				<p>
    					<?php echo $contents; ?>
    				</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	var i = <?php echo $time-1; ?>;
	setInterval(function(){                
		document.getElementById("cnt").innerHTML = i--;
		if(document.getElementById("cnt").innerHTML=='0'){
			window.location.href='<?php echo $url; ?>';
		}
	},1000);
});
</script>
