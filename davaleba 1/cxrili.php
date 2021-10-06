<?php 
include 'davaleba.php';
$sql = "SELECT * FROM USERS";
$results=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table, td, tr, th{
			border: 2px solid black;
			border-collapse: collapse;
			padding: 12px;
		}
	</style>
</head>
<body>
    <table>
    	<tr>
    		<th>id (A_I PK)</th>
    		<th>name</th>
    		<th>surname</th>
    		<th>birthday</th>
    		<th>registered_at</th>
    	</tr>
           <?php while ($row=$results-> fetch_assoc()): ?>
           	<tr>
           		<td><?php echo $row["id (A_I PK)"] ?></td>
           		<td><?php echo $row['name'] ?></td>
           		<td><?php echo $row['surname'] ?></td>
           		<td><?php echo $row["birthday"] ?></td>
           		<td><?php echo $row["registered_at"] ?></td>
            </tr>
        <?php endwhile; ?>

    </table>
</body>
</html>