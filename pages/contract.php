<h2>Contract Details</h2>
<form action="./" method="post">
<table class="contract" width="670" style="margin-bottom: -1px;">
	<tr>
		<th width="20%">First Name</th>
		<td class="input"><input type="text" name="firstName"></td>
		<th width="20%">Last Name</th>
		<td class="input"><input type="text" name="lastName"></td>
	</tr>
	<tr>
		<th>Phone</th>
		<td class="input"><input type="text" name="phone"></td>
		<th>Email</th>
		<td class="input"><input type="text" name="email"></td>
	</tr>
	<tr>
		<th>Department</th>
		<td colspan="3" class="input"><input type="text" name="department"></td>
	</tr>
	<tr>
		<th>Account #</th>
		<td class="input"><input type="text" name="account"></td>
		<th>SLA Date</th>
		<td class="input"><input type="text" name="sla"></td>
	</tr>
</table>
<table id="contract" class="contract" width="670">
	<tr class="head">
		<th width="23">Qty</th>
		<th>Service</th>
		<th width="74">Price</th>
		<th width="72">One-Time</th>
		<th width="72">Monthly</th>
		<th width="72">Annually</th>
	</tr>
	<?php
		$handle = dbconnect();
		$result = mysql_query("SELECT * FROM defaultServices");
		while ($row = mysql_fetch_assoc($result)) {
			foreach($row as $key => $value) $$key = stripslashes($value);
			
			if (!$section[$category]) {
				$section[$category] = true;
				?>
				<tr class="section">
					<th colspan="7"><?php echo $category; ?></th>
				</tr>
				<?php
			}
			
			$price = '$' . number_format($price, 2, '.', ',');
			?>
			<tr class="item">
				<?php echo (
					$type == 'quantity' ? "<td class=\"input\"><input type=\"text\" name=\"service$id-qty\" value=\"$quantity\"></td>" :
					$type == 'choose' ? "<td class=\"input\"><input type=\"checkbox\" name=\"service$id-qty\" class=\"choose$choose\"></td>" :
					"<td></td>"); ?>
				<td><input type="hidden" name="<?php echo "service$id" ?>" value="Virtual Machine"><?php echo $service; ?></td>
				<td class="price"><?php echo $price . ($recurrence == 'monthly' ? '/mo' : $recurrence == 'annually' ? '/yr' : ''); ?></td>
				<?php echo ($recurrence == 'onetime' ? "<td class='onetime'>" . ($type == 'choose' ? '$0.00' : $price) . "</td>" : "<td></td>"); ?>
				<?php echo ($recurrence == 'monthly' ? "<td class='monthly'>" . ($type == 'choose' ? '$0.00' : $price) . "</td>" : "<td></td>"); ?>
				<?php echo ($recurrence == 'annually' ? "<td class='annually'>" . ($type == 'choose' ? '$0.00' : $price) . "</td>" : "<td></td>"); ?>
			</tr>
			<?php
			if ($type == 'choose') echo "<script>$(\".choose$choose\").change(function(){ other = $(\".choose$choose\").not(this); other.prop(\"checked\", false); updateSubtotal(other); });</script>";
		}
	?>
	<tr id="totals">
		<th colspan="3">Totals</th>
		<th class="onetime">$0.00</th>
		<th class="monthly">$0.00</th>
		<th class="annually">$0.00</th>
	</tr>
	<tr id="notes">
		<th colspan="2" valign="top" style="text-align: right;">Notes</td>
		<td colspan="4" class="input"><textarea rows="5"></textarea></td>
	</tr>
</table>
<p><input type="hidden" name="action" value="contract"><input type="submit"></p>
</form>

<script>
updateTotal('#contract');
$('#contract [type=text]').change(function() { updateSubtotal(this); });
$('#contract [type=checkbox]').change(function() { updateSubtotal(this); });
function updateSubtotal(obj) {
console.log(obj);
	entry = $(obj).parents('tr').eq(0);
	
	type = $(obj).attr('type');
	if (type == 'text') qty = parseInt($(obj).val());
	else if (type == 'checkbox') qty = obj.checked ? 1 : 0;
	
	
	price = parseFloat(entry.children('.price').text().substr(1));
	subtotal = (qty * price).toFixed(2);
	entry.children('.onetime,.monthly,.annually').text('$' + subtotal);
	updateTotal($(entry).parents('table').eq(0));
}
function updateTotal(obj) {
	obj = $(obj);
	types = ['onetime', 'monthly', 'annually'];
	for (i in types) {
		total = 0;
		subtotals = obj.find('td.' + types[i]);
		for (j in subtotals) {
			val = parseFloat(subtotals.eq(j).text().substr(1).replace(',', ''));
			if (val) total += val;
		}
		$('th.' + types[i]).text('$' + total.toFixed(2));
	}
}
</script>