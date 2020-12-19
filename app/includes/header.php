    <header>
        <div id="logo">
            LOGO
        </div>
        <button class="btn-toggle" onclick="navbar('nav')">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <nav id="nav" >
            <ul>
                <li><a href="cadastro-noticia.php">CADASTRAR NOTÍCIAS</a></li>
                <li><a href="index.php">EXÍBIR NOTÍCIAS</a></li>
                <li><a href="cadastro-categoria.php">CADASTRAR CATEGORIA</a></li>  
                <form action="index.php" method="GET">
                    <input id="input-busca" type="text" name="busca" placeholder="Pesquisar por título">
                    <button id="btn-search"type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </ul>
        </nav>
    </header>