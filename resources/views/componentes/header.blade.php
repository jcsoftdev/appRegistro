

    

<!-- MENU Start -->
<div class="navbar-custom">
    <div class="container-fluid">

        <div id="navigation">

            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li @click="menu=0" class="has-submenu">
                    <a href="#"><i class="icon-accelerator"></i> Escritorio</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-todolist-check"></i> Registrar asistencia <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=1">
                            <a href="#"><i class="icon-todolist-add mr-2"></i>Docente</a>
                        </li>
                        <li @click="menu=2">
                            <a href="#"><i class="icon-todolist-add mr-2"></i>Alumno</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-life-buoy"></i> Consultar Asistencia <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=3">
                           <a href="#"> Docente </a>
                        </li>

                        <li @click="menu=4">
                           <a href="#"> Estudiante </a>
                        </li>
                        
                        
                    </ul>
                </li>
                
                <li class="has-submenu">
                    <a href="#"><i class="icon-diamond"></i> Gestionar <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">

                        <li @click="menu=5">
                            <a href="#"> Registrar Persona </a>
                        </li>
                        <li @click="menu=6">
                           <a href="#">  Registrar Docente</a>
                        </li>
                        <li @click="menu=7">
                           <a href="#"> Registrar Estudiante </a>
                        </li>
                        <li @click="menu=8">
                           <a href="#"> Registrar Apoderado </a>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-paper-sheet"></i> Horario <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=9">
                           <a href="#"> Docentes </a>
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



