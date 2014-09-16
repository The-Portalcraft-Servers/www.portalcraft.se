<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>

    <body background="./media/bg.jpg">
        <script type="text/javascript">
            window._idl = {};
            _idl.variant = "modal";
            (function() {
                var idl = document.createElement('script');
                idl.type = 'text/javascript';
                idl.async = true;
                idl.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'members.internetdefenseleague.org/include/?url=' + (_idl.url || '') + '&campaign=' + (_idl.campaign || '') + '&variant=' + (_idl.variant || 'modal');
                document.getElementsByTagName('body')[0].appendChild(idl);
            })();
        </script>
        <?php include './resources/navbar.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <div class="container" id="KITTENS" style="background:rgba(0,0,0,0.70);color:rgba(176, 176, 176, 0.75);margin-top:30px">
            <div id="LEFT" style="margin-top:5px" class="pull-left">
                <p style="color:white;">
                    <font size="6">
                    <b>PortalCraft.Se</b>
                    </font>
                </p>
                <font face="Georgia, Arial, Garamond">
                <div>
                    Like to play survival Minecraft? Or do you like to play in creative mode
                    instead?
                </div>
                <div>
                    Here at The PortalCraft.Se Servers we have both!
                    <div>
                        <span style="line-height: 1.428571429;"><br></span>
                    </div>
                    <div>
                        <span style="line-height: 1.428571429;">We're currently hosting: a survival whitelist server, &nbsp;public survival server,<br>public creative server &amp; a game server with parkour, spleef, survival games and more! &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br></span>
                    </div>
                </div>
                <div style="margin-top:30px">
                    <font style="color: white;" size="3">
                    Happy players means everything!
                    </font>
                </div>
                <div style="margin-top:3px">
                    We love to see our players play and enjoy our server. That's the most
                    important thing for us!
                </div>
                <div>
                    If you have any tips for us on how we can make the servers more enjoyable
                    to play
                </div>
                <div>
                    we'd love to hear them! You find out how to contact us by clicking on
                    the "Contact" tab!
                </div>
                </font>
            </div>
            <div id="RIGHT" class="pull-right" style="margin-top:20px;margin-right:20px;margin-bottom:100px">
                <img src="./media/mpic.png" div="" width="500" class="pull-right">
                <div class="form-group">
                    <label style="margin-top:20px">
                        Server IP:
                    </label>
                    <br>
                    <input type="text" value="mc.portalcraft.se" class="form" disabled="">
                </div>
            </div>
        </div>
        <?php include './resources/footer.php'; ?>
    </body>
</html>
