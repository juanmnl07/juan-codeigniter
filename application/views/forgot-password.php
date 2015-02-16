<div id="forgot-password-form-outter">
	<?= heading($h1,1,'class="header-1"'); ?>
	<?= form_open('/validate-email') ?>
		<div id="forgot-password-form">
		<?php  
			foreach ($form_forgot_password as $key => $value) {
				switch ($key) {
					case 'email_input':
						echo "<div class='container-input'>";
						echo "<label class='label'>E-mail</label>";
						echo form_input($value);
						echo "</div>";
						break;
				}
			}					
		?>
		</div> <!-- end login form -->

		<?php foreach ($form_forgot_password as $key => $value) {
				switch ($key) {
					case 'submit':
						echo form_submit($value);
						break;
				}
			}
		?>
	<?= form_close() ?>
</div>