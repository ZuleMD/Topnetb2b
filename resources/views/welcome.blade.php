<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TopnetB2B </title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://www.topnet.tn/assets/img/favicon.ico" rel="icon">
    <link href="https://www.topnet.tn/assets/img/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor2/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor2/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor2/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor2/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor2/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('vendor2/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor2/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css2/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="{{route('home')}}">TopnetB2B</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Développeuse</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Plateforme de mise en relation d'affaires pour Topnet</h1>
                    <h2>TopnetB2B libère la circulation des opportunités d'affaires
                        et facilite la prospection commerciale des agences topnet!</h2>
                    <div class="d-lg-flex">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Commencer</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('images/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="data:image/png;base64,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" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAEIAdwMBIgACEQEDEQH/xAAcAAEBAAIDAQEAAAAAAAAAAAAABwUGAQIEAwj/xAAxEAABBAIBAgUDAgUFAAAAAAABAAIDBAURBhIhBzFBUYETIpFhcRQyQqLCIzNSobH/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAgEFA//EACURAQACAQMDAwUAAAAAAAAAAAABAgMREkEEITETYfAFFIGhsf/aAAwDAQACEQMRAD8AuKIiAiIgIiICIiAiIgIiICIiAiIgIi1XxM5FJxnik9uq4NuTOFesT/S92/u+AHH4W1rNpiIGQzHLMBhJvoZTLVa82gfpF+3ge5aNkL24vLY7L1v4nF3YLcO9dcLw4A+x15H9FIuI8D4nyWhWlsZ6xYzE0AsXIYbcbnscdb6gWk7BIB36rPY/iuE4ZeGQwmWvOsteI5q75mObIzf3BzQ0eXfR9D+DvUWwYKTN7aaLrSbzpWFMRYbk2Wt4rCS3sZjZcnYBYI60W9vBIBPYHyGz5ei0LF+KPIMtbkrUeHPmfDKI5+iw4/RJJH3f6fbyP4K2mO143R4QqyKZ5bxPtm1fHGcBJlKOO3/FXTIWsGvPWge3Y9/nWu69GT8To6/DcbyCljvrS3bJrmrJN09Dh1dX3AHfdo1277Hkq9G/bsKIin2E8Qr0+etYfP4E4uxXqPsnVkSaDR1d9DXceoJXw494osy3Gc3lZ6DK9nFxiQVhP1CQOB6fu6RrbgR5HXb3WThvHHyRSEU2v+JOQr4/jj6uCZZv5qN8jarbWugBwDNHp79QO/TWl7I+W8vbQu2bXCZYpIWs+hCyz9R0znPAI+1p0A3Z3+ielaPP9G+opTi/E/kWWty1qPDnSvglEVjosuP0SSR932dvI/gqrLL47UnSwIiKAU08eqss3E6c8YJZXvMdJ+gLHtB/JA+VS15Mtjq2Xx1jH3o/qVrDDHI33B9j6H1BV477LRYSTwBqBhzeTePta2OFp9tdTnf4rKPc6aRzyCXPcTr3JX145wzkXFn5CjRvR2cVYd1xtDWtkJI0S/Y89ADsdeugtkwfG5IJ22b5bth2yJp339yVxPrWLJ1vVVx44nbHPHDpdJkphpa9p7zwzcs7MZh32LDgGVaxfI4+ga3Z/wDFNfB+rbk4FnMjEOq7kJZnROH9TgzQ/vLlVnNa9pa5oc0jRBHYrhkbI29MbGtb7NGgu1S22m2Pb9OdMoBxjmOPw/h1e47XgsOztt8sTYWxE9ReA3f7gdunz2PlfTJYCxFLwfhssxguPElqx0aLonSP6t/u0McP3CvAq12zmdsEQmPnIGDqPyuxijMgkMbC8eTukbHyvf7jvrEe/wCRLOTcWqcN4lyLMT5G3kcnerfwrrVtwLg2QtYQPjXmfQeSnfLMJZ45isRJAXNjzeLj+uz/AJStc2Qt/P09fK/TEkbJW9MjGvb7OGwuHQxPDQ+Jjg3+UFoOllOotXz3NUE5tLh63PKGKy92xUx2JxsNZz6n+41wYXDp7HX8zfwqJ4fWcDU4xk8nhL+Rt0opHvlmyDiXAsjBIGwPtA/7JW6vrQPcXPgic4+ZLASV2bDG1hjbGxrD5tDRo/Cm+XdWKib+BFd541eyc3eW/dc8u9wAAf7i9UxdGMaxvSxoaPYDS7qL332mzBERQCIiBpcaXKICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIg//2Q==" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="data:image/png;base64,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" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAilBMVEX/ZgD/////YwD/jFv/gkj/WgD/UwD/YAD/XQD/VgD/TwD/x7f/il3/5+H/z73/biH/h1X/8+7/jmv/fUT/+/n/08T/7uj/3ND/nnn/4db/rJD/vab/ahv/f1D/t5z/w7L/djf/bzD/lG7/t6X/j2X/poP/g17/oIb/dC3/mnv/ayf/dkT/YhH/w6rlZO8hAAAEOklEQVRoge2X22KyOBCAIW2YJIpKOYkgiEuron3/19vMBARb7P9fuHYvMhdIkkm+zCFDdJzfEPbyK1jLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtVzLtdz/GZdp0Q98eya3CM/nsNjVGhoWz+OyMPX9dBtHEk7uHp5nL1NlpXgcrFWarJ/IdURZcZG+Z20a/wL3I6kOU1xGGfdF2DA6Mch+ag5dopxpbnNwvfQrl0m5W4Xcg66plJK60ztSSyi5XArFzcIgpEczlkcp2bDAcelJhjN5Z6YSxyNXmtTsgR1CduKHLbvhek3qovgHWoitkiTJYKU7dYvXeYCD0WIuEXsqFz6oPc1Id2an4myaYRglQS5Q7ZJH2JVsPPIkMAfwMebKhdtLVuDQHCeU2GYO31wH3VyDPV+/GCoKHktHrLtWNNOPmTZYrKJew29vAjBwZTys7PpFxzXCRE6/AZmM54+4g8TaODD6PUlzWWgWS+gJk1ygzUZpFQf9rIHriI3uXYR1+4FrpLLnxs15Tvqay7Ar2te7vOcC+iM7X4oV6pRiiitwwehDctnS/DPruItme9bD9Wyj84VJ9HekDDfaSzA9bsGgwd+V0Dq54bIt/raA/saQFRNc45J3fn3dCMMtPTDFnAvgrK3LEXeh0FEvqLZkHIPqe6jaGi6vSEdoUWjwln3nCtp1S+8KTY+l4b71yuLSzDITvCuXMnvVcbHnk3wJmeGim5OYBCe+i+9c2pt/GRI78W64/YG4z3Vwt//Q0iI28b3NPTfnE1z0UmYY/BNTV4258GqoWZ7S2AS3+MYtvnCre9zOXnq/sZfViA0OnlT5Pe4FufnYz5Tg1S7sZXkvvlEXX5/OyojLiXYR/dsUV9IsMukSDfGt8BRoATZZN9grzj5RPtfjfCYuUSqkyPIel7zkYg3kp1E++8a5EHJniusAuik4S8EFekkn/ZhLGa4Y43V2j2vOb1pL2EeGy2hkrQ0GOXPLgk1xzUGKZpucqlrc1yvimhp6qs9lcD+fGe03yLpswnpFPdVqSx+cYDcRX732tchjVulCP+LCnnqDbnSaa16uikN97mQGU/ZqiwdwEoIz5poUJ2R8l+uIebexcmG41+OHkt8E+Ob7ezIuinRO4dAqCIJo3p3pDbo/2xRn3Zl42jtBEnxyo5YkEZ0REJs0SeK96uoGlRsTmVkop/OKcksVzWm/U6JvaumdA57kyhMO85TCIiyvVwq8XCjaKNNK+ooCFNfOPqFgt4P+ljLNxTZM3aH+SmDZbCoPLxU15fE1nJO3sofdJ80HfLEtlg2diPZH7QfeY6lA61CaVLr5yv+nXAiDa/K61c/Yh97boc0TNDYK0ob/Qfex/xc4bN/emm0h4U+aj/6fQt+ev9F7MarPFnhxXn9F1v8C7KpHo1tjoO8AAAAASUVORK5CYII=" class="img-fluid" alt="">
                    </div>



                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>À PROPOS DE TOPNETB2B</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>Cette plateforme vise à
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Faciliter la gestion des abonnements liées à Topnet</li>
                            <li><i class="ri-check-double-line"></i> Aider l’entreprise à développer ses ventes</li>
                            <li><i class="ri-check-double-line"></i> Trouver un ou des client(s) en transmettant un certain nombre d’informations à travers des apporteurs d’affaires</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            TopnetB2B est une nouvelle logique de croissance qui vous ouvrira les portes vers de nouveaux marchés, vous permettra de trouver de nouveaux clients et de vendre vos produits.
                        </p>
                        <a href="#" class="btn-learn-more">En Savoir Plus</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Trouver de nouveaux clients et vendre vos produits n'a jamais été aussi facile !</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Liberté</a></h4>
                            <p>La visibilité accrue de mon annonce m'ouvre de réelles perspectives de business</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Visibilité</a></h4>
                            <p>Je fais connaître mon offre et trouve de nouvelles sources de business et de nouveaux prospects</p>

                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Rapidité</a></h4>
                            <p>La mise en relation d'affaires proposée par TopnetB2B accélére le développement de mon activité</p>

                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Simplicité</a></h4>
                            <p>Je décris mon annonce,TopnetB2b m'accompagne pour l'optimiser</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Développeuse</h2>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{asset('images/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mariem Dervali</h4>
                                <span>Développeuse web</span>
                                <p>Certifiée en développement web </p>
                                <div class="social">
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- End Pricing Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Lieu:</h4>
                                <p>Immeuble Topnet Centre Urbain Nord, 1080 Tunis</p>
                            </div>


                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Téléphone:</h4>
                                <p> +216 71 185 000</p>
                            </div>

                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Topnet&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>TopnetB2B</h3>
                        <p>
                            Immeuble Topnet <br>
                            Centre Urbain Nord, 1080 <br>
                            Tunis<br><br>
                            <strong>Téléphone:</strong> +216 71 185 000<br>

                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>ESPACE INSTITUTIONNEL</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">À propos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nous suivre sur </h4>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/Topnet_FSI" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/topnet.officiel/?fref=ts" class="facebook"><i class="bx bxl-facebook"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>TopnetB2B</span></strong>. All Rights Reserved
            </div>


        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor2/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor2/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor2/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor2/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor2/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor2/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor2/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('vendor2/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor2/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js2/main.js')}}"></script>

</body>

</html>