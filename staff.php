<!DOCTYPE html>
<html lang="en">

    <?php include 'header.php'; ?>

    <body background="./media/bg.jpg">
        <?php include './resources/navbar.php'; ?>
        <div class="container" id="KITTENS" style="background:rgba(0,0,0,0.70);color:rgba(176, 176, 176, 0.75);margin-top:30px">
            <div id="LEFT" style="margin-top:5px" class="pull-left">
                <p style="color:white;">
                    <font size="6">
                    <b class="text-center">Staff members<br></b>
                    </font>
                </p>
                <font face="Georgia, Arial, Garamond">
                <p>
                </p>
                <div>
                    <br>
                </div>
                <div>
                    We only have responsible personal!
                </div>
                <div>
                    <span style="line-height: 1.428571429;">Our goal is to only have the best staff members!</span>
                </div>
                <div>
                    <span style="line-height: 1.428571429;"><br>To become a staff-member you will have to:<br><br>
                    </span>
                </div>
                <div style="color:white">
                    <p>
                        * Be one of the most active users on the servers.
                        <br>
                        * Be responsible and never disobey the rules.
                        <br>
                        * Be respectful to everyone
                    </p>
                </div>
                <div>
                    <p>
                        We'll announce on our forums when there's a new staff-member spot open!
                    </p>
                    <br>
                </div>
                </font>
            </div>
            <div id="RIGHT" style="margin-right:20px">
                <div style="margin-top:20px">
                </div>
                <img src="./media/bankey.jpg" div="" width="300" class="pull-right">
            </div>
            <br>
            <div id="Staff-Members" style="margin-top:281px">
                <div style="color:white;margin-bottom:0px">
                    <font size="6">
                    Current Staff-Members:
                    </font>
                </div>
                <p>
                    These are our current Staff members:
                </p>
                <?php
                $con = mysqli_connect("alpha.portalcraft.se", "Delta", "dRpLPAJ9P7wb4ycf", "portalcraft");

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con, "SELECT * FROM ranks ORDER BY `id` ASC");

                while ($row = mysqli_fetch_array($result)) {
                    if ($row['Hide'] == "false") {
                        $name = ucfirst("" . $row['Player']);
                        $imgsrc = "https://minotar.net/helm/" . $row['Player'] . "/90.png";
                        echo "<img src=$imgsrc>";
                        echo "<p>[" . $row['Rank'] . "] " . $name . "</p>";
                        echo "<br>";
                    }
                }

                mysqli_close($con);
                ?>
            </div>
        </div>
        <?php include './resources/footer.php'; ?>
    </body>
</html>
