<!------------------------------BOARD 
 LEFT---------------------------------->
<section id=menuBoard>
    <div id="leftBoard">
        <ul>
            <li><a href="https://cockpit.oclock.io/" target="blank"> Cockpit</a></li>

            <li><a href="https://github.com" target="blank">Github</a></li>

            <li><a href="https://slack.com/" target="blank">Slack</a></li>

            <li><a href="https://discordapp.com/channels/316852611867213824/316852611867213824" target="blank"> Discord Y</a></li>

            <li><a href="https://codepen.io/mobify/pen/GtqKj" target="blank">Codepen</a></li>

            <li><a href="http://localhost" target="blank"> Localhost</a></li>
        </ul>
    </div>




    <!------------------------------BOARD
     CENTER---------------------------------->
    <div id="centerBoard">
        <!--<form action="
        <?php
        if (isset($_POST['goVpn']) && !empty($_POST['goVpn'])) {
            $name = $_POST['goVpn'] . '.vpnuser.lan';
            header("Location: http://" . $name);
        };
        ?>
        " method="POST" id="formVpn">
            <label for="" id="labelBoard">V P N</label>
            <input type="text" name="goVpn" placeholder="nom-prenom" id="inputVpn">
        </form>-->
    </div>






    <!------------------------------BOARD RIGHT---------------------------------->

    <!--Affiche la page courante-->
    <div id="rightBoard">
        <h5>
            <?php $url = explode('/',  $_SERVER['REQUEST_URI']);
            echo ($url[5]);
            ?>
        </h5>
    </div>


    <!--THEME SWITCH-->
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>



</section>