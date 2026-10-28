<?php
// Old Fort Together: WordPress retired 2026-10-28 and replaced by one static page.
// The home page is index.html; every other old address (pages, wp-login.php, feeds) is sent there.
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if ($path === '/' || $path === '/index.php') {
	header('Content-Type: text/html; charset=utf-8');
	readfile(__DIR__ . '/index.html');
	exit;
}
header('Location: https://oldforttogether.org/', true, 301);
