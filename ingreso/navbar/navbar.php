<link href="css/style.css" rel="stylesheet">
<style>
  #submenuProyectos {
    padding-left: 5px;  /* Reduce el espacio hacia la derecha */
}

#submenuProyectos li {
    margin-left: -10px; /* Ajusta la posición de los ítems */
}

#submenuProyectos a {
    display: block;
    padding: 8px 10px;
    color: #ffffff; /* Ajusta el color según tu diseño */
    text-decoration: none;
}

#submenuProyectos a:hover {
    background-color: #1a252f; /* Color al pasar el mouse */
    border-radius: 5px;
}

</style>
<nav id="sidebar" class="active">
    <h1><a href="dashboard.php" class="logo"><img src="images/logo.png"/></a></h1>
    <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="dashboard.php"><span class="fa fa-home"></span> Inicio</a>
        </li>
        <li>
            <a href="cliente.php"><span class="fa fa-user-plus"></span> Ingreso Clientes</a>
        </li>
        <li>
            <a href="Listado_Cliente.php"><span class="fa fa-list"></span> Listado Clientes</a>
        </li>
        <li>
            <a href="Listado_Roles.php"><span class="fa fa-product-hunt"></span> Listado Roles</a>
        </li>
        <li>
            <a href="#submenuProyectos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <span class="fa fa-search-plus"></span> Vista de Proyectos
            </a>
            <ul class="collapse list-unstyled" id="submenuProyectos">
                <li>
                    <a href="Vista_Regularizacion.php"><span class="fa fa-folder-open"></span> Vista Regularización</a>
                </li>
                <li>
                    <a href="Ingreso_Fusion.php"><span class="fa fa-users"></span> Vista Fusión</a>
                </li>
                <li>
                    <a href="Ingreso_subdivicion.php"><span class="fa fa-exchange"></span> Vista Subdivisión</a>
                </li>
            </ul>
        </li>
        <!-- Submenú de Gestión de Proyectos -->
        <li>
            <a href="#submenuProyectos1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <span class="fa fa-tasks"></span> Gestión de Proyectos
            </a>
            <ul class="collapse list-unstyled" id="submenuProyectos1">
                <li>
                    <a href="Ingreso_Proyecto.php"><span class="fa fa-folder-open"></span> Ingreso Regularización</a>
                </li>
                <li>
                    <a href="Ingreso_Fusion.php"><span class="fa fa-users"></span> Ingreso Fusión</a>
                </li>
                <li>
                    <a href="Ingreso_subdivicion.php"><span class="fa fa-exchange"></span> Ingreso Subdivisión</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="footer">
        <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
            All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> 
            by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
        </p>
    </div>
</nav>
