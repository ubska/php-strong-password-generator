 <?php
//  verifica se il parametro length e stato passato
    if (isset($_GET['length'])) {
        // Converte il parametro 'length' in un intero
        $length = intval($_GET['length']);
        // Verifica che la lunghezza sia valida
        if ($length > 0 && $length <= 100) {
            echo '<div class="result">';
            echo '<h2>Password Generata:</h2>';
            echo '<p>' . generatePassword($length) . '</p>';
            echo '</div>';
        } else {
            // Mostra un messaggio di errore se la lunghezza non è valida
            echo '<div class="result">';
            echo '<p>Errore: Lunghezza non valida. Deve essere tra 1 e 100.</p>';
            echo '</div>';
        }
    }

    // Funzione per generare una password casuale
    function generatePassword($length) {
        // Set di caratteri utilizzati per la password
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomPassword = '';
        // Genera una stringa casuale della lunghezza specificata
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomPassword;
    }
    ?>

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