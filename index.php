<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="logo">
    <img src="https://static-00.iconduck.com/assets.00/games-genshinimpact-icon-2048x2048-jyrv8s6e.png" alt="logo">
</div>


 

<div class="container">
    <form action="script.php" method="POST">
        <h3>Insira o Valor</h3>
        <!-- Permitir apenas números -->
        <input type="number" name="valor" placeholder="Insira um número" required>
        <br>
        <div class="impt">
            <label for="seletor">Escolha a opção:</label>
            <select name="seletor" id="seletor">
                <option value="mora">Mora para Real</option>
                <option value="real">Real para Mora</option>
            </select>
        </div>
        <br>
        <div class="sub">
            <input type="submit" value="submit">
        </div>
    </form>
    
    <div class="resultado">
        <h3>Resultado:</h3>
        <?php
        session_start(); // Inicia a sessão

        if(isset($_SESSION['resultado'])) {
            echo $_SESSION['resultado'];
            unset($_SESSION['resultado']); // Limpa a sessão para não exibir o valor novamente ao recarregar a página
        }
        ?>
    </div>
</div>
</body>
</html>
