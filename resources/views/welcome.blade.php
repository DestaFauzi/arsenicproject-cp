<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arsenic Projects - Innovative software solutions for complex business challenges.">
    <meta name="keywords" content="software development, web development, mobile apps, cloud solutions, AI, machine learning">
    <meta name="author" content="Arsenic Projects">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Arsenic Projects | Software Development Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary: #05d593;
            --primary-dark: #04b87d;
            --dark: #121212;
            --darker: #0a0a0a;
            --light: #f8f9fa;
            --gray: #2a2a2a;
            --light-gray: #e9ecef;
        }
        
        h4, h5, h6 {
            font-weight: 600;
            color: var(--primary);
        }
         
        p {
            color: rgba(255, 255, 255, 0.8);
        }
        
        body {
            background-color: var(--dark);
            color: white;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            overflow-x: hidden;
        }
        
        /* Navigation */
        .navbar {
            background-color: rgba(10, 10, 10, 0.98);
            padding: 20px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: white;
            letter-spacing: -0.5px;
        }
        
        .navbar-brand span {
            color: var(--primary);
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            margin: 0 8px;
            font-weight: 500;
            position: relative;
            padding: 8px 0;
            font-size: 0.95rem;
        }
        
        .nav-link:hover, .nav-link.active {
            color: white;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after, .nav-link.active:after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(5, 213, 147, 0.1) 0%, rgba(10, 10, 10, 0.9) 100%), 
                        url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .hero-content {
            max-width: 700px;
        }
        
        .hero h1 {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
            letter-spacing: -0.5px;
        }
        
        .hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 600px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border: none;
            color: var(--dark);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }
        
        .btn-primary:hover {
            background-color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(5, 213, 147, 0.3);
        }
        
        .btn-outline-primary {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(5, 213, 147, 0.2);
        }
        
        /* Sections */
        .section {
            padding: 100px 0;
        }
        
        .section-title {
            font-size: 2.3rem;
            font-weight: 800;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
            letter-spacing: -0.5px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }
        
        .card {
            background-color: var(--gray);
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        .card-body {
            padding: 30px;
        }
        
        .card-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        /* Tech Stack */
        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        
        .tech-item {
            background: rgba(5, 213, 147, 0.1);
            color: var(--primary);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        /* About Section */
        .about-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        /* Stats */
        .stats {
            background-color: var(--primary);
            color: var(--dark);
            padding: 80px 0;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
        }
        
        /* Process */
        .process-step {
            position: relative;
            padding-left: 30px;
            margin-bottom: 40px;
        }
        
        .process-step:before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 15px;
            height: 15px;
            background: var(--primary);
            border-radius: 50%;
        }
        
        .process-step:after {
            content: '';
            position: absolute;
            left: 7px;
            top: 20px;
            width: 1px;
            height: calc(100% - 15px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .process-step:last-child:after {
            display: none;
        }
        
        /* Footer */
        footer {
            background-color: var(--darker);
            padding: 80px 0 30px;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            display: inline-block;
            letter-spacing: -0.5px;
        }
        
        .footer-links h5 {
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .footer-links h5:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary);
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            display: block;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--gray);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--primary);
            color: var(--dark);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 50px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
        }
        
        /* Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        /* CEO Section */
        .ceo-img {
            border-radius: 80px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .ceo-badge {
            width: 40px;
            height: 40px;
            background-color: rgba(5, 213, 147, 0.1);
            border-radius: 70%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .ceo-badge i {
            color: var(--primary);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ARSENIC <span>PROJECTS</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ceo">Leadership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tech">Technologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="login" style="color: var(--primary); font-weight: 600;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Building Digital <span style="color: var(--primary);">Solutions</span> That Matter</h1>
                        <p>Arsenic Projects delivers cutting-edge software development services. We transform ideas into scalable, high-performance digital products with clean code and innovative approaches.</p>
                        <div class="d-flex gap-3">
                            <a href="#contact" class="btn btn-primary">Get Started</a>
                            <a href="#projects" class="btn btn-outline-primary">Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="img-fluid floating" alt="Code Illustration" style="border-radius: 20px; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">About Our Company</h2>
                    <p class="mb-4">Founded in 2022, Arsenic Projects has established itself as a premier software development partner for startups and enterprises alike. Our team of expert developers, designers, and strategists work together to deliver exceptional digital products.</p>
                    <p>We believe in sustainable development practices, clean code architecture, and user-centric design to create solutions that stand the test of time.</p>
                    
                    <div class="row mt-5">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <i class="fas fa-code me-3" style="color: var(--primary); font-size: 1.5rem;"></i>
                                <div>
                                    <h5>Clean Code</h5>
                                    <p>Maintainable, scalable codebase</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt me-3" style="color: var(--primary); font-size: 1.5rem;"></i>
                                <div>
                                    <h5>Secure</h5>
                                    <p>Enterprise-grade security</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <i class="fas fa-rocket me-3" style="color: var(--primary); font-size: 1.5rem;"></i>
                                <div>
                                    <h5>Fast Delivery</h5>
                                    <p>Agile development process</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <i class="fas fa-headset me-3" style="color: var(--primary); font-size: 1.5rem;"></i>
                                <div>
                                    <h5>24/7 Support</h5>
                                    <p>Dedicated maintenance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Our Team" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CEO Section -->
    <section id="ceo" class="section bg-darker">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Meet Our Founder</h2>
                <p class="lead">The visionary behind Arsenic Projects</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="ceo-img">
                        <img src="img/ceo.png" 
                             alt="CEO of Arsenic Projects" 
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3 style="font-weight: 700; margin-bottom: 20px;">Desta Fauzi Hariyanto</h3>
                    <h5 style="color: var(--primary); margin-bottom: 25px;">CEO & Founder of Arsenic Projects</h5>

                    <p style="margin-bottom: 20px;">With more than 5 years of experience in software development and technology leadership, Desta Fauzi founded Arsenic Projects in 2022. His vision is to build a company that delivers exceptional digital solutions while upholding the highest standards in terms of quality and innovation and ensuring cyber security and convenience.</p>

                    <p style="margin-bottom: 25px;">His technical expertise spans across multiple domains including enterprise software architecture, cloud computing, and artificial intelligence. Under his leadership, Arsenic Projects has grown from a small startup to a trusted partner for businesses worldwide.</p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="ceo-badge">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h6 style="margin-bottom: 0;">5+ Years Experience</h6>
                                    <small>In software industry</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="ceo-badge">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div>
                                    <h6 style="margin-bottom: 0;">50+ Projects</h6>
                                    <small>Successfully delivered</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="ceo-badge">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h6 style="margin-bottom: 0;">20+ Team Members</h6>
                                    <small>Expert professionals</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://www.linkedin.com/in/destafauzi/" class="btn btn-outline-primary me-3" style="padding: 10px 20px;">
                            <i class="fab fa-linkedin-in me-2"></i> Connect
                        </a>
                        <a href="mailto:destafauzi@arsenicprojects.my.id" class="btn btn-primary" style="padding: 10px 20px;">
                            <i class="fas fa-envelope me-2"></i> Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Services</h2>
                <p class="lead">Comprehensive software solutions tailored to your business needs</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h4>Custom Software Development</h4>
                            <p>Tailored solutions designed specifically for your business requirements and workflows.</p>
                            <div class="tech-stack">
                                <span class="tech-item">.NET</span>
                                <span class="tech-item">Java</span>
                                <span class="tech-item">Python</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h4>Mobile App Development</h4>
                            <p>Cross-platform mobile applications with native performance and beautiful interfaces.</p>
                            <div class="tech-stack">
                                <span class="tech-item">Flutter</span>
                                <span class="tech-item">React Native</span>
                                <span class="tech-item">Swift</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h4>Web Development</h4>
                            <p>Responsive, high-performance web applications with modern frameworks.</p>
                            <div class="tech-stack">
                                <span class="tech-item">ERP</span>
                                <span class="tech-item">CMS</span>
                                <span class="tech-item">HRS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Cyber Security Solutions</h4>
                            <p>Protecting your digital assets with advanced security measures and protocols.</p>
                            <div class="tech-stack">
                                <span class="tech-item">Penetration Testing</span>
                                <span class="tech-item">Vulnerability Assessment</span>
                                <span class="tech-item">Security Audits</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <h4>Database Design</h4>
                            <p>Optimized database architectures for performance and scalability.</p>
                            <div class="tech-stack">
                                <span class="tech-item">MongoDB</span>
                                <span class="tech-item">PostgreSQL</span>
                                <span class="tech-item">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h4>AI & Machine Learning</h4>
                            <p>Intelligent systems that learn and adapt to your business needs.</p>
                            <div class="tech-stack">
                                <span class="tech-item">TensorFlow</span>
                                <span class="tech-item">PyTorch</span>
                                <span class="tech-item">NLP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech" class="section bg-darker">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Technology Stack</h2>
                <p class="lead">We work with cutting-edge technologies to deliver future-proof solutions</p>
            </div>
            
            <div class="row text-center">
                <div class="col">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" width="60" height="60" alt="React" class="img-fluid mb-3 tech-logo">
                    <h5>React</h5>
                </div>
                <div class="col">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" width="60" height="60" alt="Node.js" class="img-fluid mb-3 tech-logo">
                    <h5>Node.js</h5>
                </div>
                <div class="col">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" width="60" height="60" alt="Python" class="img-fluid mb-3 tech-logo">
                    <h5>Python</h5>
                </div>
                <div class="col">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dotnetcore/dotnetcore-original.svg" width="60" height="60" alt=".NET Core" class="img-fluid mb-3 tech-logo">
                    <h5>.NET Core</h5>
                </div>
                <div class="col">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" width="60" height="60" alt="Flutter" class="img-fluid mb-3 tech-logo">
                    <h5>Flutter</h5>
                </div>
                <div class="col">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aws/aws-original.svg" width="60" height="60" alt="AWS" class="img-fluid mb-3 tech-logo">
                    <h5>AWS</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section -->
    <section id="news" class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Latest News & Updates</h2>
                <p class="lead">Stay informed with our latest articles and insights</p>
            </div> 
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <h5>Understanding Agile Development</h5>
                            <p>Learn how Agile methodologies can enhance your software development process.</p>
                            <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="News 2">
                        <div class="card-body">
                            <h5>Top 5 Programming Languages in 2023</h5>
                            <p>Explore the most popular programming languages and their applications.</p>
                            <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="News 3">
                        <div class="card-body">
                            <h5>Cyber Security Best Practices</h5>
                            <p>Essential tips to protect your business from cyber threats.</p>
                            <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">View All News</a>
            </div>
        </div>
    </section>
    <!-- Process Section -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Development Process</h2>
                <p class="lead">A structured approach to ensure project success</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="process-step">
                        <h4>Discovery & Planning</h4>
                        <p>We start by understanding your business objectives, target audience, and technical requirements to create a comprehensive project roadmap.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4>UI/UX Design</h4>
                        <p>Our designers create intuitive user interfaces and seamless user experiences tailored to your users' needs.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4>Development</h4>
                        <p>Agile development process with regular iterations, code reviews, and quality assurance checks.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4>Testing & QA</h4>
                        <p>Rigorous testing across devices and platforms to ensure flawless performance and security.</p>
                    </div>
                    
                    <div class="process-step">
                        <h4>Deployment & Maintenance</h4>
                        <p>Seamless deployment with ongoing support, updates, and performance optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section bg-darker">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Featured Projects</h2>
                <p class="lead">Some of our recent successful implementations</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5>Enterprise SaaS Platform</h5>
                            <p>Cloud-based solution for enterprise resource planning with AI-powered analytics.</p>
                            <div class="tech-stack mb-3">
                                <span class="tech-item">React</span>
                                <span class="tech-item">Node.js</span>
                                <span class="tech-item">MongoDB</span>
                            </div>
                            <a href="#" class="text-primary">View Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5>Fintech Mobile App</h5>
                            <p>Cross-platform mobile banking application with biometric authentication.</p>
                            <div class="tech-stack mb-3">
                                <span class="tech-item">Flutter</span>
                                <span class="tech-item">Firebase</span>
                                <span class="tech-item">Node.js</span>
                            </div>
                            <a href="#" class="text-primary">View Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5>E-commerce Platform</h5>
                            <p>Scalable online marketplace with personalized recommendations.</p>
                            <div class="tech-stack mb-3">
                                <span class="tech-item">Vue.js</span>
                                <span class="tech-item">Laravel</span>
                                <span class="tech-item">MySQL</span>
                            </div>
                            <a href="#" class="text-primary">View Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="mb-5">Ready to start your next software project with us? Send us a message and we'll get back to you within 24 hours.</p>
                    
                    <div class="mb-4">
                        <div class="d-flex mb-3">
                            <i class="fas fa-phone-alt me-3" style="color: var(--primary); font-size: 1.5rem;"></i>
                            <div>
                                <h5>Call Us</h5>
                                <p>+62 859-3141-5505</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-envelope me-3" style="color: var(--primary); font-size: 1.5rem;"></i>
                            <div>
                                <h5>Email Us</h5>
                                <p>info@arsenicprojects.my.id</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" method="post">
                        <h3 class="mb-4">Contact Form</h3>
                        <div class="mb-3">
                            <input type="text" class="form-control bg-gray border-0 py-3" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control bg-gray border-0 py-3" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control bg-gray border-0 py-3" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control bg-gray border-0 py-3" rows="5" placeholder="Tell us about your project" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darker">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="footer-logo">ARSENIC <span style="color: var(--primary);">PROJECTS</span></div>
                    <p>Innovative software solutions for complex business challenges. We deliver excellence through cutting-edge technology and creative problem-solving.</p>
                    <div class="social-icons mt-4">
                        <a href="https://www.instagram.com/arsenic.projects?igsh=NXcybGgzODhxZ2h4&utm_source=qr"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <a href="#">Home</a>
                        <a href="#about">About Us</a>
                        <a href="#ceo">Leadership</a>
                        <a href="#services">Services</a>
                        <a href="#tech">Technologies</a>
                        <a href="#projects">Projects</a>
                        <a href="#contact">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="footer-links">
                        <h5>Services</h5>
                        <a href="#">Custom Software</a>
                        <a href="#">Mobile Apps</a>
                        <a href="#">Web Development</a>
                        <a href="#">Cloud Solutions</a>
                        <a href="#">AI/ML</a>
                        <a href="#">Consulting</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="footer-links">
                        <h5>Contact Info</h5>
                        <p><i class="fab fa-instagram me-2"></i> arsenic.projects</p>
                        <p><i class="fas fa-phone-alt me-2"></i> +62 859-3141-5505</p>
                        <p><i class="fas fa-envelope me-2"></i> info@arsenicprojects.my.id</p>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2023 Arsenic Projects. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.98)';
                navbar.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.2)';
                navbar.style.padding = '15px 0';
            } else {
                navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.98)';
                navbar.style.boxShadow = 'none';
                navbar.style.padding = '20px 0';
            }
        });
        
        // Animation for tech logos
        const techLogos = document.querySelectorAll('.tech-logo');
        techLogos.forEach(logo => {
            logo.addEventListener('mouseenter', () => {
                logo.style.transform = 'scale(1.1)';
            });
            logo.addEventListener('mouseleave', () => {
                logo.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>