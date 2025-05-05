<?php
use Vendor\VentasPhp\Services\DashboardFunctions;

$ventasUsuarios = DashboardFunctions::obtenerVentasPorUsuario();
?>

<div class="card mt-4">
    <div class="card-body">
        <h4>Ventas por usuarios</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre usuario</th>
                    <th>Número ventas</th>
                    <th>Total ventas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ventasUsuarios as $usuario) {?>
                    <tr>
                        <td><?= $usuario->usuario ?></td>
                        <td><?= $usuario->numeroVentas ?></td>
                        <td>$<?= $usuario->total ?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
