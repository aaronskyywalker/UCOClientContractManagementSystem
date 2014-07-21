<h2>Contract Details</h2>
<form id="contract">
<table width="670">
	<tr class="head">
		<th>Qty</th>
		<th>Service</th>
		<th>Price</th>
		<th>One-Time</th>
		<th>Monthly</th>
		<th>Annually</th>
	</tr>
	<tr class="section">
		<th colspan="7">Virtual Machine</th>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Initial Setup</td>
		<td>$400.00</td>
		<td>$400.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="annually">
		<td></td>
		<td>Virtual Server</td>
		<td>$1,280.00/yr</td>
		<td></td>
		<td></td>
		<td>$1,280.00</td>
	</tr>
	<tr class="annually">
		<td></td>
		<td>VMWare Shared License</td>
		<td>$175.00/yr</td>
		<td></td>
		<td></td>
		<td>$175.00</td>
	</tr>
	<tr class="monthly">
		<td></td>
		<td>Maintenance & Administration</td>
		<td>$200.00/mo</td>
		<td></td>
		<td>$200.00</td>
		<td></td>
	</tr>
	<tr class="annually">
		<td><input type="number" min="1" value="1"></td>
		<td>Server Memory, 4GB</td>
		<td class="price">$42.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$42.00</td>
	</tr>
	<tr class="annually">
		<td><input type="number" min="1" value="1"></td>
		<td>SAN Storage, 500GB</td>
		<td class="price">$160.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$160.00</td>
	</tr>
	<tr class="annually">
		<td><input type="number" min="0" value="0"></td>
		<td>Optional: Additional Processor</td>
		<td class="price">$250.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$0.00</td>
	</tr>
	<tr class="section">
		<th colspan="7">Physical Machine</th>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Initial Setup</td>
		<td>$100.00</td>
		<td>$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="annually">
		<td></td>
		<td>Server Housing</td>
		<td>$210.00/yr</td>
		<td></td>
		<td></td>
		<td>$210.00</td>
	</tr>
	<tr class="section">
		<th colspan="7">Backup</th>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Initial Setup</td>
		<td>$400.00</td>
		<td>$400.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Commvault Shared License</td>
		<td>$100.00</td>
		<td>$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="annually">
		<td></td>
		<td>Commvault Shared Support License</td>
		<td>$516.00/yr</td>
		<td></td>
		<td></td>
		<td>$516.00</td>
	</tr>
	<tr class="monthly">
		<td></td>
		<td>Maintenance</td>
		<td>$40.00/mo</td>
		<td></td>
		<td>$40.00</td>
		<td></td>
	</tr>
	<tr class="annually">
		<td><input type="number" min="1" value="1"></td>
		<td>SAN Storage, 250GB</td>
		<td class="price">$250.00/yr</td>
		<td></td>
		<td></td>
		<td class="annually">$250.00</td>
	</tr>
	<tr class="section">
		<th colspan="7">Optional: Operating System</th>
	</tr>
	<tr class="onetime">
		<td><input type="checkbox" name="OS-RedHat" class="OS"></td>
		<td>Red Hat Linux</td>
		<td class="price">$700.00</td>
		<td class="onetime">$0.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="onetime">
		<td><input type="checkbox" name="OS-Win" class="OS"></td>
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
	<tr class="onetime">
		<td></td>
		<td>Tape Library per Slot includes Media</td>
		<td>$100.00</td>
		<td>$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Off-site Storage</td>
		<td>$60.00</td>
		<td>$60.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Optional: Server Clone</td>
		<td>$100.00</td>
		<td>$100.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr class="onetime">
		<td></td>
		<td>Shared Blade Chassis<br>(if housed in UCO HP Chassis)</td>
		<td>$170.00</td>
		<td>$170.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr id="totals">
		<th colspan="3">Totals</th>
		<th>$0.00</th>
		<th>$0.00</th>
		<th>$0.00</th>
	</tr>
</table>
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
	else console.error('Error: updateSubtotal(obj).qty');
	
	price = parseFloat(entry.children('.price').text().substr(1));
	subtotal = (qty * price).toFixed(2);
	entry.children('.' + entry.attr('class')).text('$' + subtotal);
	updateTotal($(entry).parents('table').eq(0));
}
function updateTotal(obj) {
	obj = $(obj);
	for (i=1; i<=3; i++) {
		total = 0;
		subtotals = obj.find('tr:not(.head,.section) td:nth-last-child(' + i +')');
		for (j=0; j<subtotals.length; j++) {
			val = subtotals.eq(j).text().substr(1);
			if (val != '') total += parseFloat(val);
		}
		$('#totals th:nth-last-child(' + i + ')').text('$' + total.toFixed(2));
	}
}
</script>