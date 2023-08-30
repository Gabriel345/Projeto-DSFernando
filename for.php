<?php include"cabecalho.php";?>
    <div id="container">
        <nav id="menu">

            <ul class="nav">
                <a href="./index.php">
                    <li id="logo">Logo</li>
                </a>
                <li> <a href="./index.php">Home</a> </li>
                <li><a href="./contato.php">Contato</a></li>
                <li><a href="./Sobre.php">Sobre</a></li>
                <li><a href="./galeria.php">Galeria</a></li>
            </ul>
        </nav>
        <aside id="sidebar">
            <nav id="barra-lateral">
                <ul class="nav-lateral">
                    <a href="./if.php">
                        <li>If</li>
                    </a>
                    <a href="./while.php">
                        <li>While</li>
                    </a>
                    <a href="./for.php">
                        <li>For</li>
                    </a>
                    <a href="./function.php">
                        <li>Function</li>
                    </a>
                    <a href="variable.php">
                        <li>Variable</li>
                    </a>
                </ul>
            </nav>
        </aside>
        <div id="conteudo">
            <h1>Laço de repetição</h1>
            <p>O forloop - percorre um bloco de código um determinado número de vezes.</p>
            <ol>
                <li>contador de inicialização : inicializa o valor do contador de loop</li>
                <li>contador de teste : avaliado para cada iteração do loop.
                    Se for avaliado como TRUE,
                    o loop continua. Se for avaliado como FALSE, o loop termina.</li>
                <li>contador de incremento : Aumenta o valor do contador de loop</li>
            </ol>
            <?php include"rodape.php";?>

        