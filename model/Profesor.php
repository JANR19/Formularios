<?php include('./model/head.php') ?>


<div class="container">
    <h3>Profesores</h3>
    <p class="lead">Llene el formulario con los datos del profesor</p>

    <div class="col-md-6">
        <form action="../php/procesar.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" class="form-control" id="clave" name="clave" pattern=".{1,6}" placeholder="Ingrese la clave" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" pattern=".{2,200}" placeholder="Ingrese nombre completo del profesor" required>
            </div>

            <div class="form-group">
                <label for="estado-civil">Estado civil</label>
                <select class="form-control" name="estado-civil" id="estado-civil" required>
                    <option value="soltero">Soltero/a</option>
                    <option value="casado">Casado/a</option>
                </select>
            </div>

            <div class="form-group">
                <label for="curriculum">Foto</label>
                <input type="file" class="form-control" id="curriculum" name="curriculum" placeholder="Agregar curriculum" required>
            </div>



            <button type="submit" name="submit-profesor" class="btn btn-outline-dark">Enviar</button>

        </form>
    </div>

</div>