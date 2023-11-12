<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High School Achievements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/achievements.css">
    <link rel="stylesheet" href="/css/achievement.css">
   <!--ICONSCOUT CDN-->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/style.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<link rel="stylesheet" href="./css/theme.css">
    
</head>
<body>
    <nav>
        <div class="container nav_container">
        <div class="school-name">ST JOSEPH'S NALONDO HIGH SCHOOL</div>
  
        <ul class="nav_menu">
                 <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('faculty') }}">Faculty</a></li>
                <li><a href="{{ route('studentLife') }}">Student Life</a></li>
                <li><a href="{{ route('community') }}">Community</a></li>
                <li><a href="{{ route('achievements') }}">Achievements</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li> 
            </ul>
            <button id="open-menu-btn"><i class ="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class ="uil uil-multiply"></i></button>

        </div>

    </nav>
     <!--end of body-->
    <!--start of header-->
<header>
<div class="container header_container">
        <div class="header_left">
            <h1>Grow your skills</h1>
            <p>
    Step into the world of St. Joseph's Nalondo High School, where extraordinary achievements become everyday stories.</p> 
    <button class="btn btn-primary btn-show-achievements">See Achievements</button>

</div>
         <div class="header_right">
         <div class="header_right-image"></div>
         <img src="./images/students.jpeg"  width="300" height="400">  
         </div>
       </div>
    </header>       
  <!--end of header-->
  <section class="categories">
    <div class="container categories_container">
    <div class="categories_left">
        <h1>Achievement Categories</h1>
        <p>
            The school has had various achievements in various categories.
        </p>
        <a href="#" class="btn btn-learn-more">Learn More</a>

    </div>
    <div class="categories_right">
        <article class="category">
            <span class="category_icon"><i class="uil uil-bitcoin-circle"  ></i></span>
            <h5>Academic achievements</h5>
            <p>
                they include the following:
            </p>
        </article>

        <article class="category">
            <span class="category_icon"><i class="uil uil-bitcoin-circle"  ></i></span>
            <h5>Extra-Curricular</h5>
            <p>
                they include the following:
            </p>
        </article>

        <article class="category">
            <span class="category_icon"><i class="uil uil-bitcoin-circle"  ></i></span>
            <h5>Community Service</h5>
            <p>
                they include the following:
            </p>
        </article>

        <article class="category">
            <span class="category_icon"><i class="uil uil-bitcoin-circle"  ></i></span>
            <h5>Arhitecture</h5>
            <p>
                they include the following:
            </p>
        </article>

        <article class="category">
            <span class="category_icon"><i class="uil uil-bitcoin-circle"  ></i></span>
            <h5>Contests</h5>
            <p>
                they include the following:
            </p>
        </article>

        <article class="category">
            <span class="category_icon"><i class="uil uil-bitcoin-circle"  ></i></span>
            <h5>Music </h5>
            <p>
                they include the following:
            </p>
        </article>
    </div>
    </div>


</section>
<section class="courses">
    <h2>Achievements Featured</h2>
   <div class="container courses_container">
    <article class="course">
        <div class="course_image">
            <img src="./images/exams.jpeg" alt="">
        </div>
        <h4>Contests</h4>
        <p>
        Students took part in the Maths contest and managed to achieve top positions among other contests.

        </p>
     </article>

     <article class="course">
        <div class="course_image">
            <img src="./images/students2.jpeg" alt="">
        </div>
       <div class="course_info">
        <h4>Barazas</h4>
        <p>
        Students took part in the Maths contest and managed to achieve top positions among other contests.

        </p>
      </div>
     </article>

     <article class="course">
        <div class="course_image">
            <img src="./images/achievement4.jpg" alt="">
        </div>
       <div class="course_info">

        <h4> Extra-Curricular</h4>
        <p>
        Students took part in the Maths contest and managed to achieve top positions among other contests.

        </p>
       </div> 
     </article>

     <article class="course">
        <div class="course_image">
            <img src="./images/achievement2.jpg" alt="">
        </div>
        
        <div class="course_info">

        <h4>Debates</h4>
        <p>
        Students took part in the Maths contest and managed to achieve top positions among other contests.

        </p>
        </div>
    </article>

     <article class="course">
        <div class="course_image">
            <img src="./images/buildings1.jpeg" alt="">
        </div>
       <div class="course_info">

        <h4>School Architecture</h4>
        <p>
        Students took part in the Maths contest and managed to achieve top positions among other contests.

        </p>
       </div>
    </article>

     <article class="course">
        <div class="course_image">
            <img src="./images/title2 (2).jpeg" alt="">
        </div>
       <div class="course_info">

        <h4>KCSE Achievements</h4>
        <p>
        Students took part in the Maths contest and managed to achieve top positions among other contests.

        </p>
       </div>
    </article>
   </div>
</section>
<!--TESTIMONIALS SECTION-->
<section class="container testimonials_Container swiper mySwiper">
  <h1>Alumni Testimonial</h1>
  <div class="swiper-wrapper">
    <article class="testimonial swiper-slide">
     <div class="avatar">
        <img src="./images/avatar3.jpg">
     </div>
      <div class="testimonial_info">
       <h5>Jeff Roney</h5>
       <small>Alumni</small>
      </div>
      <div class="testimonial_body">
        <p>
            The school prepared me for real world.
        </p>
      </div>
    </article>

    <article class="testimonial swiper-slide">
        <div class="avatar">
           <img src="./images/avatar.jpeg">
        </div>
         <div class="testimonial_info">
          <h5>John Williams</h5>
          <small>Alumni</small>
         </div>
         <div class="testimonial_body">
           <p>
               The school prepared me for real world.
           </p>
         </div>
       </article>

       <article class="testimonial swiper-slide">
        <div class="avatar">
           <img src="./images/avatar7.jpeg">
        </div>
         <div class="testimonial_info">
          <h5>Ken Bett</h5>
          <small>Alumni</small>
         </div>
         <div class="testimonial_body">
           <p>
               The school prepared me for real world.
           </p>
         </div>
       </article>

       <article class="testimonial swiper-slide">
        <div class="avatar">
           <img src="./images/avatar4.jpeg">
        </div>
         <div class="testimonial_info">
          <h5>Daniel Mungai</h5>
          <small>Alumni</small>
         </div>
         <div class="testimonial_body">
           <p>
               The school prepared me for real world.
           </p>
         </div>
       </article>

       <article class="testimonial swiper-slide">
        <div class="avatar">
           <img src="./images/avatar5.jpeg">
        </div>
         <div class="testimonial_info">
          <h5>Kelvin Ekisa</h5>
          <small>Alumni</small>
         </div>
         <div class="testimonial_body">
           <p>
               The school prepared me for real world.
           </p>
         </div>
       </article>

       <article class="testimonial swiper-slide ">
        <div class="avatar">
           <img src="./images/avatar6.jpeg">
        </div>
         <div class="testimonial_info">
          <h5>Peter Onyango</h5>
          <small>Alumni</small>
         </div>
         <div class="testimonial_body">
           <p>
               The school prepared me for real world.
           </p>
         </div>
       </article>
  </div>
  <div class="swiper-pagination"></div>
</section>




<div class="footer">
    <div class="contact-info">
        <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-envelope"></i> Email: info@nalondohighschool.com</p>
        <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-phone"></i> Phone: +1 (123) 456-7890</p>
        <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-map-marker-alt"></i> Address: 123 School Street, City, Country</p>
    </div>
    <div class="footer-line"></div>
    <div class="footer-icons-container">
        <div class="footer-icons-row">
            <a href="https://www.facebook.com"><i class="fab fa-facebook" ></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter" ></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram" ></i></a>
        </div>
    </div>
    <div style="color: #fff;">
        <p style="color:var(--background-color);">&copy; 2023 NALONDO HIGH SCHOOL. ALL RIGHTS RESERVED.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const showAchievementsButton = document.querySelector('.btn-show-achievements');
    const learnMoreButtons = document.querySelectorAll('.btn-learn-more');

    showAchievementsButton.addEventListener('click', function() {
        const categoriesSection = document.querySelector('.categories');
        window.scrollTo({
            top: categoriesSection.offsetTop,
            behavior: 'smooth'
        });
    });

    learnMoreButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const coursesSection = document.querySelector('.courses');
            window.scrollTo({
                top: coursesSection.offsetTop,
                behavior: 'smooth'
            });
        });
    });
});

    window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle('window-scroll',window.scrollY>0)
})

//show/hide nav menu
const menu=document.querySelector(".nav_menu");
const menuBtn=document.querySelector("#open-menu-btn");
const closeBtn=document.querySelector("#close-menu-btn");



menuBtn.addEventListener('click',()=>{
    menu.style.display="flex";
    closeBtn.style.display="inline-block";
    menuBtn.style.display="none";
})

//close navbar
const closeNav=()=>{
    menu.style.display="none";
    closeBtn.style.display="none";
    menuBtn.style.display="inline-block";


}
closeBtn.addEventListener('click',closeNav)

      var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      //when windo is>=600px
      breakpoints: {
        600:{
            slidesPerView:2

        }
      }
    });
   
</script>

</body>
</html>
