<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE BASIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('estilo/styles.css') }}">
</head>

<body>

    <header>
        <div class="logo">NaumCompensa Store</div>
        <div class="header-content">
            <div class="search-container">
                <input type="text" id="searchInput" class="search-input" placeholder="Search..." />
                <button id="searchButton" class="search-button">
                    <i class="fa-solid fa-search"></i>
                </button>
            </div>

            <button class="cta-button">Login</button>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('login') }}"><i class="fa-solid fa-home nav-icon"></i>   Login</a></li>
            <li><a href="#"><i class="fa-solid fa-shop nav-icon"></i> Comprar</a></li>
            <li><a href="#"><i class="fa-solid fa-concierge-bell nav-icon"></i> Serviços</a></li>
            <li><a href="#"><i class="fa-solid fa-info-circle nav-icon"></i> Sobre</a></li>
            <li><a href="#"><i class="fa-solid fa-envelope nav-icon"></i> Contato</a></li>
        </ul>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1>Bem vindo ao NaumCompensa Store</h1>
            <p>PRECISOU, PROCUROU, ACHOU, COMPROU</p>
            <a href="#" class="cta-button" style="position: relative; top: 50px;">Compre agora</a>
        </div>
    </div>

    <div class="main-content">
        <div class="section">
            <h2></h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://down-br.img.susercontent.com/file/cn-11134207-7r98o-lntebizfo9s8e7"
                        alt="Produto 1">
                    <div class="info">
                        <h3>Game Portátil R36s Tela IPS 3.5 64GB 15 Mil jogos</h3>
                        <p>🎮 Diversão Retro em Suas Mãos: Com mais de 15 mil jogos, incluindo simuladores</p>
                        <div class="price">R$399,90</div>
                    </div>
                    <div class="price-badge">Novidade</div>
                </div>
                <div class="product-card">
                    <img src="https://down-br.img.susercontent.com/file/sg-11134201-7rdw4-m1fi3d9k8kmu50.webp"
                        alt="Produto 2">
                    <div class="info">
                        <h3>3 Em 1 Mini Máquina De Café Expresso Elétrica Portátil Sem Fio</h3>
                        <p>Para Carro E Casa Acampamento Viagem Cápsula Cafeteira</p>
                        <div class="price">R$276,80</div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://down-br.img.susercontent.com/file/br-11134207-7r98o-llmvsa9mm66rce.webp"
                    <div class="info">
                        <h3>Fone de ouvido com fio Tipo-C</h3>
                        <p>Desenhados para uma audição simples e confortável
                        Criados com materiais leves e de alta qualidade. </p>
                        <div class="price">R$19.99</div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
<br>
        <div class="section">
            <h2>Promoção Relampago</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://down-br.img.susercontent.com/file/br-11134207-7r98o-lwodewoff1z37b.webp"
                        alt="Promotion 1">
                    <div class="info">
                        <h3>Máquina de Boxe de Música Inteligente, Boxing Machine </h3>
                        <p>APROVEITE O TREINAMENTO DE BOXE </p>
                        <div class="price">R$349.99</div>
                    </div>
                    <div class="price-badge">ULTIMAS UNIDADES</div>
                </div>
               
                
        </div>

        <div class="customer-testimonials">
            <h2>O que nossos clientes estão dizendo?</h2>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <p>"Serviço incrivel e entrega rapida. Precisei de um fone após perder o Oscar pra PUTA da Mikey Maddison e essa loja me salvou. Eu recomendo esse site e voltarei a comprar"</p>
                    <div class="author">Demi Moore</div>
                </div>
                <div class="testimonial-card">
                    <p>"Entrega extremamente veloz e com qualidade extrema. Comprarei mais em breve"</p>
                    <div class="author">Mickey Mouse</div>
                </div>
                <div class="testimonial-card">
                    <p>"Boa qualidade e preços ainda melhores"</p>
                    <div class="author">Johnny Depp</div>
                </div>
            </div>
        </div>

        <!-- <div class="featured-collections">
            <h2>Featured Collections</h2>
            <div class="collections-grid">
                <div class="collection-card">
                    <img src="https://images.pexels.com/photos/1983040/pexels-photo-1983040.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Collection 1">
                    <div class="info">
                        <h3>Collection 1</h3>
                        <p>Explore our exclusive collection of trendy items.</p>
                    </div>
                </div>
                <div class="collection-card">
                    <img src="https://images.pexels.com/photos/2797273/pexels-photo-2797273.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Collection 2">
                    <div class="info">
                        <h3>Collection 2</h3>
                        <p>Discover the best deals in our summer collection.</p>
                    </div>
                </div>
                <div class="collection-card">
                    <img src="https://images.pexels.com/photos/2335048/pexels-photo-2335048.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="Collection 3">
                    <div class="info">
                        <h3>Collection 3</h3>
                        <p>Check out our new arrivals and fresh picks.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-section">
            <h2>Latest Blog Posts</h2>
            <div class="blog-post">
                <img src="https://images.pexels.com/photos/2335048/pexels-photo-2335048.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                    alt="Blog Post 1">
                <h3>How to Choose the Right Product</h3>
                <p>Tips and tricks for selecting the perfect items for your needs.</p>
            </div>
            <div class="blog-post">
                <img src="https://images.pexels.com/photos/3587478/pexels-photo-3587478.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="Blog Post 2">
                <h3>Top 10 Summer Trends</h3>
                <p>Stay ahead with the hottest trends for the upcoming season.</p>
            </div>
        </div> -->

        <div class="contact-section">
            <h2>Entre em contato</h2>
            <p>Se você tem alguma duvida ou precisa de suporte, fale conosco.</p>
            <form>
                <input type="text" placeholder="Seu nome" required>
                <input type="email" placeholder="Seu Email" required>
                <textarea rows="5" placeholder="Sua Mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <!-- <div class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h3>What is your return policy?</h3>
                <p>We offer a 30-day return policy for all products. Please contact our support for more details.</p>
            </div>
            <div class="faq-item">
                <h3>Do you offer international shipping?</h3>
                <p>Yes, we ship worldwide. Shipping fees and delivery times vary by destination.</p>
            </div>
            <div class="faq-item">
                <h3>How can I track my order?</h3>
                <p>Once your order is shipped, you'll receive a tracking number via email. Use this number to track your
                    shipment.</p>
            </div> -->
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-top">
                <div class="footer-logo">
                    <div class="logo">NaumCompensa Store</div>
                </div>
                <div class="footer-links">
                    <div class="footer-link-section">
                        <h3>Links Rápidos</h3>
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Comprar</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-section">
                        <h3>SERVIÇO PERSONALIZADO</h3>
                        <ul>
                            <li><a href="#">***</a></li>
                            <li><a href="#">***</a></li>
                            <li><a href="#">***</a></li>
                            <li><a href="#">***</a></li>
                            <li><a href="#">Politica de Privacidade</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-section">
                        <h3>SOBRE NÓS</h3>
                        <ul>
                            <li><a href="#">NOSSA HISTÓRIA</a></li>
                            <li><a href="#">TRABALHE CONOSCO</a></li>
                            <!-- <li><a href="#">Press</a></li> -->
                            <li><a href="#">AFILIADOS</a></li>
                            <li><a href="#">SUSTENTABILIDADE</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-section">
                        <h3>CONTATE-NOS</h3>
                        <ul>
                            <li><a href="mailto:suporte@naumcompensastore.com">suporte@naumcompensastore.com</a></li>
                            <li><a href="tel:+1234567890">+55 11 94002-8922</a></li>
                            <li><a href="#">RUA DOS BOBOS, NUMERO 0</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="newsletter">
                    <h3>Subscribe to Our Newsletter</h3>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Insira seu email" required>
                        <button type="submit">SE INSCREVA</button>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <p>&copy; 2025 E EU JÁ NÃO AGUENTO MAIS. TODOS OS DIREITOS RESERVADOS.</p>
            </div>
        </div>
    </footer>



    <!--Social Liks codings below-->
    <!-- <a id="source-link" class="meta-link" href="https://t.me/codewith_muhilan" target="_blank">
        <i class="fas fa-link"></i>
        <span class="roboto-mono">Join my Telegram</span>
    </a>

    <a id="yt-link" class="meta-link" href="https://www.youtube.com/@codewith_muhilan?sub_confirmation=1"
        target="_blank">
        <i class="fab fa-youtube"></i>
        <span> Subscribe my channel</span>
    </a>

    <a id="Fund-link" class="meta-link" href="https://www.buymeacoffee.com/codewithmuhilan" target="_blank">
        <i class="fas fa-dollar-sign"></i>
        <span> Show your Support..❤</span>
    </a> -->
    <script>
        document.getElementById('searchButton').addEventListener('click', function () {
            const searchInput = document.getElementById('searchInput');
            searchInput.classList.toggle('open');
            searchInput.focus();
        });


    </script>
</body>

</html>