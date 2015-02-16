<?php echo doctype('html5'); ?>
<html lang="en">
<head>
	<meta charset="utf-8">

	<!-- style -->
	<?php 
		$values = array('href' => 'application/source/css/main.css',
						 'rel' => 'stylesheet',
						 'type' => 'text/css',
						);
		echo link_tag($values);
	?>

	<title><?= $title ?></title>
	
</head>
	<body>

		<!-- header -->
		<?= $this->load->view('template/header') ?>

		<!-- content -->
		<?= $this->load->view('template/content',$content) ?>

		<!-- footer -->
		<?= $this->load->view('template/footer') ?>

	</body>
</html>