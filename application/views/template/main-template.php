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

		<?php $data['main_menu'] = array("home" => array('uri' => '/',
														 'text' => $this->lang->line('home'),
														 'attributes' => array(
														 		"id" => "main-menu-home",
														 		"class" => "main-menu-link",
														 	),
														),
										"profile" => array('uri' => 'user/profile',
														 'text' => $this->lang->line('profile'),
														 'attributes' => array(
														 		"id" => "main-menu-profile",
														 		"class" => "main-menu-link",
														 	),
														),
										"company_files" => array('uri' => 'company/files',
														 'text' => $this->lang->line('comany-files'),
														 'attributes' => array(
														 		"id" => "main-menu-company-files",
														 		"class" => "main-menu-link",
														 	),
														),
										"logout" => array('uri' => 'user/logout',
														 'text' => $this->lang->line('logout'),
														 'attributes' => array(
														 		"id" => "main-menu-logout",
														 		"class" => "main-menu-link",
														 	),
														),
										);	
			$data['header_attributes'] = array("class" => "background-black");
		?>
		<!-- header -->
		<?= $this->load->view('template/header',$data) ?>

		<!-- content -->
		<?= $this->load->view('template/content',$content) ?>

		<!-- footer -->
		<?= $this->load->view('template/footer') ?>

	</body>
</html>