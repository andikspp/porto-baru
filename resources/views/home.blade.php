<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andhika Pratama Putra - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary-color: #64748b;
            --accent-color: #f59e0b;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --border-color: #e2e8f0;
            --shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Modern Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
            padding: 1rem 0;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: var(--shadow-md);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
            margin: 0 0.5rem;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .navbar-nav .btn {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            color: white !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .navbar-nav .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .social-icons a {
            color: var(--text-light);
            font-size: 1.2rem;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,1000 1000,800 1000,1000"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero .lead {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }

        .typing-cursor::after {
            content: "|";
            color: var(--accent-color);
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        /* Modern Buttons */
        .btn-modern {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 50px;
            padding: 1rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
            color: white !important;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        /* Section Styling */
        .section {
            padding: 6rem 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
            transform: translateX(-50%);
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
        }

        /* Modern Cards */
        .modern-card {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
            height: 100%;
        }

        .modern-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .modern-card .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.8rem;
        }

        /* Skills Section */
        .skills-section {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
        }

        .skill-item {
            margin-bottom: 2rem;
        }

        .skill-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .progress-modern {
            height: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar-modern {
            height: 100%;
            background: linear-gradient(90deg, var(--accent-color), #fbbf24);
            border-radius: 10px;
            transition: width 2s ease-in-out;
            position: relative;
        }

        .progress-bar-modern::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        /* Timeline */
        .timeline-modern {
            position: relative;
            padding-left: 2rem;
        }

        .timeline-modern::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, var(--primary-color), var(--accent-color));
        }

        .timeline-item-modern {
            position: relative;
            margin-bottom: 3rem;
            background: var(--bg-white);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border-left: 4px solid var(--primary-color);
        }

        .timeline-item-modern::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 2rem;
            width: 12px;
            height: 12px;
            background: var(--primary-color);
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: var(--shadow-md);
        }

        /* Portfolio Grid */
        .portfolio-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
        }

        .portfolio-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.9), rgba(168, 85, 247, 0.9));
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        /* Contact Form */
        .contact-section {
            background: linear-gradient(135deg, var(--text-dark), #334155);
        }

        .form-modern {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3rem;
            backdrop-filter: blur(10px);
        }

        .form-control-modern {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            padding: 1rem;
            transition: all 0.3s ease;
        }

        .form-control-modern:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(245, 158, 11, 0.25);
            color: white;
        }

        .form-control-modern::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in-up.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero .lead {
                font-size: 1.2rem;
            }

            .section {
                padding: 4rem 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-light);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* Custom reCAPTCHA styling */
        .g-recaptcha {
            margin: 1rem 0;
        }

        @media (max-width: 768px) {
            .g-recaptcha {
                transform: scale(0.85);
                transform-origin: center;
            }
        }
    </style>
</head>

<body>
    <!-- Modern Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Andhika Pratama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#github">GitHub</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>

                <div class="d-flex align-items-center">
                    <div class="social-icons d-none d-lg-flex">
                        <a href="https://github.com/andikspp" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/andhika-pratama-putra-22b558200" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/andiks_pp/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <a href="cv/CV_ANDHIKA PRATAMA PUTRA.pdf" class="btn btn-modern ms-3 text-light">Download CV</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="hero-content">
                        <h1 class="typing-cursor">Hello, I'm Andhika Pratama Putra</h1>
                        <p class="lead">Fullstack Web Developer</p>
                        <p class="mb-4" style="color: rgba(255, 255, 255, 0.8); font-size: 1.1rem;">
                            Passionate about creating innovative web solutions with modern technologies
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#contact" class="btn btn-outline-light btn-modern">Get In Touch</a>
                            <a href="#portfolio" class="btn btn-outline-light btn-modern">View My Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="text-center">
                        <img src="img/Foto SKL_Andhika Pratama Putra.jpg" alt="Andhika Pratama Putra"
                            class="img-fluid rounded-circle"
                            style="width: 300px; height: 300px; object-fit: cover; border: 5px solid rgba(255,255,255,0.2);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About Me</h2>
                <p class="section-subtitle">Get to know me better</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-4">Hello! I'm Andhika Pratama Putra</h3>
                    <p>A fresh graduate in Software Engineering with strong foundations in web development, software
                        architecture, and modern programming technologies, eager to contribute and grow in the software
                        industry.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <strong>Location:</strong><br>
                                Bogor, Indonesia
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <strong>Email:</strong><br>
                                andhika2003.ap31@gmail.com
                            </div>
                        </div>
                    </div>
                    <a href="cv/CV_ANDHIKA PRATAMA PUTRA.pdf" class="btn btn-modern text-light">Download
                        My CV</a>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="modern-card text-center">
                                <div class="icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h4>2+</h4>
                                <p>Years Experience</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="modern-card text-center">
                                <div class="icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <h4>10+</h4>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p class="section-subtitle">What I can do for you</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-card text-center">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4>Frontend Development</h4>
                        <p>Creating responsive and interactive user interfaces using HTML, CSS, JavaScript, React.js,
                            Next.js,
                            and modern frameworks.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card text-center">
                        <div class="icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h4>Backend Development</h4>
                        <p>Building robust server-side applications using PHP, Laravel, Node.js, Express.js, and
                            database management.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-card text-center">
                        <div class="icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4>Fullstack Development</h4>
                        <p>Building complete web solutions from frontend to backend using modern technologies like
                            Laravel, React.js, Node.js, and MySQL.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section skills-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 style="color: white;">My Skills</h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Technologies I work with</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>HTML/CSS</span>
                            <span>100%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 100%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>JavaScript</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>PHP</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Laravel</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Next.js</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 90%"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>React.js</span>
                            <span>80%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Node.js</span>
                            <span>80%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Bootstrap</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>MySQL</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-name">
                            <span>PostgreSQL</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-modern">
                            <div class="progress-bar-modern" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Experience</h2>
                <p class="section-subtitle">My professional journey</p>
            </div>

            <div class="timeline-modern">
                <div class="timeline-item-modern" data-aos="fade-up">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4>Fullstack Web Developer Intern</h4>
                            <h6 class="text-primary">PT Altrusights Sahabat Digital</h6>
                        </div>
                        <span class="badge bg-primary">February 2025 - May 2025</span>
                    </div>
                    <p>Developed a web-based workshop management system encompassing work orders, sales, inventory, and
                        warehouse modules using Laravel, MySQL, and modern frontend technologies.</p>
                </div>

                <div class="timeline-item-modern" data-aos="fade-up">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4>Fullstack Web Developer Intern</h4>
                            <h6 class="text-primary">Direktorat Guru PAUD dan PNF</h6>
                        </div>
                        <span class="badge bg-primary">July 2024 - December 2024</span>
                    </div>
                    <p>Developed web-based applications including examination platforms and employee activity management
                        systems using Laravel, MySQL, and modern frontend technologies.</p>
                </div>

                <div class="timeline-item-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4>Freelance Web Developer</h4>
                            <h6 class="text-primary">Darmawan Website Design</h6>
                        </div>
                        <span class="badge bg-primary">2023 - 2024</span>
                    </div>
                    <p>Implementing website designs from UI/UX Figma to frontend using HTML, CSS, Bootstrap, and
                        JavaScript. Also working on backend development using PHP and Laravel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Education</h2>
                <p class="section-subtitle">My academic background</p>
            </div>

            <div class="timeline-modern">
                <div class="timeline-item-modern" data-aos="fade-up">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4>Bachelor of Applied Science (D4) Software Engineering</h4>
                            <h6 class="text-primary">IPB University</h6>
                        </div>
                        <span class="badge bg-primary">2021 - 2025</span>
                    </div>
                    <p>Earned a Bachelor's degree in Software Engineering, specializing in web development, software
                        architecture, and modern programming technologies.</p>
                </div>

                <div class="timeline-item-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4>High School</h4>
                            <h6 class="text-primary">SMAN 37 Jakarta</h6>
                        </div>
                        <span class="badge bg-primary">2018 - 2021</span>
                    </div>
                    <p>Graduated from high school with major in Science (IPA).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GitHub Activity Section - tambahkan setelah Education Section -->
    <section id="github" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>GitHub Activity</h2>
                <p class="section-subtitle">My coding journey and contributions</p>
            </div>

            <div class="row g-4">
                <!-- GitHub Stats -->
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">GitHub Statistics</h4>
                        <div class="text-center">
                            <img src="https://github-readme-stats.vercel.app/api?username=andikspp&show_icons=true&theme=tokyonight&hide_border=true"
                                alt="GitHub Stats" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- Most Used Languages -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">Most Used Languages</h4>
                        <div class="text-center">
                            <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=andikspp&layout=compact&theme=tokyonight&hide_border=true"
                                alt="Top Languages" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- GitHub Streak -->
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">Contribution Streak</h4>
                        <div class="text-center">
                            <img src="https://github-readme-streak-stats.herokuapp.com/?user=andikspp&theme=tokyonight&hide_border=true"
                                alt="GitHub Streak" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- GitHub Activity Graph -->
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">Contribution Activity</h4>
                        <div class="text-center">
                            <img src="https://github-readme-activity-graph.vercel.app/graph?username=andikspp&theme=tokyo-night&hide_border=true&bg_color=1a1b27"
                                alt="GitHub Activity Graph" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- Recent Repositories -->
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">Featured Repositories</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="github-repo">
                                    <img src="https://github-readme-stats.vercel.app/api/pin/?username=andikspp&repo=aplikasi-sjt&theme=tokyonight&hide_border=true"
                                        alt="Repository" class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="github-repo">
                                    <img src="https://github-readme-stats.vercel.app/api/pin/?username=andikspp&repo=ecommerce-hpai-dika&theme=tokyonight&hide_border=true"
                                        alt="Repository" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="github-repo">
                                    <img src="https://github-readme-stats.vercel.app/api/pin/?username=andikspp&repo=Himapolindo&theme=tokyonight&hide_border=true"
                                        alt="Repository" class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="github-repo">
                                    <img src="https://github-readme-stats.vercel.app/api/pin/?username=andikspp&repo=smartani&theme=tokyonight&hide_border=true"
                                        alt="Repository" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="https://github.com/andikspp" target="_blank" class="btn btn-modern">
                                <i class="fab fa-github me-2"></i>View All Repositories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>My Portfolio</h2>
                <p class="section-subtitle">Some of my recent work</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <a href="https://technosain.com/home" target="_blank" style="text-decoration: none;">
                        <div class="portfolio-item">
                            <img src="assets/tsu.png" alt="TSU Website">
                            <div class="portfolio-overlay">
                                <h4>Techno Saintifik Utama</h4>
                                <p>Company profile website built with Laravel, Bootstrap, and MySQL</p>
                                <div class="mt-3">
                                    <span class="badge bg-light text-dark me-2">Laravel</span>
                                    <span class="badge bg-light text-dark me-2">Bootstrap</span>
                                    <span class="badge bg-light text-dark">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-item">
                        <img src="img/sjt.png" alt="SJT Application">
                        <div class="portfolio-overlay">
                            <h4>Situational Judgement Test</h4>
                            <p>Online examination platform with real-time monitoring and automated grading</p>
                            <div class="mt-3">
                                <span class="badge bg-light text-dark me-2">Laravel</span>
                                <span class="badge bg-light text-dark me-2">JavaScript</span>
                                <span class="badge bg-light text-dark">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-item">
                        <img src="img/kegiatan.png" alt="Employee Activity App">
                        <div class="portfolio-overlay">
                            <h4>Employee Activity Management</h4>
                            <p>Web-based system for managing staff activities with QR code registration</p>
                            <div class="mt-3">
                                <span class="badge bg-light text-dark me-2">Laravel</span>
                                <span class="badge bg-light text-dark me-2">QR Code</span>
                                <span class="badge bg-light text-dark">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-item">
                        <img src="assets/smartani.png" alt="SmarTani">
                        <div class="portfolio-overlay">
                            <h4>SmarTani Application</h4>
                            <p>Plant recommendation system based on geographical location</p>
                            <div class="mt-3">
                                <span class="badge bg-light text-dark me-2">PHP</span>
                                <span class="badge bg-light text-dark me-2">MySQL</span>
                                <span class="badge bg-light text-dark">Geolocation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <a href="https://hpai-ika.my.id" target="_blank" style="text-decoration: none;">
                        <div class="portfolio-item">
                            <img src="img/e-commerce ika.png" alt="E-commerce HPAI Dika">
                            <div class="portfolio-overlay">
                                <h4>E-commerce HPAI Ika</h4>
                                <p>Online store for herbal products with shopping cart, payment integration,
                                    authentication,
                                    checkout, shipping, etc</p>
                                <div class="mt-3">
                                    <span class="badge bg-light text-dark me-2">Next.Js</span>
                                    <span class="badge bg-light text-dark me-2">Express.js</span>
                                    <span class="badge bg-light text-dark">PostgreSQL</span>
                                    <span class="badge bg-light text-dark">Tailwind CSS</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 style="color: white;">Contact Me</h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Let's work together</p>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="form-modern" data-aos="fade-up">
                        <form method="post" action="{{ route('proses.formulir') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control form-control-modern"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control form-control-modern"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" class="form-control form-control-modern"
                                        placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="5" class="form-control form-control-modern" placeholder="Your Message"
                                        required></textarea>
                                </div>
                                <!-- Google reCAPTCHA -->
                                <div class="col-12 text-center">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-modern text-light">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-4 text-center text-white mb-4">
                    <div class="icon mb-3">
                        <i class="fas fa-map-marker-alt fa-2x" style="color: var(--accent-color);"></i>
                    </div>
                    <h5>Address</h5>
                    <p>Bogor, Indonesia</p>
                </div>
                <div class="col-md-4 text-center text-white mb-4">
                    <div class="icon mb-3">
                        <i class="fas fa-envelope fa-2x" style="color: var(--accent-color);"></i>
                    </div>
                    <h5>Email</h5>
                    <p>andhika2003.ap31@gmail.com</p>
                </div>
                <div class="col-md-4 text-center text-white mb-4">
                    <div class="icon mb-3">
                        <i class="fas fa-phone fa-2x" style="color: var(--accent-color);"></i>
                    </div>
                    <h5>Phone</h5>
                    <p>+62 822 9431 7043</p>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <div class="social-icons">
                    <a href="https://api.whatsapp.com/send?phone=6282294317043" target="_blank"
                        style="color: white; font-size: 2rem; margin: 0 1rem;"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/andiks_pp/" target="_blank"
                        style="color: white; font-size: 2rem; margin: 0 1rem;"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/andhika-pratama-putra-22b558200" target="_blank"
                        style="color: white; font-size: 2rem; margin: 0 1rem;"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/andikspp" target="_blank"
                        style="color: white; font-size: 2rem; margin: 0 1rem;"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center" style="background: var(--text-dark); color: white;">
        <div class="container">
            <p>&copy; 2025 Andhika Pratama Putra. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission alerts
        @if (session('status') === 'success')
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your message has been sent successfully.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#2563eb',
            });
        @elseif (session('status') === 'error')
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('message') }}',
                confirmButtonText: 'OK',
                confirmButtonColor: '#dc2626',
            });
        @endif

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>
