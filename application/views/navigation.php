<h5 class="sidebartitle">Navigation</h5>
<ul class="nav nav-pills nav-stacked nav-bracket">
	<?php
	$li_parent_start = "<li class='nav-parent'>";
	$li_start = "<li>";
	$li_end = "</li>";
	$ul_children_start = "<ul class='children'>";
	$ul_end = "</ul>";
	$flist_icon = "<i class='fa fa-dashboard fa-fw'></i>";
	$menu_content = '';
	$menu_s = '';
	foreach ( $menulist as $mn )
	{
		if (@$mn ["shown"])
		{
			if (isset ( $mn ["child"] ))
			{
				foreach ( $mn ["child"] as $cmn )
				{
					if (@$cmn ["shown"])
					{
						if (isset ( $cmn ["child"] ))
						{
							foreach ( $cmn ["child"] as $gcmn )
							{
								if (@$gcmn ["shown"])
								{
									$tlist = anchor ( $gcmn ["self"] ["uri"], $gcmn ["self"] ["title"] );
									$menu_content = $li_start.$tlist.$li_end;
								}
							}
							$menu_content = $ul_children_start.$menu_content.$ul_end;
							$li_start = $li_parent_start;
						}
						if ($cmn ["self"] ["uri"] == "/")
						{
							$slist = "<a href=''><i class='fa fa-edit'></i><span>" . $cmn ["self"] ["title"] . "</span></a>";
						} else {
							$slist = anchor ( $cmn ["self"] ["uri"], "<i class='fa fa-edit'></i><span>" . $cmn ["self"] ["title"] . "</span>" );
						}
						$menu_content = $li_start.$slist.$menu_content.$li_end;
						$li_start = "<li>";
					}
				}
				$menu_content = $ul_children_start.$menu_content.$ul_end;
				$li_start = $li_parent_start;
				
			}
			if($mn["self"]["uri"]=="/"){
				$flist = "<a href=''><i class='fa fa-edit'></i><span>" .$mn["self"]["title"]."</span></a>";
			}else{
				$flist = anchor($mn["self"]["uri"],"<i class='fa fa-edit'></i><span>".$mn["self"]["title"]."</span>");
			}
			$menu_content =  $li_start.$flist.$menu_content.$li_end;
		}
		$menu_s = $menu_s.$menu_content;
		$menu_content = '';
		$li_start = "<li>";
	}
	echo $menu_s;
	?>
</ul>
