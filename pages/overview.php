<h2>Overview</h2>

<p>
	<table cellspacing="0" width="720">
		<tr>
			<th colspan="2" style="border-right:0;">Contracts</th>
			<th colspan="3" style="border-left:0;text-align:right;"><input type="search" placeholder="Search"></th>
		</tr>
		<tr>
			<th style="text-align:center;" width="43">ID</th>
			<th width="193">Department</th>
			<th width="133">Client Contact</th>
			<th width="133">UCO Contact</th>
			<th>Expires</th>
		</tr>
		<?php
			$handle = dbconnect();
			$result = mysql_query("SELECT * FROM contracts");
			while ($row = mysql_fetch_assoc($result)) {
				foreach($row as $key => $value) $$key = stripslashes($value);
				$client = mysql_fetch_assoc(mysql_query("SELECT firstName, lastName, department FROM clients WHERE id=" . $client));
				?>
				<tr>
					<td><a href="#"><?php echo str_pad($id, 5, 0, STR_PAD_LEFT); ?></a></td>
					<td><?php echo $client['department']; ?></td>
					<td><?php echo $client['firstName'] . ' ' . $client['lastName']; ?></td>
					<td></td>
					<td><?php echo date('F j, Y', strtotime($expires)); ?></td>
				</tr>
				<?php
			}
		?>
	</table>
</p>

<p>
	<table cellspacing="0" width="720">
		<tr>
			<th colspan="2" style="border-right:0;">Contacts</th>
			<th colspan="3" style="border-left:0;text-align:right;"><input type="search" placeholder="Search"></th>
		</tr>
		<tr>
			<th style="text-align:center;" width="43">ID</th>
			<th width="133">Full Name</th>
			<th width="193">Department</th>
			<th width="73">Phone</th>
			<th>Email</th>
		</tr>
		<?php
			$handle = dbconnect();
			$result = mysql_query("SELECT * FROM contacts");
			while ($row = mysql_fetch_assoc($result)) {
				foreach($row as $key => $value) $$key = stripslashes($value);
				?>
				<tr>
					<td><a href="<?php echo ROOT . 'contact/' . $id ?>"><?php echo ucfirst(substr($type, 0, 1)) . str_pad($id, 5, 0, STR_PAD_LEFT); ?></a></td>
					<td><?php echo $firstName . ' ' . $lastName; ?></td>
					<td><?php echo $department; ?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $email; ?></td>
				</tr>
				<?php
			}
		?>
	</table>
</p>

<p>
	<a href="#">Add an Administrator</a> - Under Construction
</p>