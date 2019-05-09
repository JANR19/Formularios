<?php include('./model/head.php'); ?>
<div class="container">

    

    <h3>Alumnos</h3>
    <p class="lead">Llene el formulario con los datos del estudiante</p>

    <div class="col-md-6">
        <form action="../php/procesar.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <small id="emailHelp" class="form-text text-muted">Siempre se cuidadoso con tu correo electrónico</small>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-z]+{2,200}" placeholder="Nombre" required>
            </div>

            <div class="form-group">
                <label for="carnet">Numero de carnet</label>
                <input type="text" class="form-control" id="carnet" name="carnet" pattern=".{1,10}" placeholder="Carnet" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" min="15" max="50" placeholder="Edad" required>
            </div>

            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="number" class="form-control" id="curso" name="curso" min="1" max="5" placeholder="Curso" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" placeholder="Ingrese una foto" required>
            </div>

            <button type="submit" name="submit-alumno" class="btn btn-outline-dark">Enviar</button>

        </form>
    </div>

</div>