
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCitas - Panel Administrativo</title>

    <!-- Estilos de SB Admin 2 -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- MENÚ LATERAL -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MediCitas</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel principal</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Gestión médica</div>

            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pacientes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cards.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="blank.php">
                    <i class="fas fa-fw fa-calendar-plus"></i>
                    <span>Agendar Cita</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-file-medical"></i>
                    <span>Historial Clínico</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Citas Médicas</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- FIN MENÚ LATERAL -->


        <!-- CONTENIDO PRINCIPAL -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- BARRA SUPERIOR -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop"
                        class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <span class="h5 mb-0 text-gray-800">
                        Sistema de Gestión de Citas Médicas
                    </span>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Administrador
                                </span>
                                <i class="fas fa-user-circle fa-2x text-primary"></i>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- FIN BARRA SUPERIOR -->


                <!-- CONTENIDO DEL DASHBOARD -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            Panel de Administración Médica
                        </h1>
                    </div>

                    <p class="mb-4">
                        Bienvenido a MediCitas, el sistema de administración
                        de pacientes, doctores y citas médicas.
                    </p>


                    <!-- TARJETAS DE ESTADÍSTICAS -->
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pacientes registrados
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                250
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Doctores disponibles
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                18
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Citas programadas
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                45
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Citas pendientes
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                12
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- FIN TARJETAS -->


                    <!-- TABLA DE CITAS -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Próximas citas médicas
                            </h6>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Paciente</th>
                                            <th>Doctor</th>
                                            <th>Especialidad</th>
                                            <th>Fecha</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>María Rodríguez</td>
                                            <td>Dr. Carlos Pérez</td>
                                            <td>Cardiología</td>
                                            <td>08/11/2026</td>
                                            <td><span class="badge badge-success">Confirmada</span></td>
                                        </tr>

                                        <tr>
                                            <td>Juan Martínez</td>
                                            <td>Dra. Ana Gómez</td>
                                            <td>Pediatría</td>
                                            <td>09/11/2026</td>
                                            <td><span class="badge badge-warning">Pendiente</span></td>
                                        </tr>

                                        <tr>
                                            <td>Laura Sánchez</td>
                                            <td>Dr. Pedro Díaz</td>
                                            <td>Dermatología</td>
                                            <td>10/11/2026</td>
                                            <td><span class="badge badge-success">Confirmada</span></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>
                    </div>
                    <!-- FIN TABLA -->


                </div>
                <!-- FIN CONTENIDO -->

            </div>


            <!-- PIE DE PÁGINA -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            Copyright &copy; MediCitas 2026
                            | Sistema de Gestión Médica
                        </span>
                    </div>
                </div>
            </footer>

        </div>

    </div>


    <!-- SCRIPTS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
