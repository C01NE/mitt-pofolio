<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>namn och ålder</title>
</head>
<body>
<h1>ditt namna och ålder om du inte kommer ihåg vad du skrev</h1>
<?php
    $n1 = $_POST['number1'];
    $n2 = $_POST['number2'];
    
    echo "<p>$n1 + $n2 </p>";
?>
</body>
</html>