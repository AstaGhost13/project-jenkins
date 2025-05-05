<?php
use Vendor\VentasPhp\Services\DashboardFunctions;

$productosMasVendidos = DashboardFunctions::obtenerProductosMasVendidos();
?>

<h4 class="mt-4">10 Productos más vendidos</h4>
<table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Unidades vendidas</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($productosMasVendidos as $producto) {?>
        <tr>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->unidades ?></td>
            <td>$<?= $producto->total ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
