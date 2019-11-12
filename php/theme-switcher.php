<?php

setcookie('dashboardTheme', $_GET['theme']);

header('Location: articles.php?id=astuces');
