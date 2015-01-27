<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse" aria-expanded="false" style="height: 1px;">
		<ul class="nav" id="side-menu">
		<?php
		foreach ( $template['partials']['menu'] as $mn )
		{
			if (@$mn ["shown"])
			{
				echo '<li>';
				if ($mn ["self"] ["uri"] == "/")
				{
					$flist = "<a href='#'><i class='fa fa-dashboard fa-fw'></i>".$mn["self"]["title"]."</a>";
				} else {
					$flist_content = "<i class='fa fa-dashboard fa-fw'></i>".$mn["self"]["title"];
					$flist = anchor ( $mn ["self"] ["uri"], $flist_content );
				}
				echo $flist;
				if (isset ( $mn ["child"] ))
				{
					echo '<ul class="nav nav-second-level">';
					foreach ( $mn ["child"] as $cmn )
					{
						if (@$cmn ["shown"])
						{
							echo '<li >';
							if ($cmn ["self"] ["uri"] == "/")
							{
								$slist = "<a href='#'>" . $cmn ["self"] ["title"] . "</a>";
							} else {
								$slist = anchor ( $cmn ["self"] ["uri"], $cmn ["self"] ["title"] );
							}
							echo $slist;
							if (isset ( $cmn ["child"] ))
							{
								echo '<ul class="nav nav-third-level">';
								foreach ( $cmn ["child"] as $gcmn )
								{
									if (@$gcmn ["shown"])
									{
										echo '<li>';
										$tlist = anchor ( $gcmn ["self"] ["uri"], $gcmn ["self"] ["title"] );
										echo $tlist;
										echo '</li>';
									}
								}
								echo '</ul>';
							}
							echo '</li>';
						}
					}
					echo '</ul>';
				}
				echo '</li>';
			}
		}
		?>
		</ul>
	</div><!-- /.sidebar-collapse -->
</div><!-- /.navbar-static-side -->
