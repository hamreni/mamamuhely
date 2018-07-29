<?php
function allow($method) {
    if ($_SERVER['REQUEST_METHOD'] != $method) {
        die('Method not allowed');
    }
}
function redirect($url) {
    header('Location: ' . $url);
    exit;
}