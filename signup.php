<?php
   include('connection.php');
   $userid = $_POST['userid'];
   $password = $_POST['password'];
    
   $query="insert into admin values('$userid','$password')";
   $result = mysqli_query($connect, $query);

   //echo $query."<br>";

   if ($result == TRUE)
       echo "
        <script>
          alert('Rekod berjaya ditambah');
        </script>
        ";
    else
        echo '
        <script>
          alert("Rekod tidak berjaya ditambah");
        </script>
        ';
    echo '<br><br><a href="logintry.html">Kembali</a>';
 mysqli_close($connect);
?>



