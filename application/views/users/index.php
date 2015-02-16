<div id="list-users" class="col_center col_10">
	
	<!-- here list all users -->
	<table>
		<thead>
			<tr>
				<td>Last Name</td>
			</tr>
			<tr>
				<td>First Name</td>
			</tr>
			<tr>
				<td>Permission</td>
			</tr>
			<tr>
				<td>E-mail</td>
			</tr>
		</thead>

		<tbody>
			<!-- GET ALL THE INFORMATION FROM THE DATABASE -->
			<?php 
				foreach ($users as $key => $value) {
						foreach ($value as $key2 => $value2) {

						switch ($key2) {
							case 'last_name':
								 echo "<tr>
								 			<td>
								 				".$value2."
								 			</td>
								 	   </tr>";
							break;
							case 'first_name':
								 echo "<tr>
								 			<td>
								 				".$value2."
								 			</td>
								 	   </tr>";
							break;
							case 'permission':
								 echo "<tr>
								 			<td>
								 				".$value2."
								 			</td>
								 	   </tr>";
							break;
							case 'email':
								 echo "<tr>
								 			<td>
								 				".$value2."
								 			</td>
								 	   </tr>";
							break;
							default:
								# code...
							break;
						}
					}
				}
			?>
		</tbody>

	</table>

</div> <!-- end login form -->