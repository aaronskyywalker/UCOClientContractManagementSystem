<?php include('header.php'); ?>
<form action="insertContract.php" method="post">
	<h2>Customer Details</h2>
	<p class="small">
		<label for="customerDepartment">Deptartment:</label> <input type="text" name="customerDepartment"><br>
		<label for="customerFirstName">First Name:</label><input type="text" name="customerFirstName"><br>
		<label for="customerLastName">Last Name:</label><input type="text" name="customerLastName"><br>
		<label for="customerPhone">Phone Number:</label><input type="text" name="customerPhone"><br>
		<label for="customerEmail">Email:</label><input type="text" name="customerEmail"><br>
		<br>
		<label for="customerAccountNumber">Account Number:</label><input type="text" name="customerAccountNumber"><br>
		<label for="customerIsSLA">Is SLA:</label><input type="checkbox" name="customerIsSLA"><br>
		<label for="customerSLADate">SLA Date:</label><input type="text" name="customerSLADate"><br>
	</p>
	<br>
	<h2>UCO Details</h2>
	<p class="small">
		<label for="ucoContact">UCO Contact: </label><input type="text" name="ucoContact"><br>
		<label for="technicalContact">Technical Contact:</label><input type="text" name="technicalContact"><br>
		<label for="financialContact">Financial Contact:</label><input type="text" name="financialContact"><br>
	</p>
	<br>
	<p class="small"><input type="submit"></p>
</form>
<?php include('footer.php'); ?>
