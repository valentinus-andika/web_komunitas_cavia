<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviation | CAVIA Community</title>
    <style>
        :root {
            --aviation-blue: #1a73e8;
            --sky-gradient: linear-gradient(135deg, #87CEEB 0%, #1E90FF 100%);
            --panel-bg: rgba(255, 255, 255, 0.9);
            --text-dark: #2c3e50;
            --text-light: #f8f9fa;
            --accent-red: #e74c3c;
        }
        
        .aviation-hero {
            background: var(--sky-gradient) url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }
        
        .aviation-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .aviation-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 2rem;
        }
        
        .simulator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 3rem 0;
        }
        
        .simulator-card {
            background: var(--panel-bg);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .simulator-card:hover {
            transform: translateY(-10px);
        }
        
        .simulator-img {
            height: 200px;
            overflow: hidden;
        }
        
        .simulator-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .simulator-card:hover .simulator-img img {
            transform: scale(1.1);
        }
        
        .simulator-info {
            padding: 1.5rem;
        }
        
        .aircraft-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 2rem 0;
        }
        
        .aircraft-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .aircraft-badge {
            background: var(--aviation-blue);
            color: white;
            padding: 0.5rem 1rem;
            display: inline-block;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 1rem;
        }
        
        .specs-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }
        
        .specs-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .specs-table td {
            padding: 0.5rem;
            border-bottom: 1px solid #ddd;
        }
        
        /* Animasi Khusus */
        @keyframes takeoff {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        
        .flight-animation {
            animation: takeoff 2s infinite alternate;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .simulator-grid {
                grid-template-columns: 1fr;
            }
            
            .aviation-hero {
                height: 50vh;
            }
        }
    </style>
</head>
<body>
    <!-- Header (Sama seperti template utama) -->
    
    <section class="aviation-hero">
        <div class="aviation-hero-content">
            <h1 style="font-size: 3rem; margin-bottom: 1rem;">Aviation Enthusiasts</h1>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">Explore the world of flight simulation and real-world aviation</p>
            <a href="#simulators" class="cta-button" style="background: var(--accent-red);">Explore Simulators</a>
        </div>
    </section>

    <div class="container">
        <section id="simulators" class="simulator-section">
            <h2 style="text-align: center; margin: 2rem 0; color: var(--text-dark);">Flight Simulators</h2>
            
            <div class="simulator-grid">
                <!-- DCS World -->
                <div class="simulator-card">
                    <div class="simulator-img">
                        <img src="https://images.unsplash.com/photo-1606768666853-403c90a981ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="DCS World">
                    </div>
                    <div class="simulator-info">
                        <h3>DCS World</h3>
                        <p>Digital Combat Simulator - Simulator penerbangan militer paling realistis</p>
                        <div class="specs-table">
                            <table>
                                <tr>
                                    <td><strong>Genre</strong></td>
                                    <td>Military Flight Sim</td>
                                </tr>
                                <tr>
                                    <td><strong>Developer</strong></td>
                                    <td>Eagle Dynamics</td>
                                </tr>
                                <tr>
                                    <td><strong>Platform</strong></td>
                                    <td>Windows</td>
                                </tr>
                            </table>
                        </div>
                        <a href="#" class="cta-button" style="display: inline-block; margin-top: 1rem;">Learn More</a>
                    </div>
                </div>
                
                <!-- Microsoft Flight Simulator -->
                <div class="simulator-card flight-animation">
                    <div class="simulator-img">
                        <img src="https://images.unsplash.com/photo-1606768666853-403c90a981ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="MSFS 2020">
                    </div>
                    <div class="simulator-info">
                        <h3>MSFS 2020</h3>
                        <p>Microsoft Flight Simulator - Simulator penerbangan sipil dengan grafis menakjubkan</p>
                        <div class="specs-table">
                            <table>
                                <tr>
                                    <td><strong>Genre</strong></td>
                                    <td>Civilian Flight Sim</td>
                                </tr>
                                <tr>
                                    <td><strong>Developer</strong></td>
                                    <td>Asobo Studio</td>
                                </tr>
                                <tr>
                                    <td><strong>Platform</strong></td>
                                    <td>Windows, Xbox</td>
                                </tr>
                            </table>
                        </div>
                        <a href="#" class="cta-button" style="display: inline-block; margin-top: 1rem;">Learn More</a>
                    </div>
                </div>
                
                <!-- War Thunder -->
                <div class="simulator-card">
                    <div class="simulator-img">
                        <img src="https://images.unsplash.com/photo-1606768666853-403c90a981ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="War Thunder">
                    </div>
                    <div class="simulator-info">
                        <h3>War Thunder</h3>
                        <p>Game pertempuran udara dengan ratusan pesawat bersejarah</p>
                        <div class="specs-table">
                            <table>
                                <tr>
                                    <td><strong>Genre</strong></td>
                                    <td>Combat Flight Sim</td>
                                </tr>
                                <tr>
                                    <td><strong>Developer</strong></td>
                                    <td>Gaijin Entertainment</td>
                                </tr>
                                <tr>
                                    <td><strong>Platform</strong></td>
                                    <td>Multiplatform</td>
                                </tr>
                            </table>
                        </div>
                        <a href="#" class="cta-button" style="display: inline-block; margin-top: 1rem;">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="aircraft-section">
            <h2 style="text-align: center; margin: 2rem 0; color: var(--text-dark);">Aircraft Collection</h2>
            
            <div class="aircraft-gallery">
                <!-- Pesawat 1 -->
                <div class="aircraft-card">
                    <div class="simulator-img">
                        <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="F-16 Fighting Falcon">
                    </div>
                    <div class="simulator-info">
                        <span class="aircraft-badge">Fighter Jet</span>
                        <h3>F-16 Fighting Falcon</h3>
                        <p>Multirole fighter aircraft used by numerous countries worldwide</p>
                        <div class="specs-table">
                            <table>
                                <tr>
                                    <td><strong>Max Speed</strong></td>
                                    <td>2,120 km/h</td>
                                </tr>
                                <tr>
                                    <td><strong>Range</strong></td>
                                    <td>4,220 km</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Pesawat 2 -->
                <div class="aircraft-card">
                    <div class="simulator-img">
                        <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Boeing 747">
                    </div>
                    <div class="simulator-info">
                        <span class="aircraft-badge">Commercial</span>
                        <h3>Boeing 747</h3>
                        <p>Iconic jumbo jet that revolutionized air travel</p>
                        <div class="specs-table">
                            <table>
                                <tr>
                                    <td><strong>Max Speed</strong></td>
                                    <td>988 km/h</td>
                                </tr>
                                <tr>
                                    <td><strong>Range</strong></td>
                                    <td>14,320 km</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Pesawat 3 -->
                <div class="aircraft-card">
                    <div class="simulator-img">
                        <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cessna 172">
                    </div>
                    <div class="simulator-info">
                        <span class="aircraft-badge">Trainer</span>
                        <h3>Cessna 172</h3>
                        <p>Most popular training aircraft in aviation history</p>
                        <div class="specs-table">
                            <table>
                                <tr>
                                    <td><strong>Max Speed</strong></td>
                                    <td>302 km/h</td>
                                </tr>
                                <tr>
                                    <td><strong>Range</strong></td>
                                    <td>1,272 km</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Footer (Sama seperti template utama) -->
</body>
</html>
