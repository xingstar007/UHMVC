<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Extra metadata -->
<?php echo $metadata; ?>
<!-- / -->

<!-- favicon.ico and apple-touch-icon.png -->

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="<?php echo assets_url('css/bootstrap.min.css'); ?>">
<!-- Custom styles -->
<link rel="stylesheet" href="<?php echo assets_url('css/main.css'); ?>">
<?php echo $css; ?>
<!-- / -->
<!-- jQuery -->
<script src="<?php echo assets_url('js/jquery.min.js')?> "></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo assets_url('js/bootstrap.min.js')?> "></script>
<!-- Custom JS -->
<script src="<?php echo assets_url('js/main.js')?> "></script>

<!-- Extra javascript -->
<?php echo $js; ?>
<!-- / -->


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->