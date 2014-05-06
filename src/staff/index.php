<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>
            The Portalcraft.se servers
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PortalCraft Staff-list">
        <meta name="author" content="Carlgo11">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap.min.css"
              rel="stylesheet">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css"
              rel="stylesheet">
        <link rel="icon" href="../media/favicon.ico" type="image/vnd.microsoft.icon" />
    </head>

    <body background="../media/bg.jpg">
        <?php include '../resources/header.php'; ?>
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
                    We only have responsible personal!&nbsp;
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
                <img src="../media/bankey.jpg" div="" width="300" class="pull-right">
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
                $con = mysqli_connect("mc.portalcraft.se", "Delta", "dRpLPAJ9P7wb4ycf", "ranks");

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con, "SELECT * FROM ranks ORDER BY `id` ASC");


                while ($row = mysqli_fetch_array($result)) {
                    if ($row['Hide'] == "false") {
                        if (strtolower($row['Rank']) == "owner") {
                            $name = ucfirst("" . $row['Player']);
                            $imgsrc = "https://minotar.net/helm/" . $row['Player'] . "/90.png";
                            echo "<img src=$imgsrc>";
                            echo "<p>[Owner] " . $name . "</p>";
                            echo "<br>";
                        }

                        if (strtolower($row['Rank']) == "coowner") {
                            $name = ucfirst("" . $row['Player']);
                            $imgsrc = "https://minotar.net/helm/" . $row['Player'] . "/90.png";
                            echo "<img src=$imgsrc>";
                            echo "<p>[Co-Owner] " . $name . "</p>";
                            echo "<br>";
                        }

                        if (strtolower($row['Rank']) == "headadmin") {
                            $imgsrc = "https://minotar.net/helm/" . $row['Player'] . "/90.png";
                            $name = ucfirst($row['Player']);
                            echo "<img src=$imgsrc>";
                            echo "<p>[Head-Admin] " . $name . "</p>";
                            echo "<br>";
                        }

                        if (strtolower($row['Rank']) == "admin") {
                            $imgsrc = "https://minotar.net/helm/" . $row['Player'] . "/90.png";
                            $name = ucfirst($row['Player']);
                            echo "<img src=$imgsrc>";
                            echo "<p>[Admin] " . $name . "</p>";
                            echo "<br>";
                        }

                        if (strtolower($row['Rank']) == "moderator") {
                            $imgsrc = "https://minotar.net/helm/" . $row['Player'] . "/90.png";
                            $name = ucfirst($row['Player']);
                            echo "<img src=$imgsrc>";
                            echo "<p>[Moderator] " . $name . "</p>";
                            echo "<br>";
                        }
                    }
                }

                mysqli_close($con);
                ?>
            </div>
        </div>
        <?php include '../resources/footer.php'; ?>
    </body>

</html>
