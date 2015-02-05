<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.png" type="image/png">

<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<!-- Extra metadata -->
<?php echo $metadata; ?>
<!-- / -->

<link rel="stylesheet" href="<?php echo assets_url('css/style.default.css'); ?>">
<link rel="stylesheet" href="<?php echo assets_url('css/jquery.datatables.css'); ?>">

<!-- Extra Css -->
<?php echo $css; ?>
<!-- / -->

<script src="<?php echo assets_url('js/jquery-1.10.2.min.js')?> "></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->