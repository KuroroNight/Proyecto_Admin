<?php
//Comienza la sesión
session_start();


//Verifica si la sesión del usuario fue cerrada
if(isset($_SESSION['id_user'])){
    $id_user=$_SESSION['id_user'];
    $nombre_user=$_SESSION['nombre_user'];
    $nombre_usuario=$_SESSION['nombre_empleado'];

}else{
    $ruta='/Proyecto_Admin/main/';
    header("location:{$ruta}index.php");
}

/*
function verificarSesion($ruta = ''){
    if ((empty($_SESSION['id_usuario']))) {
        header("location: {$ruta}index.php");
    }
}
*/
//
define('PAGE_TITLE', 'Administracion');

function getSidebar($ruta = '')
{
    $html = '';

    $ruta = RUTA_INCLUDE;
    $html = <<<E0D
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{$ruta}main/Inicio.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
    
            <!---Este pedo es para las paginas Index de Hardware y Electrica, si es que se necesita mostrar toda la informacion -->
            
            <li class="nav-item">
                    <a class="nav-link" href="{$ruta}main/Categoria/index.php">
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Tabla de Categorias</span></a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="{$ruta}main/hardware/index.php">
                    <i class="fas fa-fw fa-tablet"></i>
                    <span>Tabla de dispositivos</span></a>
            </li>
            
            <li class="nav-item">
                    <a class="nav-link" href="{$ruta}main/area/index.php">
                    <i class="fas fa-fw fa-tablet"></i>
                    <span>Tabla de las areas</span></a>
            </li>
            
            <li class="nav-item">
                    <a class="nav-link" href="{$ruta}main/rol/index.php">
                    <i class="fas fa-fw fa-atlas"></i>
                    <span>Tabla de los roles</span></a>
            </li>
            
            <li class="nav-item">
                    <a class="nav-link" href="{$ruta}main/Usuarios/index.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Tabla de los usuarios</span></a>
            </li>
  
         <!---Esto es lo de las carpetas para que se vea ordenada la Informacion -->
           
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Software</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Software:</h6>
                        <a class="collapse-item" href="{$ruta}main/software/index.php">Tabla con los Softwares</a>                        
                    </div>
                </div>
            </li>
            
            
            <!--Esto es lo tuyo Alex para que le agregues los necesarios o me avises-->
            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Empleados</span>
                </a>
                <div id="collapsePages2" class="collapse " aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Empleados:</h6>
                        <a class="collapse-item" href="{$ruta}main/Empleados/index.php">Empleados</a>
                    </div>
                </div>
            </li>
            
            <!--Termina el orden de las carpetas -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
E0D;
    echo $html;
}

function getNavbar($ruta = '')
{
    $html = '';
    $ruta = RUTA_INCLUDE;
    $html = <<<E0D
<!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-blue  static-top ">
                                        <a class="navbar-brand mr-1" href="{$ruta}main/Inicio.php">Administracion</a>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{$ruta}main/perfil/index.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{$ruta}index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->
E0D;
    echo $html;
}

function getFooter()
{
    $html = <<<E0D
                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
E0D;
    echo $html;
}

function getModalLogout()
{
    $ruta = RUTA_INCLUDE;
    $html = <<<E0D
<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{$ruta}main/index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
E0D;
    echo $html;
}

function getTopIncludes($ruta = '')
{
    $html = <<<E0D
    <!-- Custom fonts for this template-->
    <link href="{$ruta}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{$ruta}css/sb-admin-2.min.css" rel="stylesheet">
E0D;
    echo $html;
}

function getBottomIncudes($ruta = '')
{
    $html = <<<E0D
    <!-- Bootstrap core JavaScript-->
    <script src="{$ruta}vendor/jquery/jquery.min.js"></script>
    <script src="{$ruta}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{$ruta}vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{$ruta}js/sb-admin-2.min.js"></script>

E0D;
    echo $html;
}


?>

