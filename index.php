<?php include "include/header.php"; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Mejores Soluciones Para Su Negocio</h1>
            <p>Somos Un Equipo De Apasionado Por El Desarrollo De Software Que Te Ayudaran A LLevar Tú Negocio Al Siguiente Nivel</p>
            <div class="d-flex">
              <a href="https://api.whatsapp.com/send?phone=931055100&text=Hola,%20estoy%20interesado%20en%20sus%20servicios%20de%20desarrollo%20de%20software" target="_blank" class="btn-get-started">WhatsApp</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/lenguajes/client-7.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre Nosotros</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              En StartCode, transformamos ideas en soluciones tecnológicas innovadoras. Con un equipo de expertos apasionados por la tecnología, nos especializamos en el desarrollo de software a medida que impulsa el éxito de nuestros clientes. Desde aplicaciones móviles hasta sistemas empresariales complejos, combinamos creatividad y experiencia técnica para ofrecer productos de alta calidad que cumplen y superan las expectativas.
              <br>
              Nuestro enfoque centrado en el cliente y nuestro compromiso con la excelencia nos permiten abordar proyectos de cualquier tamaño y complejidad. Colaboramos estrechamente con nuestros clientes para entender sus necesidades únicas y brindar soluciones personalizadas que optimizan sus procesos y potencian su crecimiento.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Desarrollamos soluciones de software innovadoras para mejorar tu negocio.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Nos comprometemos a entregar productos de alta calidad que cumplen y superan tus expectativas.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Contamos con profesionales apasionados y altamente capacitados en tecnología.</span></li>
            </ul>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Nuestro Proceso de Trabajo en el </span><strong>Desarrollo de Software</strong></h3>
              <p>
                Crear un software puede parecer una tarea compleja, pero en nuestra empresa seguimos un proceso bien definido para asegurar que cada proyecto sea un éxito. Aquí te mostramos cómo lo hacemos, paso a paso.
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item">

                <h3><span>01</span> Requisitos y Planificación</h3>
                <div class="faq-content">
                  <p>
                    <strong>¿Qué hacemos primero?</strong>
                    <br>
                    <strong>1. Reunión Inicial con el Cliente:</strong> Nos reunimos con el cliente para entender sus necesidades y expectativas. Es una charla abierta donde el cliente nos cuenta sus ideas y nosotros hacemos preguntas para aclarar todo.
                    <br>
                    <strong>2. Recopilación de Requisitos:</strong> Documentamos todos los requisitos y deseos del cliente. Esto incluye tanto lo que debe hacer el software como cómo debe lucir.
                    <br>
                    <strong>3. Planificación del Proyecto:</strong> Creamos un plan detallado que incluye las etapas del proyecto, los plazos y el presupuesto. Este plan nos guía durante todo el desarrollo.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> Diseño del Software</h3>
                <div class="faq-content">
                  <p>
                    <strong>¿Cómo convertimos las ideas en un plan?</strong>
                    <br>
                    <strong>1. Diseño de Arquitectura:</strong> Nuestros arquitectos de software crean un esquema general del sistema, decidiendo cómo se estructurarán los componentes principales.
                    <br>
                    <strong>2. Prototipos y Wireframes:</strong> Diseñamos maquetas y prototipos visuales para mostrar al cliente cómo se verá la aplicación. Esto ayuda a visualizar el producto final antes de empezar a programar.
                    <br>
                    <strong>3. Feedback del Cliente:</strong> Presentamos los diseños al cliente y hacemos ajustes según sus comentarios. Queremos estar seguros de que estamos alineados con sus expectativas.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span> Desarrollo y Codificación</h3>
                <div class="faq-content">
                  <p>
                    <strong>¿Cómo transformamos el diseño en realidad?</strong>
                    <br>
                    <strong>1. Programación:</strong> Nuestros desarrolladores escriben el código del software. Trabajan en equipo, cada uno encargado de diferentes partes del sistema.
                    <br>
                    <strong>2. Reuniones Diarias:</strong> Todos los días, el equipo se reúne brevemente para discutir el progreso, identificar obstáculos y planificar el trabajo del día.
                    <br>
                    <strong>3. Integración Continua:</strong> Regularmente combinamos y probamos el nuevo código con el existente para asegurarnos de que todo funciona correctamente y de manera integrada.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>04</span> Pruebas y Control de Calidad</h3>
                <div class="faq-content">
                  <p>
                    <strong>¿Cómo aseguramos la calidad del software?</strong>
                    <br>
                    <strong>1. Pruebas Unitarias:</strong> Probamos cada componente por separado para asegurarnos de que funcione correctamente.
                    <br>
                    <strong>2. Pruebas de Integración:</strong> Verificamos que los diferentes componentes del software funcionen bien juntos.
                    <br>
                    <strong>3. Pruebas de Usuario:</strong> Hacemos que usuarios reales prueben el software y nos den su feedback. Esto nos ayuda a identificar problemas que podríamos haber pasado por alto.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>05</span> Despliegue y Mantenimiento</h3>
                <div class="faq-content">
                  <p>
                    <strong>¿Qué hacemos una vez terminado el desarrollo?</strong>
                    <br>
                    <strong>1. Despliegue:</strong> Instalamos el software en el entorno de producción. Esto puede ser en los servidores del cliente o en la nube.
                    <br>
                    <strong>2. Capacitación:</strong> Entrenamos a los usuarios finales para que sepan cómo usar el software de manera efectiva. También les proporcionamos manuales y guías.
                    <br>
                    <strong>3. Soporte y Mantenimiento:</strong> Continuamos ofreciendo soporte técnico para resolver cualquier problema que surja y actualizamos el software para agregar nuevas funciones o mejorar las existentes.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Excelencia en Desarrollo Web con Tecnologías de Vanguardia</h3>
            <p class="fst-italic">
              Nuestra experiencia en desarrollo web abarca una variedad de tecnologías esenciales, garantizando que tu proyecto esté en las mejores manos. A continuación, destacamos nuestras competencias en diversas áreas del desarrollo web.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>JavaScript</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>php</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-globe"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Aplicaciones Web</a></h4>
              <p>Desarrollamos aplicaciones web robustas y escalables para mejorar la eficiencia y productividad de tu empresa, utilizando las últimas tecnologías y estándares de la industria.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-laptop-code"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Paginas Web</a></h4>
              <p>Creamos páginas web atractivas y funcionales que destacan tu marca y mejoran la experiencia del usuario, optimizadas para todos los dispositivos y navegadores.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-mobile-alt"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Aplicaciones Moviles</a></h4>
              <p>Desarrollamos aplicaciones móviles intuitivas y de alto rendimiento para iOS y Android, diseñadas para satisfacer las necesidades de tus usuarios y expandir tu presencia móvil.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-code"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Desarrollo De Software</a></h4>
              <p>Ofrecemos servicios de desarrollo de software a medida para solucionar problemas específicos de tu negocio, garantizando calidad, seguridad y escalabilidad en cada proyecto.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Proyectos</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Software</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="Proyectos.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Nuestro Equipo</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Josue Lopez</h4>
                <span>Frond-End Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-github"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Antony Ore</h4>
                <span>Diseñador UX/UI</span>
                <div class="social">
                  <a href=""><i class="bi bi-github"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Yhomar Velasque</h4>
                <span>Back-End Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-github"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Yems Avila </h4>
                <span>Back-End Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-github"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Ubicación</h3>
                  <p>Av. circunvalación Este 250, Huanta 05121</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Celular</h3>
                  <p>931 055 100</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Correo</h3>
                  <p>starcode37@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1944.263396315064!2d-74.24120601112051!3d-12.9381071003326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910d826a80fc18fd%3A0xda7d4f4466f5b415!2sCv%20Este%20250%2C%20Huanta%2005121!5e0!3m2!1ses-419!2spe!4v1719320931647!5m2!1ses-419!2spe" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nombre</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Correo</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Asunto</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Mensaje</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Cargando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>

                  <button type="submit">Enviar</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<?php include "include/footer.php"; ?>