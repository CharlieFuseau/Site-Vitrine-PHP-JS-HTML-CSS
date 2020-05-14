<?php
session_start();
unset($_SESSION['login']);
$_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté';
header('Location: /admin');