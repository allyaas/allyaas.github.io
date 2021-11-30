<?php
    include ('connection.php'); 

	$idmurid = $_POST["name"];
    $sql = "SELECT * FROM pelajar WHERE name='$name'";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) != 0)  {
        $row = mysqli_fetch_array($result);
        echo '<link href="baru.css" rel="stylesheet">';
        echo '<table>';
        echo '<h3>USER INFORMATION</h3>';
        
        echo '<tr><td>Name</td><td>'.$row["name"].'</td><tr>';
        echo '<tr><td>Name</td><td>'.$row["age"].'</td><tr>';
        echo '<tr><td>Age</td><td>'.$row["age"].'</td><tr>';
        echo '<tr><td>Phone</td><td>'.$row["phone"].'</td><tr>';
        echo '<tr><td>Quantity</td><td>'.$row["qty"].'</td><tr>';
        echo '<tr><td>Flight</td><td>'.$row["flight"].'</td><tr>';
        
        echo '</table>';
            echo"
    <script>
    alert('Rekod $name berjaya dicari');
    </script>
    ";
	}
    else {
         echo '
        <script>
          alert("Rekod tidak berjaya dicari");
        </script>
        ';
        echo 'Sila masukkan nama yang betul';
    }
?>