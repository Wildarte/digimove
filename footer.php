

    <section class="container-full section_footer">
        <div class="section_footer_over">
            <div class="container section_footer_content">
                <header class="header_footer">
                    <div class="logo_header_footer">
                        <img src="img/logo - Digi Move2.png" alt="">
                    </div>
                </header>

                <div class="body_footer">
                    <div class="desc_body_footer">
                        <header class="desc_body_footer_header">
                            <h3>
                                Digi Movi
                            </h3>
                        </header>
                        <p>Nossa missão é lhe entregar um serviço que atenda suas espectativas, priorizamos o bom relacionamento com o cliente e acreditamos na qualidade do serviço prestado</p>
                        <div class="contatos_footer">
                            <ul>
                                <li><a href="tel:99192929192192"> <i class="bi bi-telephone"></i> (12) 9 9999-9999</a></li>
                                <li><a href="mailto:contato@meusite.com"><i class="bi bi-envelope-fill"></i> contato@meusite.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider_footer"></div>
                    <div class="menu_footer">
                        <header class="header_menu_footer">
                            <h3>Menu</h3>
                        </header>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">serviços</a></li>
                            <li><a href="#">imóveis</a></li>
                            <li><a href="#">sobre</a></li>
                            <li><a href="#">contato</a></li>
                        </ul>
                    </div>
                    <div class="divider_footer"></div>
                    <div class="news_footer">
                        <header class="header_news_footer">
                            <h3>últimas novidades</h3>
                        </header>
                        <section class="body_news_footer">
                            <article class="card_footer">
                                <a href="#" class="card_thumb" style="background-image: url('img/lancamento1.jpg');"></a>
                                <div class="body_card_footer">
                                    <h4>Alameda das flores</h4>
                                    <p>Venda: R$ 290.000  |  Aluga: R$ 1.200/mês</p>
                                </div>
                            </article>

                            <article class="card_footer">
                                <a href="#" class="card_thumb" style="background-image: url('img/lancamento2.jpg');">
                                </a>
                                <div class="body_card_footer">
                                    <h4>Alameda das flores</h4>
                                    <p>Venda: R$ 290.000  |  Aluga: R$ 1.200/mês</p>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
                
                <div class="social_footer">
                    <div>
                        <a href="#"><i class="bi bi-facebook"></i>facebook</a>
                        <a href="#"><i class="bi bi-instagram"></i>instagram</a>
                        <a href="#"><i class="bi bi-twitter"></i>twitter</a>
                        <a href="#"><i class="bi bi-linkedin"></i>linkedin</a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <footer class="container-full">
        <p>
            todos os direitos reservados - <?= date("Y") ?> | Construído com &#10084; por <a href="#">digisolucao.com</a>
        </p>
    </footer>

    <div class="view_window_chat">
        <div class="view_window_chat_content">
            <div class="window_chat">
                <header>
                    <div class="window_chat_logo">
                        <img src="img/img-corretor.jpg" alt="">
                    </div>
                    <div class="window_chat_dados">
                        <p>Andréia Correa</p>
                        <p>Corretora</p>
                    </div>
                    
                </header>
                <div class="window_chat_body">

                </div>
                <div class="window_chat_footer">
                    <textarea name="" id="" placeholder="..."></textarea>
                    <div class="btn_send_chat">
                        <button>
                            <i class="bi bi-whatsapp"></i>
                        </button>
                    </div>
                    
                </div>
                <div class="window_chat_close">
                    <i class="bi bi-x-circle"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="btn_chat" id="btn_chat">
        <span class="badge_chat" style="display: none;">
            
        </span>
        <button class="btn_icon">
            <i class="bi bi-chat"></i>
        </button>
        <span class="notification_chat" style="display: none;">
            <p>Olá, como posso ajudar?</p>
            <span class="close_msg_chat">
                <i class="bi bi-x"></i>
            </span>
        </span>
    </div>

    <script src="js/main.js"></script>
    <script src="js/sliderCard.js"></script>
    <script src="js/slideLancamento.js"></script>
    <script src="js/review.js"></script>
    <script src="js/imovel.js"></script>

</body>
</html>