<style>
    /* Estilo para la barra de navegación */
.navbar {
    background-color: #383e52;
    color: #fff;
}

.titulo{
    color: #fff;
    font-size: 30px;
}
/* Estilo para el logotipo */
.navbar-brand .navbar-item img {
    margin-right: 10px;
}

/* Estilo para los enlaces del menú */
.navbar-item {
    color: #fff;
    
    
   
}

/* Estilo para el botón de menú en dispositivos móviles */
.navbar-burger {
    color: #fff;
}

/* Estilo para los enlaces desplegables */
.navbar-dropdown {
    background-color: #383e52;
    transition: 3s;
}

/* Estilo para los botones en el extremo derecho */
.buttons .button {
    margin-right: 10px;
}

/* Estilo para los botones de "Mi cuenta" y "Salir" */
.buttons .button.is-rounded {
    border-radius: 20px;
}

.navbar-link {
    color: #ffffff;
    text-decoration-color: #ffffff;
    background-color: #383e52;
    
}

.navbar-link:hover {
    color: #383e52;
    
}



</style>

<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <h1 class="navbar-item titulo" href="index.php?vista=home"><b>
        Comercial mely
</b></h1>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <!--<div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                </div>
            </div>-->

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=category_new" class="navbar-item">+ Agregar Categoria</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Categorias</a>
                    <!--<a href="index.php?vista=category_search" class="navbar-item">Buscar</a>-->
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_search" class="navbar-item">🔍︎ Buscar Producto </a>
                    <a href="index.php?vista=product_new" class="navbar-item">+ Agregar producto</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Productos disponibles</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Productos por categoría</a>
                    
                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-secondaty is-rounded">
                    Mi cuenta<script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/kthelypq.json"
    trigger="in"
    delay="1500"
    state="loop-account"
    style="width:40px;height:40px">
</lord-icon>
                    </a>

                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
<br>