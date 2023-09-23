<html>
<head>
    <title>Resultado del Pedido</title>
</head>
<body>
    <?php
    $hamburguesa = $_POST["hamburguesa"];
    $refresco = $_POST["refresco"];
    $papas = $_POST["papas"];

    $precioHamburguesa = 2;
    $precioRefresco = 1.5;
    $precioPapas = 1.8;

    $subtotal = ($hamburguesa * $precioHamburguesa) + ($refresco * $precioRefresco) + ($papas * $precioPapas);
    $descuento = 0;
    
    // Comprueba si se piden todos los productos para aplicar el descuento del 10%
    if ($hamburguesa > 0 && $refresco > 0 && $papas > 0) {
        $descuento = $subtotal * 0.10;
    }
    
    $totalNeto = $subtotal - $descuento;
    $iva = $totalNeto * 0.16;
    $totalPagar = $totalNeto + $iva;
    
    echo "<h1>Resultado del Pedido</h1>";
    echo "<p>Total Neto: $totalNeto$</p>";
    echo "<p>IVA (16%): $iva$</p>";
    
    if ($descuento > 0) {
        echo "<p>Descuento: -$descuento$</p>";
    }
    
    echo "<p>Total a Pagar: $totalPagar$</p>";
    ?>
</body>
</html>
