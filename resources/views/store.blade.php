<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forecourt Management Solutions - Fuel Handling Equipment Experts</title>
    <meta name="description" content="Professional fuel handling equipment services including tank calibration, installation, repair and calibration. Serving Zimbabwe with expert solutions.">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="shortcut icon" href="{{ URL::asset('icon.png')}}" rel="favicon">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            overflow-x: hidden;
        }

        .hero-section {
                background: linear-gradient(135deg, rgba(30, 58, 138, 0.9), rgba(59, 130, 246, 0.8)),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a"><stop offset="0" stop-color="%23ff6b35"/><stop offset="1" stop-color="%23f7931e"/></radialGradient></defs><rect width="1000" height="1000" fill="url(%23a)" opacity="0.1"/></svg>');
            background-size: cover;
            background-position: center;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            padding: 2rem 1rem;
            text-align: center;
            overflow: hidden;
            margin-top: 0px;

        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="white" opacity="0.1"/><circle cx="80" cy="40" r="1" fill="white" opacity="0.1"/><circle cx="40" cy="80" r="1.5" fill="white" opacity="0.1"/></svg>');
            animation: float 20s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes pulseGlow {
            0% { opacity: 0.5; transform: scale(1); }
            100% { opacity: 1; transform: scale(1.1); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            text-align: center;
            animation: slideInUp 1s ease-out;

        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-title {
            font-size: clamp(2rem, 6vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            background: linear-gradient(135deg, #ffffff, #f1f5f9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: #cccccc;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
         
        .fuel-pump-icon {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            color: white;
            box-shadow: 0 20px 60px rgba(255, 107, 53, 0.3);
            animation: pulse 3s ease-in-out infinite;
            
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .fuel-pump-icon {
        width: 180px;
        height: 180px;
        font-size: 4rem;
        margin: 0 auto;
    }

        .filter-section {
            background: rgba(252, 249, 249, 0.979);
            backdrop-filter: blur(10px);
            padding: 30px 0;
            border-bottom: 1px solid rgba(255, 69, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 100;
        }

       

        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid #e2e8f0;
            background: white;
            color: #64748b;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

      

        .filter-btn:hover,
        .filter-btn.active {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            border-color: #ff6b35;
            color: white;
            transform: translateY(-2px);
        }

        .store-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            padding: 60px 0;
            animation: fadeIn 1s ease-out 0.5s both;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(33, 64, 158, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .product-card:nth-child(odd) {
            animation-delay: 0.1s;
        }

        .product-card:nth-child(even) {
            animation-delay: 0.2s;
        }

        @keyframes slideInScale {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 69, 0, 0.2);
            border-color: rgba(255, 69, 0, 0.3);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #fbf8f8, #4a7df3);
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ff4500, #ff8c00);
            border-radius: 50%;
            opacity: 0.1;
        }

        .product-image::after {
            content: '🔧';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            opacity: 0.3;
        }

        .product-info {
            padding: 25px;
        }

        .product-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 10px;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.9), rgba(59, 130, 246, 0.8));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .product-category {
            color: #ff4500;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .product-description {
            color: #616163;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .product-features {
            list-style: none;
            margin-bottom: 25px;
        }

        .product-features li {
            color: #b4b3b3;
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
            font-size: 0.9rem;
        }

        .product-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #ff4500;
            font-weight: bold;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 69, 0, 0.1);
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #ff4500, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .product-image img {
            width: 100%;
            height: 200px;
            object-fit: contain; /* or cover */
            }

        .inquire-btn {
            background: linear-gradient(135deg, #ff4500, #ff8c00);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .inquire-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .inquire-btn:hover::before {
            left: 100%;
        }

        .inquire-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 69, 0, 0.3);
        }

        .status-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-available {
            background: linear-gradient(135deg, #00ff88, #00cc6a);
            color: #000;
        }

        .status-limited {
            background: linear-gradient(135deg, #ffaa00, #ff8800);
            color: #000;
        }

        .status-contact {
            background: linear-gradient(135deg, #ff4444, #cc0000);
            color: #fff;
        }

        .floating-contact {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #ff4500, #ff8c00);
            color: white;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0 10px 30px rgba(255, 69, 0, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
            font-size: 1.5rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .floating-contact:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(255, 69, 0, 0.4);
        }

        @media (max-width: 768px) {
            .store-grid {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 40px 0;
            }

            .filter-controls {
                flex-direction: column;
                gap: 15px;
            }

            .hero-section {
                padding: 60px 0;
            }

            .product-footer {
                flex-direction: column;
                gap: 15px;
                align-items: stretch;
            }

            .inquire-btn {
                width: 100%;
                justify-self: stretch;
            }
        }

         /* Footer */
         .footer {
            background: #0f172a;
            color: white;
            padding: 3rem 0 1rem;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #ff6b35;
        }

        .footer-bottom {
            border-top: 1px solid #334155;
            padding-top: 2rem;
            color: #94a3b8;
        }

    </style>
</head>
<body>
    
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Equipment Store</h1>
                <p class="hero-subtitle">Professional fuel handling equipment and accessories for all your needs</p>
                <div class="hero-visual fade-in">
                    <div class="fuel-pump-icon">
                        <i class="fas fa-gas-pump"></i>
                    </div>
                </div>
                <a href="{{ url('/') }}">
                    <button style="padding: 10px 20px; background-color: #ff6b35; color: white; border: none; border-radius: 5px;">
                        Go to Home Page
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="filter-section">
        <div class="container">
            <div class="filter-controls">
                <button class="filter-btn active" data-category="all">All Equipment</button>
                <button class="filter-btn" data-category="accessories">Hoses & Nozzles</button>
                <button class="filter-btn" data-category="lpg">LPG</button>
                <button class="filter-btn" data-category="pumps">Fuel Pumps</button>
                <button class="filter-btn" data-category="accessories">Meters & Registers</button>
                <button class="filter-btn" data-category="safety">Safety Equipment</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="store-grid" id="storeGrid">
            <!-- Fuel Pumps -->
            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image">
                    <img src="/images/bi-pump.jpg" alt="bi-Pump">
                  </div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">PIUSI Bi-Pump</h3>
                    <p class="product-description">Versatile electric fuel transfer pump available in 12V or 24V DC configurations for mobile applications.</p>
                    <ul class="product-features">
                        <li>12V or 24V DC options</li>
                        <li>Suitable for diesel fuel</li>
                        <li>Portable design</li>
                        <li>Self-priming capability</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image">
                    <img src="/images/panther.jpg" alt="panther">
                  </div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">PIUSI Panther 56/72</h3>
                    <p class="product-description">AC powered fuel transfer pump for stationary installations with high flow rates.</p>
                    <ul class="product-features">
                        <li>AC powered operation</li>
                        <li>High flow rate capacity</li>
                        <li>Durable construction</li>
                        <li>Professional grade</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image">
                    <img src="/images/atex.jpg" alt="atex">
                  </div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">PIUSI E120/E80 ATEX</h3>
                    <p class="product-description">ATEX certified explosion-proof pumps for hazardous environments and professional applications.</p>
                    <ul class="product-features">
                        <li>ATEX certified</li>
                        <li>Explosion-proof design</li>
                        <li>E120 and E80 models</li>
                        <li>Safety compliance</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">PIUSI EX50/EX75 ATEX</h3>
                    <p class="product-description">Heavy-duty ATEX certified pumps for demanding industrial applications.</p>
                    <ul class="product-features">
                        <li>ATEX certified</li>
                        <li>EX50 and EX75 models</li>
                        <li>Industrial grade</li>
                        <li>Hazardous area approved</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">Submersible Pumps</h3>
                    <p class="product-description">Reliable submersible pumps for underground tank applications and fuel transfer operations.</p>
                    <ul class="product-features">
                        <li>Submersible design</li>
                        <li>Tank applications</li>
                        <li>Corrosion resistant</li>
                        <li>Various flow rates</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">Vane Pump</h3>
                    <p class="product-description">Precision vane pumps for consistent fuel transfer with excellent metering accuracy.</p>
                    <ul class="product-features">
                        <li>Precision metering</li>
                        <li>Consistent flow</li>
                        <li>Durable vane design</li>
                        <li>Low maintenance</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="pumps">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fuel Pumps</div>
                    <h3 class="product-title">Gear Pump</h3>
                    <p class="product-description">Heavy-duty gear pumps for high-pressure fuel transfer applications.</p>
                    <ul class="product-features">
                        <li>High pressure capability</li>
                        <li>Gear-driven design</li>
                        <li>Industrial applications</li>
                        <li>Reliable operation</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <!-- Hoses & Nozzles -->
            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Hoses & Nozzles</div>
                    <h3 class="product-title">Fuel Dispensing Hose</h3>
                    <p class="product-description">Professional-grade petroleum transfer hose designed for fuel dispensing operations.</p>
                    <ul class="product-features">
                        <li>Chemical resistant</li>
                        <li>Various lengths available</li>
                        <li>Static dissipating wire</li>
                        <li>Fuel compatible</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Nozzles</div>
                    <h3 class="product-title">Auto Nozzles (OPW)</h3>
                    <p class="product-description">OPW automatic shut-off nozzles available in 2" and 1.5" configurations for fuel dispensing.</p>
                    <ul class="product-features">
                        <li>OPW brand quality</li>
                        <li>2" and 1.5" sizes</li>
                        <li>Automatic shut-off</li>
                        <li>Spill prevention</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Nozzles</div>
                    <h3 class="product-title">Auto Nozzles (ZVA)</h3>
                    <p class="product-description">ZVA automatic nozzles with precision shut-off for professional fuel dispensing applications.</p>
                    <ul class="product-features">
                        <li>ZVA precision design</li>
                        <li>Automatic operation</li>
                        <li>Professional grade</li>
                        <li>Leak-proof sealing</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Nozzles</div>
                    <h3 class="product-title">Vapour Recovery Nozzle</h3>
                    <p class="product-description">Environmental-friendly vapour recovery nozzles for emission control during fuel dispensing.</p>
                    <ul class="product-features">
                        <li>Vapour recovery system</li>
                        <li>Environmental compliance</li>
                        <li>Emission control</li>
                        <li>Safety features</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

             <!-- Filters -->
             <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Filters</div>
                    <h3 class="product-title">DANGER Fuel Filters</h3>
                    <p class="product-description">Professional fuel filters for clean fuel transfer and engine protection in fuel systems.</p>
                    <ul class="product-features">
                        <li>High filtration efficiency</li>
                        <li>Engine protection</li>
                        <li>Various micron ratings</li>
                        <li>Durable construction</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <!-- Meters & Registers -->
            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Meters & Registers</div>
                    <h3 class="product-title">Fuel Truck Meter Register Valve</h3>
                    <p class="product-description">Complete meter register valve assembly for fuel truck applications with accurate measurement.</p>
                    <ul class="product-features">
                        <li>Truck-mounted design</li>
                        <li>Accurate registration</li>
                        <li>Valve integration</li>
                        <li>Heavy-duty construction</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Meters</div>
                    <h3 class="product-title">Flowmeter</h3>
                    <p class="product-description">Precision flowmeters for accurate fuel measurement and inventory control.</p>
                    <ul class="product-features">
                        <li>High accuracy</li>
                        <li>Digital display options</li>
                        <li>Multiple fluid types</li>
                        <li>Calibration certified</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Control Systems</div>
                    <h3 class="product-title">Pulser</h3>
                    <p class="product-description">Electronic pulse transmitter for flow measurement integration with control systems.</p>
                    <ul class="product-features">
                        <li>Electronic pulse output</li>
                        <li>System integration</li>
                        <li>Accurate signal transmission</li>
                        <li>Reliable operation</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Control Systems</div>
                    <h3 class="product-title">Controller Assembly</h3>
                    <p class="product-description">Complete controller assembly for fuel system automation and monitoring.</p>
                    <ul class="product-features">
                        <li>System automation</li>
                        <li>Monitoring capabilities</li>
                        <li>Multiple input/output</li>
                        <li>User-friendly interface</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

              <!-- Tank Monitoring -->
              <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Tank Monitoring</div>
                    <h3 class="product-title">Electronic Tank Level Gauges</h3>
                    <p class="product-description">Electronic tank level monitoring systems for underground fuel storage tanks with digital displays.</p>
                    <ul class="product-features">
                        <li>Real-time level monitoring</li>
                        <li>Digital display</li>
                        <li>Underground tank compatible</li>
                        <li>Accurate measurement</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

             <!-- Testing Equipment -->
             <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Testing Equipment</div>
                    <h3 class="product-title">Kolor Kut Water Finding Paste</h3>
                    <p class="product-description">Water detection paste for testing fuel tank contamination - changes color when it contacts water.</p>
                    <ul class="product-features">
                        <li>Water contamination detection</li>
                        <li>Color-changing indicator</li>
                        <li>Easy application</li>
                        <li>Reliable results</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Testing Equipment</div>
                    <h3 class="product-title">Fuel Sampling Equipment</h3>
                    <p class="product-description">Stainless steel fuel sampling devices with graduated glass tubes for fuel quality testing and analysis.</p>
                    <ul class="product-features">
                        <li>Stainless steel construction</li>
                        <li>Graduated glass tubes</li>
                        <li>Multiple sizes available</li>
                        <li>Laboratory quality testing</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <!-- Piping Systems -->
            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Piping Systems</div>
                    <h3 class="product-title">Fuel System Pipes and Fittings</h3>
                    <p class="product-description">Specialized green fuel-rated pipes, elbows, couplings, and fittings for underground fuel piping systems.</p>
                    <ul class="product-features">
                        <li>Fuel-rated materials</li>
                        <li>Underground applications</li>
                        <li>Double-wall options</li>
                        <li>Complete fitting range</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            
            <!-- Valves & Fittings -->
            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Valves</div>
                    <h3 class="product-title">Solenoid Valve</h3>
                    <p class="product-description">Electronic solenoid valves for automated fuel system control and safety applications.</p>
                    <ul class="product-features">
                        <li>Electronic operation</li>
                        <li>Quick response</li>
                        <li>Various voltage options</li>
                        <li>Fail-safe design</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fittings</div>
                    <h3 class="product-title">Universal Joint</h3>
                    <p class="product-description">High-quality universal joints for flexible connections in fuel handling systems.</p>
                    <ul class="product-features">
                        <li>Flexible connection</li>
                        <li>Stainless steel construction</li>
                        <li>Various sizes</li>
                        <li>Corrosion resistant</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fittings</div>
                    <h3 class="product-title">Swivel</h3>
                    <p class="product-description">Rotating swivel joints for hose connections allowing 360-degree rotation.</p>
                    <ul class="product-features">
                        <li>360-degree rotation</li>
                        <li>Leak-proof seals</li>
                        <li>Various thread sizes</li>
                        <li>Durable materials</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>



            <!-- LPG Equipment -->
            <div class="product-card" data-category="lpg">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">LPG Equipment</div>
                    <h3 class="product-title">LPG Separator</h3>
                    <p class="product-description">High-quality LPG separator for gas-liquid separation in LPG systems.</p>
                    <ul class="product-features">
                        <li>Gas-liquid separation</li>
                        <li>Pressure rated</li>
                        <li>Safety certified</li>
                        <li>Durable construction</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="lpg">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">LPG Equipment</div>
                    <h3 class="product-title">LPG Flowmeter</h3>
                    <p class="product-description">Specialized flowmeter designed for accurate LPG measurement and dispensing applications.</p>
                    <ul class="product-features">
                        <li>LPG optimized</li>
                        <li>High accuracy</li>
                        <li>Pressure compensation</li>
                        <li>Temperature correction</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="lpg">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">LPG Safety</div>
                    <h3 class="product-title">LPG Safety & Differential Valve</h3>
                    <p class="product-description">Essential safety and differential valve for LPG systems with pressure regulation.</p>
                    <ul class="product-features">
                        <li>Safety compliance</li>
                        <li>Pressure differential control</li>
                        <li>Emergency shut-off</li>
                        <li>Certified components</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <!-- Valves & Fittings -->
            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Valves</div>
                    <h3 class="product-title">Solenoid Valve</h3>
                    <p class="product-description">Electronic solenoid valves for automated fuel system control and safety applications.</p>
                    <ul class="product-features">
                        <li>Electronic operation</li>
                        <li>Quick response</li>
                        <li>Various voltage options</li>
                        <li>Fail-safe design</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fittings</div>
                    <h3 class="product-title">Universal Joint</h3>
                    <p class="product-description">High-quality universal joints for flexible connections in fuel handling systems.</p>
                    <ul class="product-features">
                        <li>Flexible connection</li>
                        <li>Stainless steel construction</li>
                        <li>Various sizes</li>
                        <li>Corrosion resistant</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-category="accessories">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fittings</div>
                    <h3 class="product-title">Swivel</h3>
                    <p class="product-description">Rotating swivel joints for hose connections allowing 360-degree rotation.</p>
                    <ul class="product-features">
                        <li>360-degree rotation</li>
                        <li>Leak-proof seals</li>
                        <li>Various thread sizes</li>
                        <li>Durable materials</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>

            <!-- Safety Equipment -->
            <div class="product-card" data-category="safety">
                <div class="status-badge status-available">Available</div>
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Safety Equipment</div>
                    <h3 class="product-title">Breakaway</h3>
                    <p class="product-description">Safety breakaway coupling for fuel hoses to prevent damage during accidental disconnection.</p>
                    <ul class="product-features">
                        <li>Safety protection</li>
                        <li>Automatic shut-off</li>
                        <li>Prevents spills</li>
                        <li>Easy reconnection</li>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price">Contact Us</div>
                        <button class="inquire-btn">Inquire Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="floating-contact" title="Contact Sales">
        📞
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Forecourt Management Solutions</h3>
                    <p>Your trusted partner for fuel handling equipment services across Zimbabwe. Professional, reliable, and certified.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="#services" style="color: #94a3b8; text-decoration: none;">Services</a><br>
                    <a href="#about" style="color: #94a3b8; text-decoration: none;">About Us</a><br>
                    <a href="#contact" style="color: #94a3b8; text-decoration: none;">Contact</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p>
                        Stand No 17044 Carlton Road<br>
                        Graniteside, Harare<br>
                        +263 785 862 182
                    </p>
                    
                    <div class="social-icons">
                        <a href="https://wa.me/263785862182" target="_blank" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://facebook.com/YourPageUsername" target="_blank" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Forecourt Management Solutions. All rights reserved. | Professional Fuel Handling Equipment Services</p>
                <p> Website by Allison Machaka  +26377 2131 956</p>
            </div>
            
        </div>
    </footer>

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const category = button.dataset.category;

                productCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                        card.style.animation = 'slideInScale 0.6s ease-out';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        document.querySelectorAll('.inquire-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const productCard = e.target.closest('.product-card');
                const productTitle = productCard.querySelector('.product-title').textContent;

                const inquiryMessage = `Hello, I'm interested in: ${productTitle}`;
                const whatsappNumber = '263785862182';
                const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(inquiryMessage)}`;

                // Redirect to WhatsApp
                window.open(whatsappURL, '_blank');
            });
        });


       // Floating contact button
        document.querySelector('.floating-contact').addEventListener('click', () => {
            window.location.href = 'tel:+263785862182';
        });
        // Add some interactive animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all product cards for scroll animations
        productCards.forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>