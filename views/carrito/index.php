
<h1>carrito de la compra</h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php 
        foreach ($carrito as $indice => $elemento) : 
        $producto = $elemento['producto'];
        
    ?>

<tr>
    <td><?php if ($producto->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito">
            <?php else : ?>
                <img src=<img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito">
            <?php endif; ?></td>
</tr>

    <?php endforeach; ?>
</table>