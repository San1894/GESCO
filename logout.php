<?php
session_start();
unset($_SESSION['log']);
session_destroy();
header('location: index.html');
exit();
