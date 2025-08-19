<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .timeline {
            list-style: none;
            padding: 0;
        }

        .timeline-item {
            position: relative;
            padding-left: 40px;
            margin-bottom: 40px;
        }

        .timeline-date {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 16px;
            font-weight: bold;
            color: #04374F;
        }

        .timeline-content {
            background-color: #F8F9FA;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .timeline-content h3 {
            color: #04374F;
        }

        .timeline-content p {
            color: #6C757D;
        }


        @keyframes progress-animation {
            0% {
                width: 0%;
            }
        }

        .progress-bar-animated {
            animation: progress-animation 2s ease-out;
        }

        .typing-effect::after {
            content: "|";
            animation: typing 1s infinite steps(1);
        }

        @keyframes typing {
            from {
                width: 0;
            }
        }

        .btn-primary {
            background: linear-gradient(to right, #04374F, #01344C);
            border-color: white;
            border-radius: 20px;
            transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .btn-primary:hover {
            background: white;
            color: #01344C;
            border-color: #04374F;
        }

        .social-icons {
            display: flex;
            gap: 20px;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            display: flex;
            align-items: center;
        }

        h2.mb-4::after {
            content: "";
            display: block;
            width: 40px;
            height: 3px;

            background-color: #04374F;

            margin-top: 10px;

            margin-left: calc(50% - 20px);

        }

        #skil h2.mb-4::after {
            content: "";
            display: block;
            width: 40px;

            height: 3px;

            background-color: white;

            margin-top: 10px;

            margin-left: calc(50% - 20px);

        }

        #customPrevButton,
        #customNextButton {
            margin: 0 5px;
        }

        .button-container {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            /* Membuat tombol berada di tengah secara horizontal */
            gap: 10px;
            /* Jarak antara tombol */
        }

        #kontak h2.mb-4::after {
            content: "";
            display: block;
            width: 40px;

            height: 3px;

            background-color: white;

            margin-top: 10px;

            margin-left: calc(50% - 20px);

        }

        .rounded-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: white;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            /* Anda dapat sesuaikan tinggi sesuai kebutuhan */
            object-fit: cover;
            border-radius: 8px;
            /* Tambahkan sudut melengkung jika diinginkan */
        }


        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #04374F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .footer {
            padding-top: 30px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            font-size: 24px;
            color: #fff;
            transition: color 0.3s ease-in-out;
        }

        .social-icon:hover {
            color: #17a2b8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-dark fixed-top"
        style="background: linear-gradient(to right, #083263, #061231);">
        <div class="container">
            <a class="navbar-brand" href="#">Andhika Pratama Putra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experiences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" style="border-color: white; border-radius: 20px;"
                            href="#" id="downloadCVBtn">Download My CV</a>
                    </li>
                </ul>
                <div class="social-icons">
                    <a href="https://api.whatsapp.com/send?phone=6282294317043" class="social-icon" target="_blank"><i
                            class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/andiks_pp/" class="social-icon" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/andhika.p.putra.796" class="social-icon" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/andhika-pratama-putra-22b558200" class="social-icon"
                        target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.github.com/andikspp" class="social-icon" target="_blank"><i
                            class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-dark text-white text-center pt-5"
        style="background-image: url('assets/header.jpg'); background-size: cover; background-position: center;">

        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <div class="row d-flex flex-row-reverse align-items-end">
                <div class="col-md-12 p-5">
                    <h3 class="mt-3 typing-effect"></h3>
                    <p class="lead">
                        Fullstack Web Developer
                    </p>
                    <a href="#contact" class="btn btn-primary btn-lg" style="border-color: white; border-radius: 20px;">
                        Get in Touch</a>
                </div>
                {{-- <div class="col-md-6">
                    <img src="assets/me.jpg" alt="Your Name" class="img-fluid rounded-circle" style="width: auto;">
                </div> --}}
            </div>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="mb-4 text-center">About Me</h2>

            <div class="row flex-row-reverse align-items-center">

                <div class="col-md-4 ms-auto text-center">
                    <div class="image-container">
                        <img src="img/foto diri terbaru warna merah.png" alt="Andhika Pratama Putra"
                            class="img-fluid rounded-circle w-50">
                    </div>
                </div>


                <div class="col-md-8 p-5">
                    <h3>Hello! I'm Andhika Pratama Putra</h3>
                    <p>I'm a fullstack Web Developer. I'm currently a
                        Bachelor's student in Software Engineering at IPB University, Indonesia. I have a passion in
                        technology, especially in web development and i'm always excited to explore any new technologies
                        within the field to enhance my skills.</p>
                    <a class="btn btn-primary" style="border-color: white; border-radius: 20px;"
                        href="Cv/CV_ANDHIKA PRATAMA PUTRA.pdf" id="downloadCVBtn">Download My CV</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Services</h2>
            <p class="lead mb-4 text-center">What can I do for you?</p>
            <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up"
                data-aos-duration="1000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card">
                                    <i class="fas fa-laptop-code fa-5x text-center mb-4 mt-4"
                                        style=" color: #083263;"></i>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Backend Web Development</h5>
                                        <p class="card-text">I have experience in backend website development using
                                            Node.js & Express.js, PHP, Laravel </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card">
                                    <i class="fas fa-laptop-code fa-5x text-center mb-4 mt-4"
                                        style=" color: #083263;"></i>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Frontend Web Development</h5>
                                        <p class="card-text">I have experience in frontend website development using
                                            HTML, CSS, Bootstrap and React.js</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card">
                                    <i class="fas fa-paint-brush fa-5x text-center mb-4 mt-4"
                                        style=" color: #083263;"></i>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Web Design</h5>
                                        <p class="card-text">I have experience in designing website pages using Figma.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section id="skills" class="py-5">
        <div class="container p-5" data-aos="fade-up" data-aos-duration="1000"
            style="background: linear-gradient(to right, #04374F, #01344C);" id="skil">
            <h2 class="mb-4 text-center text-white">My Skills</h2>
            <p class="lead mb-4 text-center text-white">Elevating Your Project with Proven Skills</p>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">HTML</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 100%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">100%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">CSS</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 100%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">100%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Javascript</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 95%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">95%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 95%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">95%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Laravel</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 95%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">95%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Node.js</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 80%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 95%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">95%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Express.js</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 80%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">React.js</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated" role="progressbar"
                                    style="width: 80%; background: linear-gradient(to right, #04374F, #01344C);"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Education</h2>

            <!-- Education Item 1 -->
            <div class="row mb-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-3">
                    <p class="fw-bold">Year</p>
                    <p>2021 - Present</p>
                </div>
                <div class="col-md-9">
                    <h3>IPB University</h3>
                    <p>Degree: Bachelor in Software Engineering Technology</p>
                    <p>Location: Bogor, Indonesia</p>
                </div>
            </div>

            <!-- Education Item 2 -->
            <div class="row mb-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-3">
                    <p class="fw-bold">Year</p>
                    <p>2018 - 2021</p>
                </div>
                <div class="col-md-9">
                    <h3>SMAN 37 Jakarta</h3>
                    <p>Sciences and Mathematics</p>
                    <p>Location: Jakarta, Indonesia</p>
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-3">
                    <p class="fw-bold">Year</p>
                    <p>2015 - 2018</p>
                </div>
                <div class="col-md-9">
                    <h3>SMPN 56 Jakarta</h3>
                    <p>Location: Jakarta, Indonesia</p>
                </div>
            </div>

            <div class="row mb-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-3">
                    <p class="fw-bold">Year</p>
                    <p>2009 - 2015</p>
                </div>
                <div class="col-md-9">
                    <h3>SDN Kalimulya 3</h3>
                    <p>Location: Depok, Indonesia</p>
                </div>
            </div>
            <!-- Add more education items as needed -->

        </div>
    </section>


    <section id="experience" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">My Professional Journey</h2>
            <p class="lead mb-4 text-center">Embark on a journey through my professional experiences, where I've
                consistently delivered impactful solutions and exceeded client expectations.</p>
            <ul class="timeline">
                <li class="timeline-item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="timeline-date">2023 - Present</div>
                    <div class="timeline-content">
                        <h3>Freelance Web Developer</h3>
                        <p>Darmawan Website Design</p>
                        <p>Implementing the website design from UI/UX Figma to the frontend using HTML, CSS, Bootstrap,
                            and JavaScript. Additionally, I also work on the backend using PHP and Laravel.</p>
                    </div>
                </li>
            </ul>
            <ul class="timeline">
                <li class="timeline-item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="timeline-date">July 2024 - December 2024</div>
                    <div class="timeline-content">
                        <h3>Fullstack Web Developer Intern</h3>
                        <p>Direktorat Guru PAUD dan Dikmas</p>
                    </div>
                </li>
            </ul>
            {{-- <div class="text-center mb-5">
                <button id="seeMoreBtn" class="btn btn-primary"
                    style="border-color: #04374F; border-radius: 20px;">See
                    More</button>
            </div> --}}
        </div>
    </section>

    <section id="certifications" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">My Certifications</h2>
            <p class="lead mb-4 text-center">Explore the certifications that demonstrate my dedication to continuous
                learning and professional growth.</p>
            <ul class="timeline">
                <li class="timeline-item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="timeline-date">February 2024 - June 2024</div>
                    <div class="timeline-content">
                        <h3>Fullstack Web Development Certification</h3>
                        <p>Gamelab by PT Educa Sisfomedia Indonesia</p>
                        <p>Modul: Critical Thinking | Logika dan Algoritma Pemgrograman | HTML, CSS, JavaScript |
                            Creativity |
                            JavaScript dan jQuery | Bootstrap dan SASS | Communication Skill | PHP dan MySQL |
                            Collaboration
                            Skill | Laravel Framework</p>
                        <p><strong>Valid Until:</strong> July 2027</p>
                        <a href="https://gamelab.id/certificate/GL0461180707" target="_blank"
                            class="btn btn-primary mt-3" style="border-radius: 20px;">View Certificate</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section id="portfolio" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">My Portfolio</h2>
            <p class="lead mb-4 text-center">Discover My Works</p>
            <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up"
                data-aos-duration="1000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card h-100">
                                    <img src="assets/tsu.png" class="card-img-top" alt="Project 1">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Techno Saintifik Utama Company Website
                                        </h5>
                                        <p class="text-justify">A company profile website for PT Techno Saintifik
                                            Utama.</p>
                                        <p class="text-justify"><strong>Technologies Used:</strong> Laravel,
                                            Bootstrap, MySQL</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card h-100">
                                    <img src="assets/smartani.png" class="card-img-top" alt="Project 2">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Aplikasi SmarTani</h5>
                                        <p class="text-justify">A website for finding plant recommendations based
                                            on the user's geographical location. This project is part of my college
                                            coursework.</p>
                                        <p class="text-justify">
                                            <strong>Technologies Used:</strong> PHP Native and MySQL
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <img src="img/sjt.png" class="card-img-top" alt="Project 3">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Aplikasi Situational Judgement Test</h5>
                                        <p class="text-justify">Developed an online examination platform to
                                            streamline the assessment process for Direktorat Guru PAUD dan Dikmas,
                                            enhancing efficiency and accessibility. Implemented features like
                                            real-time monitoring, automated grading, and result analysis to provide
                                            a comprehensive solution for online assessments.</p>
                                        <p class="text-justify">
                                            <strong>Technologies Used:</strong> Laravel, MySQL, Bootstrap 5,
                                            Javascript
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <img src="img/kegiatan.png" class="card-img-top" alt="Project 4">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Aplikasi Kegiatan Pegawai</h5>
                                        <p class="text-justify">Developed a web-based employee activity management
                                            system to streamline task tracking, activity management, and
                                            productivity monitoring for staff at the Direktorat Guru PAUD dan
                                            Dikmas. The system allows employees to efficiently manage institutional
                                            activities and track participant data, including internal staff,
                                            speakers, attendees, and event committees. It features a QR code-based
                                            registration system to simplify event check-ins and includes an
                                            automated biodata management feature for seamless participant
                                            record-keeping. This comprehensive solution enhances operational
                                            efficiency and provides real-time insights into event participation and
                                            staff activities.</p>
                                        <p class="text-justify">
                                            <strong>Technologies Used:</strong> Laravel, Bootstrap, MySQL,
                                            Javascript
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-container">
                    <button id="customPrevButton" class="btn btn-primary">
                        <i class="fas fa-chevron-left"></i> Previous
                    </button>
                    <button id="customNextButton" class="btn btn-primary">
                        Next <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>




    <section id="contact" class="py-5" style="background: linear-gradient(to right, #04374F, #01344C);">
        <div class="container text-white text-center" id="kontak">
            <h2 class="mb-4">Contact Me</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-7 mt-5">
                    <h4>Your Message Matters</h4>
                    <form id="contactForm" style="max-width: 500px; margin: auto;" method="post"
                        action="{{ route('proses.formulir') }}">
                        @csrf <!-- Ini adalah directive Blade untuk melindungi aplikasi dari serangan CSRF -->
                        <div class="mb-3">
                            <label for="name" class="form-label text-end">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-end">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label text-end">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label text-end">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="border-color: white; border-radius: 20px;">Send
                                Message</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 p-5">
                    <div class="row mb-3 align-items-center">
                        <h3>Address</h3>
                        <span class="fs-5 fw-light">Bogor, Indonesia</span>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <h3>Email</h3>
                        <span class="fs-5">andhika2003.ap31@gmail.com</span>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <h3>Phone</h3>
                        <span class="fs-5">+6282294317043</span>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <h4 class="mb-4">Let's Connect</h4>
                <div class="col d-flex justify-content-center">
                    <div class="social-icons">
                        <a href="https://api.whatsapp.com/send?phone=6282294317043" class="social-icon"
                            target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/andiks_pp/" class="social-icon" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/andhika.p.putra.796" class="social-icon" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/andhika-pratama-putra-22b558200" class="social-icon"
                            target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.github.com/andikspp" class="social-icon" target="_blank"><i
                                class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-5"
        style="background: linear-gradient(to right, #083263, #061231);">
        <div class="container">
            <p>&copy; 2025 Andhika Pratama Putra. All rights reserved.</p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
        AOS.init();
    </script>

    {{-- <script>
            document.getElementById('seeMoreBtn').addEventListener('click', function() {

                var hiddenItems = document.querySelectorAll('.timeline-item[hidden]');
                hiddenItems.forEach(function(item) {
                    item.removeAttribute('hidden');
                });


                this.style.display = 'none';
            });
        </script> --}}

    <script>
        @if (session('status') === 'success')
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Pesan Anda telah berhasil dikirim.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6',
            });
        @elseif (session('status') === 'error')
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('message') }}',
                confirmButtonText: 'OK',
                confirmButtonColor: '#d33',
            });
        @endif
        // Mengontrol carousel dengan tombol custom
        document.getElementById('customPrevButton').addEventListener('click', function() {
            const carousel = new bootstrap.Carousel(document.getElementById('portfolioCarousel'));
            carousel.prev(); // Geser ke slide sebelumnya
        });

        document.getElementById('customNextButton').addEventListener('click', function() {
            const carousel = new bootstrap.Carousel(document.getElementById('portfolioCarousel'));
            carousel.next(); // Geser ke slide berikutnya
        });

        document.addEventListener('DOMContentLoaded', function() {
            var typingEffect = document.querySelector('.typing-effect');
            var textToType = "Andhika Pratama Putra";

            typingEffect.textContent = '';

            function typeText(index) {
                if (index < textToType.length) {
                    typingEffect.textContent += textToType.charAt(index);
                    index++;
                    setTimeout(function() {
                        typeText(index);
                    }, 100);
                }
            }

            typeText(0);
        });
    </script>


    <script>
        document.getElementById('downloadCVBtn').addEventListener('click', function() {

            window.location.href = 'cv/CV_ANDHIKA PRATAMA PUTRA.pdf';
        });
    </script>

</body>

</html>
