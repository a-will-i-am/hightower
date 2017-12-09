<!DOCTYPE html>
<html land="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <style>@import url('https://fonts.googleapis.com/css?family=Roboto');</style>
 <link rel="stylesheet" href="assets/css/main.css">
 <link rel="stylesheet" href="assets/css/animate.css">
 <link rel="shortcut icon" href="favicon.ico" >
    <title>Hightower Foundation Inc.</title>
</head>
<body class="animated fadeIn">
    <nav>
      <div class="nav-wrapper white darken-1">
        <a href="#home" class="brand-logo black-text"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">Menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html" class="black-text">Home</a></li>
          <li><a href="history.html" class="black-text">History</a></li>
          <li><a href="donate.html" class="black-text">Donate</a></li>
          <li><a href="apply.html" class="black-text">Apply</a></li>
          <li><a href="contact2.php" class="black-text">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html" class="black-text">Home</a></li>
          <li><a href="history.html" class="black-text">History</a></li>
          <li><a href="donate.html" class="black-text">Donate</a></li>
          <li><a href="apply.html" class="black-text">Apply</a></li>
          <li><a href="contact2.php" class="black-text">Contact</a></li>
        </ul>
    </nav>
  </div>
    <!-- hero image here -->
    <div class="parallax-container valign-wrapper section scrollspy" id="home">
      <div class="container">
        <div class="row">
          <div class="col s12 white-text">
            <h1 class="animated fadeInUp center-align"><u></u></h1>
            <h1 class="animated fadeInUp center-align"> </h1>
          </div>
        </div>
      </div>
      <div class="parallax"><<img src="images/famuhome.jpg"></div>
    </div>
<!-- End of header-->


<!-- Contact box -->
    <div class="container section scrollspy" id="contact">
      <div class="row">
          <h1 class="green-text"> Contact Us </h1>
          <form class="col s12" action="contact.php" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input name="firstname" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input name="lastname" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="phone" type="text" class="validate">
                <label for="phone">Phone</label>
              </div>
              <div class="input-field col s6">
                <input name="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea name="message" class="materialize-textarea"></textarea>
                <label for="msg">Message</label>
              </div>
          </form>
        </div>
      </div>
      <a class="waves-effect waves-light btn amber">Submit</a>
    </div>
    <br>
    <br>
  <?php
    if ($_POST['submit']) {
      /* Anything that goes in here is only performed if the form is submitted */
    }
    if ($_POST['submit']) {
      if (mail ($to, $subject, $body, $from)) {
          echo '<p>Your message has been sent!</p>';
      } else {
          echo '<p>Something went wrong, go back and try again!</p>';
      }
  }
  ?>

<!-- Footer -->
    <footer class="page-footer black">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Connect With Us</h5>
                <div class="col s12 m2">
                   <a href="https://www.facebook.com/Hightower-Foundation-Inc-1252670121504205/"><img src="images/facebook.png" style="height: 50px; width:50px"></a>
                </div>
                <div class="col s12 m2">
                   <a href="https://www.instagram.com/hightowerfoundationfl/"><img src="images/instagram.png" style="height: 50px; width:50px"</a>
                </div>
                <div class="col s12 m2">
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="PJU2XSLYQHWAL">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
                </div>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Quick links</h5>
                <ul>
                  <li><a href="index.html" class="white-text">Home</a></li>
                  <li><a href="history.html" class="white-text">History</a></li>
                  <li><a href="donate.html" class="white-text">Donate</a></li>
                  <li><a href="apply.html" class="white-text">Apply</a></li>
                  <li><a href="contact.html" class="white-text">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <div> </div>
            </div>
          </div>
        </footer>

<!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script src="text/javascript" src="assets/js/scripts.js"></script>

<!-- sideNav Initializer -->
  <script type="text/javascript">
  $(".button-collapse").sideNav();
  $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>

<!-- sideNav Initializer -->
  <script type="text/javascript">
$(document).ready(function(){
   $('.scrollspy').scrollSpy();
 });
  </script>

  <!-- Icon fadeIn -->
    <script type="text/javascript">
    $(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();

      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(300,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(300,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});
    </script>
</body>
</html>
