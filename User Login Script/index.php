<?php  
require_once 'Includes/header.php';
// $sql = "SELECT * FROM users WHERE id > 0";
// $result = mysqli_query($conn, $sql);
// $rowCount = mysqli_num_rows($result);

// if($rowCount > 0) {
// 	while($row = mysqli_fetch_assoc($result)) {
// 		echo $row['username']. "<br>";
// 	}
// } else {
// 	echo "No results found.";
// }
?>

<?php 
	if(isset($_SESSION['sessionId'])) {
		echo "You are logged in!";
	} else {
		echo "Home";
	}
?>

<?php  
require_once 'Includes/footer.php';
?>
