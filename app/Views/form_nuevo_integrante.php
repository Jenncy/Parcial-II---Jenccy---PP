<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Integrante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: gainsboro;">
    <br><br>
    <div
        style="background-color: white; margin: auto; border: 1px solid black; padding: 1px; width: 600px; border-radius: 10px; text-align: center;"
        class="fs-1">
        
        <h1>Nuevo Integrante</h1>
        <form action="<?php echo base_url('guardar_integrante')?>" method="post">
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label><br>
                <input type="text" name="txtNombre" id="txtNombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label><br>
                <input type="text" name="txtApellido" id="txtApellido" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="txtFechaNac" class="form-label">Fecha de nacimiento</label><br>
                <input type="date" name="txtFechaNac" id="txtFechaNac" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="txtFechaMuerte" class="form-label">Fecha de Muerte</label><br>
                <input type="date" name="txtFechaMuerte" id="txtFechaMuerte" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="txtWeb" class="form-label">Web Oficial</label><br>
                <input type="text" name="txtWeb" id="txtWeb" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="txtPais" class="form-label">País de Nacimiento</label><br>
                <input type="text" name="txtPais" id="txtPais" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-outline-dark btn-lg">Guardar cambios</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script><br>
    </div>




</body>

</html>