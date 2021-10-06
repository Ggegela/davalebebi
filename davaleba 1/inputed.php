<?php 
   include 'davaleba.php';
   if (!isset($_POST['name'], $_POST['surname'], $_POST['birthday'],$_POST['registered_at'])) {
   	die("requirement not fulfilled");
   }
   $name=$_POST['name'];
   $surname = $_POST['surname'];
   $birthday = $_POST['birthday'];
   $registered_at = $_POST['registered_at'];
   $sql = "INSERT INTO users ( `name`, `surname`, `birthday`, `registered_at`) 
           VALUES ('$name','$surname','$birthday','$registered_at')";
   if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>