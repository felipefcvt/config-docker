<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css">
    <title>Testando conexão com DB</title>
</head>
<body>
    <section class="container">
        <?php
        $servername = "db"; 
        $username = "user"; 
        $password = "password"; 
        $database = "db"; 

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            echo "<p>Erro ao conectar ao banco de dados: " . $conn->connect_error . "</p>";
        } else {
            echo "<h1>Conexão bem-sucedida! 🚀</h1>";
        }

        $conn->close();
        ?>
    </section>
</body>
</html>
