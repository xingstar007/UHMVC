<h5 class="sidebartitle">Navigation</h5>
<ul class="nav nav-pills nav-stacked nav-bracket">
	<?php
// 	var_dump($menu_list);
	$li_parent_start = "<li class='nav-parent'>";
	$li_start = "<li>";
	$li_end = "</li>";
	$ul_children_start = "<ul class='children'>";
	$ul_end = "</ul>";
	$menu_tmp = '';
	$menu_content = '';
	foreach ( $menu_list as $menu_data )
	{
		if (isset ( $menu_data ["child"] ))
		{
			foreach ( $menu_data ["child"] as $menu_child_data )
			{
				if ($menu_child_data["self"]["uri"] == "/")
				{
					$slist = "<a href=''>";
					$slist .= "<span class='".$menu_child_data["self"]["icon"]."'></span>";
					$slist .= "<span>".$menu_child_data["self"]["title"]."</span>";
					$slist .= "</a>";
				} else {
					$link_content = $menu_child_data["self"]["icon"]?"<span class='".$menu_child_data["self"]["icon"]."'></span>":$default_link_icon;
					$link_content .= "<span>".$menu_child_data["self"]["title"]."</span>";
					$slist = anchor ( $menu_child_data["self"]["uri"], $link_content);
				}
				$menu_tmp = $menu_tmp.$li_start.$slist.$li_end;
			}
			$menu_tmp = $ul_children_start.$menu_tmp.$ul_end;
			$li_start = $li_parent_start;
			if($menu_data["self"]["uri"]=="/")
			{
				$flist = "<a href=''>";
				$flist .= "<span class='".$menu_data["self"]["icon"]."'></span>";
				$flist .= "<span>".$menu_data["self"]["title"]."</span>";
				$flist .= "</a>";
			}else{
				$link_content = "<span class='".$menu_data["self"]["icon"]."'></span>";
				$link_content .= "<span>".$menu_data["self"]["title"]."</span>";
				$flist = anchor ( $menu_data["self"]["uri"], $link_content);
			}
			$menu_tmp =  $li_start.$flist.$menu_tmp.$li_end;
			$menu_content = $menu_content.$menu_tmp;
			$menu_tmp = '';
			$li_start = "<li>";
		}else {
			if($menu_data["self"]["uri"]!="/"){
				$link_content = "<span class='".$menu_data["self"]["icon"]."'></span>";
				$link_content .= "<span>".$menu_data["self"]["title"]."</span>";
				$flist = anchor ( $menu_data["self"]["uri"], $link_content);
				$menu_tmp =  $li_start.$flist.$menu_content.$li_end;
				$menu_content = $menu_content.$menu_tmp;
				$menu_tmp = '';
				$li_start = "<li>";
			}
		}
	}
	echo $menu_content;
	?>
</ul>
