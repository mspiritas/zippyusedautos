<?php
    if (!isset($_SESSION['is_valid_admin'])) {
        header(".?action=login");
    }
?>
