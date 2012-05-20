<?php
/*
 * Created on Apr 9, 2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<table border="1">
	<tr>
		<td  width="10%"><b>User Name</b></td>
		<td  width="15%"><b>Email Id</b></td>
		<td  width="15%"><b>Function Date</b></td>
		<td  width="10%"><b>Function</b></td>
		<td  width="10%"><b>Venue</b></td>
		<td  width="5%"><b>No of Guest</b></td>
		<td  width="10%"><b>Contact</b></td>
		<td  width="10%"><b>Budget</b></td>
		<td  width="15%"><b>Booking Date</b></td>
	</tr>
<?php for ($i = 0; $i < count($bookingList); $i++) { ?>
    <tr>
<?php
echo "<td width='10%' >" . $bookingList[$i]->name . "</td>";
echo "<td width='15%' >" . $bookingList[$i]->email . "</td>";
echo "<td width='15%' >" . $bookingList[$i]->date . "</td>";
echo "<td width='10%' >" . $bookingList[$i]->functions . "</td>";
echo "<td width='10%' >" . $bookingList[$i]->preferredVenue . "</td>";
echo "<td width='5%' >" . $bookingList[$i]->no_of_guests . "</td>";
echo "<td width='10%' >" . $bookingList[$i]->contact . "</td>";
echo "<td width='10%' >" . $bookingList[$i]->budget . "</td>";
echo "<td width='15%' >" . $bookingList[$i]->bookingdate . "</td>";
?>
	</tr>
<?php }	?>
</table>

