<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/font/bootstrap-icons.css">
    <style>
        i{
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    
    <header class="header container-full">
        <div class="container header_container">
            <div class="header_logo">
                <a href="#" class="header_logo_link">
                    <img src="img/logo - Digi Move.png" alt="logo do site">
                </a>
            </div>
            <div class="header_right">
                <div class="header_social">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                <nav class="nav_menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Imóveis</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
        
    </header>

    <main>
        <section class="container-full section_intro_home">
            <div class="container section_intro_home_content">
                <div class="intro_home_title">
                    <h1>Bem-vindo à DigiMove</h1>
                </div>
                <div class="container div_form">
                    <form action="" method="POST">
                        
                        <select name="tipo">
                            <option value="tipo">tipo</option>
                            <option value="apartamento">apartamento</option>
                            <option value="casa">casa</option>
                            <option value="chacara">chacara</option>
                            <option value="terreno">terreno</option>
                        </select>
                        
                        <select name="desejo" id="">
                            <option value="desejo">desejo</option>
                            <option value="alugar">alugar</option>
                            <option value="comprar">comprar</option>
                        </select>
                        
                        <select name="city" id="">
                            <option value="cidade">cidade</option>
                            <option value="sao-paulo">São Paulo</option>
                            <option value="ferraz-de-vasconcelos">Ferraz de Vasconcelos</option>
                            <option value="poa">Poá</option>
                            <option value="suzano">Suzano</option>
                        </select>
                        
                        <select name="bairro" id="">
                            <option value="bairro">bairro</option>
                            <option value="vila-jamil">Vila Jamil</option>
                            <option value="centro">Centro</option>
                            <option value="nove-de-julho">Nove de Julho</option>
                        </select>
                        
                        <select name="valor" id="">
                            <option value="valor">valor</option>
                            <option value="500">Até R$ 500</option>
                            <option value="500-1000">R$ 500 à R$ 1000</option>
                            <option value="1000-1500">R$ 1000 à R$ 1500</option>
                            <option value="1500-2000">R$ 1500 à R$ 2000</option>
                            <option value="2000-2500">R$ 2000 à R$ 2500</option>
                        </select>
                        <br>
                        <input type="text" name="" id="" placeholder="Palavra-chave ou código">
                        <button type="submit">Buscar</button>
                    </form>
                </div>
            </div>
            
        </section>

        <section class="container-full section_imoveis">
            <section class="container section_imoveis_content">

            <!-- ============================ card imovel 1 ============================ -->
                <article class="card_imovel">
                <style>
                    .card-mySlides-1 {
                        display: none;
                        background-position: center;
                        background-size: cover;
                        height: 220px;
                    }
                    .card-mySlides-1:nth-child(1){
                        display: block;
                    }
                </style>
                    <header class="header_card_imovel">
                        <div class="card-slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="card-mySlides-1 fade" style="background-image: url('img/img1.jpg');">
                                <div class="card-numbertext">1 / 3</div>
                                <div class="card-text">Sala de estar</div>
                            </div>

                            <div class="card-mySlides-1 fade" style="background-image: url('img/img2.jpg');">
                                <div class="card-numbertext">2 / 3</div>
                                <div class="card-text">Cozinha</div>
                            </div>

                            <div class="card-mySlides-1 fade" style="background-image: url('img/img3.jpg');">
                                <div class="card-numbertext">3 / 3</div>
                                <div class="card-text">Cozinha 2</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-1')">&#10094;</a>
                            <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-1')">&#10095;</a>
                        </div>
                        <div class="logo_card_imovel">
                            <img src="img/logo - Digi Move.png" alt="">
                        </div>
                        <a class="link_to_imovel" href="#"></a>
                        <div class="header_card_tag">
                            <span>Venda/aluga</span>
                        </div>
                        
                    </header>
                   
                    <div class="body_card_imovel">
                        <h3 class="title_card_imovel">Casa em rua pública</h3>
                        <ul class="att_card_imovel">
                            <li>2 Quartos</li>
                            <li>4 vagas</li>
                            <li>70 m<sup>2</sup></li>
                        </ul>

                        <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                        <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                    </div>
                    <div class="card_imovel_footer">
                        <a href="#">Saiba Mais</a>
                    </div>
                </article>
                <!-- ============================ end card imovel 1 ============================ -->

                <!-- ============================ card imovel 2 ============================ -->
                <article class="card_imovel">
                <style>
                    .card-mySlides-2 {
                        display: none;
                        background-position: center;
                        background-size: cover;
                        height: 220px;
                    }
                    .card-mySlides-2:nth-child(1){
                        display: block;
                    }
                </style>
                    <header class="header_card_imovel">
                        <div class="card-slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="card-mySlides-2 fade" style="background-image: url('img/img2.jpg');">
                                <div class="card-numbertext">1 / 3</div>
                                <div class="card-text">Sala de estar</div>
                            </div>

                            <div class="card-mySlides-2 fade" style="background-image: url('img/img3.jpg');">
                                <div class="card-numbertext">2 / 3</div>
                                <div class="card-text">Cozinha</div>
                            </div>

                            <div class="card-mySlides-2 fade" style="background-image: url('img/img1.jpg');">
                                <div class="card-numbertext">3 / 3</div>
                                <div class="card-text">Cozinha 2</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-2')">&#10094;</a>
                            <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-2')">&#10095;</a>
                        </div>
                        <div class="logo_card_imovel">
                            <img src="img/logo - Digi Move.png" alt="">
                        </div>
                        <a class="link_to_imovel" href="#"></a>
                        <div class="header_card_tag">
                            <span>Venda/aluga</span>
                        </div>
                        
                    </header>
                   
                    <div class="body_card_imovel">
                        <h3 class="title_card_imovel">Casa em rua pública</h3>
                        <ul class="att_card_imovel">
                            <li>2 Quartos</li>
                            <li>4 vagas</li>
                            <li>70 m<sup>2</sup></li>
                        </ul>

                        <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                        <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                    </div>
                    <div class="card_imovel_footer">
                        <a href="#">Saiba Mais</a>
                    </div>
                </article>
                <!-- ============================ end card imovel 2 ============================ -->

                <!-- ============================ card imovel 3 ============================ -->
                <article class="card_imovel">
                <style>
                    .card-mySlides-3 {
                        display: none;
                        background-position: center;
                        background-size: cover;
                        height: 220px;
                    }
                    .card-mySlides-3:nth-child(1){
                        display: block;
                    }
                </style>
                    <header class="header_card_imovel">
                        <div class="card-slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="card-mySlides-3 fade" style="background-image: url('img/img1.jpg');">
                                <div class="card-numbertext">1 / 3</div>
                                <div class="card-text">Sala de estar</div>
                            </div>

                            <div class="card-mySlides-3 fade" style="background-image: url('img/img2.jpg');">
                                <div class="card-numbertext">2 / 3</div>
                                <div class="card-text">Cozinha</div>
                            </div>

                            <div class="card-mySlides-3 fade" style="background-image: url('img/img3.jpg');">
                                <div class="card-numbertext">3 / 3</div>
                                <div class="card-text">Cozinha 2</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-3')">&#10094;</a>
                            <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-3')">&#10095;</a>
                        </div>
                        <div class="logo_card_imovel">
                            <img src="img/logo - Digi Move.png" alt="">
                        </div>
                        <a class="link_to_imovel" href="#"></a>
                        <div class="header_card_tag">
                            <span>Venda/aluga</span>
                        </div>
                        
                    </header>
                   
                    <div class="body_card_imovel">
                        <h3 class="title_card_imovel">Casa em rua pública</h3>
                        <ul class="att_card_imovel">
                            <li>2 Quartos</li>
                            <li>4 vagas</li>
                            <li>70 m<sup>2</sup></li>
                        </ul>

                        <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                        <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                    </div>
                    <div class="card_imovel_footer">
                        <a href="#">Saiba Mais</a>
                    </div>
                </article>
                <!-- ============================ end card imovel 3 ============================ -->
                
            </section>

            <div class="container section_imoveis_footer">
                <a href="#">Ver Mais</a>
            </div>
        </section>

        <section class="container-full section_lancamento">
            <div class="lancamento-slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="lancamento-mySlides fade" style="background-image: url('img/lancamento1.jpg');">
                    <div class="lancamento-title"><h4>Condomínio Santiago da Cruz</h4></div>
                    <a class="link_to_lancamento" href="#"></a>
                </div>

                <div class="lancamento-mySlides fade" style="background-image: url('img/lancamento2.jpg');">
                    <div class="lancamento-title"><h4>Paraíso das Palmeiras</h4></div>
                    <a class="link_to_lancamento" href="#"></a>
                </div>

                <div class="lancamento-mySlides fade" style="background-image: url('./img/lancamento3.jpg');">
                    <div class="lancamento-title"><h4>Comercial das palmas</h4></div>
                    <a class="link_to_lancamento" href="#"></a>
                </div>

                <!-- Next and previous buttons -->
                <a class="lancamento-prev" onclick="lancamento_plusSlides(-1)">&#10094;</a>
                <a class="lancamento-next" onclick="lancamento_plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>

            <div class="section_title_lancamento">
                <h3>LANÇAMENTOS</h3>
            </div>
        </section>

        <section>
            <article>
                <header>
                    <img src="" alt="">
                    <h2>Apartamentos</h2>
                </header>
                <div>
                    <p>Apartamentos novos e selecionados para você nos melhores bairros</p>
                    <a href="#">Saiba Mais</a>
                </div>
            </article>

            <article>
                <header>
                    <img src="" alt="">
                    <h2>Casas</h2>
                </header>
                <div>
                    <p>Casa de qualidade com ótimas localizações e prontas para você morar</p>
                    <a href="#">Saiba Mais</a>
                </div>
            </article>

            <article>
                <header>
                    <img src="" alt="">
                    <h2>Lançamentos</h2>
                </header>
                <div>
                    <p>Imóveis de alto padrão prestes a serem lançados, conheça agora</p>
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
        </section>

        <section>
            <header>
                <h2>Nossos Serviços</h2>
            </header>

            <section>
                <article>
                    <header>
                        <img src="" alt="">
                        <h3>Anuncie seu imóvel</h3>
                    </header>
                    <div>
                        <p>Anúnciamos seu imóvel cuidamos de toda a parte de atendimento com os clientes e encontraremos a pessoa certa para seu imóvel</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </article>

                <article>
                    <header>
                        <img src="" alt="">
                        <h3>REGULARIZE SEU IMÓVEL</h3>
                    </header>
                    <div>
                        <p>Cuidaremos de toda a parte burocrática da regualiração do seu imóvel, nosso especialista está pronto para atender você</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </article>

                <article>
                    <header>
                        <img src="" alt="">
                        <h3>AVALIAÇÃO JUDICIAL</h3>
                    </header>
                    <div>
                        <p>Iremos avaliar o valor do seu imóvel, nosso especialista está preparado para atender a sua demanda</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </article>
            </section>
        </section>

        <section>
            <header>
                <h2>Depoimentos</h2>
            </header>
            <div>

            </div>
        </section>

        <section>
            <div>
                <header>
                    <h2>Solicite um orçamento através do formulário ou fale mais sobre sua demanda</h2>
                </header>
                <form action="">
                    <input type="text" name="nome" id="" placeholder="Nome">
                    <input type="email" name="email" id="" placeholder="Email">
                    <input type="text" name="telefone" id="" placeholder="Telefone">
                    <input type="text" name="servico-produto" id="" placeholder="Serviço ou produto">
                    <textarea name="msg" id="" cols="30" rows="10" placeholder="Sua mensagem..."></textarea>
                </form>
            </div>
        </section>
    </main>

    <section>
        mapa
    </section>

    <section>
        <header>
            <img src="" alt="">
        </header>
        <div>
        <div>
            <p>Nossa missão é lhe entregar um serviço que atenda suas espectativas, priorizamos o bom relacionamento com o cliente e acreditamos na qualidade do serviço prestado</p>
        </div>
            <div>
                <header>
                    <h3>últimas novidades</h3>
                </header>
                <section>
                    <article>
                        <div>

                        </div>
                        <div>
                            <h4>Alameda das flores</h4>
                            <p>Venda: R$ 290.000  |  Aluga: R$ 1.200/mês</p>
                        </div>
                    </article>

                    <article>
                        <div>

                        </div>
                        <div>
                            <h4>Alameda das flores</h4>
                            <p>Venda: R$ 290.000  |  Aluga: R$ 1.200/mês</p>
                        </div>
                    </article>
                </section>
            </div>
        </div>

        <div>
            <div>
                <a href="#"><i class="bi bi-facebook"></i>facebook</a>
                <a href="#"><i class="bi bi-instagram"></i>instagram</a>
                <a href="#"><i class="bi bi-twitter"></i>twitter</a>
                <a href="#"><i class="bi bi-linkedin"></i>linkedin</a>
            </div>
        </div>
        
    </section>

    <footer>
        <p>
            todos os direitos reservados - 2021 | Construído com por <a href="#">digisolucao.com</a>
        </p>
    </footer>
    
    <script src="js/sliderCard.js"></script>
    <script src="js/slideLancamento.js"></script>

</body>
</html>