<?php
function menu() {
  $html = '<nav>
            <div id="header">          
              <ul class="bar">
                <li>
                  <a><i class="fas fa-bars"></i></a>          
                  <ul class="nav">
                    <li><a href="inicio.php">Inicio</i></a></li>
                    <li>
                      <a>Servicios</a>
                      <ul>
                        <li><a href="#">Venta</a></li>
                        <li><a href="#">Colocación</a></li>
                        <li><a href="#">Reparación</a></li>
                        <li>
                          <a>Pedidos</a>
                          <ul>
                            <li><a href="altaUsuario.php?op=m">Crear Usuario</a></li>
                            <li><a href="listadoUsuarios.php">Listado de Usuarios</a></li>
                            <li><a href="listadoPedidos.php">Listado de Pedidos</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>Acerca de</a>
                      <ul>
                        <li><a href="#nosotros">Nosotros</a></li>
                        <li><a href="#historia">Historia</a></li>
                        <li><a href="#mision">Nuestra Misión</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="logout.php">Salir</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>';
  
  return $html;
}

function menu_bs($active) {
  $html = '<nav class="navbar navbar-expand-md navbar-light bg-warning fixed-top" aria-label="navBar">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio.php">PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                        </li>                        
                        <li class="nav-item dropdown multi-level-dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" navbar href="#">Venta</a></li>
                                <li><a class="dropdown-item" navbar href="#">Colocación</a></li>
                                <li><a class="dropdown-item" navbar href="#">Reparación</a></li>
                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Pedidos</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                        <li><a class="dropdown-item '.($active == 'a'? 'active':'').'" navbar href="altaUsuario.php?op=m">Crear Usuario</a></li>
                                        <li><a class="dropdown-item '.($active == 'u'? 'active':'').'" href="listadoUsuarios.php">Lista de Usuarios</a></li>
                                        <li><a class="dropdown-item '.($active == 'p'? 'active':'').'" href="listadoPedidos.php">Lista de Pedidos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">Acerca de</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="inicio.php#nosotros">Nosotros</a></li>
                                <li><a class="dropdown-item" href="inicio.php#historia">Historia</a></li>
                                <li><a class="dropdown-item" href="inicio.php#mision">Nuestra Misión</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>';
  
  return $html;
}
