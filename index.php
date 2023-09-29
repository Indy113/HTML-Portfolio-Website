    <?php 
      include("inc\navigation.php");
    ?>
    <div class="slider">
        <header>
          <label for="slide-1-trigger">&#x2022;</label>
          <label for="slide-2-trigger">&#x2022;</label>
          <label for="slide-3-trigger">&#x2022;</label>
          <label for="slide-4-trigger">&#x2022;</label>
        </header>
      
        <input id="slide-1-trigger" type="radio" name="slides" checked>

          <section class="slide slide-one">
          <h1 id="typeEffect"></h1>
        </section>
        <input id="slide-2-trigger" type="radio" name="slides">

          <section class="slide slide-two">
          <h1 id="typeEffect2">Healine 2</h1>
        </section>
        <input id="slide-3-trigger" type="radio" name="slides">

          <section class="slide slide-three">
          <h1 id="typeEffect3">Headline 3</h1>
        </section>
        <input id="slide-4-trigger" type="radio" name="slides">
        
          <section class="slide slide-four">
          <h1 id="typeEffect4">Headline 4</h1>
        </section>
      </div>
      <div class="main">
      <p class="scroll"><i class="arrow down"></i><br><strong>Scroll Down</strong></p> 
        <ul id="project-nav">
            <li class="project-nav-boxes"><img src="images\placeholder.png" alt="A picture of my project" class="project-nav-img"><h2>Project One</h2><a href="projects\Project1.php"><h3>View Project <i class="arrow right"></i></h3></a></li>
            <li class="project-nav-boxes"><img src="images\placeholder.png" alt="A picture of my project" class="project-nav-img"><h2>Project Two</h2><a href=""><h3>View Project <i class="arrow right"></i></h3></a></li>
            <li class="project-nav-boxes"><img src="images\placeholder.png" alt="A picture of my project" class="project-nav-img"><h2>Project Three</h2><a href=""><h3>View Project <i class="arrow right"></i></h3></a></li>
            <li class="project-nav-boxes"><img src="images\placeholder.png" alt="A picture of my project" class="project-nav-img"><h2>Project Four</h2><a href=""><h3>View Project <i class="arrow right"></i></h3></a></li>
        </ul>
            <script src="typeHeader.js"></script>
            <script src="SettingsMenu.js"></script>
            <script src="SnackBar.js"></script>
      </div>
    </body>
  
    <div class="form">
        <h2>Get In Touch</h2>
      <p>
        Submit your details in the form below to get in touch with any enquiries you may have
      </p>
        <h3>07444927109<br>Indy113@outlook.com</h3>
      <p>
        Please only contact about relevant and important enquiries or bugs / issues you may have encounted on this site, any and all feedback will be taken and used to improve the user experience.
      </p>
    <form id="contactForm">
        <input required type="text" name="first-name" id="first-name" placeholder="First Name">
        <input required type="text" name="last-name" id="last-name" placeholder="Last Name">
        <input required type="email" name="email" id="email" placeholder="Email">
        <input type="text" name="subject" id="subject" placeholder="Subject">
        <textarea required name="message" id="message" placeholder="Message"></textarea>
        <button id="submit">Submit</button>
    </form>
    </div>

    <br>
  
    <footer>
        <p class="scroll"><a href=""><i class="arrow up"></i><br><strong>Back To Top</strong></a></p>  
    </footer>
</html>
  <!-- <button onclick="snackBar()" id="button">button</button> -->
  <!-- <div id="snackbar">message here</div> -->