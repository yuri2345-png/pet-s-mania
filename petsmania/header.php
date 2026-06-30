<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet's Mania</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; color: #333; }
        header { background-color: #f8f9fa; border-bottom: 3px solid #ff9900; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        
        /* Logomarca Simples em CSS */
        .logo { display: flex; align-items: center; text-decoration: none; }
        .logo-icon { background-color: #ff9900; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px; margin-right: 10px; }
        .logo-text { font-size: 24px; font-weight: bold; color: #333; }
        .logo-text span { color: #ff9900; }
        
        /* Menu de Navegação */
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 20px; }
        nav a { text-decoration: none; color: #555; font-weight: bold; font-size: 16px; }
        nav a:hover { color: #ff9900; }
        
        /* Estilos Gerais das Páginas */
        .container { padding: 40px; max-width: 1200px; margin: 0 auto; min-height: 400px; }
        footer { background-color: #333; color: white; text-align: center; padding: 20px; font-size: 14px; margin-top: 40px; }
        .pet-grid { display: flex; gap: 20px; margin-top: 20px; }
        .pet-card { border: 1px solid #ddd; padding: 20px; border-radius: 8px; flex: 1; text-align: center; background: #fafafa; }
    </style>
</head>
<body>

<header>
    <!-- Logomarca Simples -->
    <a href="index.php" class="logo">
        <div class="logo-icon">🐾</div>
        <div class="logo-text">Pet's<span>Mania</span></div>
    </a>
    
    <!-- Menu Principal -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pets.php">Pets</a></li>
            <li><a href="racao.php">Ração</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
</header>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrossel PHP</title>
    <style>
        /* Estilos do Carrossel */
        .carrossel-container {
            position: relative;
            max-width: 800px;
            margin: 50px auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .carrossel-slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: 400px;
            object-fit: cover; /* Mantém a proporção da imagem sem distorcer */
            display: block;
        }

        /* Botões de Navegação (Anterior/Próximo) */
        .btn-carrossel {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 50%;
            transition: background 0.3s;
        }

        .btn-carrossel:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .btn-prev { left: 15px; }
        .btn-next { right: 15px; }
    </style>
</head>
<body>

    <!-- Estrutura do Carrossel -->
    <div class="carrossel-container">
        <div class="carrossel-slides" id="carrosselSlides">
            <!-- Altere os caminhos abaixo para as suas fotos reais -->
            <div class="slide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1aKTC-qp3-G2XSiSKwluBcZVF-SGYRqfW81DB0JrV1A&s=10" alt="Imagem 1"></div>
            <div class="slide"><img src="https://img1.10bestmedia.com/Images/Photos/422813/Talis-us_54_990x660.jpg?auto=webp&width=3840&quality=75"></div>
            <div class="slide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCXCHcCsoOCzeH9K-ZWJo_FniD5DtpV6TXSis6rJsIGw&s=10" alt="Imagem 3"></div>
        </div>

        <!-- Botões -->
        <button class="btn-carrossel btn-prev" onclick="mudarSlide(-1)">&#10094;</button>
        <button class="btn-carrossel btn-next" onclick="mudarSlide(1)">&#10095;</button>
    </div>

    <!-- Script para fazer o Carrossel funcionar -->
    <script>
        let indexAtual = 0;

        function mudarSlide(direcao) {
            const slides = document.getElementById('carrosselSlides');
            const totalSlides = document.querySelectorAll('.slide').length;

            indexAtual += direcao;

            // Se passar do último, volta para o primeiro
            if (indexAtual >= totalSlides) {
                indexAtual = 0;
            }
            // Se for antes do primeiro, vai para o último
            if (indexAtual < 0) {
                indexAtual = totalSlides - 1;
            }

            // Move as imagens para o lado
            slides.style.transform = `translateX(${-indexAtual * 100}%)`;
        }

        // Opcional: Passar os slides automaticamente a cada 4 segundos
        setInterval(() => {
            mudarSlide(1);
        }, 4000);
    </script>

</body>
</html>
