<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing:border-box}
  body {font-family: Verdana,sans-serif;}

  .mySlides {display:none}

  .mySlides {
    padding: 150px 0px 65px 0px;
    color: #022406;
    background-color:#0000;

  }
  /* Slideshow container */
  .slideshow-container {
    width: 100%;
    height: 60%;
    position: relative;

  }


  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }




  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 2.5s;
    animation-name: fade;
    animation-duration: 2.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 200px) {
    .text {font-size: 11px}
  }

  .mySlides h1 {
    font-size: 68px;
    text-shadow: 0 3px rgba(0, 0, 0, 0.1);
    color: #00a9e1;
  }
  img {
    display: block;
    margin: 0 auto;
  }



</style>
</head>
<body>



  <div class="slideshow-container">

    <div class="mySlides fade">

      <img src="img/integrasys.png" width="80%" height="40%">

    </div>

    <div class="mySlides fade">

      <h1 align="center">Mission</h1>
      <p class="lead" align="center">
        To provide a reliable and simplest IT solution that fulfills our client requirement and needs.       <br>

      </p>
    </div>

    <div class="mySlides fade">

      <h1 align="center">Vision</h1>
      <p class="lead" align="center" >
        To become one of the major IT players specialized in system and application development in Malaysia and the world.<br>

      </p>
    </div>

  </div>

  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>

</body>
</html>
