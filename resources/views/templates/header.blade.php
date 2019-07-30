

<!-- MENU Start -->
<div class="navbar-custom">
    <div class="container-fluid">

        <div id="navigation">

            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li @click="menu=0" class="has-submenu">
                    <a href="#"><i class="icon-accelerator"></i> Inicio</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-todolist-check"></i> Asistencia <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                        
                    <ul class="submenu">
                        <li @click="menu=1">
                            <a href="#"><i class="icon-todolist-add mr-2"></i>Marcar Asistencia</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="icon-key"></i> Generar Asistencia</a>
                            <ul class="submenu">
                                <li @click="menu=2"><a href="#"><i class="icon-paper-sheet"></i> Cursos</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-life-buoy"></i> Gestion <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=4">
                           <a href="#"> Usuarios </a>
                        </li>
                        <li @click="menu=5">
                           <a href="#"> Profesores </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="icon-key"></i>Usuarios</a>
                            <ul class="submenu">
                                <li @click="menu=6" ><a href="#"><i class="icon-paper-sheet"></i> Cursos</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->
