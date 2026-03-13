<?php
/**
 * PORTAL TERPADU - Global Logout
 * Lokasi: htdocs/portal_sekolah/logout.php
 */
session_start();
session_unset();
session_destroy();

header("Location: index.php");
exit;