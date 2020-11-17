<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>TipCash</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/@mq-small.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/500b73534a.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    </head>

    <body class="container col-12 m-0 p-0">
        
        <!-- Header -->

        <section class="siteSection header no-select" data-parallax="scroll" data-image-src="img/header2.jpg">
           
           <!-- Navbar -->

            <nav class="navbar navbar-expand-sm sticky-top navbar-expand-lg navbar-dark py-4">
                <a class="navbar-brand" href="#">TipCash</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#duvida">Duvidas Frequentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cadastroLink" href="empresas.php">Cadastro</a>
                        </li>
                        <a class="btn btn-primary nav-item nav-button" style="width: 150px;" href="download.php" role="button">Baixe o app</a>
                    </ul>
                </div>
            </nav>

            <!-- Header -->
           
            <img class="header-logo" alt="" src="img/header-logo-white(ruim).png">
            <div class="header-logo-title"> TipCash </div>
            <div class="text-header">Conecte-se a qualquer hora, <br> Pague, em qualquer lugar</div>
            <a class="header-button btn btn-primary" href="baixe.php">Baixe o APP</a>
        </section>

        <!-- Introduction -->

        <section class="siteSection intro">
            <h1 class="siteSection-title no-select"> Introdução </h1>
            <h2 class="intro-text">Esse é um projeto desenvolvido por uma equipe de alunos do cotil, colégio técnico da unicamp com o fim de facilitar compras online e presenciais, deixando o usuário mais confortavél e seguro com suas formas de pagamento.</h2>
            
            <div class="obj-item"> 
                <div class="obj-dot" data-radius="50%" data-parallax="scroll" data-image-src="img/gradient8.jfif"></div>
                <label class="obj-text"> Com segurança e respeito com o cliente. </label>
            </div>
            <div class="obj-item odd-item"> 
                <label class="obj-text odd-item"> Facilidade de aprendizado e interface intuitiva. </label>
                <div class="obj-dot" data-radius="50%" data-parallax="scroll" data-image-src="img/gradient4.jpg"></div>
            </div>
            <div class="obj-item"> 
                <div class="obj-dot" data-radius="50%" data-parallax="scroll" data-image-src="img/gradient3.jpg"></div>
                <label class="obj-text"> Robustes para a garantia que suas informações ficaram seguras para os desenvolvedores. </label>
            </div>
            <div class="obj-item odd-item"> 
                <label class="obj-text odd-item"> Um projeto para todos poderem usufruir independente do ambiente ou localização. </label>
                <div class="obj-dot" data-radius="50%" data-parallax="scroll" data-image-src="img/gradient5.jpg"></div>
            </div>
        </section>

        <!-- Questlines -->
        
        <section class="siteSection quests" id="duvida">

            <!-- Perguntas -->

            <h1 class="siteSection-title"> Perguntas Frequêntes </h1>
            
            <div id="quests-question" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="question1">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
                                O que é o TipCash?
                            </a>
                        </h5>
                    </div>
                    <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="question1">
                        <div class="card-body">
                            TipCash é um aplicativo que vai revolucionar sua maneira de se relacionar com dinheiro: agora tudo está ao alcance das suas mãos... deixe as filas pra lá. Pague tudo com o Tip'Cash. Além de poder receber dinheiro, você também realiza pagamentos para outros usuários, estabelecimentos e serviços cadastrados na plataforma, como: pagar boletos, recarregar o celular e comprar crédito de jogos online de maneira prática e segura.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question2">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
                      É seguro?
                    </a>
                        </h5>
                    </div>
                    <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="question2">
                        <div class="card-body">
                            A sua segurança é a nossa prioridade, ninguém tem acesso a seus dados. Todas as informações recebidas pelo aplicativo são criptografadas e armazenadas em servidores seguros, que seguem todas as normas e padrões de segurança de dados PCI. Além de toda essa segurança, os pagamentos são protegidos pela sua senha pessoal — ou sua digital — que é necessária para realizar as transações no Tip'Cash.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question3">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section3ContentId" aria-expanded="true" aria-controls="section1ContentId">
                                Como criar minha conta?
                    </a>
                        </h5>
                    </div>
                    <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="question3">
                        <div class="card-body">
                            É bem fácil: baixe o app e informe o seu CPF, número do celular, e-mail, nome completo e data de nascimento. Só isso! Ah! Crie a sua conta no seu próprio celular, tá bem? Por uma questão de segurança :)
                        </div>
                    </div>
                </div>
            </div>

            <!-- Como Funciona -->

            <h1 class="siteSection-title"> Como o TipCash Funciona </h1>
            
            <div id="quests-question" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="question4">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section4ContentId" aria-expanded="true" aria-controls="section4ContentId">
                                Como faço para pagar?
                    </a>
                        </h5>
                    </div>
                    <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="question4">
                        <div class="card-body">
                            Vamos descomplicar sua vida. Com o Tip'Cash você pode fazer pagamentos no momento que precisar, sem filas, sem espera… e na hora! Você pode pagar a padaria, o supermercado, pagar o amigo do rolê passado e ainda, fazer recargas de celular, do cartão de transporte e até de jogos online. Para fazer isso, você pode adicionar saldo em sua carteira Tip'Cash ou fazer o cadastro de um cartão de crédito. Também é possível retirar o dinheiro do seu app direto para sua conta bancária. #dica: o seu dinheiro na carteira Tip'Cash rende diariamente.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question5">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section5ContentId" aria-expanded="true" aria-controls="section5ContentId">
                      Como adicionar dinheiro na minha conta?
                    </a>
                        </h5>
                    </div>
                    <div id="section5ContentId" class="collapse in" role="tabpanel" aria-labelledby="question5">
                        <div class="card-body">
                            Na carteira do app, toque em “Adicionar”, selecione boleto bancário, transferência ou Banco Original, e siga o passo a passo indicado no app. Conheça os prazos: Transferência via TED: é rapidinho, em até 1 hora útil o valor estará na sua conta Tip'Cash Transferência via DOC: leva um pouco mais de tempo, pedimos até 1 dia útil Adição por boleto: após o pagamento do boleto, o prazo é de 2 dias úteis para entrar na sua conta Tip'Cash Banco Original: é na hora!
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question6">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section6ContentId" aria-expanded="true" aria-controls="section6ContentId">
                                Como cadastrar um cartão de crédito?
                    </a>
                        </h5>
                    </div>
                    <div id="section6ContentId" class="collapse in" role="tabpanel" aria-labelledby="question6">
                        <div class="card-body">
                            Cadastrar um cartão de crédito na sua conta Tip'Cash é simples e rápido. Se você é o próprio titular do cartão, basta abrir o app, ir em “Carteira”, tocar em “Adicionar cartão de crédito”, inserir as informações solicitadas e pronto! Caso o cartão não esteja no seu nome, você também pode cadastrá-lo no app, mas para isso é necessário ter a autorização do titular do cartão, beleza? No momento de inserir as informações, lembre-se que é o CPF e o telefone do titular do cartão de crédito que você precisa cadastrar.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question7">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section7ContentId" aria-expanded="true" aria-controls="section7ContentId">
                                Como pagar uma conta ou boleto?
                    </a>
                        </h5>
                    </div>
                    <div id="section7ContentId" class="collapse in" role="tabpanel" aria-labelledby="question7">
                        <div class="card-body">
                            Para pagar um boleto, basta abrir seu Tip'Cash, tocar em “Pagar”, selecionar a aba “Store” e a opção “Pagar Conta”. É possível quitar seu boleto com o saldo da sua carteira Tip'Cash ou com o cartão de crédito cadastrado no app. Caso decida pelo pagamento com o cartão, você pode parcelar em até 12x ;)
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question8">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section8ContentId" aria-expanded="true" aria-controls="section8ContentId">
                                Como pagar uma pessoa?
                    </a>
                        </h5>
                    </div>
                    <div id="section8ContentId" class="collapse in" role="tabpanel" aria-labelledby="question8">
                        <div class="card-body">
                            Para pagar uma pessoa, você pode: Ler o QR Code: na página inicial do app, toque no ícone no canto superior esquerdo e faça a leitura do código. Simples assim Procurar pelo @nome de usuário: toque no botão verde “Pagar”, e no campo de busca, digite o @nome de usuário. Encontre o perfil e faça o pagamento Usar o link de compartilhamento: você está a três passos do seu pagamento. Após receber o link, toque nele e escolha abrir com o Tip'Cash. Informe o valor e confirme o pagamento Quer gerar o seu link de pagamento? Na página inicial do app, toque no ícone no canto superior esquerdo e selecione a opção “Meu código”. Depois, escolha como compartilhar o link.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question9">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section9ContentId" aria-expanded="true" aria-controls="section9ContentId">
                                Como pagar um estabelecimento?
                    </a>
                        </h5>
                    </div>
                    <div id="section9ContentId" class="collapse in" role="tabpanel" aria-labelledby="question9">
                        <div class="card-body">
                            Pague o rolê com o Tip'Cash. Você pode deixar seu dinheiro em casa e usar uma das opções abaixo para pagar o estabelecimento: Ler o QR Code: caso o local possua uma plaquinha com código QR Code impresso, é só fazer a leitura com o seu app Procurar pela aba “Locais”: toque no botão “Pagar”, selecione a aba “Locais”, encontre o estabelecimento ou digite o nome na busca. Lembre-se de ativar o seu GPS, combinado? Maquininha Cielo: o estabelecimento não tem Tip'Cash? Pague pela Cielo! Quer gerar o seu link de pagamento? Na página inicial do app, toque no ícone no canto superior esquerdo e selecione a opção “Meu código”. Depois, escolha como compartilhar o link.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question10">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section10ContentId" aria-expanded="true" aria-controls="section10ContentId">
                                Store.
                    </a>
                        </h5>
                    </div>
                    <div id="section10ContentId" class="collapse in" role="tabpanel" aria-labelledby="question10">
                        <div class="card-body">
                            A gente leva muito a sério essa coisa de pagar tudo com o Tip'Cash. Conheça a nossa Store acessando o botão “Pagar” e em seguida selecione a aba “Store”. Por lá você pode: Recarregar seu celular O cartão transporte/ bilhete único Uber pré-pago Uber Eats pré-pago Jogos (como a Steam e Blizzard) Músicas e muito mais! Baixe o app e confira todas as possibilidades.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="question11">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#quests-question" href="#section11ContentId" aria-expanded="true" aria-controls="section11ContentId">
                                Como retirar dinheiro da carteira TipCash?
                    </a>
                        </h5>
                    </div>
                    <div id="section11ContentId" class="collapse in" role="tabpanel" aria-labelledby="question11">
                        <div class="card-body">
                            Você pode retirar o saldo da sua carteira Tip'Cash por meio de transferência para sua conta bancária, e não paga nada para isso. Conheça os prazos: Retirada pelo Banco Original: em até 1 hora útil Retirada via transferência para qualquer outra instituição financeira: cai na sua conta bancária em até 2 dias úteis.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sobre Nós -->

        <section class="siteSection party">
            <div class="row party-cards">
                <div class="party-card">
                    <img src="img/Carlos.jpg" class="party-card-img">
                    <h1 class="party-card-title">Carlos</h1>
                    <h2 class="party-card-text">Desktop</h2>
                </div>
                <div class="party-card">
                    <img src="img/Favaro.jpg" class="party-card-img">
                    <h1 class="party-card-title">Favaro</h1>
                    <h2 class="party-card-text">Mobile</h2>
                </div>
                <div class="party-card">
                    <img src="img/Victor.jpg" class="party-card-img">
                    <h1 class="party-card-title">Victor Soares</h1>
                    <h2 class="party-card-text">WEB</h2>
                </div>
            </div>
        </section>
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- Popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <!-- Parallax -->
        <script src="libraries/parallax/parallax.js"></script>
        <script>
            
            function getCook(cookiename) {
                // Get name followed by anything except a semicolon
                var cookiestring=RegExp(cookiename+"=[^;]+").exec(document.cookie);
                // Return everything after the equal sign, or an empty string if the cookie name not found
                return decodeURIComponent(!!cookiestring ? cookiestring.toString().replace(/^[^=]+./,"") : "");
            }

            $(document).ready( ( ) => {
                if ( getCook( 'email' ) != undefined ) document.getElementById( 'cadastroLink' ).style.display = 'none';
            } )
        </script>
    </body>
</html>