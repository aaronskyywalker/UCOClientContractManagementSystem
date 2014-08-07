<h2>Overview</h2>

<p>
	<a href="contract">Create a Contract</a>
</p>

<p>
	<table cellspacing="0" width="670">
		<tr>
			<th colspan="2" style="border-right:0;">Contacts</th>
			<th colspan="3" style="border-left:0;text-align:right;"><input type="search" placeholder="Search"></th>
		</tr>
		<tr>
			<th style="text-align:center;" width="43">ID</th>
			<th width="123">Full Name</th>
			<th width="198">Department</th>
			<th width="43">Phone</th>
			<th>Email</th>
		</tr>
		<?php
			$handle = dbconnect();
			
			$result = mysql_query("SELECT * FROM contacts");
			
			while ($row = mysql_fetch_assoc($result)) {
			?>
				<tr>
					<td><a href="#"><?php echo $row['id']; ?></a></td>
					<td><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></td>
					<td><?php echo $row['department']; ?></td>
					<td><?php echo $row['extension']; ?></td>
					<td><?php echo $row['email']; ?></td>
				</tr>
			<?php
			}
		?>
		
	</table>
</p>

<p>
	<a href="#">Add an Administrator</a> - Under Construction
</p>