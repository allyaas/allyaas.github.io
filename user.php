<link rel="stylesheet" href="jadual.css">
<?php
require ('connection.php');
?>
<html>
    <head>
        <link rel="stylesheet"href="baru.css">
    </head>
    <style>
        table {
            border-collapse: collapse;
            width:100%;
        }
        th {
            background-color: beige;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid aqua;
        }
        tr:hover {background-color:  #B29DD9;}
        body{
            background-image: url(back9.jpg);
        }
    </style>
    <body>
        <center>
            <h1>USER INFORMATION</h1>
            <table border="1px solid white" width="100%" border="8" align="center">
                <tr>
                    <th><width="10"><b>Name</b></width></th>
                    <th><width="100"><b>Age</b></width></th>
                    <th><width="100"><b>Phone</b></width></th>
                    <th><width="10"><b>Bag Quantity</b></width></th>
                    <th><width="10"><b>Flight Number</b></width></th>
                   
                </tr>
                <?php
                $dataA=mysqli_query($connect, "select *FROM passenger");
                while($infoA=mysqli_fetch_array($dataA))
                {
                    ?>
                    <tr>
                        <td><?php echo $infoA['name'];?></td>
                        <td><?php echo $infoA['age'];?></td>
                        <td><?php echo $infoA['phone'];?></td>
                        <td><?php echo $infoA['qty'];?></td>
                     <td><?php echo $infoA['flight'];?></td>
                    </tr>
                    <?php } ?>
                
           </table>
           <br>
           <center>
              <button onclick="window.print()">PRINT</button>
           </center>
        </center>
        <center><br>
         <a href="admin.html">BACK</a>
        </center>
    </body>
</html>