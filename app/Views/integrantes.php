<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integrantes de Bandas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Integrantes de Bandas</h1>
    <a class="btn btn-outline-secondary w-100" href="<?=base_url('insertar_integrante/')?>">Nuevo Integrante</a><br><br>
                    
    <table class="table fs-3">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Fecha Muerte</th>
                <th>Web Oficial</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $integrantes):
            ?>
            <tr>
                <td><?php echo $integrantes['nombre'].' '.$integrantes['apellido'];?></td>
                <td><?php echo $integrantes['fecha_nacimiento'];?></td>
                <td><?php echo $integrantes['fecha_muerte'];?></td>
                <td><?php echo $integrantes['web_oficial'];?></td>
                <td><?php echo $integrantes['pais_nacimiento'];?></td>
                <td>
                    <a class="btn btn-outline-danger" href="<?=base_url('eliminar_integrante/').$integrantes['integrante_id']?>">Eliminar</a>
                    <a class="btn btn-outline-info" href="<?=base_url('actualizar_integrante/').$integrantes['integrante_id']?>">Actualizar</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
