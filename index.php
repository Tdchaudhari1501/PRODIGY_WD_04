<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords"
    content="Tushar chaudhari, portfolio, Tushar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
  <meta name="description" content="Welcome to Tushar's Portfolio. Frontend Web Developer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


  <!-- Favicon -->
  <link id='favicon' rel="shortcut icon" href="./assets/images/tdimg.ico" type="image/x-png">
  <title>Portfolio |Tushar Chaudhari</title>
</head>

<body oncontextmenu="return false">

  <!-- pre loader -->
  <!-- <div class="loader-container">
  <img draggable="false" src="./assets/images/preloader.gif" alt="">
</div> -->

  <!-- navbar starts -->
  <header>
    <a href="/" class="logo"> </a>

    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- navbar ends -->


  <!-- hero section starts -->
  <section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
      <h2>Hi There,<br /> I'm Tushar <span>Chaudhari</span></h2>
      <p>i am into Frontend WebDeveloper</p>
      <a href="#about" class="btn"><span>About Me</span>
        <i class="fas fa-arrow-circle-down"></i>
      </a>
      <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn"
              href="https://www.linkedin.com/in/tushar-chaudhari-284ab128a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
              target="_blank"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="github" aria-label="GitHub" href="https://github.com/Tdchaudhari1501" target="_blank"><i
                class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://twitter.com/" target="_blank"><i
                class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me/tdc1501" target="_blank"><i
                class="fab fa-telegram-plane"></i></a></li>
          <li><a class="instagram" aria-label="Instagram"
              href="https://www.instagram.com/td_chaudhari_9094?igsh=MTdseGt3M2UydGI2OQ==" target="_blank"><i
                class="fab fa-instagram"></i></a></li>

        </ul>
      </div>
    </div>
    <div class="image">
      <img draggable="false" class="tilt" src="./assets/images/hero.png" alt="">
    </div>
  </section>
  <!-- hero section ends -->


  <!-- about section starts -->
  <section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>

    <div class="row">

      <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/td.jpg" alt="">
      </div>
      <div class="content">
        <h3>I'm Tushar</h3>
        <span class="tag">Frontend Developer</span>

        <p>I am a dedicated Computer Engineering student at L.D.College of Engineering.
          Specializing in software development and web technologies.
          I am very passionate about improving my coding skills & developing applications & websites.
          I build WebApps and Websites using Frontend development.
          Working for myself to improve my skills.
        </p>

        <div class="box-container">
          <!-- <div class="box">
              <p><span> age: </span> 20</p>
              <p><span> phone : </span> +91 XXX-XXX-XXXX</p>
            </div> -->
          <div class="box">
            <p><span> email : </span> tusharchaudhari1501@gmail.com</p>
            <p><span> place : </span> Ahmedabad, India -380015</p>
          </div>
        </div>

        <div class="resumebtn">
          <a href="https://1drv.ms/b/c/b23b873938f474fd/EVaa7oHU7r5KrK9C6j4us-gBbh93ca4eGrKv196XJkLKfg
            " target="_blank" class="btn"><span>Resume</span>
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- about section ends -->

  <!-- skills section starts -->
  <section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
      <div class="row" id="skillsContainer">

        <div class="bar">
          <div class="info">
            <i class="fa-brands fa-html5" style="color: #e14a09;"></i>
            <span>HTML5</span>
          </div>
        </div>


        <div class="bar">
          <div class="info">
            <i class="fa-brands fa-css3-alt" style="color: #0d6cb5;"></i>
            <span>CSS3</span>
          </div>
        </div>


        <div class="bar">
          <div class="info">
            <i class="fa-brands fa-js" style="color: #FFD43B;"></i>
            <span>JavaScript</span>
          </div>
        </div>


        <div class="bar">
          <div class="info">
            <i class="fa-brands fa-java" style="color: #085ea1;"></i>
            <span>Java</span>
          </div>
        </div>


        <div class="bar">
          <div class="info">
            <i class="fa-brands fa-php" style="color: #9da7b8;"></i>
            <span>PHP</span>
          </div>
        </div>


        <div class="bar">
          <div class="info">
            <i class="fa-solid fa-database"></i>
            <span>MySQL</span>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- skills section ends -->


  <!-- education section starts -->
  <section class="education" id="education">

    <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

      <div class="box">
        <div class="image">
          <img draggable="false" src="./assets/images/ld.jpg" alt="">
        </div>
        <div class="content">
          <h3>Bachelor of Engineering in Computer Engineering</h3>
          <p>L.D.College of engineering,Ahmedabad</p>
          <h4>2021-2025 | Pursuing</h4>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img draggable="false" src="./assets/images/svm.jpg" alt="">
        </div>
        <div class="content">
          <h3>HSC Science</h3>
          <p>Sarswati Vidhya Mandir,Vadnagar</p>
          <h4>2020-2021</h4>
        </div>
      </div>

    </div>
  </section>
  <!-- education section ends -->


  <!-- work project section starts -->
  <section class="work" id="work">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>

    <div class="box-container">

      <div class="box tilt">
      <img draggable="false" src="/Task-04/assets/images/Screenshot 2024-06-20 171134.png" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/Tdchaudhari1501" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/e-commerce.png" alt="" />
      <div class="content">
        <div class="tag">
        <h3>E-commerce Website</h3>
        </div>
        <div class="desc">
          <p>E-commerce website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/Tdchaudhari1501/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/weather.png" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Weather Application</h3>
        </div>
        <div class="desc">
          <p>Weather Application. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/Tdchaudhari1501/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="/Task-04/assets/images/banner_agriculture.webp" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Agri-Smart Website</h3>
        </div>
        <div class="desc">
          <p>Agri-Smart website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/Tdchaudhari1501/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/youtube-clone.png" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Youtube Clone</h3>
        </div>
        <div class="desc">
          <p>Yotube Clone. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/Tdchaudhari1501/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box tilt">
      <img draggable="false" src="./assets/images/blog.png" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Blog Website</h3>
        </div>
        <div class="desc">
          <p>Blog website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/Tdchaudhari1501/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="viewall">
      <a href="/Task-04/projects/" class="btn"><span>View All</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>

  </section>
  <!-- work project section ends -->

  <!-- experience section starts -->
  <section class="experience" id="experience">

    <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

    <div class="timeline">

      <div class="container right">
        <div class="content">
          <div class="tag">
            <h2>Self Employed</h2>
          </div>
          <div class="desc">
            <h3>Frontend Developer</h3>
            <p>Oct 2023 - present</p>
          </div>
        </div>
      </div>

      <div class="container left">
        <div class="content">
          <div class="tag">
            <h2>ProdigyInfoTech</h2>
          </div>
          <div class="desc">
            <h3>Web Developer | Internship</h3>
            <p>June 2024 - July 2024</p>
          </div>
        </div>
      </div>

      
      
    </div>

    <div class="morebtn">
      <a href="/Task-04/experience/" class="btn"><span>View All</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>

    </div>

  </section>
  <!-- experience section ends -->

  <!-- contact section starts -->
  <section class="contact" id="contact">

    <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

    <div class="container">
      <div class="content">
        <div class="image-box">
          <img draggable="false" src="./assets/images/contact1.png" alt="">
        </div>
        <form action="/Task-04/addcontact.php" method="post">

          <div class="form-group">
            <div class="field">
              <input type="text" name="name" placeholder="Name" required>
              <i class='fas fa-user'></i>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email" required>
              <i class='fas fa-envelope'></i>
            </div>
            <div class="field">
              <input type="text" name="number" placeholder="Phone">
              <i class='fas fa-phone-alt'></i>
            </div>
            <div class="message">
              <textarea placeholder="Message" name="details" required></textarea>
              <i class="fas fa-comment-dots"></i>
            </div>
          </div>
          <div class="button-area">
            <button type="submit">
              Submit <i class="fa fa-paper-plane"></i></button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- contact section ends -->


  <!-- footer section starts -->
  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Tushar's Portfolio</h3>
        <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br /> <br /> Keep Rising
          🚀.</p>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
        <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
        <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
        <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
        <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
        <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <p> <i class="fas fa-phone"></i>+91 XXX-XXX-XXXX</p>
        <p> <i class="fas fa-envelope"></i>tusharchaudhari1501@gmail.com</p>
        <p> <i class="fas fa-map-marked-alt"></i>Ahmedabad, India-310015</p>
        <div class="share">

          <a href="https://www.linkedin.com/in/tushar-chaudhari-284ab128a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
            class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
          <a href="https://github.com/Tdchaudhari1501" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
          <a href="mailto:tusharchaudhari1501@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
          <a href="https://twitter.com/" class="fab fa-twitter" aria-label="Twitter" target="_blank"></a>
          <a href="https://t.me/tdc1501" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
        </div>
      </div>
    </div>

    <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a
        href="https://www.linkedin.com/in/tushar-chaudhari-284ab128a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">Tushar
        chaudhari</a></h1>

  </section>
  <!-- footer section ends -->


  <!-- scroll top btn -->
  <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
  <!-- scroll back to top -->


  <!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
  <!-- jquery cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- typed.js cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"
    integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- particle.js links -->
  <script src="./assets/js/particles.min.js"></script>
  <script src="./assets/js/app.js"></script>

  <!-- vanilla tilt.js links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"
    integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- scroll reveal anim -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

  <!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

  <script src="./assets/js/script.js"></script>

</body>

</html>