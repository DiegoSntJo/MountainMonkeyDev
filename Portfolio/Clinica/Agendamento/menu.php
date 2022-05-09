<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
    }
    include ("classe/usuarios.php");

    $consulta = "SELECT * FROM usuarios";
    $con = $mysqli->query($consulta) or die($mysqli->error);

    if (!empty($_GET["id_usuario"])){
        $res = mysqli_query($db_conec, "SELECT * FROM usuarios WHERE id_usuario= " . $_GET["id_usuario"]);
        $linha = mysqli_fetch_row($res);
        $nome = $linha[4];
        $codigo = $linha[0];
        $data = $linha[3];
        $telefone = $linha[2];
    }else{
        $nome = "";
        $codigo = "";
        $data = "";
        $telefone = "";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> BemEstar - Cuidando do seu bem estar ! </title>
        <link rel="icon" href="img/icon.png">
    	<meta name="author" content="Diego Santos">
        <!-- MATERIALIZE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    	<!-- CSS -->
        <link rel="stylesheet" href="../css/menu.css">
        <!-- FONT AWESOME -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    </head>

    <script>
        function sair(){
            res = confirm("Tem certeza que deseja sair ?");
            if(res){
                window.location = "../sair.php";
            }
        }

    </script>

    <body>
        <!-- CABEÇALHO --> 
        <header>
            <!--MENU MOBILE-->
            <ul class="sidenav" id="menu-mobile">
                <li><input type="button" class="sidenav-close btn-sair" value="Sair" onclick="sair()"></li>
            </ul>

            <div class="navbar">
                <nav class="navbar z-depth-0">
                    <div class="nav-wrapper container">
                        <a href="menu.php"><h1 class="logo"> BemEstar - Cuidando do seu bem estar ! </h1></a>
                        
                        <ul class="right light hide-on-med-and-down">
                            <li><input type="button" class="sidenav-close btn-sair" value="Sair" onclick="sair()"></li>
                        </ul>

                        <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
        </header>
    
        <!-- MENU --> 
        <main class="servicos containers">
            <!-- SERVICOS-->
            <section class="servicos bloco scrollspy" id="servicos">
                <div class="row container">
                    <div class="col s12 center">
                        <h2 class="light titulo black-text">O que deseja realizar ?</h2>
                        <p class="light paragrafo black-text">Agende ou pesquise uma consulta.</p>
                    </div>
                </div>
                <br>
            
                <div class="row container">
                    <!--AGENDAR-->
                    <article class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-image">
                                <img src="../img/agend.jpg" alt="Agendar" class="materialboxed">
                                <a href="agendar.php" class="btn btn-floating halfway-fab blue-logo modal-trigger">
                                    <i class="material-icons">add</i>
                                </a>
                            </div>

                            <div class="card-content">
                                <h3 class="card-title"> Agendar </h3>
                                <p class="light">Agende sua consulta presencial ou online, efetue o pagamento totalmente online sem nenhuma dor de cabeça.</p>
                            </div>
                        </div>
                    </article>

                    <!--MODAL PESQUISA-->
                    <div class="modal" id="pilates-modal">
                        <div class="modal-content">
                            <h5 class="light">O que é pilates ?</h5>
                            <p class="light black-text">Lorem ipsum dolor sit amet.</p>
                        </div>

                        <div class="modal-footer">
                            <a class="btn blue-logo modal-action modal-close">Sair</a>
                        </div>
                    </div>

                    <!--PESQUISAR-->
                    <article class="col s12 m6 l6">
                        <div class="card">
                            <div class="card-image">
                                <img src="../img/search.jpg" alt="Pesquisar" class="materialboxed">
                                <a href="#funcional-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
                                    <i class="material-icons">search</i>
                                </a>
                            </div>

                            <div class="card-content">
                                <h3 class="card-title"> Pesquisar </h3>
                                <p class="light">Pesquise sua consulta presencial ou online, efetue o pagamento totalmente online sem nenhuma dor de cabeça.</p>
                            </div>
                        </div>
                    </article>

                    <!--MODAL FUNCIONAL-->
                    <div class="modal" id="funcional-modal">
                        <div class="modal-content">
                        <h5 class="light">Pesquisar consulta</h5>
                            <script>
                                function excluir(codigo){
                                    res = confirm("Tem certeza que deseja excluir este compromisso ?");
                                    if(res){
                                        window.location = "excluir.php?id_usuario=" + codigo;
                                    }
                                }
                                function alterar(codigo, senha){
                                    window.location = "agendar.php?id_usuario=" + codigo;
                                }
                            </script>
                            <?php
                                $query = "SELECT * FROM usuarios";
                                $res = mysqli_query($db_conec,$query);
                            ?>

                            <form name="consulta" action="agendar.php">
                                <table class="striped responsive-table">
                                    <tr>
                                        <td>Hora</td>
                                        <td>Consulta</td>
                                        <td>Data da Consulta</td>
                                        <td>Editar</td>
                                        <td>Excluir</td>
                                    </tr>
                                    <?php
                                        while ($linha = mysqli_fetch_row($res)){
                                            $d = explode(" ", $linha[3]);
                                            $data = explode("-", $d[0]);
                                            echo "<tr>";
                                            echo "<td id='idd'>" . $linha[2] . "</td>";
                                            echo "<td id='comp'>" . $linha[4] . "</td>";
                                            echo "<td id='dt'>$data[2]-$data[1]-$data[0]</td>";
                                            echo "<td id='ed'><input type='button' class='tab-edit' onclick='alterar($linha[0])' value='Editar'></td>";
                                            echo "<td id='ex'><input type='button' class='tab-delet' value='Excluir' onclick='excluir($linha[0])'></td>"; 
                                            echo "</tr>";
                                        }
                                        //$d = explode(" ", $linha['datadecadastro']);
		                                //$data = explode("-", $d[0]);
		                                //echo "$data[2]/$data[1]/$data[0] às $d[1]";
                                    ?>
                                </table>
                            </form>

                        </div>

                        <div class="modal-footer">
                            <a class="btn blue-logo modal-action modal-close">Voltar</a>
                        </div>
                    </div>
                </div>

                <section class="servicos bloco scrollspy" id="servicos">
                    <div class="row container">
                        <div class="col s12 center">
                            <h2 class="light titulo black-text">Confira nosso planos parceiros.</h2>
                            <p class="light paragrafo black-text">Verifique os nossos planos de saúde parceiros, com o melhor desconto pra você.</p>
                        </div>
                    </div>
                    <br>             

                    <!--BOTÃO PLANOS-->
                    <div class="row center btn-planos">
                        <a href="#horarios-modal" class="btn btn-large blue-logo modal-trigger">Planos</a>
                    </div>

                    <!--MODAL PLANOS DE SAÚDE-->
                    <div class="modal" id="horarios-modal">
                        <div class="modal-content">
                            <h5 class="light">Planos de saúde</h5>

                            <ul class="tabs">
                                <li class="tab col s3"><a class="active" href="#tabela-primavera">Primavera</a></li>
                                <li class="tab col s3"><a href="#tabela-dentis">DentisClean</a></li>
                                <li class="tab col s3"><a href="#tabela-ortoped">Ortoped</a></li>
                                <li class="tab col s3"><a href="#tabela-hapvida">Hapvida</a></li>
                            </ul>

                            <!--TABELA PRIMAVERA-->
                            <table class="striped responsive-table" id="tabela-primavera">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Preço</th>
                                        <th>Dentista</th>
                                        <th>Oftamologista</th>
                                        <th>Checkup</th>
                                        <th>Ortopedista</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>600,00</td>
                                        <td>OK</td>
                                        <td>OK</td>
                                        <td>OK</td>
                                        <td>OK</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!--TABELA DENTISTA-->
                            <table class="striped responsive-table" id="tabela-dentis">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Preço</th>
                                        <th>Dentista</th>
                                        <th>Oftamologista</th>
                                        <th>Checkup</th>
                                        <th>Ortopedista</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>80,00</td>
                                        <td>OK</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!--TABELA ORTOPEDISTA-->
                            <table class="striped responsive-table" id="tabela-ortoped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Preço</th>
                                        <th>Dentista</th>
                                        <th>Oftamologista</th>
                                        <th>Checkup</th>
                                        <th>Ortopedista</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>150,00</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>OK</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!--TABELA HAPVIDA-->
                            <table class="striped responsive-table" id="tabela-hapvida">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Preço</th>
                                        <th>Dentista</th>
                                        <th>Oftamologista</th>
                                        <th>Checkup</th>
                                        <th>Ortopedista</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>650,00</td>
                                        <td>OK</td>
                                        <td>OK</td>
                                        <td>OK</td>
                                        <td>OK</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="modal-footer">
                            <a class="btn blue-logo modal-action modal-close">Voltar</a>
                        </div>
                    </div>
                </section>
            </section>
        </main>

        

        <!-- RODAPÉ -->
        <footer class="rodape containers bg-gradient">
          <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <p class="copyright"> Copyright © 2021. Todos os direitos reservados. </p>
        </footer>       
        
        <!--GOOGLE ICONS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- MATERIALIZE JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- JAVASCRIPT -->
        <script>
            $(document).ready(function(){
                $(".btn-menu").click(function(){
                    $(".menu").show();
                });

                $(".btn-close").click(function(){
                    $(".menu").hide();
                });
        
                // MENU MOBILE
                $('.sidenav').sidenav();
                // LINK INTERNO
                $(".scrollspy").scrollSpy({
                    scrollOffset: 0
                });
                //CAROUSEL
                $(".carousel.carousel-slider").carousel({fullWidth: true});
                });
                // MODAL
                $(".modal").modal();
                // MODAL AUTOMATICO

                // TABS
                $("ul.tabs").tabs();
                // SELECT
                $(document).ready(function(){
                    $('select').formSelect();
                });
                //AUTOPLAY
                $('.carousel').carousel({    
                });
                autoplay();
                function autoplay() {
                    $('.carousel').carousel('next');
                    setTimeout(autoplay, 4000);
                }
                // AMPLIAR
                $(document).ready(function(){
                    $('.materialboxed').materialbox();
                });
                // ADICIONANDO NAVCOLOR
                $(window).on("scroll",function(){
                    if($(window).scrollTop() > 100) {
                        $(".navbar").addClass("nav-color");
                    }else{
                        $(".navbar").removeClass("nav-color");
                    }
            });
        </script>
    </body>
</html>