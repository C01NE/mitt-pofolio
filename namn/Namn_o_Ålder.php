<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>namn och ålder</title>
</head>
<body>
<h1>ditt namna och ålder om du inte kommer ihåg vad du skrev</h1>
<?php
    $namn = $_POST['name'];
    $ålder = $_POST['Ålder'];
    
    echo "<p>$namn, $ålder </p>";
?>
</body>
</html>
