<?php                 
include ('connection.php');

$userid = $_POST["userid"];
$password = $_POST["password"];

$sql = "SELECT * FROM admin";
$result = mysqli_query($connect,$sql);

$jumpa = FALSE;

while($row = mysqli_fetch_array($result))
{
    if($row["userid"]== $userid && $row["password"]== $password)
        $jumpa = TRUE;
}

if($jumpa == TRUE) {
    header("Location: find.html");
 
} else
    //KOD UNTUK KOTAK POP UP 
          echo "
        <script>
          alert('username atau password salah');
        </script>
        ";
    echo "Password atau Username salah.Anda tidak dibenarkan masuk<br>";
   echo "<a href='login.html'>Kembali</a>";