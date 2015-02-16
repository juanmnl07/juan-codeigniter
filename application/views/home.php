<div id="login-form">
	
	<?= form_open('/validate-user') ?>
	<?php  
		foreach ($form_login as $key => $value) {
			switch ($key) {
				case 'email_input':
					echo "<div class='container-input'>";
					echo "<label class='label'>Email</label>";
					echo form_input($value);
					echo "</div>";
					break;
				case 'pass_input':
					echo "<div class='container-input password'>";
					echo "<label class='label'>Password</label>";
					echo form_password($value);
					echo "</div>";
					break;		
				case 'submit':
					echo form_submit($value);
					break;							
				default:
					# code...
					break;
			}
		}					
	?>
	<?= form_close() ?>

	<?= anchor($forgot_password['uri'],$forgot_password['text'],$forgot_password['attributes']) ?>

</div> <!-- end login form -->