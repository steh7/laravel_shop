<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE BASIC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        header {
            width: 100%;
            height: 80px;
            background-color: #282c34;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* General styles for search input and button */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-input {
            width: 0;
            padding: 0;
            border: 1px solid #ddd;
            border-radius: 20px;
            background-color: #fff;
            transition: width 0.4s ease-in-out, padding 0.4s ease-in-out;
            font-size: 16px;
            color: #333;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-input.open {
            width: 250px;
            /* Adjust as needed */
            padding: 10px;
        }

        .search-button {
            background-color: #ff5722;
            border: none;
            border-radius: 20px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            margin-left: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border: 1px solid transparent;
        }

        .search-button:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }

        .search-container i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 18px;
        }


        nav {
            background: linear-gradient(135deg, #12b9cf, #ffffff);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px;
            position: sticky;
            top: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        nav ul {
            display: flex;
            gap: 30px;
            list-style: none;
            padding: 0;
        }

        nav li {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            position: relative;
            display: flex;
            align-items: center;
        }

        nav li a {
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease;
        }

        nav li a:hover {
            color: #ff5722;
        }

        .nav-icon {
            font-size: 20px;
            color: #ff5722;
        }

        .nav-icon:hover {
            color: #ff5722;
        }

        .hero {
            background-image: url('https://images.pexels.com/photos/1840320/pexels-photo-1840320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 24px;
            margin-top: 10px;
        }

        .cta-button {
            background-color: #ff5722;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e64a19;
        }

        .main-content {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
            color: #282c34;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 1 1 calc(25% - 20px);
            /* 4 items per row with space between */
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card .info {
            padding: 15px;
        }

        .product-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .product-card p {
            font-size: 16px;
            color: #666;
        }

        .product-card .price {
            font-size: 18px;
            font-weight: 700;
            margin-top: 10px;
            color: #ff5722;
        }

        .price-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff5722;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 700;
        }

        footer {
            background-color: #282c34;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .footer-top {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .footer-logo {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .footer-link-section {
            max-width: 200px;
        }

        .footer-link-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .footer-link-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-link-section ul li {
            margin-bottom: 8px;
        }

        .footer-link-section ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link-section ul li a:hover {
            color: #ff5722;
        }

        .footer-bottom {
            margin-top: 20px;
        }

        .newsletter {
            margin-bottom: 20px;
        }

        .newsletter h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .newsletter-form {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .newsletter-form input {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            width: 250px;
        }

        .newsletter-form button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .newsletter-form button:hover {
            background-color: #e64a19;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social-icons a {
            color: #fff;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ff5722;
        }

        footer p {
            font-size: 14px;
            color: #ccc;
        }


        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            color: #fff;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ff5722;
        }

        .newsletter {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .newsletter input {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            width: 250px;
            margin-right: 10px;
        }

        .newsletter button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .newsletter button:hover {
            background-color: #e64a19;
        }

        footer {
            background-color: #282c34;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #ff5722;
            text-decoration: none;
            font-weight: 700;
        }

        footer a:hover {
            text-decoration: underline;
        }



        .customer-testimonials {
            background: #f4f4f4;
            padding: 40px 20px;
        }

        .customer-testimonials h2 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
            color: #282c34;
        }

        .testimonials-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .testimonial-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            text-align: center;
        }

        .testimonial-card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .testimonial-card .author {
            font-size: 18px;
            font-weight: 700;
            color: #282c34;
        }

        .featured-collections {
            padding: 40px 20px;
        }

        .featured-collections h2 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
            color: #282c34;
        }

        .collections-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .collection-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(33% - 20px);
            /* 3 items per row with space between */
            overflow: hidden;
            margin-bottom: 20px;
            text-align: center;
        }

        .collection-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .collection-card .info {
            padding: 15px;
        }

        .collection-card h3 {
            font-size: 20px;
            font-weight: 700;
            color: #282c34;
        }

        .blog-section {
            padding: 40px 20px;
        }

        .blog-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
            color: #282c34;
        }

        .blog-post {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .blog-post img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .blog-post h3 {
            font-size: 20px;
            font-weight: 700;
            color: #282c34;
            margin-top: 10px;
        }

        .blog-post p {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
        }

        .contact-section {
            background: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #282c34;
        }

        .contact-section p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .contact-section form {
            max-width: 600px;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-section input,
        .contact-section textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .contact-section button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .contact-section button:hover {
            background-color: #e64a19;
        }

        .fa {
            font-size: 20px;
        }

        .fa-facebook {
            color: #3b5998;
        }

        .fa-twitter {
            color: #1da1f2;
        }

        .fa-instagram {
            color: #e4405f;
        }

        .fa-linkedin {
            color: #0077b5;
        }

        .faq-section {
            background: #f4f4f4;
            padding: 40px 20px;
        }

        .faq-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
            color: #282c34;
        }

        .faq-item {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
        }

        .faq-item h3 {
            font-size: 20px;
            font-weight: 700;
            color: #282c34;
            margin-bottom: 10px;
        }

        .faq-item p {
            font-size: 16px;
            color: #666;
        }




        /* -- External Social Link CSS Styles -- */

        #source-link {
            top: 120px;
        }

        #source-link>i {
            color: rgb(94, 106, 210);
        }

        #yt-link {
            top: 65px;
        }

        #yt-link>i {
            color: rgb(219, 31, 106);

        }

        #Fund-link {
            top: 10px;
        }

        #Fund-link>i {
            color: rgb(255, 251, 0);

        }

        .meta-link {
            align-items: center;
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: inline-flex;
            gap: 5px;
            left: 10px;
            padding: 10px 20px;
            position: fixed;
            text-decoration: none;
            transition: background-color 600ms, border-color 600ms;
            z-index: 10000;
        }

        .meta-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .meta-link>i,
        .meta-link>span {
            height: 20px;
            line-height: 20px;
        }

        .meta-link>span {
            color: white;
            font-family: "Rubik", sans-serif;
            transition: color 600ms;
        }
    </style>
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
            <li><a href="#"><i class="fa-solid fa-home nav-icon"></i>   Inicio</a></li>
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
                <!-- <div class="product-card">
                    <img src="https://images.pexels.com/photos/3020129/pexels-photo-3020129.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="Product 3">
                    <div class="info">
                        <h3>Product 3</h3>
                        <p>Description of product 3.</p>
                        <div class="price">$79.99</div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.pexels.com/photos/4110337/pexels-photo-4110337.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="Product 4">
                    <div class="info">
                        <h3>Product 4</h3>
                        <p>Description of product 4.</p>
                        <div class="price">$69.99</div>
                    </div>
                </div>
            </div>
        </div> -->
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
                <!-- <div class="product-card">
                    <img src="https://images.pexels.com/photos/615302/nikon-lens-zoom-optics-615302.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                        alt="Promotion 2">
                    <div class="info">
                        <h3>Promotion 2</h3>
                        <p>Special deal on Promotion 2.</p>
                        <div class="price">$39.99</div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="customer-testimonials">
            <h2>O que nossos clientes estão dizendo?</h2>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <p>"Serviço incrivel e entrega rapida. Eu recomendo esse site e voltarei a comprar"</p>
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
            <p>Se vocÇe tem alguma duvida ou precisa de suporte, fale conosco.</p>
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