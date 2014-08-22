<!DOCTYPE html>
<html lang="en">

    <?php include 'header.php'; ?>

    <body background="./media/bg.jpg">
        <?php include './resources/navbar.php'; ?>
        <div class="container" id="KITTENS" style="background:rgba(0,0,0,0.70);color:rgba(176, 176, 176, 0.75);margin-top:30px">
            <div id="LEFT" style="margin-top:5px;margin-left: 10px;margin-right: 10px" class="pull-left">
                <center>
                    <p style="color:white;">
                        <font size="6">
                        <b class="text-center">Lain's commands<br></b>
                        </font>
                    </p>
                    

                    <div id="list" style="margin-top: 50px">
                    <table class='table table-bordered'><th>Command</th><th>Aliases</th><th>Message</th></tr>
                    <?php

                    $connect = mysqli_connect("alpha.portalcraft.se", "Delta", "dRpLPAJ9P7wb4ycf", "portalcraft");
                    mysql_select_db($connect);
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($connect, "SELECT * FROM commands");

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><th>" . $row['command'] . "</th><th>" . $row['aliases'] . "</th><th>" . $row['message'] . "</th></tr>";
                    }
                    mysqli_close($connect);
                    ?>     
                    </table>
                    </div>
                </center>
            </div>
        </div>
        <?php include './resources/footer.php'; ?>
    </body>

</html>