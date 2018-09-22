<?php
	$db = Database::getDB('admin');
		
		$query = 'SELECT * FROM employees
					ORDER BY employeeID';
		$statement = $db->prepare($query);
		$statement->execute();
		$rows = $statement->fetchAll();
		$statement->closeCursor();
?>
<p>Select an employee you wish to view contacts for.</p>
<form action="admin.php" method="post" id="selectEmployeeForm">
	<input type="hidden" name="action" value="viewContacts">
	<label>Employee:</label>
	<select name="employeeID">
		<?php foreach ($rows as $row) : ?>
			<option value="<?php echo $row['employeeID'] ?>"><?php echo $row['fName'] ?></option>
		<?php endforeach; ?>
	</select>
	<br>
	<input type="submit" value="View">
</form>