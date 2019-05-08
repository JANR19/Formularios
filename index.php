<?php include("./model/head.php") ?>

<body style="background: #f7f7f7;">

    <div class="container-fluid">
        <div class="row my-5">
            <div class="col">
                <div class="header text-center">
                    <p class="display-3"> Practica de Formularios </p>
                    <p class="display-4"> ¡Toda esta listo!, puedes iniciar </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">

        <!-- Formulario Alumnos -->
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Formulario de alumnos
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php include('./model/Alumno.php') ?>
                    </div>
                </div>
            </div>

            <!-- Formulario Profesores -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Formulario de profesores
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php include('./model/Profesor.php') ?>
                    </div>
                </div>
            </div>

            <!-- Formulario Aulas -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Formulario de aulas
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php include('./model/Aula.php') ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Listado de alumnos, profesores y aulas
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">

                        <a class="btn btn-outline-dark my-3" href="#" role="button"> Ver listados </a>

                    </div>
                </div>
            </div>

        </div>


    </div> <!-- .container -->



    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>
</body>



</html>