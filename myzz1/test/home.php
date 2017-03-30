<?php

session_start();

echo $_SESSION['id'];

session_destroy();

echo "<br>*********************<br>";

echo $_SESSION['id'];
