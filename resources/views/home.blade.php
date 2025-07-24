<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAVIA Community</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #7f8c8d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo {
            height: 40px;
            transition: transform 0.3s ease;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }
        
        nav a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1rem;
            padding: 5px 0;
            position: relative;
            transition: color 0.3s ease;
        }
        
        nav a:hover {
            color: var(--secondary-color);
        }
        
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        main {
            flex: 1;
            padding: 60px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        }
        
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover;
            opacity: 0.1;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: 1px;
        }
        
        .hero p {
            font-size: 1.2rem;
            color: var(--text-color);
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .cta-button {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }
        
        .cta-button:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
        
        /* Features Section */
        .features {
            padding: 60px 0;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-top: 40px;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2.2rem;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .video-thumbnail {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .video-thumbnail iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 30px 0;
            margin-top: auto;
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        
        .footer-links {
            display: flex;
            gap: 20px;
        }
        
        .footer-links a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
        }
        
        .copyright {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            nav ul {
                gap: 15px;
            }
            
            .footer-links {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo-container">
                <img src="{{ asset('images/Logo Cavia.png') }}" alt="CAVIA Logo" class="logo">
                <img src="{{ asset('images/Cavia.png') }}" alt="CAVIA Text" class="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('aviation') }}">Aviation</a></li>
                    <li><a href="{{ route('vtuber') }}">Vtuber</a></li>
                    <li><a href="{{ route('bismania') }}">Bis Mania</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="https://instagram.com/cavia_community" target="_blank">Social Media</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>CAVIA Community</h1>
                <p>Cah Aviation, Vtuber, Bis Mania. Tempatnya para pecinta Aviasi, Vtuber dan Bis.</p>
                <a href="{{ route('about') }}" class="cta-button">Pelajari Lebih Lanjut</a>
            </div>
        </section>
        
        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Apa yang Kami Tawarkan</h2>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="video-thumbnail">
                            <iframe src="https://www.youtube.com/embed/A9HY4DsRTCg?si=64x_JJ6mPU2lHzq2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <h3>Vtuber</h3>
                        <p>Wadah bagi fans VTuber untuk berdiskusi dan berbagi konten kreatif. Nikmati konten-konten menarik seputar dunia VTuber Indonesia.</p>
                    </div>
                    <div class="feature-card">
                        <div class="video-thumbnail">
                            <iframe src="https://www.youtube.com/embed/dbeX6R8aOLA?si=JfxwtYhiBx5A1c6V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <h3>Aviation</h3>
                        <p>Komunitas untuk para penggemar penerbangan dan segala hal tentang dunia aviasi. Dari spotter hingga simulator penerbangan.</p>
                    </div>
                    <div class="feature-card">
                        <div class="video-thumbnail">
                            <iframe src="https://www.youtube.com/embed/R7BEpYuExjc?si=EKBcOinBOdIvGZiR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <h3>Bis Mania</h3>
                        <p>Tempat berkumpulnya para pecinta bus dan transportasi darat lainnya. Review bus, trip, dan komunitas yang solid.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-content">
            <div class="footer-links">
                <a href="#">Legal Information</a>
                <a href="#">Privacy Policy</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
            <p class="copyright">Copyright &copy; 2025 CAVIA Community. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>