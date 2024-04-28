<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Poupe Bem</title>

    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/responsivo.css">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="container">
                <a href="#" class="logo">
                    <img src="src/img/logo-removebg-preview.png" alt="Logo">
                </a>
                <ul class="nav-links">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#encomendas">ENCOMENDAS</a></li>
                    <li><a href="#formulario">FORMULÁRIO</a></li>
                    <li><a href="https://www.bcb.gov.br/cidadaniafinanceira/cursos">CONHEÇA OUTROS CURSOS</a></li>
            </div>
        </nav>
    </header>

    <main>

        <section id="home">
            <h1 class="titulo">POUPE BEM TE DÁ AS BOAS VINDAS</h1>
            <h1 class="subtitulo">EXPLORE, DESCUBRA E APRENDA COISAS INCRÍVEIS CONOSCO</h1>
            <div class="simbolo-dinheiro">$</div>

            <br>
            <div class="col-6 text-sobre">
                <p>
                    No mundo atual, manter as finanças pessoais organizadas é fundamental para alcançar estabilidade e
                    segurança financeira. Ao mesmo tempo, a necessidade de acompanhar informações importantes do dia a
                    dia também é crucial. Nesse cenário, apresentamos o Poupe Bem, um WebSite inovador que combina os
                    recursos de uma plataforma financeira com cursos que irão mudar o seu pensamento, simplificando a
                    vida financeira e pessoal de seus usuários.
                </p>
                <br>
                <p> Poupe Bem permite que você mantenha um foco financeiro em uma interface intuitiva. Você pode
                    adquirir diversos conhecimentos na área de finanças e muito mais. Selecionamos os melhores cursos em
                    alta no mercado, para que você possa adquirir o melhor conhecimento, se aprimorando em finanças
                    deixando o gasto excessivo de lado, controlando os impulsos do dia a dia. Afinal aqui nós iremos lhe
                    ensinar a ter um bom relacionamento com o dinheiro.</p>
            </div>


        </section>

        <section id="encomendas">

            <h1 class="tituloMaior">Encomende os melhores cursos</h1>

            <div class="containerEncomenda">
                <div class="box">
                    <img src="src/img/pessoa-calculando.jpg" alt="">
                    <h2 class="curso-titulo">Curso 1</h2>
                    <h5 class="curso-subtitulo">Finanças Pessoais</h5>
                    <div class="price curso-preco">R$120,99 <span>R$315,99</span></div>
                </div>

                <div class="box">
                    <img src="src/img/pessoa-calculando.jpg" alt="">
                    <h2 class="curso-titulo">Curso 2</h2>
                    <h5 class="curso-subtitulo">Planejamento financeiro</h5>
                    <div class="price curso-preco">R$150,99 <span>R$315,00</span></div>
                </div>

                <div class="box">
                    <img src="src/img/pessoa-calculando.jpg" alt="">
                    <h2 class="curso-titulo">Curso 3</h2>
                    <h5 class="curso-subtitulo">Trilha Financeira - Serasa</h5>
                    <div class="price curso-preco">R$Gratis</div>
                </div>

                <div class="box">
                    <img src="src/img/pessoa-calculando.jpg" alt="">
                    <h2 class="curso-titulo">Curso 4</h2>
                    <h5 class="curso-subtitulo">Como gastar conscientemente</h5>
                    <div class="price curso-preco">R$130,99 <span>R$200,99</span></div>
                </div>

                <div class="box">
                    <img src="src/img/pessoa-calculando.jpg" alt="">
                    <h2 class="curso-titulo">Curso 5</h2>
                    <h5 class="curso-subtitulo">Finanças empresariais</h5>
                    <div class="price curso-preco">R$320,00 <span>R$630,00</span></div>
                </div>

                <div class="box">
                    <img src="src/img/pessoa-calculando.jpg" alt="">
                    <h2 class="curso-titulo">Curso 6</h2>
                    <h5 class="curso-subtitulo">Planejamento na prática</h5>
                    <div class="price curso-preco">R$350,00 <span>R$600,00</span></div>
                </div>

                <div class="">
                </div>
            </div>

            <div class="caixaForm">

                <form method="POST" action="dadosEncomenda.php">

                    <div class="field">
                        <label for="nome" class="label">Nome Completo</label>
                        <div class="control">
                            <input type="text" name="nome" id="nome" class="input">
                        </div>
                    </div>

                    <div class="field">
                        <label for="telefone" class="label">Telefone(WhatsApp)</label>
                        <div class="control">
                            <input name="telefone" id="telefone" class="input">
                        </div>
                    </div>

                    <select name="curso" required>
                        <option value="">Selecione um curso</option>

                        <option value="Curso 1">Curso 1</option>
                        <option value="Curso 2">Curso 2</option>
                        <option value="Curso 3">Curso 3</option>
                        <option value="Curso 4">Curso 4</option>
                        <option value="Curso 5">Curso 5</option>
                        <option value="Curso 6">Curso 6</option>
                    </select>


                    <div class="botao">
                        <button type="submit"> Encomendar</button>
                    </div>
                </form>
            </div>

        </section>


        <section id="formulario">

            <div class="banner">
                <p>Tire suas dúvidas</p>
            </div>


            <div class="contato">
                <form method="POST" action="dadosFormulario.php">

                    <div class="field2">
                        <label for="nome" class="label2">Nome</label>
                        <div class="control2">
                            <input type="text" name="nome" id="nome" class="input2">
                        </div>
                    </div>

                    <div class="field2">
                        <label for="email" class="label2">Email</label>
                        <div class="control2">
                            <input name="email" id="email" class="input2">
                        </div>
                    </div>

                    <div class="field2">
                        <label for="telefone" class="label2">Telefone</label>
                        <div class="control2">
                            <input name="telefone" id="telefone" class="input2">
                        </div>
                    </div>

                    <div class="field2">
                        <label for="genero" class="label2">Gênero</label>
                        <div class="control2">
                            <input name="genero" id="genero" class="input2">
                        </div>
                    </div>

                    <div class="field2">
                        <label for="mensagem" class="label2">Descrição</label>
                        <div class="control2">
                            <textarea name="mensagem" id="mensagem" rows="2" class="textarea2"></textarea>
                        </div>
                    </div>

                    <center>
                        <div>
                            <button type="submit">Enviar</button>
                        </div>
                </form>

        </section>
        </main>

        <footer>
            <p>&copy; 2024 - Todos os direitos reservados</p>
            <p>Entre em contato pelo e-mail: contatopoupebem@hotmail.com</p>
            <p>Feito por: Ranielly Ferreira dos Santos</p>
            <div>
                <a href="#" class="logo">
                    <img src="src/img/logo-removebg-preview.png" alt="Logo">
                </a>
            </div>
        </footer>

    

</body>

</html>