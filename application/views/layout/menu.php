    <body>
        <div class="cl-wrapper">
            <div class="cl-sidebar">
                <div class="cl-toggle">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="cl-navblock" style="width: 220px">
                    <div class="menu-space">
                        <div class="content">
                            <div class="sidebar-logo">
                                <div class="logo">
                                    
                                </div>
                            </div>
                        </div>
                        <ul class="cl-vnavigation">
                            <li><a href="/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> Maestros</a>
                                <ul class="sub-menu">
                                    <li><a href="/articulos/">Artículos</a></li>
                                    <li><a href="/fabricas/">Fábricas</a></li>
                                    <li><a href="/insumos/">Insumos</a></li>
                                    <li><a href="/monedas/">Monedas</a></li>
                                    <li><a href="/productos/">Productos</a></li>
                                    <li><a href="/proveedores/">Proveedores</a></li>
                                    <li><a href="/provincias/">Provincias</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-gears"></i> Producción</a>
                                <ul class="sub-menu">
                                    <li><a href="/ots/">Órdenes de Trabajo</a></li>
                                    <li><a href="/pedidos/">Pedidos</a></li>
                                    <li><a href="/rfqs/">RFQ's</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-dollar"></i> Compras</a>
                                <ul class="sub-menu">
                                    <li><a href="/ocs/">Órdenes de Compra</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid" id="pcont" style="width: 100%">
                <div id="head-nav" class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right user-nav">
                                <li class="dropdown profile_menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$session['nombre']?> <?=$session['apellido']?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Perfil</a></li>
                                        <li><a href="/usuarios/logout/">Salir</a></li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                
                <div class="cl-mcont">
                    
                    