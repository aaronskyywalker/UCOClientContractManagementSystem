<h2>Contract Details</h2>
<form action="review">
<table class="contract" width="670" style="margin-bottom: -1px;">
	<tr>
		<th width="20%">First Name</th>
		<td class="input"><input type="text"></td>
		<th width="20%">Last Name</th>
		<td class="input"><input type="text"></td>
	</tr>
	<tr>
		<th>Phone</th>
		<td class="input"><input type="text"></td>
		<th>Email</th>
		<td class="input"><input type="text"></td>
	</tr>
	<tr>
		<th>Department</th>
		<td colspan="3" class="input"><input type="text"></td>
	</tr>
	<tr>
		<th>Account #</th>
		<td class="input"><input type="text"></td>
		<th>SLA Date</th>
		<td class="input"><input type="text"></td>
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
	<tr class="section">
		<th colspan="7">Virtual Machine</th>
	</tr>
	<tr class="item">
		<td></td>
		<td>Initial Setup</td>
		<td>$400.00</td>
		<td class="onetime">$400.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Virtual Server</td>
		<td>$1,280.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$1,280.00</td>
	</tr>
	<tr class="item">
		<td></td>
		<td>VMWare Shared License</td>
		<td>$175.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$175.00</td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Maintenance & Administration</td>
		<td>$200.00/mo</td>
		<td></td>
		<td class="monthly">$200.00</td>
		<td></td>
	</tr>
	<tr class="item">
		<td class="input"><input type="text" value="1"></td>
		<td>Server Memory, 4GB</td>
		<td class="price">$42.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$42.00</td>
	</tr>
	<tr class="item">
		<td class="input"><input type="text" value="1"></td>
		<td>SAN Storage, 500GB</td>
		<td class="price">$160.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$160.00</td>
	</tr>
	<tr class="item">
		<td class="input"><input type="text" value="1"></td>
		<td>Optional: Additional Processor</td>
		<td class="price">$250.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$0.00</td>
	</tr>
	<tr class="section">
		<th colspan="7">Physical Machine</th>
	</tr>
	<tr class="item">
		<td></td>
		<td>Initial Setup</td>
		<td>$100.00</td>
		<td class="onetime">$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Server Housing</td>
		<td>$210.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$210.00</td>
	</tr>
	<tr class="section">
		<th colspan="7">Backup</th>
	</tr>
	<tr class="item">
		<td></td>
		<td>Initial Setup</td>
		<td>$400.00</td>
		<td class="onetime">$400.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Commvault Shared License</td>
		<td>$100.00</td>
		<td class="onetime">$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Commvault Shared Support License</td>
		<td>$516.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$516.00</td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Maintenance</td>
		<td>$40.00/mo</td>
		<td></td>
		<td class="monthly">$40.00</td>
		<td></td>
	</tr>
	<tr class="item">
		<td class="input"><input type="text" value="1"></td>
		<td>SAN Storage, 250GB</td>
		<td class="price">$250.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$250.00</td>
	</tr>
	<tr class="section">
		<th colspan="7">Optional: Operating System</th>
	</tr>
	<tr class="item">
		<td class="input"><input type="checkbox" name="OS-RedHat" class="OS"></td>
		<td>Red Hat Linux</td>
		<td class="price">$700.00</td>
		<td class="onetime">$0.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td class="input"><input type="checkbox" name="OS-Win" class="OS"></td>
		<td>Windows 2008 Server</td>
		<td class="price">$85.00</td>
		<td class="onetime">$0.00</td>
		<td></td>
		<td></td>
	</tr>
	<script>$(".OS").change(function(){ other = $(".OS").not(this); other.prop("checked", false); updateSubtotal(other); });</script>
	<tr class="section">
		<th colspan="7">Unknown</th>
	</tr>
	<tr class="item">
		<td></td>
		<td>Tape Library per Slot includes Media</td>
		<td>$100.00</td>
		<td class="onetime">$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Off-site Storage</td>
		<td>$60.00</td>
		<td class="onetime">$60.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Optional: Server Clone</td>
		<td>$100.00</td>
		<td class="onetime">$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="item">
		<td></td>
		<td>Shared Blade Chassis<br>(if housed in UCO HP Chassis)</td>
		<td>$170.00</td>
		<td class="onetime">$170.00</td>
		<td></td>
		<td></td>
	</tr>
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
<p><input type="submit"></p>
</form>

<script>
updateTotal('#contract');
$('#contract [type=number]').change(function() { updateSubtotal(this); });
$('#contract [type=checkbox]').change(function() { updateSubtotal(this); });
function updateSubtotal(obj) {
	entry = $(obj).parents('tr').eq(0);
	
	type = $(obj).attr('type');
	if (type == 'number') qty = parseInt($(obj).val());
	else if (type == 'checkbox') qty = obj.checked ? 1 : 0;
	
	price = parseFloat(entry.children('.price').text().substr(1));
	subtotal = (qty * price).toFixed(2);
	entry.children('.' + entry.attr('class')).text('$' + subtotal);
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