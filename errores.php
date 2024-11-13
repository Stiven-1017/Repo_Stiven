<?php
try {
    throw new Exception("¡Ocurrió un error!");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

