<section id=menuBoard>
    <div id="leftBoard">
        <ul>
            <li><a href="https://cockpit.oclock.io/" target="blank"><img src="../images/ico_cockpit.png" alt="icone cockpit"> Cockpit</a></li>

            <li><a href="https://github.com" target="blank"><img src="../images/ico_github.png" alt="icone github"> Github</a></li>

            <li><a href="https://slack.com/" target="blank"><img src="../images/ico_slack.png" alt="icone Slack"> Slack</a></li>

            <li><a href="https://discordapp.com/channels/316852611867213824/316852611867213824" target="blank"><img src="../images/ico_discord.png" alt="icone discord"> Discord Y</a></li>

            <li><a href="planning.php"><img src="../images/ico_drive.png" alt="icone google drive"> Planning Y</a></li>

            <li><a href="http://localhost" target="blank"><img src="../images/ico_localhost.png" alt="icone localhost"> Localhost</a></li>
        </ul>
    </div>

    <!---------------------------------------------------------------->
    <div id="centerBoard">
        <form action="<?php getNameVpn(); ?>" method="POST" id="formVpn">
            <label for="" id="labelBoard">V P N</label>
            <input type="text" name="goVpn" placeholder="nom-prenom" id="inputVpn">
        </form>
    </div>
    <!---------------------------------------------------------------->



    <!---------------------------------------------------------------->
    <div id="rightBoard">
        <?php  
            getUrl();
        ?>
    </div>
    <!---------------------------------------------------------------->
</section>

