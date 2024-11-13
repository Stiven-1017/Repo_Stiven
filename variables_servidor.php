<?php
session_start();
$_SESSION["usuario"] = "Stiven";

echo "Usuario de sesión: " . $_SESSION["usuario"];

