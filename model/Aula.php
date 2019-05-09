<?php include('./model/head.php') ?>


<div class="container">
    <h3>Aula</h3>
    <p class="lead">Llene el formulario con los datos del aula</p>

    <div class="col-md-6">
        <form action="../php/procesar.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="numero-aula">Numero de aula</label>
                <input type="text" class="form-control" id="numero-aula" name="numero-aula" maxlength="50" placeholder="Ingrese el numero de aula" required>
            </div>

            <div class="form-group">
                <label for="capacidad">Capacidad</label>
                <input type="number" class="form-control" id="capacidad" name="capacidad" min="1" max="50" placeholder="Ingrese la capacidad" required>
            </div>


            <button type="submit" name="submit-aula" class="btn btn-outline-dark">Enviar</button>

        </form>
    </div>

</div>