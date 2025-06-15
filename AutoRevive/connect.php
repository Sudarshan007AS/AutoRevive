<?php
function getConnection() {
    $db = new SQLite3('auto_revive.db');
    return $db;
}
?>