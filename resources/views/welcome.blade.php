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

        /* Header & Navigation */
        .header {
            background: rgba(30, 58, 138, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            color: white;
            padding: 0.75rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: var(--transition);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .header.scrolled {
            background: rgba(30, 58, 138, 0.98);
            padding: 0.5rem 0;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: white;
        }

        .logo-text h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0;
        }

        .logo-text p {
            font-size: 0.8rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 25px;
        }

        .nav-menu a:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: var(--border-radius);
            transition: var(--transition);
            z-index: 1002;
        }

        .mobile-menu-toggle:hover {
            background: rgba(255, 255, 255, 0.1);
        }

       /* Hero Section */
.hero {
    background: linear-gradient(135deg, rgba(30, 58, 138, 0.9), rgba(59, 130, 246, 0.8)),
        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a"><stop offset="0" stop-color="%23ff6b35"/><stop offset="1" stop-color="%23f7931e"/></radialGradient></defs><rect width="1000" height="1000" fill="url(%23a)" opacity="0.1"/></svg>');
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    position: relative;
    padding: 2rem 1rem;
    text-align: center;
    overflow: hidden;
    margin-top: 80px;
}

.hero::before {
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

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.hero-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 2;
    width: 100%;
}

.hero-content h1 {
    font-size: clamp(2rem, 6vw, 3.5rem);
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
    background: linear-gradient(135deg, #ffffff, #f1f5f9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-content .highlight {
    color: #ff6b35;
    font-weight: 800;
    display: inline-block;
    margin-bottom: 0.3rem;
}

.hero-content p {
    font-size: clamp(1rem, 2.5vw, 1.3rem);
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
    padding: 0 0.5rem;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
}

.btn {
    padding: 1rem 2rem;
    border: none;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    justify-content: center;
    min-width: 150px;
}

.btn-primary {
    background: linear-gradient(135deg, #ff6b35, #f7931e);
    color: white;
    box-shadow: 0 4px 15px rgba(255, 107, 53, 0.4);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(255, 107, 53, 0.6);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-secondary:hover {
    background: white;
    color: #1e3a8a;
    transform: translateY(-3px);
}

.hero-visual {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .hero-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 100%;
        max-width: 280px;
    }

    .hero-visual {
        order: -1;
    }

    .hero-content h1 {
        font-size: clamp(1.8rem, 5.5vw, 2.5rem);
    }

    .hero-content p {
        font-size: 1.05rem;
    }
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

        /* Services Section */
        .services {
            padding: 6rem 0;
            background: #f8fafc;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 1rem;
        }

        .section-header p {
            font-size: 1.2rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: #64748b;
            line-height: 1.6;
        }

        /* About Section */
        .about {
            padding: 6rem 0;
            background: white;
        }

        .about-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 1.5rem;
        }

        .about-content p {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: #f8fafc;
            border-radius: 15px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ff6b35;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #64748b;
            font-weight: 500;
        }

        .about-visual {
            position: relative;
        }

        .about-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        /* Contact Section */
        .contact {
            padding: 6rem 0;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(10px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            padding: 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff6b35;
            background: rgba(255, 255, 255, 0.15);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
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

       /* Responsive Design */
@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: block;
    }

    .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #1e3a8a;
        flex-direction: column;
        padding: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .nav-menu.active {
        display: flex;
    }

    .hero-container {
        grid-template-columns: 1fr;
        text-align: center;
        padding: 2rem 1rem;
        gap: 2rem;
    }

    .hero-content {
        text-align: center;
    }

    .hero-content h1 {
        font-size: 2.2rem;
        line-height: 1.2;
    }

    .hero-content p {
        font-size: 1rem;
    }

    .hero-buttons {
        flex-direction: column;
        gap: 1rem;
        align-items: center;
        justify-content: center;
    }

    .fuel-pump-icon {
        width: 180px;
        height: 180px;
        font-size: 4rem;
        margin: 0 auto;
    }

    .about-container,
    .contact-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .services-grid {
        grid-template-columns: 1fr;
    }

    .stats {
        grid-template-columns: 1fr;
    }
}

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Loading Animation */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: loading 2s infinite;
        }

        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Projects Section */
        .projects {
            padding: 6rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .project-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
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

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .project-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.1);
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.9), rgba(59, 130, 246, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-info {
            text-align: center;
            color: white;
            padding: 2rem;
        }

        .project-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .project-info p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .view-project-btn {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .view-project-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-tag {
            display: inline-block;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .project-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 0.75rem;
        }

        .project-content p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .project-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.85rem;
            color: #94a3b8;
        }

        .project-meta span {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        /* Project Modal */
        .project-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .project-modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 20px;
            max-width: 800px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            overflow-x: hidden;
            scrollbar-width: none;
            position: relative;
            animation: modalSlideIn 0.3s ease;
        }

                /* Hide scrollbars - WebKit browsers (Chrome, Safari) */
        .modal-content::-webkit-scrollbar {
            display: none;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        

        .modal-header {
            padding: 2rem;
            border-bottom: 1px solid #e2e8f0;
            position: relative;
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #f1f5f9;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: #e2e8f0;
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 2rem;
        }

        .project-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .detail-item {
            background: #f8fafc;
            padding: 1rem;
            border-radius: 10px;
        }

        .detail-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .detail-value {
            color: #64748b;
        }
            padding: 6rem 0;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
        }
    

    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="nav-container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ URL::asset('logo.png') }}" alt="FORECOURT Logo" style="height: 60px; width: auto;">
                </a>
                <div class="logo-text">
                    <h1 style="margin: 0; font-size: 20px;">FORECOURT</h1>
                    <p style="margin: 0; font-size: 12px;">Management Solutions</p>
                </div>
            </div>
    
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="mobile-menu-toggle" id="mobileToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content fade-in">
                <h1><span class="highlight"></span><br>FUEL EQUIPMENT EXPERTS</h1>
                <p>Professional supply, installation, repair & calibration services for service stations across Zimbabwe. Your trusted partner in fuel infrastructure solutions.</p>
    
                <div class="hero-buttons">
                    <a href="#services" class="btn btn-primary">
                        <i class="fas fa-tools"></i>
                        Our Services
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        <i class="fas fa-phone"></i>
                        Get Quote
                    </a>
                </div>
            </div>
            <div class="hero-visual fade-in">
                <div class="fuel-pump-icon">
                    <i class="fas fa-gas-pump"></i>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header fade-in">
                <h2>Our Services</h2>
                <p>Comprehensive fuel handling equipment solutions delivered by certified professionals with years of industry experience.</p>
            </div>
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Tank Calibration</h3>
                    <p>Precision calibration services for storage tanks and road tankers ensuring accurate fuel measurements and regulatory compliance.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Flowmeter & Dispenser Calibration</h3>
                    <p>Professional calibration of fuel dispensers and flowmeters to maintain accuracy and meet legal metrology standards.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Leak & Pressure Testing</h3>
                    <p>Advanced acoustic technology for comprehensive leak detection and pressure testing to ensure system integrity and safety.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-spray-can"></i>
                    </div>
                    <h3>Tank Cleaning & Fuel Transshipment</h3>
                    <p>Professional tank cleaning services and safe fuel transfer operations maintaining the highest safety and environmental standards.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-pump-soap"></i>
                    </div>
                    <h3>Fuel Pumps & Dispensers</h3>
                    <p>Supply, installation, and maintenance of fuel pumps, dispensers, and submersible pump systems for optimal performance.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electrical Work</h3>
                    <p>Complete commercial and domestic electrical solutions including installation, maintenance, and emergency repairs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <div class="container">
            <div class="section-header fade-in">
                <h2>Our Recent Projects</h2>
                <p>Explore our portfolio of successful fuel handling equipment installations, calibrations, and service station projects across Zimbabwe.</p>
            </div>
            
            <!-- Project Filter -->
            <div class="project-filters fade-in">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="construction">Construction</button>
                <button class="filter-btn" data-filter="calibration">Calibration</button>
                <button class="filter-btn" data-filter="installation">Installation</button>
                <button class="filter-btn" data-filter="maintenance">Maintenance</button>
            </div>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card fade-in" data-category="construction">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=600&h=400&fit=crop&crop=center" alt="Service Station Construction" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Modern Service Station Build</h3>
                                <p>Complete construction and equipment installation</p>
                                <button class="view-project-btn" onclick="openProjectModal('project1')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Construction</span>
                        <h3>Harare Central Service Station</h3>
                        <p>Full service station construction with modern fuel dispensers and underground tank installation.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> March 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Harare</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card fade-in" data-category="calibration">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&h=400&fit=crop&crop=center" alt="Tank Calibration" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Precision Tank Calibration</h3>
                                <p>Advanced acoustic technology calibration</p>
                                <button class="view-project-btn" onclick="openProjectModal('project2')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Calibration</span>
                        <h3>Storage Tank Calibration - Chitungwiza</h3>
                        <p>Precision calibration of 50,000L underground storage tanks using acoustic measurement technology.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> February 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Chitungwiza</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card fade-in" data-category="installation">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1628744448840-55bdb2497bd4?w=600&h=400&fit=crop&crop=center" alt="Fuel Dispenser Installation" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Fuel Dispenser Installation</h3>
                                <p>Modern multi-product dispensers</p>
                                <button class="view-project-btn" onclick="openProjectModal('project3')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Installation</span>
                        <h3>Multi-Product Dispenser Setup</h3>
                        <p>Installation of 8 modern fuel dispensers with electronic payment systems and leak detection.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> January 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Bulawayo</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card fade-in" data-category="maintenance">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1485230405346-71acb9518d9c?w=600&h=400&fit=crop&crop=center" alt="Pump Maintenance" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Submersible Pump Service</h3>
                                <p>Complete pump overhaul and testing</p>
                                <button class="view-project-btn" onclick="openProjectModal('project4')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Maintenance</span>
                        <h3>Submersible Pump Overhaul</h3>
                        <p>Complete maintenance and replacement of submersible pumps with performance testing.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> December 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Mutare</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card fade-in" data-category="calibration">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop&crop=center" alt="Flowmeter Calibration" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Flowmeter Calibration</h3>
                                <p>Precision measurement compliance</p>
                                <button class="view-project-btn" onclick="openProjectModal('project5')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Calibration</span>
                        <h3>Flowmeter Precision Calibration</h3>
                        <p>Calibration of electronic flowmeters for accurate fuel measurement and legal compliance.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> November 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Gweru</span>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card fade-in" data-category="construction">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=600&h=400&fit=crop&crop=center" alt="Tank Installation" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Underground Tank Installation</h3>
                                <p>Environmental safety compliance</p>
                                <button class="view-project-btn" onclick="openProjectModal('project6')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Construction</span>
                        <h3>Underground Storage Tank Project</h3>
                        <p>Installation of double-wall underground tanks with environmental monitoring systems.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> October 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Marondera</span>
                        </div>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="project-card fade-in" data-category="maintenance">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=600&h=400&fit=crop&crop=center" alt="Leak Testing" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Leak Detection Service</h3>
                                <p>Advanced acoustic technology</p>
                                <button class="view-project-btn" onclick="openProjectModal('project7')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Maintenance</span>
                        <h3>Comprehensive Leak Testing</h3>
                        <p>Advanced acoustic leak detection and pressure testing for underground storage systems.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> September 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Kadoma</span>
                        </div>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="project-card fade-in" data-category="installation">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=400&fit=crop&crop=center" alt="Electrical Installation" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Electrical System Setup</h3>
                                <p>Complete power distribution</p>
                                <button class="view-project-btn" onclick="openProjectModal('project8')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Installation</span>
                        <h3>Service Station Electrical Work</h3>
                        <p>Complete electrical installation including lighting, power distribution, and safety systems.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> August 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Kwekwe</span>
                        </div>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="project-card fade-in" data-category="maintenance">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1581092162384-8987c1d64718?w=600&h=400&fit=crop&crop=center" alt="Tank Cleaning" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Tank Cleaning Service</h3>
                                <p>Environmental compliance</p>
                                <button class="view-project-btn" onclick="openProjectModal('project9')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Maintenance</span>
                        <h3>Professional Tank Cleaning</h3>
                        <p>Complete tank cleaning and fuel transshipment with environmental safety protocols.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> July 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Norton</span>
                        </div>
                    </div>
                </div>

                <!-- Project 10 -->
                <div class="project-card fade-in" data-category="construction">
                    <div class="project-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU-5XFa_xDs8r-SWp--0sG1COjNiwEi_bWUA&s" alt="Service Station Renovation" loading="lazy">
                        <div class="project-overlay">
                            <div class="project-info">
                                <h3>Station Modernization</h3>
                                <p>Complete renovation project</p>
                                <button class="view-project-btn" onclick="openProjectModal('project10')">
                                    <i class="fas fa-eye"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-tag">Construction</span>
                        <h3>Service Station Renovation</h3>
                        <p>Complete modernization of existing service station with new equipment and safety upgrades.</p>
                        <div class="project-meta">
                            <span><i class="fas fa-calendar"></i> June 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> Chinhoyi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center fade-in" style="margin-top: 3rem;">
                <button class="btn btn-secondary" id="loadMoreBtn">
                    <i class="fas fa-plus"></i>
                    Load More Projects
                </button>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-container">
                <div class="about-content fade-in">
                    <h2>Why Choose Forecourt Management Solutions?</h2>
                    <p>With years of experience in the fuel handling industry, we provide comprehensive solutions that ensure safety, accuracy, and compliance. Our certified technicians use the latest technology and follow international standards to deliver exceptional results.</p>
                    <p>From small service stations to large fuel depots, we have the expertise and equipment to handle projects of any scale. Our commitment to quality and customer satisfaction has made us a trusted partner across Zimbabwe.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">200+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">99%</div>
                            <div class="stat-label">Client Satisfaction</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Support Available</div>
                        </div>
                    </div>
                </div>
                <div class="about-visual fade-in">
                    <div class="about-image">
                        <i class="fas fa-industry"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info fade-in">
                    <h2>Get In Touch</h2>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>Phone Numbers</h4>
                            <p>+263 785 862 182<br>+263 782 287 162</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email Address</h4>
                            <p><a href="mailto:Mukorokojames60@gmail.com">Mukorokojames60@gmail.com</a></p>
                            <p><a href="mailto:ngwenyasheunesu17@gmail.com">ngwenyasheunesu17@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Office Location</h4>
                            <p>Stand No 17044 Carlton Road<br>Graniteside, Harare</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form fade-in">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="service">Service Required</label>
                            <input type="text" id="service" name="service" placeholder="e.g., Tank Calibration, Pump Installation" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Tell us about your project requirements" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Header scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu if open
                navMenu.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Contact form handling
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Show success message
                showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
                
                // Reset form
                this.reset();
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Notification system
        function showNotification(message, type = 'info') {
            // Remove existing notifications
            const existingNotifications = document.querySelectorAll('.notification');
            existingNotifications.forEach(notification => notification.remove());
            
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification notification-${type}`;
            notification.innerHTML = `
                <div class="notification-content">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
                    <span>${message}</span>
                    <button class="notification-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            
            // Add styles
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                z-index: 10000;
                background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
                color: white;
                padding: 1rem 1.5rem;
                border-radius: 10px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                transform: translateX(100%);
                transition: transform 0.3s ease;
                max-width: 400px;
                word-wrap: break-word;
            `;
            
            notification.querySelector('.notification-content').style.cssText = `
                display: flex;
                align-items: center;
                gap: 10px;
            `;
            
            notification.querySelector('.notification-close').style.cssText = `
                background: none;
                border: none;
                color: white;
                cursor: pointer;
                padding: 0;
                margin-left: auto;
                opacity: 0.8;
                transition: opacity 0.3s ease;
            `;
            
            // Add to DOM
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Close button functionality
            notification.querySelector('.notification-close').addEventListener('click', () => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => notification.remove(), 300);
            });
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.style.transform = 'translateX(100%)';
                    setTimeout(() => notification.remove(), 300);
                }
            }, 5000);
        }

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/\D/g, ''));
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (counter.textContent.includes('+')) {
                            counter.textContent = Math.ceil(current) + '+';
                        } else if (counter.textContent.includes('%')) {
                            counter.textContent = Math.ceil(current) + '%';
                        } else if (counter.textContent.includes('/')) {
                            counter.textContent = '24/7';
                        } else {
                            counter.textContent = Math.ceil(current) + '+';
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = counter.textContent;
                    }
                };
                
                updateCounter();
            });
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.5;
            
            if (hero) {
                hero.style.transform = `translateY(${rate}px)`;
            }
        });

        // Service card hover effects
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.background = 'linear-gradient(135deg, #f8fafc, #ffffff)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.background = 'white';
            });
        });

        // Add loading animation to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (!this.classList.contains('loading')) {
                    this.classList.add('loading');
                    setTimeout(() => {
                        this.classList.remove('loading');
                    }, 1000);
                }
            });
        });

        // Lazy loading for images (if any are added later)
        const lazyImages = document.querySelectorAll('img[data-src]');
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));

        // Add typing effect to hero title
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            
            type();
        }

        // Initialize typing effect when page loads
        window.addEventListener('load', () => {
            const heroTitle = document.querySelector('.hero-content h1');
            if (heroTitle) {
                const originalText = heroTitle.innerHTML;
                setTimeout(() => {
                    typeWriter(heroTitle, originalText.replace(/<[^>]*>/g, ''), 50);
                }, 1000);
            }
        });

        // Add scroll progress indicator
        function addScrollProgress() {
            const progressBar = document.createElement('div');
            progressBar.id = 'scroll-progress';
            progressBar.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 4px;
                background: linear-gradient(90deg, #ff6b35, #f7931e);
                z-index: 10000;
                transition: width 0.3s ease;
            `;
            document.body.appendChild(progressBar);

            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                progressBar.style.width = scrolled + '%';
            });
        }

        // Initialize scroll progress
        addScrollProgress();

        // Add back to top button
        function addBackToTop() {
            const backToTopBtn = document.createElement('button');
            backToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
            backToTopBtn.className = 'back-to-top';
            backToTopBtn.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, #ff6b35, #f7931e);
                color: white;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                font-size: 1.2rem;
                box-shadow: 0 4px 15px rgba(255, 107, 53, 0.4);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 1000;
            `;
            
            document.body.appendChild(backToTopBtn);

            // Show/hide button based on scroll
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopBtn.style.opacity = '1';
                    backToTopBtn.style.visibility = 'visible';
                } else {
                    backToTopBtn.style.opacity = '0';
                    backToTopBtn.style.visibility = 'hidden';
                }
            });

            // Scroll to top functionality
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Hover effects
            backToTopBtn.addEventListener('mouseenter', () => {
                backToTopBtn.style.transform = 'translateY(-5px) scale(1.1)';
                backToTopBtn.style.boxShadow = '0 8px 25px rgba(255, 107, 53, 0.6)';
            });

            backToTopBtn.addEventListener('mouseleave', () => {
                backToTopBtn.style.transform = 'translateY(0) scale(1)';
                backToTopBtn.style.boxShadow = '0 4px 15px rgba(255, 107, 53, 0.4)';
            });
        }

        // Initialize back to top button
        addBackToTop();

        // Project filtering functionality
        function initProjectFilters() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    btn.classList.add('active');

                    const filter = btn.getAttribute('data-filter');

                    projectCards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        
                        if (filter === 'all' || category === filter) {
                            card.style.display = 'block';
                            card.style.animation = 'fadeInUp 0.5s ease';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }

        // Project modal functionality
        function openProjectModal(projectId) {
            const projectData = {
                project1: {
                    title: "Harare Central Service Station",
                    category: "Construction",
                    image: "https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=800&h=400&fit=crop&crop=center",
                    description: "Complete construction and equipment installation of a modern service station featuring state-of-the-art fuel dispensers, underground storage tanks, and comprehensive safety systems.",
                    details: {
                        "Project Duration": "6 months",
                        "Tank Capacity": "100,000L",
                        "Number of Dispensers": "8 units",
                        "Safety Features": "Leak detection, Fire suppression",
                        "Completion Date": "March 2024"
                    }
                },
                project2: {
                    title: "Storage Tank Calibration - Chitungwiza",
                    category: "Calibration",
                    image: "https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&h=400&fit=crop&crop=center",
                    description: "Precision calibration of underground storage tanks using advanced acoustic measurement technology to ensure accurate fuel volume calculations and regulatory compliance.",
                    details: {
                        "Tank Type": "Underground Storage",
                        "Calibration Method": "Acoustic Technology",
                        "Tank Capacity": "50,000L",
                        "Accuracy Level": "±0.2%",
                        "Completion Date": "February 2024"
                    }
                },
                project3: {
                    title: "Multi-Product Dispenser Setup",
                    category: "Installation",
                    image: "https://images.unsplash.com/photo-1628744448840-55bdb2497bd4?w=800&h=400&fit=crop&crop=center",
                    description: "Installation of modern multi-product fuel dispensers with electronic payment systems, flow meters, and integrated leak detection systems.",
                    details: {
                        "Dispenser Count": "8 units",
                        "Product Types": "Petrol, Diesel, Blend",
                        "Payment Systems": "Electronic POS",
                        "Flow Rate": "40L/min",
                        "Completion Date": "January 2024"
                    }
                },
                project4: {
                    title: "Submersible Pump Overhaul",
                    category: "Maintenance",
                    image: "https://images.unsplash.com/photo-1485230405346-71acb9518d9c?w=800&h=400&fit=crop&crop=center",
                    description: "Complete maintenance and replacement of submersible fuel pumps including performance testing and system optimization.",
                    details: {
                        "Pump Type": "Submersible Turbine",
                        "Flow Rate": "200L/min",
                        "Depth": "3 meters",
                        "Motor Power": "2.2kW",
                        "Completion Date": "December 2023"
                    }
                },
                project5: {
                    title: "Flowmeter Precision Calibration",
                    category: "Calibration",
                    image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=400&fit=crop&crop=center",
                    description: "Calibration of electronic flowmeters for accurate fuel measurement ensuring legal compliance and customer trust.",
                    details: {
                        "Flowmeter Type": "Electronic Digital",
                        "Calibration Standard": "OIML R117",
                        "Accuracy Class": "Class 0.3",
                        "Flow Range": "5-50 L/min",
                        "Completion Date": "November 2023"
                    }
                },
                project6: {
                    title: "Underground Storage Tank Project",
                    category: "Construction",
                    image: "https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=800&h=400&fit=crop&crop=center",
                    description: "Installation of double-wall underground storage tanks with environmental monitoring systems and leak detection.",
                    details: {
                        "Tank Type": "Double-wall fiberglass",
                        "Total Capacity": "120,000L",
                        "Environmental Monitoring": "Continuous",
                        "Leak Detection": "Interstitial monitoring",
                        "Completion Date": "October 2023"
                    }
                },
                project7: {
                    title: "Comprehensive Leak Testing",
                    category: "Maintenance",
                    image: "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800&h=400&fit=crop&crop=center",
                    description: "Advanced acoustic leak detection and pressure testing for underground storage systems ensuring environmental safety.",
                    details: {
                        "Testing Method": "Acoustic leak detection",
                        "Pressure Test": "1.5 bar for 24 hours",
                        "Detection Sensitivity": "0.1 L/hour",
                        "System Coverage": "Complete fuel system",
                        "Completion Date": "September 2023"
                    }
                },
                project8: {
                    title: "Service Station Electrical Work",
                    category: "Installation",
                    image: "https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=400&fit=crop&crop=center",
                    description: "Complete electrical installation including lighting, power distribution, emergency systems, and safety controls.",
                    details: {
                        "Power Supply": "3-phase 415V",
                        "Emergency Systems": "Fire suppression control",
                        "Lighting": "LED explosion-proof",
                        "Safety Features": "Emergency shutdown",
                        "Completion Date": "August 2023"
                    }
                },
                project9: {
                    title: "Professional Tank Cleaning",
                    category: "Maintenance",
                    image: "https://images.unsplash.com/photo-1581092162384-8987c1d64718?w=800&h=400&fit=crop&crop=center",
                    description: "Complete tank cleaning and fuel transshipment service with environmental safety protocols and waste management.",
                    details: {
                        "Cleaning Method": "Mechanical & Chemical",
                        "Fuel Transfer": "Safe transshipment",
                        "Environmental Compliance": "Full protocol",
                        "Waste Management": "Certified disposal",
                        "Completion Date": "July 2023"
                    }
                },
                project10: {
                    title: "Service Station Renovation",
                    category: "Construction",
                    image: "https://images.unsplash.com/photo-1558882142-42c363817b10?w=800&h=400&fit=crop&crop=center",
                    description: "Complete modernization of existing service station with equipment upgrades, safety improvements, and efficiency enhancements.",
                    details: {
                        "Renovation Scope": "Complete modernization",
                        "Equipment Upgraded": "All dispensers & pumps",
                        "Safety Upgrades": "Fire suppression, leak detection",
                        "Efficiency Gains": "30% improvement",
                        "Completion Date": "June 2023"
                    }
                }
            };

            const project = projectData[projectId];
            if (!project) return;

            // Create modal if it doesn't exist
            let modal = document.getElementById('projectModal');
            if (!modal) {
                modal = document.createElement('div');
                modal.id = 'projectModal';
                modal.className = 'project-modal';
                document.body.appendChild(modal);
            }

            // Populate modal content
            modal.innerHTML = `
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>${project.title}</h2>
                        <button class="modal-close" onclick="closeProjectModal()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="${project.image}" alt="${project.title}" class="modal-image">
                        <span class="project-tag">${project.category}</span>
                        <p style="margin-top: 1rem; line-height: 1.6; color: #64748b;">${project.description}</p>
                        
                        <div class="project-details">
                            ${Object.entries(project.details).map(([key, value]) => `
                                <div class="detail-item">
                                    <div class="detail-label">${key}</div>
                                    <div class="detail-value">${value}</div>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                </div>
            `;

            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        document.addEventListener('click', (e) => {
            const modal = document.getElementById('projectModal');
            if (modal && e.target === modal) {
                closeProjectModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeProjectModal();
            }
        });

        // Load more projects functionality
        let currentProjectCount = 6;
        function initLoadMore() {
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            const projectCards = document.querySelectorAll('.project-card');
            
            // Initially hide projects beyond the first 6
            projectCards.forEach((card, index) => {
                if (index >= currentProjectCount) {
                    card.style.display = 'none';
                }
            });

            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', () => {
                    const hiddenCards = Array.from(projectCards).filter(card =>
                        card.style.display === 'none'
                    );
                    
                    // Show next 3 projects
                    hiddenCards.slice(0, 3).forEach(card => {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInUp 0.5s ease';
                    });
                    
                    currentProjectCount += 3;
                    
                    // Hide load more button if all projects are shown
                    if (currentProjectCount >= projectCards.length) {
                        loadMoreBtn.style.display = 'none';
                    }
                });
            }
        }

        // Add fade in up animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize project functionality
        document.addEventListener('DOMContentLoaded', () => {
            initProjectFilters();
            initLoadMore();
        });

        // Make openProjectModal global
        window.openProjectModal = openProjectModal;
        window.closeProjectModal = closeProjectModal;

        // Performance optimization: Debounce scroll events
        function debounce(func, wait, immediate) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    timeout = null;
                    if (!immediate) func(...args);
                };
                const callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func(...args);
            };
        }

        // Apply debouncing to scroll events
        const debouncedScroll = debounce(() => {
            // Existing scroll logic here
        }, 16); // ~60fps

        window.addEventListener('scroll', debouncedScroll);

        // Console welcome message
        console.log(`
        %c🚀 Welcome to Forecourt Management Solutions!
        %c
        Professional fuel handling equipment services.
        Built with modern web technologies for optimal performance.
        
        Need help? Contact us at: Mukorokojames60@gmail.com
        `,
        'color: #ff6b35; font-size: 16px; font-weight: bold;',
        'color: #64748b; font-size: 12px;'
        );
    </script>
</body>
</html>
