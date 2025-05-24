<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de mí</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .about-container {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 600px;
            max-width: 90%;
            text-align: center;
        }
        .about-container h1 {
            color: #333;
            margin-bottom: 25px;
        }
        .about-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #007bff;
        }
        .about-container p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .about-container .contact-links a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #28a745; /* WhatsApp */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .about-container .contact-links a.telegram {
            background-color: #0088cc; /* Telegram */
        }
        .about-container .contact-links a:hover {
            opacity: 0.9;
        }
        .about-container .video-section {
            margin-top: 30px;
        }
        .about-container .video-section h2 {
            color: #333;
            margin-bottom: 15px;
        }
        .about-container .video-responsive {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin: 0 auto;
            border-radius: 8px;
        }
        .about-container .video-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        .back-button {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="about-container">
        <h1>Acerca de Mí</h1>
        <img src="Axel photo.jpg" alt="Mi Foto 2x2">
        
        <p><strong>Nombre y Apellido:</strong> Axel Tavarez</p>
        <p>Me gusta la musica, el ajedrez, el anime, etc xD<p>

        <div class="contact-links">
            <a href="https://t.me/owndbytech" target="_blank" class="telegram">Chatear por Telegram</a>
            <a href="https://wa.me/+18094461411" target="_blank">Chatear por WhatsApp</a>
        </div>

        <div class="video-section">
            <h2>Video que Recomiendo</h2>
            <div class="video-responsive">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uvO02CXJPWQ?si=mU2x7gReRcBs6ZwZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </div>
        </div>
        <a href="index.php" class="back-button">Volver al Menú</a>
    </div>
</body>
</html>
