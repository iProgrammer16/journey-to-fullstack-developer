<?php
$name = $_GET['name'] ?? 'Guest';
function e($str){return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');}
?>
<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><title>Welcome</title></head>
<body>
<h1>Hello, <?= e($name) ?></h1>
<form method="get"><input name="name"><button>Send</button></form>
</body>
</html>