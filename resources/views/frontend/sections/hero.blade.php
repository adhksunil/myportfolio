<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Developer - Sunil Adhikari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }
        .header-area {
            position: relative;
            background: linear-gradient(135deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
            background-size: 300% 300%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            color: #fff;
        }
        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }
        .header-text {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }
        .header-text h1, .header-text h3, .header-text p, .header-text a {
            margin: 10px 0;
        }
        h1 {
            font-size: 3em;
            font-weight: 700;
        }
        h3 {
            font-size: 1.5em;
            font-weight: 300;
        }
        p {
            font-size: 1.2em;
            font-weight: 400;
        }
        .button-dark {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            color: #fff;
            padding: 15px 50px; /* Increased padding for scaling */
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s;
            line-height: 1.5;
            font-size: 1.8em; /* Increased font size for scaling */
            width: 100%; /* Full width button */
            max-width: 400px; /* Maximum width to keep it manageable */
        }
        .button-dark:hover {
            background-color: rgba(99, 14, 14, 0.7); /* Darker semi-transparent black on hover */
        }
        .colorful-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
            background-size: 300% 300%;
            animation: gradientAnimation 15s ease infinite;
        }
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body>
    <header class="header-area">
        <div class="colorful-bg"></div>
        <div class="header-overlay"></div>
        <div class="header-text">
            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Building Digital Dreams</h1>
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">I’m Sunil Adhikari, your expert Full Stack Developer</h3>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Transforming ideas into scalable, efficient, and user-friendly applications. Let’s create something amazing together.</p>
            <a href="#portfolio" class="button-dark wow fadeInUp" data-wow-delay="0.5s">View My Work</a>
        </div>
    </header>

    <!-- Include WOW.js and initialization script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
