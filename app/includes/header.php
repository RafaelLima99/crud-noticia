    <header>
        <div id="logo">
            LOGO
        </div>
        <button class="btn-toggle" onclick="navbar('nav')">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <nav id="nav" >
            <ul>
                <li><a href="cadastro.php">CADASTRAR NOTÍCIAS</a></li>
                <li><a href="index.php">EXÍBIR NOTÍCIAS</a></li>  
                <form action="index.php" method="GET">
                    <input id="input-busca" type="text" name="busca" placeholder="pesquisar por titulo">
                    <button id="btn-search"type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </ul>
        </nav>
    </header>