<!DOCTYPE html>
<!-- Created By Albirru -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al-Birru Collection</title>
    <link rel="shortcut icon" href="images/imagee.png" type="image/png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--
   <script src="js/three.js"></script>
    <script src="js/panolens.js"></script>

 --> 
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
  /*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
}
html {
  scroll-behavior: smooth;
}

/* custom scroll bar */
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
  background: #888;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}

/* all similar content styling codes */
section {
  padding: 100px 0;
}
.max-width {
  max-width: 1300px;
  padding: 0 80px;
  margin: auto;
}
.about,
.testimony,
#gallery,
#product,
.footer {
  font-family: "Poppins", sans-serif;
}

.about .about-content,
.contact .contact-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
section .title {
  position: relative;
  text-align: center;
  font-size: 40px;
  font-weight: 500;
  margin-bottom: 60px;
  padding-bottom: 20px;
  font-family: "Ubuntu", sans-serif;
}
section .title::before {
  content: "";
  position: absolute;
  bottom: 0px;
  left: 50%;
  width: 180px;
  height: 3px;
  background: #070c0d;
  transform: translateX(-50%);
}
section .title::after {
  position: absolute;
  bottom: -8px;
  left: 50%;
  font-size: 20px;
  color: rgb(255, 207, 50);
  padding: 0 5px;
  background: #fff;
  transform: translateX(-50%);
}

/* navbar styling */
.navbars {
  position: fixed;
  width: 100%;
  z-index: 999;
  padding: 30px 0;
  font-family: "Ubuntu", sans-serif;
  transition: all 0.3s ease;
}
.navbars.sticky {
  padding: 15px 0;
  background: rgb(255, 207, 50);
}
.navbars .max-width {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.navbars .logo a {
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.navbars .logo a span {
  color: rgb(255, 207, 50);
  transition: all 0.3s ease;
}
.navbars.sticky .logo a span {
  color: #fff;
}
.navbars .menu li {
  list-style: none;
  display: inline-block;
}
.navbars .menu li a {
  display: block;
  color: #fff;
  font-size: 15.5px;
  font-weight: 500;
  margin-left: 25px;
  transition: color 0.3s ease;
}
.navbars .menu li a:hover {
  color: rgb(252, 190, 20);
}
.navbars.sticky .menu li a:hover {
  color: #fff;
}

/* menu btn styling */
.menu-btn {
  color: #fff;
  font-size: 23px;
  cursor: pointer;
  display: none;
}
.scroll-up-btn {
  position: fixed;
  height: 45px;
  width: 42px;
  background: rgb(252, 190, 20);
  right: 30px;
  bottom: 10px;
  text-align: center;
  line-height: 45px;
  color: #fff;
  z-index: 9999;
  font-size: 30px;
  border-radius: 6px;
  border-bottom-width: 2px;
  cursor: pointer;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.scroll-up-btn.show {
  bottom: 30px;
  opacity: 1;
  pointer-events: auto;
}
.scroll-up-btn:hover {
  filter: brightness(90%);
}

/* home section styling */
.home {
  display: flex;
  background: url("images/banner.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  background-color: black;
  height: 100vh;
  color: #fff;
  min-height: 500px;
  background-size: cover;
  background-attachment: fixed;
  font-family: "Ubuntu", sans-serif;
}

.pan {
  width: 100%;
  height: 100%;
}
.home .max-width {
  width: 100%;
  display: flex;
}
.home .max-width .row {
  margin-right: 0;
}
.home .home-content .text-1 {
  font-size: 27px;
}
.home .home-content .text-2 {
  font-size: 75px;
  font-weight: 600;
  margin-left: -3px;
}
.home .home-content .text-3 {
  font-size: 40px;
  margin: 5px 0;
}
.home .home-content .text-3 span {
  color: rgb(252, 190, 20);
  font-weight: 500;
}
.home .home-content a,
.product-a a {
  display: inline-block;
  background: rgb(255, 207, 50);
  background-blend-mode: darken;
  color: #fff;
  font-size: 25px;
  padding: 12px 36px;
  margin-top: 20px;
  font-weight: 400;
  border-radius: 6px;
  border: 2px solid rgb(252, 190, 20);
  transition: all 0.3s ease;
}
.home .home-content a:hover,
.product-a a:hover {
  color: rgb(255, 207, 50);
  background: none;
}

/* about section styling */

.about .about-content .left {
  width: 45%;
}
.about .about-content .left img {
  height: 400px;
  width: 400px;
  object-fit: cover;
  border-radius: 6px;
}
.about .about-content .right {
  width: 55%;
}
.about .about-content .right .text {
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 10px;
}
.about .about-content .right .text span {
  color: rgb(255, 207, 50);
}
.about .about-content .right p {
  text-align: justify;
}
.about .about-content .right a {
  display: inline-block;
  background: rgb(255, 207, 50);
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 30px;
  margin-top: 20px;
  border-radius: 6px;
  border: 2px solid rgb(255, 207, 50);
  transition: all 0.3s ease;
}
.about .about-content .right a:hover {
  color: rgb(255, 207, 50);
  background: none;
}

/* gallery test */
.sm {
  margin: 20px 0;
}

.sm a {
  display: inline-flex;
  width: 40px;
  height: 40px;
  justify-content: center;
  align-items: center;
  color: #fff;
  font-size: 18px;
  transition: 1s;
}

.sm a:hover {
  background: rgb(199, 161, 39);
  color: #fff;
}
/* Produk test */
/* .carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  color: #747d89;
  min-height: 325px;
  text-align: center;
  overflow: hidden;
}
.carousel .thumb-wrapper {
  padding: 25px 15px;
  background: #fff;
  border-radius: 6px;
  text-align: center;
  position: relative;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}
.carousel .item .img-box {
  height: 120px;
  margin-bottom: 20px;
  width: 100%;
  position: relative;
}
.carousel .item img {
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
  position: absolute;
  bottom: 0;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.carousel .item h4 {
  font-size: 18px;
}
.carousel .item h4,
.carousel .item p,
.carousel .item ul {
  margin-bottom: 5px;
}
.carousel .thumb-content .btn {
  color: rgb(255, 207, 50);
  font-size: 11px;
  text-transform: uppercase;
  font-weight: bold;
  background: none;
  border: 1px solid rgb(255, 207, 50);
  padding: 6px 14px;
  margin-top: 5px;
  line-height: 16px;
  border-radius: 20px;
}
.carousel .thumb-content .btn:hover,
.carousel .thumb-content .btn:focus {
  color: #fff;
  background: rgb(255, 207, 50);
  box-shadow: none;
}
.carousel .thumb-content .btn i {
  font-size: 14px;
  font-weight: bold;
  margin-left: 5px;
}
.carousel .carousel-control {
  height: 44px;
  width: 40px;
  background: rgb(255, 207, 50);
  margin: auto 0;
  border-radius: 4px;
  opacity: 0.8;
}
.carousel .carousel-control:hover {
  background: rgb(255, 207, 50);
  opacity: 1;
}
.carousel .carousel-control i {
  font-size: 36px;
  position: absolute;
  top: 50%;
  display: inline-block;
  margin: -19px 0 0 0;
  z-index: 5;
  left: 0;
  right: 0;
  color: #fff;
  text-shadow: none;
  font-weight: bold;
}
.carousel .item-price {
  font-size: 13px;
  padding: 2px 0;
}
.carousel .item-price strike {
  opacity: 0.7;
  margin-right: 5px;
}
.carousel .carousel-control.left i {
  margin-left: -2px;
}
.carousel .carousel-control.right i {
  margin-right: -4px;
}
.carousel .carousel-indicators {
  bottom: -50px;
}
.carousel-indicators li,
.carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 4px;
  border-radius: 50%;
  border: none;
}
.carousel-indicators li {
  background: rgba(0, 0, 0, 0);
}
.carousel-indicators li.active {
  background: rgba(0, 0, 0, 0);
}
.carousel .wish-icon {
  position: absolute;
  right: 10px;
  top: 10px;
  z-index: 99;
  cursor: pointer;
  font-size: 16px;
  color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
  color: #ff6161;
} */
/*testimoni*/
.shadow-effect {
  background: #fff;
  padding: 20px;
  border-radius: 4px;
  text-align: center;
  border: 1px solid #ececec;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.1), 0 15px 12px rgba(0, 0, 0, 0.02);
}
#customers-testimonials .shadow-effect p {
  font-family: inherit;
  font-size: 17px;
  line-height: 1.5;
  margin: 0 0 17px 0;
  font-weight: 300;
}
.testimonial-name {
  margin: -17px auto 0;
  display: table;
  width: auto;
  background: rgb(255, 207, 50);
  padding: 9px 35px;
  border-radius: 12px;
  text-align: center;
  color: #fff;
  box-shadow: 0 9px 18px rgba(0, 0, 0, 0.12), 0 5px 7px rgba(0, 0, 0, 0.05);
}
#customers-testimonials .item {
  text-align: center;
  padding: 50px;
  margin-bottom: 80px;
  opacity: 0.2;
  -webkit-transform: scale3d(0.8, 0.8, 1);
  transform: scale3d(0.8, 0.8, 1);
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
#customers-testimonials .owl-item.active.center .item {
  opacity: 1;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
}
.owl-carousel .owl-item img {
  transform-style: preserve-3d;
  max-width: 90px;
  margin: 0 auto 17px;
}
#customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
#customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
  background: rgba(0, 0, 0, 0);
  transform: translate3d(0px, -50%, 0px) scale(0.7);
}
#customers-testimonials.owl-carousel .owl-dots {
  display: inline-block;
  width: 100%;
  text-align: center;
}
#customers-testimonials.owl-carousel .owl-dots .owl-dot {
  display: inline-block;
}
#customers-testimonials.owl-carousel .owl-dots .owl-dot span {
  background: rgba(0, 0, 0, 0);
  display: inline-block;
  height: 20px;
  margin: 0 2px 5px;
  transform: translate3d(0px, -50%, 0px) scale(0.3);
  transform-origin: 50% 50% 0;
  transition: all 250ms ease-out 0s;
  width: 20px;
}

/* contact section styling */

.contact .title::after {
  content: "get in touch";
}
.contact .contact-content .column {
  width: calc(50% - 30px);
}
.contact .contact-content .text {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
}
.contact .contact-content .left p {
  text-align: justify;
}
.contact .contact-content .left .icons {
  margin: 10px 0;
}
.contact .contact-content .tes {
  display: flex;
  height: 65px;
  align-items: center;
}
.contact .contact-content .tes .info {
  margin-left: 30px;
}
.contact .contact-content .tes i {
  font-size: 25px;
  color: rgb(255, 207, 50);
}
.contact .contact-content .info .head {
  font-weight: 500;
}
.contact .contact-content .info .sub-title {
  color: #333;
}
.contact .right form .fields {
  display: flex;
}
.contact .right form .field,
.contact .right form .fields .field {
  height: 45px;
  width: 100%;
  margin-bottom: 15px;
}
.contact .right form .textarea {
  height: 80px;
  width: 100%;
}
.contact .right form .name {
  margin-right: 10px;
}
.contact .right form .field input,
.contact .right form .textarea textarea {
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 6px;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-family: "Poppins", sans-serif;
  transition: all 0.3s ease;
}
.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus {
  border-color: #b3b3b3;
}
.contact .right form .textarea textarea {
  padding-top: 10px;
  resize: none;
}
.contact .right form .button-area {
  display: flex;
  align-items: center;
}
.right form .button-area button {
  color: #fff;
  display: block;
  width: 160px !important;
  height: 45px;
  outline: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 6px;
  cursor: pointer;
  flex-wrap: nowrap;
  background: rgb(255, 207, 50);
  border: 2px solid rgb(255, 207, 50);
  transition: all 0.3s ease;
}
.right form .button-area button:hover {
  color: rgb(255, 207, 50);
  background: none;
}

/* footer section styling */

footer {
  background: rgb(255, 207, 50);
  padding: 15px 23px;
  color: #fff;
  text-align: center;
}
footer span a {
  color: rgb(255, 207, 50);
  text-decoration: none;
}
footer span a:hover {
  text-decoration: underline;
}

/* responsive media query start */
@media (max-width: 1104px) {
  .about .about-content .left img {
    height: 350px;
    width: 350px;
  }
}

@media (max-width: 991px) {
  .max-width {
    padding: 0 50px;
  }
}
@media (max-width: 947px) {
  .menu-btn {
    display: block;
    z-index: 999;
  }
  .menu-btn i.active:before {
    content: "\f00d";
  }
  .navbars .menu {
    position: fixed;
    height: 100vh;
    width: 100%;
    left: -100%;
    top: 0;
    background: #111;
    text-align: center;
    padding-top: 80px;
    transition: all 0.3s ease;
  }
  .navbars .menu.active {
    left: 0;
  }
  .navbars .menu li {
    display: block;
  }
  .navbars .menu li a {
    display: inline-block;
    margin: 20px 0;
    font-size: 25px;
  }
  .home .home-content .text-2 {
    font-size: 70px;
  }
  .home .home-content .text-3 {
    font-size: 35px;
  }
  .home .home-content a {
    font-size: 23px;
    padding: 10px 30px;
  }
  .max-width {
    max-width: 930px;
  }
  .about .about-content .column {
    width: 100%;
  }
  .about .about-content .left {
    display: flex;
    justify-content: center;
    margin: 0 auto 60px;
  }
  .about .about-content .right {
    flex: 100%;
  }
  .services .serv-content .card {
    width: calc(50% - 10px);
    margin-bottom: 20px;
  }
  .skills .skills-content .column,
  .contact .contact-content .column {
    width: 100%;
    margin-bottom: 35px;
  }
}

@media (max-width: 690px) {
  .max-width {
    padding: 0 23px;
  }
  .home .home-content .text-2 {
    font-size: 60px;
  }
  .home .home-content .text-3 {
    font-size: 32px;
  }
  .home .home-content a {
    font-size: 20px;
  }
  .services .serv-content .card {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .home .home-content .text-2 {
    font-size: 50px;
  }
  .home .home-content .text-3 {
    font-size: 27px;
  }
  .about .about-content .right .text,
  .skills .skills-content .left .text {
    font-size: 19px;
  }
  .scroll-up-btn {
    right: 15px;
    bottom: 15px;
    height: 38px;
    width: 35px;
    font-size: 23px;
    line-height: 38px;
  }
}
/* Heading */
.heading {
  display: block;
  position: relative;
  color: rgb(255, 207, 50);
  font-size: 4vw;
  padding: 50px;
  width: 100%;
  text-align: center;
}

.heading:before {
  position: absolute;
  content: "";
  width: 10%;
  height: 7px;
  left: 50%;
  transform: translateX(-50%);
  bottom: 25%;
  background: #393939;
}
.heading b {
  color: #111;
}
.heading h1 {
  font-weight: 800px;
  font-family: "Poppins";
}

</style>

  </head>
  <body>
    <div class="scroll-up-btn">
      <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbars" >
      <div class="max-width"  data-aos="fade-down" data-aos-once="true" data-aos-delay="1800" data-aos-duration="3000">
        <div class="logo">
          <a href="#" style="text-decoration: none"><span>To</span>ko Al-Bi<span>rru</span></a>
        </div>
        <ul class="menu">
          <li><a href="#home" style="text-decoration: none" class="menu-btn">Home</a></li>
          <li><a href="#about" style="text-decoration: none" class="menu-btn">About</a></li>
          <li><a href="#gallery" style="text-decoration: none" class="menu-btn">Gallery</a></li>
          <li><a href="#product" style="text-decoration: none" class="menu-btn">Product</a></li>
          <li><a href="#testimony" style="text-decoration: none" class="menu-btn">Testimonial</a></li>
          <li><a href="#contact" style="text-decoration: none" class="menu-btn">Contact</a></li>
          <li><a href="#home" style="text-decoration: none" class="menu-btn"><span id="clock"></span></a></li>
          <script type="text/javascript">
            function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                    a_p = "AM";
                } else {
                    a_p = "PM";
                }
                if (curr_hour == 0) {
                    curr_hour = 12;
                }
                if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
            document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                }
            
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 500);
            //-->
            </script>
            
        </ul>
        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
        <div class="home-content">
          <div class="text-1" data-aos="zoom-in-up" data-aos-once="true">Assalamualaikum, Selamat datang di</div>
          <div class="text-2" data-aos="zoom-in" data-aos-once="true" data-aos-delay="700">Toko Al-Birru</div>
          <div class="text-3" data-aos="fade-down" data-aos-once="true" data-aos-delay="1500"> Kami Menyediakan <span class="typing"></span></div>
          <a href="#contact" style="text-decoration: none" data-aos="zoom-in-up" data-aos-once="true" data-aos-delay="3000" data-aos-duration="2000">Contact Us</a>
        </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
      <div class="max-width">
        <div class="heading" data-aos="zoom-in-up" data-aos-once="true" >
          <h1><b>About</b> us</h1>
        </div>
        <div class="about-content" >
          <div class="column left" data-aos="flip-right" data-aos-delay="500" data-aos-once="true"
          data-aos-duration="2000">
            <img src="images/profile-1.jpeg" alt="" /> 
          </div>
          <div class="column right"data-aos="flip-left"  data-aos-delay="1000" data-aos-once="true"
          data-aos-duration="2000">
            <div class="text">Toko Al-birru</div>
            <p>
              Toko Al-birru didirikan sejak tahun 2006. Nama Al-Birru sendiri terinspirasi dari kata ٱلْبِرُّ yang berarti kebaikan, jika disandingkan dengan dagang
              berarti laris dan insyaallah berkah. Kami memiliki visi membuat produk yang Oke Bahannya , Halus Jahitannya ,  Bagus Modelnya. <br /><br />
            </p>

            <p>
              Alhamdulillah banyak pelanggan yang puas dengan produk kami. Kata mereka "belanja di Al-Birru ramah ownernya", "Barangnya awet udah sekian tahun masih bagus", "Modelnya cakep-cakep, anak saya suka banget". Selain itu banyak
              juga resseler yang kami miliki. Kami juga memberikan diskon untuk member, disetiap pembelian produk kami. 
            </p>
          </div>
        </div>
      </div>
    </section>
 <!--
      <script src="js/main.js">
    </script> 
    <div class="pan"></div>
 -->
 
 
   
    <!--3D Gallery section start-->
    <style>
      .tridi a {
        text-decoration: none;
      }
      .tridi h1,
      .tridi h2,
      .tridi h3 {
        text-transform: uppercase;
      }
      .tridi h2 {
        font-size: 1.125em;
        color: #4a89ca;
        font-weight: 600;
        margin: 0;
      }
      .tridi h3 {
        font-size: 1.3em;
        line-height: 1.25em;
        margin-top: 0.85em;
        margin-bottom: 0.5em;
      }
      .tridi p {
        font-size: 0.875em;
        line-height: 1.4;
        margin: 0 0 1.5em;
      }

      /* ================================= 
  Base Layout Styles
==================================== */

      /* ---- Layout Containers ---- */

      .tridi,
      .tridi .content {
        margin: auto;
      }
      .tridi {
        width: 94.02985075%;
        max-width: 1260px;
        padding: 0 2.25em 4em;
        background: rgba(255, 255, 255, 0);
      }
      .tridi .main-header {
        text-align: center;
        padding: 2.8em 0 3.8em;
      }
      .tridi .cube-container {
        max-width: 200px;
        text-align: center;
        margin: 0 auto 4.5em;
      }
      /* ---- Page Elements ---- */

      .tridi .name {
        font-size: 1.65em;
        font-weight: 800;
        margin: 0 0 1.5em;
        line-height: 1;
      }
      .tridi .name span {
        font-weight: 300;
        margin-left: -7px;
      }
      .tridi .logo {
        width: 45px;
        margin-bottom: 0.4em;
        cursor: pointer;
      }
      .tridi .button {
        font-size: 0.8em;
        color: #fff;
        width: 90%;
        line-height: 1.15;
        font-weight: 700;
        display: block;
        text-decoration: none;
        text-transform: uppercase;
        padding: 0.95em 0;
        border-radius: 0.5em;
        background: rgb(209, 168, 33);
        margin: auto;
      }
      /* ---- Photo Overlay ---- */

      .tridi .photo-desc {
        font-size: 0.85em;
        color: #fff;
        padding: 1.1em 1em 0;
        background: rgb(255, 207, 50);
      }
      /* ---- Float clearfix ---- */

      .tridi .clearfix::after {
        content: " ";
        display: table;
        clear: both;
      }

      /* ================================= 
  Media Queries
==================================== */

      @media (min-width: 769px) {
        .tridi .cube-container {
          float: left;
          margin-left: 16.6%;
        }
      }
      @media (min-width: 1025px) {
        .tridi .cube-container:first-child {
          margin-left: 0;
        }
        .tridi .cube-container:last-child {
          float: right;
        }
        .tridi .content {
          max-width: 900px;
          margin: auto;
        }
      }

      /* ================================= 
  Button Transitions
==================================== */

      .tridi .button {
        transition: background 0.3s;
      }
      .tridi .button:hover {
        background: rgb(255, 207, 50);
      }

      /* ================================= 
  Photo 3D Transforms & Transitions
==================================== */

      .tridi .cube-container {
        box-shadow: 0 18px 40px 5px rgba(0, 0, 0, 0.4);
        perspective: 800px;
      }

      .tridi .photo-cube {
        transition: transform 3.5s ease-in-out;
        width: 220px;
        height: 200px;
        transform-style: preserve-3d;
      }

      .tridi .photo-cube:hover {
        transform: rotateY(-270deg);
      }

      .tridi .front,
      .tridi .back,
      .tridi .left,
      .tridi .right {
        width: 100%;
        height: 100%;
        display: block;
        position: absolute;
      }

      .tridi .front {
        transform: translate3d(0, 0, 110px);
      }

      .tridi .back {
        transform: translateZ(-110px) rotateY(270deg);
        transform-origin: center left;
      }

      .tridi .left {
        transform: rotateY(-270deg) translate3d(110px, 0, 0);
        transform-origin: top right;
      }

      .tridi .right {
        transform: translateZ(-110px) rotateY(180deg);
      }
    </style> 
    <section id="gallery">
      <div class="container tridi">
        <header class="main-header clearfix">
        <div class="heading" data-aos="zoom-in-up" data-aos-once="true" >
            <h1><b>Our</b> Gallery</h1>
          </div>
          <h5 data-aos="zoom-in-up" data-aos-once="true" data-aos-delay="500">Letakkan Cursor di Gambar <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> </h5>
        </header>
        <div class="content clearfix" style="display: run-in; justify-content: center; margin-right:15%" data-aos="fade-down" data-aos-delay="1000" data-aos-once="true"
        data-aos-duration="2000">
          <div class="cube-container col-sm-3 m">
            <div class="photo-cube">
              <img class="front" src="images/produk/1.jpg" alt="" />
              <div class="back photo-desc">
                <h3>Oke Bahannya</h3>
                <p>Setiap memilih bahan kami pastikan untuk memilih bahan dengan kualitas yang terbaik, agar pelanggan puas dengan produk kami</p>
                <div class="sm">
                  <a href="https://www.facebook.com/albirru.gamis" style="text-decoration: none" target="_blank"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/albirru_produsen_gamis/" style="text-decoration: none" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://wa.me/6285642280120" style="text-decoration: none" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
              </div>
              <img class="left" src="images/produk/9.png" alt="" />
              <img class="right" src="images/produk/4.png" alt="" />
            </div>
          </div>
          
          <div class="cube-container col-sm-3">
            <div class="photo-cube">
              <img class="front" src="images/produk/3.jpg" alt="" />
              <div class="back photo-desc">
                <h3>Halus Jahitannya</h3>
                <p> Kami selalu memperhatikan jahitan yang kami buat, agar pelanggan puas dengan produk kami</p>
                <div class="sm">
                  <a href="https://www.facebook.com/albirru.gamis" style="text-decoration: none" target="_blank"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/albirru_produsen_gamis/" style="text-decoration: none" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://wa.me/6285642280120" style="text-decoration: none" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
              </div>
              <img class="left" src="images/produk/11.png" alt="" />
              <img class="right" src="images/produk/8.png" alt="" />
            </div>
          </div>

          <div class="cube-container col-sm-3">
            <div class="photo-cube">
              <img class="front" src="images/produk/2.jpg" alt="" />
              <div class="back photo-desc">
                <h3>Bagus Modelnya</h3>
                <p>Setiap produk kami buat model semenarik mungkin, agar pelanggan merasa puas dengan produk kami</p>
                <div class="sm">
                  <a href="https://www.facebook.com/albirru.gamis" style="text-decoration: none" target="_blank"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/albirru_produsen_gamis/" style="text-decoration: none" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="https://wa.me/6285642280120" style="text-decoration: none" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
              </div>
              <img class="left" src="images/produk/5.png" alt="" />
              <img class="right" src="images/produk/7.png" alt="" />
            </div>
          </div>

       
          </div>
        </div>
      </div>
    </section>

    <!-- Produk section start-->
    <section id="product">
      <div class="container product d-flex justify-content-center">
        <div class="row ">
          <div class="col-md-12">
            <div class="heading" data-aos="zoom-in-up" data-aos-once="true">
              <h1><b>Buy</b> Product</h1>
            </div>
          </div>
          <div class="col-md-12" data-aos="flip-down" data-aos-once="true">
          <iframe src="product/index.php" height="700" width="100%" title="Iframe Example" style=" box-shadow: 0.5px 4px 8px 0.5px rgba(0, 0, 0, 0.5);"></iframe>
          </div>
          <br>
          <div class="text-center product-a" data-aos="flip-down" data-aos-once="true" style=" margin-top: 20px;">
          <a href="product/index.php" style="text-decoration: none; font-size: 20px;">Belanja Sekarang</a>
          </div>
        </div>
      </div>
    </section>

    
    <!-- testmony section start-->

    <section class="testimonials" id="testimony">
      <div class="heading" data-aos="zoom-in-up" data-aos-once="true">
        <h1><b>Our</b> Testimonial</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="customers-testimonials" class="owl-carousel" data-aos="zoom-in-down" data-aos-once="true" data-aos-delay="1000" data-aos-duration="2000">
              <!--TESTIMONIAL 1 -->
              <div class="item">
                <div class="shadow-effect">
                  <br>
                  <img class="rounded-circle" src="testi-2.png" alt="" />
                  <p>Bahan jilbab bagus, unt jilbab segi empat tersedia banyak pilihan warna dan ukuran, lengkap pokoknya.. trimakasih al birru..</p>
               <br>
               <br>
               
                </div>
                <div class="testimonial-name" style="font-size: 14px;">Nurhakimah Siwi Handayani<br>(from: <a href="https://www.google.com/maps/place/Al-Birru+Busana+Muslim/@-7.6206415,110.8909716,17z/data=!4m7!3m6!1s0x2e7a3d4f3237866b:0x7ada580d59e0c4c7!8m2!3d-7.6206415!4d110.8931603!9m1!1b1" 
                  style="text-decoration: none; color: white; font-weight: bolder;">Google Maps</a>)</div>
              </div>
              <!--END OF TESTIMONIAL 1 -->
              <!--TESTIMONIAL 2 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="rounded-circle" src="testi.png" alt="" />
                  <br>
                  <p>Belanja busana syar'i tapi bisa modis juga</p>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
                <div class="testimonial-name">Kesi Dwiyanto <br>(from: <a href="https://www.google.com/maps/place/Al-Birru+Busana+Muslim/@-7.6206415,110.8909716,17z/data=!4m7!3m6!1s0x2e7a3d4f3237866b:0x7ada580d59e0c4c7!8m2!3d-7.6206415!4d110.8931603!9m1!1b1" 
                  style="text-decoration: none; color: white; font-weight: bolder;">Google Maps</a>)</div>
              </div>
           
              <!--END OF TESTIMONIAL 2 -->
              <!--TESTIMONIAL 3 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="rounded-circle" src="testi-2.png" alt="" />
                  <br>
                  <p>Beli macam2 Qur'an disini</p>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
                <div class="testimonial-name">Main Mail<br>(from: <a href="https://www.google.com/maps/place/Al-Birru+Busana+Muslim/@-7.6206415,110.8909716,17z/data=!4m7!3m6!1s0x2e7a3d4f3237866b:0x7ada580d59e0c4c7!8m2!3d-7.6206415!4d110.8931603!9m1!1b1" 
                  style="text-decoration: none; color: white; font-weight: bolder;">Google Maps</a>)</div>
              </div>
              <!--END OF TESTIMONIAL 3 -->
              <!--TESTIMONIAL 4 -->
              <div class="item">
                <div class="shadow-effect">
                  <br>
                  <img class="rounded-circle" src="testi-2.png" alt="" />
                  <p>Trimakasih untuk al birru..smoga sukses...bagus</p>
                  <br>
                  <br>
                  <br>
                  <br>
                </div>
                <div class="testimonial-name">Retno Suryaningsih <br>(from: <a href="https://www.google.com/maps/place/Al-Birru+Busana+Muslim/@-7.6206415,110.8909716,17z/data=!4m7!3m6!1s0x2e7a3d4f3237866b:0x7ada580d59e0c4c7!8m2!3d-7.6206415!4d110.8931603!9m1!1b1" 
                  style="text-decoration: none; color: white; font-weight: bolder;">Google Maps</a>)</div>
              </div>
              <!--END OF TESTIMONIAL 4 -->
              <!--TESTIMONIAL 5 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="rounded-circle" src="testi.png" alt="" />
                  <br>
                  <p>Masyaa Allah owner nya ramah, murah senyum...
                    Baarakallahu fiikum</p>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="testimonial-name">Muhammad Nawwaf a <br>(from: <a href="https://www.google.com/maps/place/Al-Birru+Busana+Muslim/@-7.6206415,110.8909716,17z/data=!4m7!3m6!1s0x2e7a3d4f3237866b:0x7ada580d59e0c4c7!8m2!3d-7.6206415!4d110.8931603!9m1!1b1" 
                  style="text-decoration: none; color: white; font-weight: bolder;">Google Maps</a>)</div>
              </div>
              <!--END OF TESTIMONIAL 5 --> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section start -->
    <section class="contact " id="contact">
      <div class="max-width">
        <div class="heading" data-aos="zoom-in-up" data-aos-once="true">
          <h1><b>Contact</b> Us</h1>
        </div>
          <div class="contact-content">
              <div class="column left" data-aos="flip-left" data-aos-once="true" data-aos-delay="750" data-aos-duration="2000">
                  <div class="text">Hubungi Kami</div>
                  <p>Assalamualaikum, Jika ada pertanyaan anda dapat menghubungi kontak person dibawah atau mengirim pesan lewat form disamping, insyaallah kami akan segera membalas pertanyaan anda.</p>
            
                  <div class="icons">
                  <div class="tes">
                    <i class="fas fa-user"></i>
                    <div class="info">
                      <div class="head">Name</div>
                      <div class="sub-title">Setiawan Budi Santoso</div>
                    </div>
                  </div>
                  <br>
                  <div class="tes">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info">
                      <div class="head">Address</div>
                      <div class="sub-title">Jl. H. Muslich, RT.1/RW.6, Blimbing, Wonorejo, Kec. Polokarto, Kabupaten Sukoharjo, Jawa Tengah 57555</div>
                    </div>
                  </div>
                  <br>
                  <div class="tes">
                    <i class="fab fa-whatsapp-square"></i>
                    <div class="info">
                      <div class="head">No Whatsapp</div>
                      <div class="sub-title">+62-856-4228-0120</div>
                    </div>
                  </div>
                
                  <div class="tes">
                    <i class="fa fa-envelope"></i>
                    <div class="info">
                      <div class="head">E-Mail</div>
                      <div class="sub-title">albirrubursa@gmail.com</div>
                    </div>
                  </div>
                </div>
            
               
              </div>
              <div class="column right" data-aos="flip-right" data-aos-once="true" data-aos-delay="1500" data-aos-duration="2000">
                  <div class="text">Kirim Pesan</div>
                  <div class="alert alert-warning alert-dismissible fade show my-alert" role="alert">
                    Jika halaman tidak refresh, Maka Pesan anda <b> telah kami terima</b>. Jangan Spam, Mohon tunggu balasan dari admin (Max 2x24 Jam) 🙏
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <form action="#" name='contact-form'>
                      <div class="fields">
                          <div class="field name">
                              <input type="text" name="nama" placeholder="Nama" required>
                          </div>
                          <div class="field email">
                              <input type="email"name="email" placeholder="Email" required>
                          </div>
                      </div>
                      <div class="field">
                          <input type="tel" id="phone" name="telpon" placeholder=" No Handphone" required>
                      </div>
                      <div class="field textarea">
                          <textarea cols="30" rows="10" name="pesan" placeholder="Pesan.." required></textarea>
                      </div>
                      <div class="button-area ">
                          <button class="btn-kirim" type="submit">Send message</button>
                      </div>
                  </form>
                  <br>
              </div>
          </div>
      </div>
<br>
<br>
<br>
      <div class="container d-flex justify-content-center">
        <iframe data-aos="fade-up" data-aos-once="true" data-aos-duration="2000"
                      class="right"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506230.4375118843!2d110.41830168660627!3d-7.583111027163449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3d4f3237866b%3A0x7ada580d59e0c4c7!2sAl-Birru%20Busana%20Muslim!5e0!3m2!1sid!2sid!4v1635747554916!5m2!1sid!2sid"
                      width="90%"
                      height="400"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                    ></iframe>
      </div>
  </section>
 <!--Maps section start-->
 <!--  <section class="maps" id="maps">
<div class="container d-flex justify-content-center">
  <iframe data-aos="fade-up" data-aos-once="true" data-aos-duration="2000"
                class="right"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506230.4375118843!2d110.41830168660627!3d-7.583111027163449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3d4f3237866b%3A0x7ada580d59e0c4c7!2sAl-Birru%20Busana%20Muslim!5e0!3m2!1sid!2sid!4v1635747554916!5m2!1sid!2sid"
                width="90%"
                height="400"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
</div>
            
  </section>-->
 <!--Maps section start-->
 
    <!-- footer section start -->
    <footer >
        <div class="footer-text"><span class="typing-4"></span></div>     
    </footer>

    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxmG4xfOD3GO1KfNdx3G0V2wRu_QeaM9OiUYMOWsFIzBpTU16sx4lWEhx5ych2UA9K2sg/exec';
      const form = document.forms['contact-form'];

      form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response =>{

            console.log('Success!', response);
          })
          .catch(error => console.error('Error!', error.message))
       } )
    </script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init();
     </script>
  </body>
</html>
