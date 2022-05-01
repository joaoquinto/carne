<?php
session_start();
unset($_SESSION['logado_status']);
header('Location: ./index.php');
