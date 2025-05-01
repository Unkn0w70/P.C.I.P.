<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Site de Informações</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0; background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #0056b3;
            display: flex;
            justify-content: center;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #003d80;
        }
        section {
            max-width: 900px;
            margin: 40px auto;
            background-color: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #007bff;
        }
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
            font-size: 14px;
        }
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }
            nav a {
                text-align: center;
                border-top: 1px solid #004a99;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Site de Informações</h1>
        <p>Seu portal para conhecer mais sobre nossos serviços e contato</p>
    </header>
    <nav>
        <a href="#about">Sobre</a>
        <a href="#services">Serviços</a>
        <a href="#contact">Contato</a>
    </nav>
    <section id="about">
        <h2>Sobre Nós</h2>
        <p>Somos uma empresa dedicada a fornecer as melhores informações e serviços para nossos clientes. Com anos de experiência no mercado, buscamos sempre inovação e qualidade.</p>
    </section>
    <section id="services">
        <h2>Serviços</h2>
        <ul>
            <li>Consultoria especializada</li>
            <li>Suporte técnico 24/7</li>
            <li>Treinamentos personalizados</li>
            <li>Desenvolvimento de soluções sob medida</li>
        </ul>
    </section>
    <section id="contact">
        <h2>Contato</h2>
        <p>Fale conosco pelo e-mail: <a href="mailto:contato@siteinformacoes.com">contato@siteinformacoes.com</a></p>
        <p>Ou pelo telefone: (11) 1234-5678</p>
    </section>
    <footer>
        &copy; <?php echo date('Y'); ?> Site de Informações. Todos os direitos reservados.
    </footer>
</body>
</html>
