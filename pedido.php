<html>
<head>
    <title>Hoja de Pedidos</title>
</head>
<body>
    <h1>Hoja de Pedidos</h1>
    <form method="post" action="resultado.php">
        <label for="hamburguesa">Hamburguesa Mediana</label>
        <input type="number" name="hamburguesa" id="hamburguesa" min="0"><br><br>
        
        <label for="refresco">Refresco</label>
        <input type="number" name="refresco" id="refresco" min="0"><br><br>
        
        <label for="papas">Papas Fritas</label>
        <input type="number" name="papas" id="papas" min="0"><br><br>
        
        <input type="submit" value="Calcular Total">
    </form>
</body>
</html>