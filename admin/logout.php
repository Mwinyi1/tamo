<?php
session_start();
session_destroy();
header("Location: /tamo/index.php");
exit;
