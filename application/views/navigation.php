<h5 class="sidebartitle">Navigation</h5>
<ul class="nav nav-pills nav-stacked nav-bracket">
	<?php
// 	print_r($menulist);
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
			if (isset ( $mn ["child"] ))
			{
				foreach ( $mn ["child"] as $cmn )
				{
						if ($cmn ["self"] ["uri"] == "/")
						{
							$slist = "<a href=''><i class='fa fa-edit'></i><span>" . $cmn ["self"] ["title"] . "</span></a>";
						} else {
							$slist = anchor ( $cmn ["self"] ["uri"], "<i class='fa fa-edit'></i><span>" . $cmn ["self"] ["title"] . "</span>" );
						}
						$menu_content = $li_start.$slist.$menu_content.$li_end;
						$li_start = "<li>";
				}
				$menu_content = $ul_children_start.$menu_content.$ul_end;
				$li_start = $li_parent_start;
				if($mn["self"]["uri"]=="/"){
					$flist = "<a href=''><i class='fa fa-edit'></i><span>" .$mn["self"]["title"]."</span></a>";
				}else{
					$flist = anchor($mn["self"]["uri"],"<i class='fa fa-edit'></i><span>".$mn["self"]["title"]."</span>");
				}
				$menu_content =  $li_start.$flist.$menu_content.$li_end;
				$menu_s = $menu_s.$menu_content;
				$menu_content = '';
				$li_start = "<li>";
			}else {
				if($mn["self"]["uri"]!="/"){
					$flist = anchor($mn["self"]["uri"],"<i class='fa fa-edit'></i><span>".$mn["self"]["title"]."</span>");
					$menu_content =  $li_start.$flist.$menu_content.$li_end;
					$menu_s = $menu_s.$menu_content;
					$menu_content = '';
					$li_start = "<li>";
				}
			}
	}
	echo $menu_s;
	?>
</ul>
