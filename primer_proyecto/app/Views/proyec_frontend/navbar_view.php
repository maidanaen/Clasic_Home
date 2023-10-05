<!--barra de navegacion-->
<?php
    $session=session();
    $nombre= $session->get ('nombre');
    $perfil= $session->get ('perfil_id');
?>
<nav class="navbar navbar-expand-lg  fondo_nav">
            <div class="container-fluid ">
                <a class="navbar-brand cont_nav" href="<?php echo base_url('inicio')?>">
                    <img src="assets\imagenes\logoEmpresa\logoTipo.jpg" class="logo_nav" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--barra de navegacion admin-->
                <?php if(session()->perfil_id == 1):?>
                    <div class="btn btn-secondary active btnUser btn-sm">
                        <a href="">ADMIN:<?php echo session('nombre');?> </a>
                    </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo">Catalogos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1">Cerrar Sesion</a>
                    </li>
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">buscar</button>
                    </form>
                </div>
                    <!--barra de cliente-->
                <?php elseif(session()->perfil_id == 2):?>
                <div class="btn btn-secondary active btnUser btn-sm">
                        <a href="">CLIENTE:<?php echo session('nombre');?> </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo">Catalogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos">Sobre Nosotros </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1">Cerrar Sesion</a>
                    </li>
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">buscar</button>
                    </form>
                </div>
                <?php else:?>
                    <!--barra de navegacion general-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo">Catalogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos">Sobre Nosotros </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro">Registrarse</a>
                    </li>
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">buscar</button>
                    </form>
                    <?php endif;?>
                </div>
            </div>
</nav>