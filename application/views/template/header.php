<?php if (isset($header_attributes)) {
	$class_header = $header_attributes['class'];
}?>

<div id="header-wrapper" class="<?php echo $class_header ?>">
	
	<div id="header">
		
		<div id="container">

			<?php if (isset($main_menu)): ?>
					<!-- main menu -->
					<div id="main-menu" class="col col_10">
						<?php
								echo "<ul>";
								foreach ($main_menu as $key => $value) {
									echo "<li>".anchor($value['uri'],$value['text'],$value['attributes'])."</li>";
								}
								echo "</ul>";
						?>	
					</div>
					
			<?php endif; ?>

			<!-- language selector -->
			<div id="language-selector" class="col col_2">		

				<ul>
					<li>Francais</li> | 
					<li>English</li>
				</ul>

			</div>
		</div> <!-- #END-CONTAINER -->

	</div>	<!-- #END-HEADER -->

</div> <!-- #END-HEADER-WRAPPER -->