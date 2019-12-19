<?php

session_start();

echo "welcome mr:" . $_SESSION['username'] . "<br>";
echo "and your club is " . $_SESSION['yourclub'] . "<br>";

echo $_SESSION['bale'];



echo '<a href="mad.php"> click here </a>';

