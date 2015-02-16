<div id="header-wrapper">
	
	<div id="header">
		
		<div id="container">

			<?php if (isset($main_menu)): ?>
					<!-- main menu -->
					<div id="main-menu">
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
			<div id="language-selector">		

				<ul>
					<li>Francais</li> | 
					<li>English</li>
				</ul>

			</div>
		</div> <!-- #END-CONTAINER -->

	</div>	<!-- #END-HEADER -->

</div> <!-- #END-HEADER-WRAPPER -->