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
            --primary-light: #60a5fa;
            --secondary-color: #64748b;
            --accent-color: #f59e0b;
            --accent-light: #fbbf24;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --border-color: #e2e8f0;
            --shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --gradient-primary: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            --gradient-hero: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
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
            -webkit-font-smoothing: antialiased;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        /* ==================== */
        /* Modern Navbar        */
        /* ==================== */
        .navbar {
            background: rgba(255, 255, 255, 0.85) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.6);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0.8rem 0;
            z-index: 1050;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
            padding: 0.5rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            font-size: 0.9rem;
            position: relative;
            transition: all 0.3s ease;
            margin: 0 0.3rem;
            padding: 0.5rem 0.75rem !important;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
            border-radius: 1px;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .navbar-nav .btn {
            background: var(--gradient-primary);
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            color: white !important;
            font-weight: 500;
            font-size: 0.85rem;
            transition: all 0.3s ease;
        }

        .navbar-nav .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);
        }

        .social-icons a {
            color: var(--text-light);
            font-size: 1.1rem;
            margin: 0 0.4rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
        }

        .social-icons a:hover {
            color: var(--primary-color);
            background: rgba(37, 99, 235, 0.08);
            transform: translateY(-2px);
        }

        /* ==================== */
        /* Hero Section         */
        /* ==================== */
        .hero {
            background: var(--gradient-hero);
            background-size: 200% 200%;
            animation: gradientShift 8s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.04) 0%, transparent 50%);
        }

        /* Floating shapes */
        .hero-shapes {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .hero-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.08;
            background: white;
        }

        .hero-shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -80px;
            right: -60px;
            animation: floatShape 6s ease-in-out infinite;
        }

        .hero-shape:nth-child(2) {
            width: 200px;
            height: 200px;
            bottom: 10%;
            left: -50px;
            animation: floatShape 8s ease-in-out infinite reverse;
        }

        .hero-shape:nth-child(3) {
            width: 120px;
            height: 120px;
            top: 40%;
            right: 15%;
            animation: floatShape 7s ease-in-out infinite 1s;
        }

        .hero-shape:nth-child(4) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: floatShape 5s ease-in-out infinite 0.5s, morphShape 8s ease-in-out infinite;
        }

        @keyframes floatShape {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(10deg);
            }
        }

        @keyframes morphShape {

            0%,
            100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            50% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            line-height: 1.2;
            letter-spacing: -0.02em;
        }

        .hero .lead {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .hero .subtitle-text {
            color: rgba(255, 255, 255, 0.75);
            font-size: 1.05rem;
            margin-bottom: 2rem;
            max-width: 500px;
        }

        .hero-img-wrapper {
            position: relative;
            display: inline-block;
        }

        .hero-img-wrapper::before {
            content: '';
            position: absolute;
            inset: -8px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
            animation: pulse-ring 2.5s ease-in-out infinite;
        }

        @keyframes pulse-ring {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.7;
            }
        }

        .hero-img {
            width: 280px;
            height: 280px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        .typing-cursor::after {
            content: "|";
            color: var(--accent-color);
            animation: blink 1s infinite;
            font-weight: 300;
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

        /* ==================== */
        /* Modern Buttons       */
        /* ==================== */
        .btn-modern {
            background: var(--gradient-primary);
            border: none;
            border-radius: 50px;
            padding: 0.85rem 2rem;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.35);
            color: white !important;
        }

        .btn-modern:active {
            transform: translateY(-1px);
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

        .btn-hero {
            padding: 0.9rem 2rem;
            font-size: 0.85rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .btn-hero-primary {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.4);
            color: white;
        }

        .btn-hero-primary:hover {
            background: white;
            color: var(--primary-dark);
            border-color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .btn-hero-accent {
            background: var(--accent-color);
            border: 2px solid var(--accent-color);
            color: var(--text-dark);
        }

        .btn-hero-accent:hover {
            background: var(--accent-light);
            border-color: var(--accent-light);
            color: var(--text-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3);
        }

        /* ==================== */
        /* Section Styling      */
        /* ==================== */
        .section {
            padding: 5rem 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            letter-spacing: -0.01em;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 50px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
            transform: translateX(-50%);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-top: 0.5rem;
        }

        /* ==================== */
        /* Modern Cards         */
        /* ==================== */
        .modern-card {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--border-color);
            height: 100%;
        }

        .modern-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: transparent;
        }

        .modern-card .icon {
            width: 65px;
            height: 65px;
            background: var(--gradient-primary);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.6rem;
            transition: all 0.3s ease;
        }

        .modern-card:hover .icon {
            transform: scale(1.1) rotate(5deg);
        }

        /* About counter cards */
        .counter-card {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 2rem 1.5rem;
            box-shadow: var(--shadow-sm);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--border-color);
            text-align: center;
        }

        .counter-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }

        .counter-card .counter-value {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 0.25rem;
        }

        .counter-card .counter-label {
            color: var(--text-light);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* ==================== */
        /* Skills Section       */
        /* ==================== */
        .skills-section {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .skills-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 50%, rgba(37, 99, 235, 0.15), transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(168, 85, 247, 0.1), transparent 50%);
            pointer-events: none;
        }

        .skill-item {
            margin-bottom: 1.8rem;
        }

        .skill-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.95rem;
        }

        .progress-modern {
            height: 8px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar-modern {
            height: 100%;
            background: linear-gradient(90deg, var(--accent-color), var(--accent-light), #fde68a);
            border-radius: 10px;
            transition: width 2s cubic-bezier(0.4, 0, 0.2, 1);
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
            animation: shimmer 2.5s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        /* ==================== */
        /* Timeline             */
        /* ==================== */
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
            margin-bottom: 2rem;
            background: var(--bg-white);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .timeline-item-modern:hover {
            box-shadow: var(--shadow-lg);
            transform: translateX(4px);
        }

        .timeline-item-modern::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 1.5rem;
            width: 12px;
            height: 12px;
            background: var(--primary-color);
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: var(--shadow-md);
        }

        .timeline-item-modern h4 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .timeline-item-modern h6 {
            font-size: 0.9rem;
        }

        .timeline-badge {
            display: inline-block;
            font-size: 0.75rem;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            background: var(--gradient-primary);
            color: white;
            font-weight: 500;
            white-space: nowrap;
            margin-top: 0.5rem;
        }

        /* ==================== */
        /* Portfolio Grid       */
        /* ==================== */
        .portfolio-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-sm);
            background: var(--bg-white);
        }

        .portfolio-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }

        .portfolio-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.05);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.92), rgba(124, 58, 237, 0.92));
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
            padding: 1.5rem;
        }

        .portfolio-overlay h4 {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .portfolio-overlay p {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-bottom: 0.5rem;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        /* Mobile portfolio info bar */
        .portfolio-info-mobile {
            display: none;
            padding: 1rem 1.25rem;
            background: var(--bg-white);
        }

        .portfolio-info-mobile h5 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .portfolio-info-mobile p {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        /* ==================== */
        /* Contact Form         */
        /* ==================== */
        .contact-section {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -30%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.1), transparent 60%);
            pointer-events: none;
        }

        .form-modern {
            background: rgba(255, 255, 255, 0.06);
            border-radius: 24px;
            padding: 2.5rem;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .form-control-modern {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            color: white;
            padding: 0.9rem 1.1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control-modern:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
            color: white;
        }

        .form-control-modern::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .contact-info-card {
            text-align: center;
            padding: 1.5rem 1rem;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: all 0.3s ease;
        }

        .contact-info-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-4px);
        }

        .contact-info-card i {
            color: var(--accent-color);
            margin-bottom: 0.75rem;
        }

        .contact-info-card h5 {
            font-size: 1rem;
            margin-bottom: 0.3rem;
        }

        .contact-info-card p {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 0;
        }

        /* ==================== */
        /* Footer               */
        /* ==================== */
        .footer {
            background: #0f172a;
            color: rgba(255, 255, 255, 0.7);
            padding: 2rem 0;
        }

        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
            color: rgba(255, 255, 255, 0.6);
            font-size: 1.1rem;
            margin: 0 0.4rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-social a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        /* ==================== */
        /* Back to Top Button   */
        /* ==================== */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--gradient-primary);
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(37, 99, 235, 0.3);
            z-index: 999;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(37, 99, 235, 0.4);
        }

        /* ==================== */
        /* Animations           */
        /* ==================== */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in-up.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* ==================== */
        /* Custom Scrollbar     */
        /* ==================== */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-light);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* reCAPTCHA */
        .g-recaptcha {
            margin: 1rem 0;
        }

        /* ============================= */
        /* Responsive - Tablet (768px)   */
        /* ============================= */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border-radius: 16px;
                padding: 1rem;
                margin-top: 0.5rem;
                box-shadow: var(--shadow-lg);
                border: 1px solid var(--border-color);
            }

            .nav-link {
                padding: 0.6rem 1rem !important;
                border-radius: 10px;
                margin: 0.1rem 0;
            }

            .nav-link:hover,
            .nav-link.active {
                background: rgba(37, 99, 235, 0.06);
            }

            .nav-link::after {
                display: none;
            }

            .d-flex.align-items-center {
                flex-direction: column;
                gap: 0.75rem;
                margin-top: 0.5rem;
            }

            .social-icons {
                display: flex !important;
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: auto;
                padding: 100px 0 60px;
            }

            .hero h1 {
                font-size: 2rem;
                text-align: center;
            }

            .hero .lead {
                font-size: 1.15rem;
                text-align: center;
            }

            .hero .subtitle-text {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                font-size: 0.95rem;
            }

            .hero .d-flex.flex-wrap {
                justify-content: center;
            }

            .hero-img {
                width: 200px;
                height: 200px;
            }

            .hero-shape:nth-child(1) {
                width: 150px;
                height: 150px;
            }

            .hero-shape:nth-child(3) {
                display: none;
            }

            .section {
                padding: 3.5rem 0;
            }

            .section-title h2 {
                font-size: 1.75rem;
            }

            .section-subtitle {
                font-size: 1rem;
            }

            .btn-modern {
                padding: 0.75rem 1.5rem;
                font-size: 0.8rem;
            }

            .btn-hero {
                padding: 0.75rem 1.5rem;
                font-size: 0.8rem;
            }

            /* Timeline mobile */
            .timeline-modern {
                padding-left: 1.5rem;
            }

            .timeline-item-modern {
                padding: 1.25rem;
            }

            .timeline-item-modern h4 {
                font-size: 1rem;
            }

            .timeline-item-modern::before {
                left: -2rem;
                width: 10px;
                height: 10px;
            }

            /* Portfolio mobile */
            .portfolio-overlay {
                display: none !important;
            }

            .portfolio-info-mobile {
                display: block;
            }

            .portfolio-item img {
                height: 180px;
            }

            .portfolio-item:hover {
                transform: none;
            }

            .portfolio-item:hover img {
                transform: none;
            }

            /* Form mobile */
            .form-modern {
                padding: 1.5rem;
                border-radius: 16px;
            }

            /* Back to top */
            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 42px;
                height: 42px;
            }

            .g-recaptcha {
                transform: scale(0.85);
                transform-origin: center;
            }

            .counter-card .counter-value {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.7rem;
            }

            .hero .lead {
                font-size: 1rem;
            }

            .hero-img {
                width: 160px;
                height: 160px;
            }

            .section {
                padding: 3rem 0;
            }

            .section-title h2 {
                font-size: 1.5rem;
            }

            .modern-card {
                padding: 1.5rem;
                border-radius: 16px;
            }

            .skills-section .skill-name {
                font-size: 0.85rem;
            }

            .portfolio-item img {
                height: 160px;
            }

            .contact-info-card {
                padding: 1rem 0.75rem;
            }

            .contact-info-card p {
                font-size: 0.8rem;
                word-break: break-all;
            }
        }

        /* ==================== */
        /* Modal improvements   */
        /* ==================== */
        .modal-content {
            border-radius: 20px;
            border: none;
            overflow: hidden;
        }

        .modal-header {
            padding: 1.25rem 1.5rem;
        }

        .modal-body {
            padding: 0 1.5rem 1.5rem;
        }

        .modal-title {
            font-weight: 700;
            font-size: 1.2rem;
        }

        @media (max-width: 576px) {
            .modal-dialog {
                margin: 0.5rem;
            }

            .modal-content {
                border-radius: 16px;
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
    <section class="hero" id="hero">
        <!-- Floating Shapes -->
        <div class="hero-shapes">
            <div class="hero-shape"></div>
            <div class="hero-shape"></div>
            <div class="hero-shape"></div>
            <div class="hero-shape"></div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-up">
                    <div class="hero-content">
                        <p class="mb-2"
                            style="color: rgba(255,255,255,0.7); font-size: 1rem; letter-spacing: 2px; text-transform: uppercase;">
                            Welcome to my portfolio</p>
                        <h1 class="typing-cursor">Hello, I'm Andhika Pratama Putra</h1>
                        <p class="lead">Fullstack Web Developer</p>
                        <p class="subtitle-text">
                            Passionate about creating innovative web solutions with modern technologies
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#contact" class="btn btn-hero btn-hero-accent">
                                <i class="fas fa-paper-plane me-2"></i>Get In Touch
                            </a>
                            <a href="#portfolio" class="btn btn-hero btn-hero-primary">
                                <i class="fas fa-briefcase me-2"></i>View My Work
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <div class="text-center">
                        <div class="hero-img-wrapper">
                            <img src="img/Foto SKL_Andhika Pratama Putra.jpg" alt="Andhika Pratama Putra"
                                class="hero-img">
                        </div>
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
                            <div class="counter-card">
                                <div class="icon mx-auto mb-3">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="counter-value" data-target="2">0</div>
                                <div class="counter-label">Years Experience</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-card">
                                <div class="icon mx-auto mb-3">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="counter-value" data-target="10">0</div>
                                <div class="counter-label">Projects Completed</div>
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
                    <div class="mb-2">
                        <h4>Fullstack Web Developer Intern</h4>
                        <h6 class="text-primary mb-1">PT Altrusights Sahabat Digital</h6>
                        <span class="timeline-badge">February 2025 - May 2025</span>
                    </div>
                    <p class="mt-3 mb-0">Developed a web-based workshop management system encompassing work orders,
                        sales, inventory, and
                        warehouse modules using Laravel, MySQL, and modern frontend technologies.</p>
                </div>

                <div class="timeline-item-modern" data-aos="fade-up">
                    <div class="mb-2">
                        <h4>Fullstack Web Developer Intern</h4>
                        <h6 class="text-primary mb-1">Direktorat Guru PAUD dan PNF</h6>
                        <span class="timeline-badge">July 2024 - December 2024</span>
                    </div>
                    <p class="mt-3 mb-0">Developed web-based applications including examination platforms and employee
                        activity management
                        systems using Laravel, MySQL, and modern frontend technologies.</p>
                </div>

                <div class="timeline-item-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-2">
                        <h4>Freelance Web Developer</h4>
                        <h6 class="text-primary mb-1">Darmawan Website Design</h6>
                        <span class="timeline-badge">2023 - 2024</span>
                    </div>
                    <p class="mt-3 mb-0">Implementing website designs from UI/UX Figma to frontend using HTML, CSS,
                        Bootstrap, and
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
                    <div class="mb-2">
                        <h4>Bachelor of Applied Science (D4) Software Engineering</h4>
                        <h6 class="text-primary mb-1">IPB University</h6>
                        <span class="timeline-badge">2021 - 2025</span>
                    </div>
                    <p class="mt-3 mb-0">Earned a Bachelor's degree in Software Engineering, specializing in web
                        development, software
                        architecture, and modern programming technologies.</p>
                </div>

                <div class="timeline-item-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-2">
                        <h4>High School</h4>
                        <h6 class="text-primary mb-1">SMAN 37 Jakarta</h6>
                        <span class="timeline-badge">2018 - 2021</span>
                    </div>
                    <p class="mt-3 mb-0">Graduated from high school with major in Science (IPA).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GitHub Activity Section -->
    <section id="github" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>GitHub Activity</h2>
                <p class="section-subtitle">My coding journey and contributions</p>
            </div>

            <div class="row g-4">
                <!-- GitHub Profile Card -->
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">GitHub Profile</h4>
                        <div id="github-profile-content" class="text-center py-3">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GitHub Stats (langsung dari API) -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-card h-100">
                        <h4 class="mb-4 text-center">GitHub Statistics</h4>
                        <div id="github-stats-content" class="text-center py-3">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Most Used Languages -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card h-100">
                        <h4 class="mb-4 text-center">Most Used Languages</h4>
                        <div id="github-langs-content" class="text-center py-3">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Repositories -->
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-card">
                        <h4 class="mb-4 text-center">Featured Repositories</h4>
                        <div class="row g-3" id="repos-container">
                            <div class="col-12 text-center py-3">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="https://github.com/andikspp" target="_blank" class="btn btn-modern text-light">
                                <i class="fab fa-github me-2"></i>View All Repositories
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Array data projects --}}
    @php
        $projects = [
            [
                'id' => 'tsuModal',
                'title' => 'Techno Saintifik Utama',
                'client' => 'PT Techno Saintifik Utama',
                'Job Type' => 'Freelance',
                'image' => 'assets/tsu.png',
                'tech' => ['Laravel', 'Bootstrap', 'MySQL'],
                'description' => 'Company profile website built with Laravel, Bootstrap, and MySQL.',
                'features' => [
                    'Responsive design',
                    'Admin panel',
                    'SEO optimized',
                    'Content management system',
                    'Secure Authentication',
                ],
                'role' =>
                    'Front-End developer responsible for designing and implementing the user interface using Bootstrap and Laravel Blade templates.',
                'screenshots' => [
                    ['src' => 'assets/tsu-home.png', 'label' => 'Homepage'],
                    ['src' => 'assets/tsu-about.png', 'label' => 'About Page'],
                    ['src' => 'assets/tsu-gallery.png', 'label' => 'Gallery Page'],
                ],
                'online' => true,
                'url' => 'https://technosain.com/home',
            ],
            [
                'id' => 'sjtModal',
                'title' => 'Situational Judgement Test Platform',
                'client' => 'Direktorat Guru PAUD dan PNF',
                'Job Type' => 'Internship at Direktorat Guru PAUD dan PNF',
                'image' => 'img/sjt.png',
                'tech' => ['Laravel 10', 'MySQL', 'JavaScript', 'Bootstrap 5', 'Chart.js'],
                'description' =>
                    'Comprehensive online examination platform developed for Direktorat Guru PAUD dan PNF.',
                'features' => [
                    'Real-time exam monitoring',
                    'Automated grading system',
                    'Multi-role user management',
                    'Detailed analytics dashboard',
                    'Export results to PDF/Excel',
                    'History tracking and audit logs in Admin Panel',
                ],
                'role' =>
                    'Full-stack developer responsible for both frontend and backend development, database design, and system architecture.',
                'screenshots' => [
                    ['src' => 'assets/sjt-dashboard.png', 'label' => 'Admin Dashboard'],
                    ['src' => 'assets/sjt-exam.png', 'label' => 'Exam Interface'],
                    ['src' => 'assets/sjt-results.png', 'label' => 'Results Analytics'],
                ],
                'online' => false,
                'url' => null,
            ],
            [
                'id' => 'activityModal',
                'title' => 'Employee Activity Management System',
                'client' => 'Direktorat Guru PAUD dan PNF',
                'Job Type' => 'Internship at Direktorat Guru PAUD dan PNF',
                'image' => 'img/kegiatan.png',
                'tech' => ['Laravel 10', 'MySQL', 'QR Code API', 'Bootstrap 5'],
                'description' =>
                    'Staff activity management system with QR code integration for event registration and attendance tracking.',
                'features' => [
                    'QR Code registration system',
                    'Real-time attendance tracking',
                    'Activity management module',
                    'Automated reports generation',
                    'Mobile-responsive interface',
                ],
                'role' => 'Full-stack developer responsible for system design and implementation.',
                'challenge' =>
                    'Replaced manual paper-based attendance with digital QR system, reducing errors by 95% and saving 3+ hours daily.',
                'screenshots' => [
                    ['src' => 'assets/activity-dashboard.png', 'label' => 'Dashboard'],
                    ['src' => 'assets/activity-qr-code.png', 'label' => 'Generate QR Code Page'],
                    ['src' => 'assets/activity-management-page.png', 'label' => 'Activity Management Page'],
                ],
                'online' => false,
                'url' => null,
            ],
            [
                'id' => 'ecommerceModal',
                'title' => 'E-commerce HPAI Ika',
                'client' => 'Stokis (Distributor) produk herbal HPAI Ika',
                'Job Type' => 'Freelance',
                'image' => 'img/e-commerce ika.png',
                'tech' => ['Next.js', 'Express.js', 'PostgreSQL', 'Tailwind CSS'],
                'description' =>
                    'Online store for herbal products with shopping cart, payment integration, authentication, checkout, shipping, etc.',
                'features' => [
                    'Product catalog management',
                    'Shopping cart functionality',
                    'Payment gateway integration',
                    'User authentication',
                    'Order tracking system',
                    'Shipping integration',
                ],
                'role' => 'Full-stack developer responsible for both frontend and backend development.',
                'screenshots' => [
                    ['src' => 'assets/hpai-home.png', 'label' => 'Homepage'],
                    ['src' => 'assets/hpai-produk.png', 'label' => 'Product Page'],
                    ['src' => 'assets/hpai-cart.png', 'label' => 'Shopping Cart'],
                ],
                'online' => true,
                'url' => 'https://hpai-ika.my.id',
            ],
            [
                'id' => 'sbbModal',
                'title' => 'Sistem Manajemen Bengkel Berbasis Web',
                'client' => 'PT Sinar Mas Bridgestone',
                'Job Type' => 'Internship at PT Altrusights Sahabat Digital',
                'image' => 'assets/sbb-adminhome.png',
                'tech' => ['Laravel 10', 'MySQL', 'JavaScript', 'Bootstrap 5', 'jQuery', 'AJAX'],
                'description' =>
                    'Web-based workshop management system for work orders, sales, inventory, and warehouse modules.',
                'features' => [
                    'Work order management',
                    'Sales tracking module',
                    'Inventory management',
                    'Warehouse operations module',
                    'User role management',
                    'Customer and vehicle management',
                ],
                'role' =>
                    'Full-stack developer responsible for developing key modules and integrating frontend with backend services. I also collaborated with the team to design the database schema and ensure data integrity. I handled Sales and Work Order modules.',
                'screenshots' => [
                    ['src' => 'assets/sbb-wo.png', 'label' => 'Work Order Module'],
                    ['src' => 'assets/sbb-penjualan.png', 'label' => 'Sales Module'],
                ],
                'online' => false,
                'url' => null,
            ],
        ];
    @endphp

    <!-- Portfolio Section -->
    <section id="portfolio" class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>My Portfolio</h2>
                <p class="section-subtitle">Some of my recent work</p>
            </div>

            <div class="row g-4">
                @foreach ($projects as $index => $project)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="portfolio-item" data-bs-toggle="modal" data-bs-target="#{{ $project['id'] }}"
                            style="cursor: pointer;">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
                            <div class="portfolio-overlay">
                                <h4>{{ $project['title'] }}</h4>
                                <p>{{ $project['description'] }}</p>
                                <div class="mt-2 mb-2">
                                    @foreach ($project['tech'] as $tech)
                                        <span class="badge bg-light text-dark me-1 mb-1"
                                            style="font-size: 0.7rem;">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center gap-2 mt-2">
                                    <span class="btn btn-sm btn-outline-light rounded-pill px-3">
                                        <i class="fas fa-eye me-1"></i>View Details
                                    </span>
                                    @if ($project['online'])
                                        <a href="{{ $project['url'] }}" target="_blank"
                                            class="btn btn-sm btn-success rounded-pill px-3"
                                            onclick="event.stopPropagation();">
                                            <i class="fas fa-external-link-alt me-1"></i>Visit
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- Mobile info bar -->
                            <div class="portfolio-info-mobile">
                                <div class="d-flex align-items-start justify-content-between">
                                    <div>
                                        <h5>{{ $project['title'] }}</h5>
                                        <p class="mb-0">{{ Str::limit($project['description'], 60) }}</p>
                                    </div>
                                    @if ($project['online'])
                                        <span class="badge bg-success ms-2 flex-shrink-0"
                                            style="font-size: 0.65rem;">Live</span>
                                    @else
                                        <span class="badge bg-warning text-dark ms-2 flex-shrink-0"
                                            style="font-size: 0.65rem;">Private</span>
                                    @endif
                                </div>
                                <div class="mt-2">
                                    @foreach (array_slice($project['tech'], 0, 3) as $tech)
                                        <span class="badge bg-primary bg-opacity-10 text-primary me-1"
                                            style="font-size: 0.65rem;">{{ $tech }}</span>
                                    @endforeach
                                    @if (count($project['tech']) > 3)
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary"
                                            style="font-size: 0.65rem;">+{{ count($project['tech']) - 3 }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Modal Portfolio Dinamis --}}
    @foreach ($projects as $project)
        <div class="modal fade" id="{{ $project['id'] }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">{{ $project['title'] }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $project['image'] }}" class="img-fluid rounded mb-3"
                                    alt="{{ $project['title'] }}">
                                <div class="tech-stack mb-3">
                                    <h6>Technologies Used:</h6>
                                    @foreach ($project['tech'] as $tech)
                                        <span class="badge bg-primary me-1">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                @if ($project['online'])
                                    <a href="{{ $project['url'] }}" target="_blank"
                                        class="btn btn-success mt-2 w-100">
                                        <i class="fas fa-external-link-alt me-2"></i>Visit Website
                                    </a>
                                @else
                                    <div class="alert alert-warning mt-2">
                                        <i class="fas fa-lock me-2"></i>This is a private project and not publicly
                                        accessible.
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h6>Client:</h6>
                                <p>{{ $project['client'] }}</p>

                                <h6>Job Type:</h6>
                                <p>{{ $project['Job Type'] }}</p>

                                <h6>Project Description:</h6>
                                <p>{{ $project['description'] }}</p>

                                <h6>Key Features:</h6>
                                <ul class="list-unstyled">
                                    @foreach ($project['features'] as $feature)
                                        <li><i class="fas fa-check text-success me-2"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>

                                <h6>My Role:</h6>
                                <p>{{ $project['role'] }}</p>

                                @if (isset($project['challenge']))
                                    <h6>Challenge Solved:</h6>
                                    <p>{{ $project['challenge'] }}</p>
                                @endif
                            </div>
                        </div>

                        @if (!empty($project['screenshots']))
                            <!-- Screenshot Gallery -->
                            <div class="mt-4">
                                <h6>Screenshots:</h6>
                                <div class="row g-2">
                                    @foreach ($project['screenshots'] as $screenshot)
                                        <div class="col-md-4">
                                            <img src="{{ $screenshot['src'] }}" class="img-fluid rounded"
                                                alt="{{ $screenshot['label'] }}">
                                            <small
                                                class="text-muted d-block text-center mt-1">{{ $screenshot['label'] }}</small>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="mb-1" style="color: var(--accent-color); font-weight: 700;">AP</h5>
                    <small class="text-white-50">Full Stack Developer</small>
                </div>
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <div class="footer-social">
                        <a href="https://github.com/andikspp" target="_blank" aria-label="GitHub"><i
                                class="fab fa-github"></i></a>
                        <a href="https://linkedin.com/in/andhika-pratama-putra" target="_blank"
                            aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://instagram.com/andikspp" target="_blank" aria-label="Instagram"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <p class="mb-0 text-white-50" style="font-size: 0.85rem;">&copy; {{ date('Y') }} Andhika
                        Pratama Putra</p>
                    <small class="text-white-50" style="font-size: 0.75rem;">All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

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

        // Navbar scroll effect + Back to top button
        const backToTopBtn = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            // Back to top visibility
            if (backToTopBtn) {
                if (window.scrollY > 400) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            }
            // Active nav link tracking
            updateActiveNav();
        });

        if (backToTopBtn) {
            backToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Active nav link on scroll
        function updateActiveNav() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
            let currentSection = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.scrollY >= sectionTop) {
                    currentSection = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + currentSection) {
                    link.classList.add('active');
                }
            });
        }

        // Smooth scrolling for navigation links (with navbar offset)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = target.offsetTop - navbarHeight - 10;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    // Close mobile nav if open
                    const navCollapse = document.querySelector('.navbar-collapse');
                    if (navCollapse && navCollapse.classList.contains('show')) {
                        const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                        if (bsCollapse) bsCollapse.hide();
                    }
                }
            });
        });

        // Counter Animation
        function animateCounters() {
            document.querySelectorAll('.counter-value[data-target]').forEach(counter => {
                if (counter.dataset.animated) return;
                const target = parseInt(counter.dataset.target);
                const suffix = counter.dataset.suffix || '';
                const duration = 2000;
                const step = Math.max(1, Math.floor(target / (duration / 16)));
                let current = 0;
                counter.dataset.animated = 'true';
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    counter.textContent = current + suffix;
                }, 16);
            });
        }

        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, {
            threshold: 0.3
        });

        document.querySelectorAll('.counter-card').forEach(el => counterObserver.observe(el));

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

        // =====================
        // GitHub API Integration
        // =====================
        const GITHUB_USERNAME = 'andikspp';
        const FEATURED_REPOS = ['aplikasi-sjt', 'ecommerce-hpai-dika', 'Himapolindo', 'smartani'];

        const LANG_COLORS = {
            'PHP': '#4F5D95',
            'JavaScript': '#f1e05a',
            'TypeScript': '#3178c6',
            'HTML': '#e34c26',
            'CSS': '#563d7c',
            'Python': '#3572A5',
            'Java': '#b07219',
            'Vue': '#41b883',
            'Blade': '#f7523f',
            'Shell': '#89e051',
            'Dockerfile': '#384d54',
            'SCSS': '#c6538c',
        };

        async function fetchGithubProfile() {
            try {
                const [userRes, reposRes] = await Promise.all([
                    fetch(`https://api.github.com/users/${GITHUB_USERNAME}`),
                    fetch(`https://api.github.com/users/${GITHUB_USERNAME}/repos?per_page=100`)
                ]);
                if (!userRes.ok) throw new Error();
                const user = await userRes.json();
                const repos = reposRes.ok ? await reposRes.json() : [];

                const totalStars = repos.reduce((acc, r) => acc + r.stargazers_count, 0);
                const totalForks = repos.reduce((acc, r) => acc + r.forks_count, 0);

                document.getElementById('github-profile-content').innerHTML = `
                    <div class="row align-items-center justify-content-center g-4">
                        <div class="col-auto">
                            <img src="${user.avatar_url}" alt="GitHub Avatar"
                                class="rounded-circle shadow" style="width:90px;height:90px;object-fit:cover;">
                        </div>
                        <div class="col-auto text-start">
                            <h5 class="mb-1 fw-bold">${user.name || user.login}</h5>
                            <p class="text-muted small mb-2">${user.bio || ''}</p>
                            <div class="d-flex gap-4 flex-wrap">
                                <div class="text-center">
                                    <h5 class="mb-0 text-primary fw-bold">${user.public_repos}</h5>
                                    <small class="text-muted">Repos</small>
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-0 text-warning fw-bold">${totalStars}</h5>
                                    <small class="text-muted">Stars</small>
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-0 text-success fw-bold">${totalForks}</h5>
                                    <small class="text-muted">Forks</small>
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-0 text-info fw-bold">${user.followers}</h5>
                                    <small class="text-muted">Followers</small>
                                </div>
                            </div>
                        </div>
                    </div>`;

                renderStats(user, repos);
                renderLanguages(repos);
            } catch {
                ['github-profile-content', 'github-stats-content', 'github-langs-content'].forEach(id => {
                    const el = document.getElementById(id);
                    if (el) el.innerHTML =
                        `<a href="https://github.com/${GITHUB_USERNAME}" target="_blank" class="btn btn-dark btn-sm"><i class="fab fa-github me-2"></i>Visit GitHub Profile</a>`;
                });
            }
        }

        function renderStats(user, repos) {
            const totalStars = repos.reduce((acc, r) => acc + r.stargazers_count, 0);
            const totalForks = repos.reduce((acc, r) => acc + r.forks_count, 0);
            document.getElementById('github-stats-content').innerHTML = `
                <div class="row g-3 text-center px-2">
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:var(--bg-light)">
                            <i class="fas fa-book text-primary mb-1 d-block fs-4"></i>
                            <h4 class="fw-bold mb-0 text-primary">${user.public_repos}</h4>
                            <small class="text-muted">Public Repos</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:var(--bg-light)">
                            <i class="fas fa-star text-warning mb-1 d-block fs-4"></i>
                            <h4 class="fw-bold mb-0 text-warning">${totalStars}</h4>
                            <small class="text-muted">Total Stars</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:var(--bg-light)">
                            <i class="fas fa-code-branch text-success mb-1 d-block fs-4"></i>
                            <h4 class="fw-bold mb-0 text-success">${totalForks}</h4>
                            <small class="text-muted">Total Forks</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:var(--bg-light)">
                            <i class="fas fa-users text-info mb-1 d-block fs-4"></i>
                            <h4 class="fw-bold mb-0 text-info">${user.followers}</h4>
                            <small class="text-muted">Followers</small>
                        </div>
                    </div>
                </div>`;
        }

        function renderLanguages(repos) {
            const langCount = {};
            repos.forEach(r => {
                if (r.language) langCount[r.language] = (langCount[r.language] || 0) + 1;
            });
            const total = Object.values(langCount).reduce((a, b) => a + b, 0);
            const sorted = Object.entries(langCount).sort((a, b) => b[1] - a[1]).slice(0, 6);

            if (sorted.length === 0) {
                document.getElementById('github-langs-content').innerHTML = '<p class="text-muted">No data</p>';
                return;
            }

            const bars = sorted.map(([lang, count]) => {
                const pct = ((count / total) * 100).toFixed(1);
                const color = LANG_COLORS[lang] || '#6c757d';
                return `
                    <div class="mb-2">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="small fw-semibold">${lang}</span>
                            <span class="small text-muted">${pct}%</span>
                        </div>
                        <div class="progress" style="height:8px;border-radius:10px;background:#e9ecef">
                            <div class="progress-bar" role="progressbar"
                                style="width:${pct}%;background:${color};border-radius:10px;transition:width 1.2s ease"></div>
                        </div>
                    </div>`;
            }).join('');

            document.getElementById('github-langs-content').innerHTML = `<div class="px-2">${bars}</div>`;
        }

        async function fetchFeaturedRepos() {
            const container = document.getElementById('repos-container');
            try {
                const results = await Promise.all(
                    FEATURED_REPOS.map(repo =>
                        fetch(`https://api.github.com/repos/${GITHUB_USERNAME}/${repo}`)
                        .then(r => r.ok ? r.json() : null).catch(() => null)
                    )
                );
                const repos = results.filter(Boolean);
                if (!repos.length) throw new Error();

                container.innerHTML = repos.map(repo => `
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 border h-100" style="transition:box-shadow .2s"
                            onmouseover="this.style.boxShadow='0 4px 16px rgba(37,99,235,.12)'"
                            onmouseout="this.style.boxShadow='none'">
                            <div class="d-flex align-items-center mb-2 gap-2">
                                <i class="fab fa-github fs-5 text-dark"></i>
                                <a href="${repo.html_url}" target="_blank"
                                    class="fw-bold text-decoration-none text-dark">${repo.name}</a>
                                ${repo.visibility === 'public'
                                    ? '<span class="badge border text-muted ms-auto" style="font-size:.7rem">public</span>'
                                    : '<span class="badge bg-warning text-dark ms-auto" style="font-size:.7rem">private</span>'}
                            </div>
                            <p class="text-muted small mb-3" style="min-height:2.5rem">${repo.description || 'No description available.'}</p>
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                ${repo.language ? `<span class="badge" style="background:${LANG_COLORS[repo.language]||'#6c757d'}">${repo.language}</span>` : ''}
                                <small class="text-muted"><i class="fas fa-star text-warning me-1"></i>${repo.stargazers_count}</small>
                                <small class="text-muted"><i class="fas fa-code-branch me-1"></i>${repo.forks_count}</small>
                                <small class="text-muted ms-auto">
                                    <i class="far fa-clock me-1"></i>${new Date(repo.updated_at).toLocaleDateString('id-ID',{day:'2-digit',month:'short',year:'numeric'})}
                                </small>
                            </div>
                        </div>
                    </div>`).join('');
            } catch {
                container.innerHTML = `
                    <div class="col-12 text-center py-3">
                        <p class="text-muted mb-2">Tidak dapat memuat repository saat ini.</p>
                        <a href="https://github.com/${GITHUB_USERNAME}" target="_blank" class="btn btn-dark btn-sm">
                            <i class="fab fa-github me-2"></i>Lihat di GitHub
                        </a>
                    </div>`;
            }
        }

        fetchGithubProfile();
        fetchFeaturedRepos();
    </script>
</body>

</html>
