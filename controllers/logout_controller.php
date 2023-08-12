<?php
session_start();
session_unset();
session_destroy();
header('Location: /guia_brecho/views/login.php');
exit();