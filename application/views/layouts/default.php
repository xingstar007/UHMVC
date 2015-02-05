<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header; ?>
	</head>
	<body>
		<section>
			<div class="leftpanel">
				<div class="logopanel">
        			<h1><span>[</span> bracket <span>]</span></h1>
    			</div><!-- logopanel -->
    			<div class="leftpanelinner">
					<?php echo $navigation; ?>
				</div><!-- leftpanelinner -->
  			</div><!-- leftpanel -->
  			
  		  	<div class="mainpanel">
    			<div class="headerbar">
      				<?php echo $headerbar; ?>
				</div><!-- headerbar -->
				<div class="contentpanel">
					<?php echo $body; ?>
				</div><!-- contentpanel -->
  			</div><!-- mainpanel -->
  		</section>
	</body>
	<footer>
		<?php echo $footer; ?>
	</footer>
</html>