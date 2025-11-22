<?php 
$direction = $_GET['direction'] ?? '';

// Send User to the decrypted Website
if ($direction == "decrypted") {
    header("Location: https://shadowdara.42web.io/decrypted.html");
    exit;
}
// Ignore for non valid direction
else (
    exit;
)
?>

<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>Index</title>
</head>
<body>
  <h1>Empty here</h1>
  <p>More Content available <a href="https://shadowdara.github.io">here</a></p>
</body>
</html>
