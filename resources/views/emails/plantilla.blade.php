<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIK | STUDIO</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }
        .section {
            margin: 20px 0;
        }
        .section-title {
            color: #343a40;
            text-align: center;
            margin-bottom: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #6c757d;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h3></h3>
        <p>Estimados colegas y miembros de la comunidad de {{ $data['ciudad'] }}</p>
        <p>Hoy quiero resaltar la importancia de las capacitaciones que ofrecemos para la ciudadanía y el personal de nuestra repartición. Estas iniciativas están diseñadas para proporcionar las herramientas y conocimientos necesarios para enfrentar los desafíos actuales.</p>
        <p>Al capacitarnos, no solo mejoramos nuestras habilidades técnicas, sino que también fomentamos el desarrollo personal y profesional. Invertir en capacitación es invertir en un futuro más próspero y en un servicio más eficiente.</p>
        <p>Los invito a aprovechar estas oportunidades y a trabajar juntos por una comunidad más preparada y comprometida.</p>
        <p>¡Muchas gracias!</p>
    </header>
    <div class="container">
        <div class="header">
            <h1>NIK | STUDIO</h1>
            <p>Soluciones Tecnológicas</p>
        </div>
        <div class="section">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p><strong>Desarrollos a Medida:</strong> Brindamos soluciones de Software adaptadas a tus necesidades.</p>
            <p><strong>Consultoría Tecnológica:</strong> Asesoramiento y apoyo en decisiones estratégicas relacionadas con tecnología.</p>
            <p><strong>Formación:</strong> Experiencia de aprendizaje en tecnología con un enfoque personalizado.</p>
        </div>
        <div class="section">
            <h2 class="section-title">Tecnologías que Usamos</h2>
            <p>Java, PHP, Python, JavaScript, HTML, CSS, Node.js, Golang, Laravel, React, Vue.js, Angular, Bootstrap, Symfony, Sass, Docker.</p>
        </div>
        <div class="footer">
            <p>Contáctanos para más información.</p>
            <a href="mailto:comercial@nik-studio.com.ar" class="button">Enviar un Correo</a>
            <p>© 2024 Nik-Studio. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
