<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="GET" action="index.php">
        <label for="length">Lunghezza Password:</label>
        <input type="number" id="length" name="length" min="1" max="100" required>
        <input type="submit" value="Genera Password">
    </form>
</body>
</html>