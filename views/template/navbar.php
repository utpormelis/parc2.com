<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if(isset($_SESSION["usuario"])) { ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" <?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("inicio").""?>">Productos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comentario
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear").""?>">Crear Comentario</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        
            <form action="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("buscar_productos")?>" class="d-flex" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="id_producto">
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php } ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION["usuario"])){?>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION["nombre"] ?>
                    </a>

                    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion").""?>">Cerrar Sesion</a></li>
                    </ul>
                </li>
                <?php }else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login").""?>" tabindex="-1">Login</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>