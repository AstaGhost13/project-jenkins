<?php
use Vendor\VentasPhp\Services\DashboardFunctions;

$ventasClientes = DashboardFunctions::obtenerVentasPorCliente();
?>

<div class="card mt-4">
    <div class="card-body">
        <h4>Ventas por clientes</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre cliente</th>
                    <th>Número compras</th>
                    <th>Total ventas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ventasClientes as $cliente) {?>
                    <tr>
                        <td><?= $cliente->cliente ?></td>
                        <td><?= $cliente->numeroCompras ?></td>
                        <td>$<?= $cliente->total ?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
