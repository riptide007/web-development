<?php
require_once("header.php");
/*IF SESSION IS SET....SHOW THE NAVBAR*/
require_once("navbar.php");
?>
<?php
                    include '../../dbconnect.php';

                    $sql="SELECT  `sacco_name`, `description`, `isActive` FROM `sacco` ";
                    $result = $conn->query($sql);
                    ?>

<head>
    <link rel="stylesheet" type="text/css" href="../../resources/card.css">

</head>

<div class="row">
    <div class="leftcolumn">




        <div class="card">


            <div class="card">
                <div class="card">
                <h1 style="color:black;margin-left:30px;font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;">The Following are the currently active registered Saccos : </h1>
                   
                </div>



                    <?php
                    if ($result->num_rows > 0) {
                        echo "<table id='customers' ><tr><th>Sacco Name</th><th>Routes Description</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["sacco_name"]."</td><td>".$row["description"]."</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    ?>

            </div>
        </div>

        <div class="card" id="load_updates">


        </div>


    </div>