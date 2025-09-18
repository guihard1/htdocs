<?php
session_start();
/*
 * Deve excluir o cookie e a session
 * */

unset($_SESSION['login']);

header('Location: index.php');