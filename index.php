<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal portfolio Website</title>
 
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./N..png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&family=Saira+Stencil+One&display=swap"
    rel="stylesheet">
</head>

<body id="top" class="dark_theme">
<?php if(!empty($_POST["submit"])){
        $name = $_POST["name"]; 
        $email = $_POST["email"];
        $phone = $_POST["phone"]; 
        $message = $_POST["message"];
        $toEmail = "nitinjangra0981@gmail.com";
        $mailHeaders = "Name: ". $name .
        "\r\n Email: ". $email .
        "\r\n Phone: ". $phone .
        "\r\n Message: " .$message . "\r\n";
        if(mail($toEmail, $name,$mailHeaders )){$massege= "Your information has been recived successfully.";
        }
    }
        ?>
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1 class="h1 logo">
        <a href="#">NITIN<span>.</span></a>
      </h1>

      <div class="navbar-actions">

        <button class="theme-btn" aria-label="Change Theme" title="Change Theme" data-theme-btn>
          <span class="icon"></span>
        </button>

      </div>

      <button class="nav-toggle-btn" aria-label="Toggle Menu" title="Toggle Menu" data-nav-toggle-btn>
        <span class="one"></span>
        <span class="two"></span>
        <span class="three"></span>
      </button>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">Home.</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About.</a>
          </li>

          <li>
            <a href="#skills" class="navbar-link">Skills.</a>
          </li>

          <li>
            <a href="#portfolio" class="navbar-link">Portfolio.</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact.</a>
          </li>

        </ul>
      </nav>

    </div>
  </header>





  <main>
    <article class="container">

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">

        <figure class="hero-banner">

          <picture>
            <source srcset="hero-banner.webp" media="(min-width: 768px)">
            <source srcset="hero-banner-md.webp" media="(min-width: 500px)">
            <img src="hero-banner-sm.webp" alt="A man in a white shirt with a happy expression"
              class="img-fluid w-100">
          </picture>

        </figure>

        <div class="hero-content">

          <h2 class="h2 hero-title">We Design & Build Creative Products</h2>

          <a href="#contact" class="btn btn-primary">Get in touch</a>

        </div>

        <ul class="hero-social-list">

          <li>
            <a href="https://www.facebook.com/nitinjangra76071?mibextid=ZbWKwL" class="hero-social-link" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>

              <div class="tooltip">Facebook</div>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/_nitin__jangra_/" class="hero-social-link" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>

              <div class="tooltip">Twitter</div>
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/in/nitin-jangra-9a2618264" class="hero-social-link" target="_blank">
              <ion-icon name="logo-linkedin"></ion-icon>

              <div class="tooltip">Linkedin</div>
            </a>
          </li>

        </ul>

        <a href="#stats" class="scroll-down">Scroll</a>

      </section>





      <!-- 
        - #STATS
      -->

      <section class="stats" id="stats">
        <ul class="stats-list">

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="stats-card_icon-1.png" alt="Badge icon">
              </div>

              <h2 class="h2 card-title">
                4+ <strong>Months of Experience</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>

          <li>
            <a href="#" class="stats-card">

              <div class="card-icon">
                <img src="stats-card_icon-2.png" alt="Checkmark icon">
              </div>

              <h2 class="h2 card-title">
                30+ <strong>Completed Projects</strong>
              </h2>

              <ion-icon name="chevron-forward-outline"></ion-icon>

            </a>
          </li>


        </ul>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">

        <figure class="about-banner">
          <img src="hero-banner.png" alt="A man in a alice white shirt with a thinking expression"
            class="img-fluid w-100">
        </figure>

        <div class="about-content section-content">

          <p class="section-subtitle">About me</p>

          <h2 class="h3 section-title">Need a Creative Product? I can Help You!</h2>

          <p class="section-text">
            Hi! I’m Nitin Jangra, and I’m a web designer who has passion for building clean websites with intuitive
            functionalities. I enjoy the process of turning ideas into reality using creative solutions. I’m always
            curious about
            learning new skills, tools, and concepts. In addition to working on various solo projects, I have
            worked with
            creative teams, which involves daily stand-ups and communications, source control, and project management.
          </p>

          <div class="btn-group">
            <button class="btn btn-secondary"><a href="#contact" style="color: black; text-decoration: none;"> Hire me</a></button>

            <button class="btn btn-primary" style="background-color:transperant;"><a href="Nitin.pdf" target="_blank" style="color:#e38445;">Download cv</a></button>
          </div>

        </div>

      </section>





      <!-- 
        - #SKILLS
      -->

      <section class="skills" id="skills">

        <div class="skills-content section-content">

          <p class="section-subtitle">My skills</p>

          <h2 class="h3 section-title">What My Programming Skills Included?</h2>

          <p class="section-text">
            I develop simple, intuitive and responsive user interface that helps users get things done with less effort
            and time
            with those technologies.
          </p>

          <div class="skills-toggle" data-toggle-box>
            <button class="toggle-btn active" data-toggle-btn>Skills</button>

            <button class="toggle-btn" data-toggle-btn>Tools</button>
          </div>

        </div>

        <div class="skills-box" data-skills-box>

          <ul class="skills-list">

            <li>
              <div class="skill-card">
                <div class="tooltip">HTML5</div>

                <div class="card-icon">
                  <img src="html5.png" alt="HTML5 logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">CSS3</div>

                <div class="card-icon">
                  <img src="css3.png" alt="CSS3 logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">JavaScript</div>

                <div class="card-icon">
                  <img src="javascript.png" alt="JavaScript logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">jQuery</div>

                <div class="card-icon">
                  <img src="jquery.png" alt="jQuery logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Bootstrap</div>

                <div class="card-icon">
                  <img src="bootstrap.png" alt="Bootstrap logo">
                </div>
              </div>
            </li>

           

            


          </ul>

          <ul class="tools-list">

            <li>
              <div class="skill-card">
                <div class="tooltip">Canva</div>

                <div class="card-icon">
                  <img src="canva.png" alt="Canva logo" style="height: 48px; width: 48px;">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Chat Gpt</div>

                <div class="card-icon">
                  <img src="chatgpt.png" alt="chatgpt logo" style="height: 48px; width: 48px;">
                </div>
              </div>
            </li>
            <li>
              <div class="skill-card">
                <div class="tooltip">VS Code</div>

                <div class="card-icon">
                  <img src="vs-code.png" alt="VS Code logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Photoshop</div>

                <div class="card-icon">
                  <img src="photoshop.png" alt="Photoshop logo">
                </div>
              </div>
            </li>

            <li>
              <div class="skill-card">
                <div class="tooltip">Adobe XD</div>

                <div class="card-icon">
                  <img src="adobe-xd.png" alt="Adobe XD logo">
                </div>
              </div>
            </li>

          </ul>

        </div>

      </section>





      <!-- 
        - #PROJECTS
      -->

      <section class="project" id="portfolio">

        <ul class="project-list">

          <li>
            <div class="project-content section-content">

              <p class="section-subtitle">My Works</p>

              <h2 class="h3 section-title">See My Works Which Will Amaze You!</h2>

              <p class="section-text">
                We develop the best quality website that serves for the long-term. Well-documented, clean, easy and
                elegant interface
                helps any non-technical clients.
              </p>

            </div>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-1.webp" class="w-100" alt="A macintosh on a yellow background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 01</h3>

                
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-2.webp" class="w-100" alt="On a Blue background, a Wacom and a mouse.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 02</h3>

              
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-3.webp" class="w-100"
                  alt="A Cassette tape on a mellow apricot background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 03</h3>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-4.webp" class="w-100"
                  alt="Blue digital watch on a dark liver background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 04</h3>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-5.webp" class="w-100"
                  alt="On a dark liver background, Airport luggage car carrying a luggage.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 05</h3>
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-6.webp" class="w-100"
                  alt="On a yellow background, a digital watch and a glass.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 06</h3>

                
              </div>

            </a>
          </li>

          <li>
            <a href="#" class="project-card">

              <figure class="card-banner">
                <img src="project-7.webp" class="w-100"
                  alt="A fujifilm instant camera on a dark electric blue background.">
              </figure>

              <div class="card-content">
                <h3 class="h4 card-title">Lorem Ipsum Dolor 07</h3>

                
              </div>

            </a>
          </li>

          <li>
            <button class="load-more">Load more work</button>
          </li>

        </ul>

      </section>





      <!-- 
        - #CONTACT
      -->

      <section class="contact" id="contact">

        <div class="contact-content section-content">

          <p class="section-subtitle">Contact</p>

          <h2 class="h3 section-title">Have You Any Project? Please Drop a Message</h2>

          <p class="section-text">
            Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as soon as possible.
          </p>

          <ul class="contact-list">

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Address:</h3>

                <address class="contact-info">
                  Village-Bhurjat
                  Mahendragarh Haryana India,123029
                </address>
              </div>

            </li>

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Phone:</h3>

                <a href="tel:9817529254" class="contact-info">+91-9817529254</a>
              </div>

            </li>

            <li class="contact-list-item">

              <div class="contact-item-icon">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <div class="wrapper">
                <h3 class="h4 contact-item-title">Email:</h3>

                <a href="mailto:nitinjangra0981@gmail.com" class="contact-info">nitinjangra0981@gmail.com</a>
              </div>

            </li>

            <li>
              <ul class="contac-social-list">

                <li>
                  <a href="https://www.facebook.com/nitinjangra76071?mibextid=ZbWKwL" class="contact-social-link" target="_blank">
                    <div class="tooltip">Facebook</div>

                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://www.instagram.com/_nitin__jangra_/" class="contact-social-link" target="_blank">
                    <div class="tooltip">Instagram</div>

                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://www.linkedin.com/in/nitin-jangra-9a2618264" class="contact-social-link" target="_blank">
                    <div class="tooltip">Linkedin</div>

                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

      

        <form  method="post" class="contact-form" enctype="multipart/form-data" action="">

          <div class="form-wrapper">

            <label for="name" class="form-label">Name</label>

            <div class="input-wrapper">

              <input type="text" name="name" id="name" required placeholder="e.g Nitin Jangra" class="input-field">

              <ion-icon name="person-circle"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="email" class="form-label">Email</label>

            <div class="input-wrapper">

              <input type="email" name="email" id="email" required placeholder="e.g loremm@mail.com"
                class="input-field">

              <ion-icon name="mail"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="phone" class="form-label">Phone</label>

            <div class="input-wrapper">

              <input type="tel" name="phone" id="phone" required placeholder="Phone Number" class="input-field">

              <ion-icon name="call"></ion-icon>

            </div>

          </div>

          <div class="form-wrapper">

            <label for="message" class="form-label">Message</label>

            <div class="input-wrapper">

              <textarea name="message" id="message" required placeholder="Write message..."
                class="input-field"></textarea>

              <ion-icon name="chatbubbles"></ion-icon>

            </div>

          </div>
          <div class="form-wrapper">

            <div class="input-wrapper">

              <input type="submit" name="submit" id="sumit" value="SUBMIT">
              <?php if(!empty ($message)){ ?>
                <div>
                    <strong><?php echo $message; ?></strong>
                </div>
            <?php ?>
            </div>

          </div>
          

        </form>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p class="h1 logo">
        <a href="#">
         Nitin Jangra<span>.</span>
        </a>
      </p>

    </div>
  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top title="Go to Top">
    <ion-icon name="arrow-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>