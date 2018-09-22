<h2>View Contacts</h2>
<p>Contacts assigned to Employee: </p>
<table>
	<tr>
		<th>ID</th>
		<th>Email</th>
		<th>Comment</th>
		<th>Date</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach ($contacts as $contact) : ?>
		<tr>
			<td><?php echo $contact->getContactID(); ?></td>
			<td><?php echo $contact->getEmail(); ?></td>
			<td><?php echo $contact->getWords(); ?></td>
			<td><?php echo $contact->getContactDate(); ?></td>
			<td>
				<form action="admin.php" method="post"
				  id="deleteContactForm">
					<input type="hidden" name="action"
						value="deleteContact">
					<input type="hidden" name="employeeID"
						value="<?php echo $contact->getEmpAssigned(); ?>">
					<input type="hidden" name="contactID"
						value="<?php echo $contact->getContactID(); ?>">
					<input type="submit" value="Delete">
				</form>
				
			</td>
		</tr>
	<?php endforeach; ?>
</table>
