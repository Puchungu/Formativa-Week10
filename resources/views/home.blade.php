<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Strike 2 - Hobbie</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; 
            color: #e0e0e0; 
            line-height: 1.6;
        }

        /* Contenedor principal */
        .hobby-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px; 
        }

        /* Estilos del encabezado */
        .header {
            text-align: center;
            margin-bottom: 60px; 
        }

        .header h1 {
            font-size: 3.5rem; 
            color: #ffc107; 
            font-weight: 700; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            letter-spacing: 1px; 
        }

        .header p {
            font-size: 1.2rem;
            color: #9e9e9e; 
            margin-top: 10px;
        }

        /* Contenido principal */
        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start; 
        }

        .game-info {
            width: 65%; 
            padding-right: 30px;
        }

        .game-info h2 {
            font-size: 2.5rem; 
            margin-bottom: 30px;
            color: #ffc107;
            font-weight: 600;
        }

        .game-info p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #bdbdbd;
        }

        /* Sección de imágenes */
        .image-section {
            width: 30%; 
            text-align: center;
            margin-top: 20px;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
            transition: transform 0.3s ease; 
        }

        .image-section img:hover {
            transform: scale(1.05); 
        }

        /* Estadísticas */
        .statistics {
            margin-top: 50px;
            background-color: #1e1e1e; 
            padding: 30px;
            border-radius: 12px;
            color: #ffc107;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        }

        .statistics h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .statistics p {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .statistics span {
            color: #ffc107;
            font-weight: bold;
        }

        /* Estilo del pie de página */
        .footer {
            text-align: center;
            margin-top: 60px;
            font-size: 1rem;
            color: #757575;
            padding: 20px 0;
            border-top: 1px solid #333; 
        }

        .footer a {
            color: #ffc107;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            text-decoration: underline;
            color: #ffd54f; 
        }
    </style>
</head>
<body>
    <div class="hobby-container">
        <div class="header">
            <h1>Mi Hobbie: Jugar Counter Strike 2</h1>
            <p>¡Bienvenidos a mi página donde comparto mi pasión por este increíble juego!</p>
        </div>
        
        <div class="main-content">
            <div class="game-info">
                <h2>¿Por qué Counter Strike 2?</h2>
                <p>Counter Strike 2 es mucho más que un simple juego de disparos. Es una experiencia única que combina estrategia, habilidad y trabajo en equipo. Desde sus primeros lanzamientos, ha sido un referente para la comunidad de jugadores a nivel mundial.</p>
                <p>Jugar Counter Strike 2 me permite desarrollar habilidades como la toma rápida de decisiones, coordinación con amigos y el manejo del estrés bajo presión. Cada partida es una oportunidad de mejorar y superar mis propios límites.</p>
            </div>
            
            <div class="image-section">
                <img src="https://i.pinimg.com/736x/ec/18/12/ec181225b769fd6b5437cf3a2b74c539.jpg" alt="Imagen del juego Counter Strike 2">
            </div>
            
            <div class="statistics">
                <h3>Mis Estadísticas</h3>
                <p>Partidas jugadas: <span>1000+</span></p>
                <p>K/D Ratio: <span>1.8</span></p>
                <p>Horas jugadas: <span>1200+</span></p>
            </div>
        </div>

        <div class="footer">
            <p>Creado por Nelson Alvarenga | <a href="https://github.com/Puchungu">Visita mi página personal</a></p>
        </div>
    </div>
</body>
</html>







