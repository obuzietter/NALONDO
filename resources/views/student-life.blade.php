<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalondo - Student Life</title>
    <link rel="stylesheet" href="/css/student-life.css">
    <link rel="stylesheet" href="/css/student-leader.css">
    <script src="/js/student-leader.js" defer></script>
    <script src="/js/animation-observer.js" defer></script>

    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/theme.css">
    <link rel="stylesheet" href="/css/navbar-footer.css">
    <link rel="stylesheet" href="/css/animation-observer.css">
</head>

<body>
    @include('navbar')
    <main>
        <section class="hero">
            <div class="banner">
                <h1><span class="or-text">SEE</span> THE <span class="or-text">STUDENT</span> LIFE</h1>
                <a href="#brief">
                    <img src="/icons/down-arrow.png" alt="" width="50px">
                </a>
            </div>
        </section>
        <section class="brief" id="brief">
            <div class="box">
                {{-- <div class="image">
                    <img src="/images/background.jpg" alt="">
                </div> --}}
                <div class="description aob">
                    <h3 class="h3">STUDENT LIFE</h3>
                    <p class="para">
                        The student-life webpage on our high school's website serves as a vibrant hub of information and connection for our students. Here, you'll discover a treasure trove of resources and activities that enrich your high school experience. Stay up-to-date with the latest events, club meetings, and sports fixtures through our interactive calendar. Explore the diverse array of student organizations and clubs that cater to a wide range of interests, from the arts to STEM and beyond. </p>
                </div>
            </div>
        </section>
        <section class="clubs">
            <div class="heading">
                <h2>CLUBS AND EXTRA CURRICULAR ACTIVITIES</h2>

            </div>
            <hr>
            <div class="cards">
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Eco-Warriors Club</h3>
                        <p>The Eco-Warriors Club is a group of passionate high school students committed to making a positive impact on the environment. We organize regular clean-up events, promote recycling and sustainable living, and collaborate with local organizations to address environmental issues in our community. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Tech Innovators Society</h3>
                        <p>The Tech Innovators Society is the perfect place for tech enthusiasts and aspiring innovators. We explore cutting-edge technologies, experiment with coding, and develop innovative projects. Whether you're interested in app development, robotics, or artificial intelligence, this club provides a platform to nurture your passion for all things tech.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Debate and Model UN Club</h3>
                        <p> If you enjoy expressing your opinions, debating global issues, or simulating international diplomacy, the Debate and Model UN Club is for you. Join us to improve your public speaking skills, engage in stimulating debates, and represent your school in Model United Nations conferences. This club is the ideal platform for future leaders and diplomats.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Music Harmonics Society
                        </h3>
                        <p>The Music Harmonics Society welcomes all music enthusiasts, from classical virtuosos to rock aficionados. We organize jam sessions, host music appreciation events, and provide opportunities for solo and group performances. No matter your skill level, you can share your love for music in a supportive and creative environment.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Tech Innovators Society</h3>
                        <p>The Tech Innovators Society is the perfect place for tech enthusiasts and aspiring innovators. We explore cutting-edge technologies, experiment with coding, and develop innovative projects. Whether you're interested in app development, robotics, or artificial intelligence, this club provides a platform to nurture your passion for all things tech.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="record">
            <div class="banner">
                <h1>
                    <marquee behavior="scroll" direction="" scrollamount="24">
                        <div>HIGHEST KCSE SCORE EVER ACHIEVED <span style="color: var(--h-color); font-weight: bold;">10.5</span></div>
                    </marquee>
                </h1>
            </div>
        </section>
        <section class="student-leaders">
            <!-- Student leader heading -->
            <div class="heading">
                <h1>STUDENT LEADERS</h1>
            </div>
            <hr>
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://img.freepik.com/free-photo/confident-businessman-smiles-city-night-generated-by-ai_188544-26175.jpg" style="width:100%">
                    <div class="text">THE SCHOOL CAPTAIN</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://img.freepik.com/free-photo/smiling-school-children-posing-cheerful-portrait-generated-by-ai_188544-29175.jpg" style="width:100%">
                    <div class="text">DEPUTY SCHOOL CAPTAIN - ACADEMICS</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="https://img.freepik.com/premium-photo/enchanted-educator-unveiling-magic-teaching-with-passion-wisdom-generative-ai_70251-4956.jpg" style="width:100%">
                    <div class="text">DEPUTY SCHOOL CAPTAIN - ADMINISTRATION</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>
        <section class="religion">
            <div class="container">
                <div class="text">
                    <h1 class="animate-character">RELIGION</h1>
                    <p class="religion-text"> At our school, we embrace the Catholic faith, and this section offers a space for students to connect with their spiritual beliefs and values. Here, you can access information about religious services, prayer groups, and events organized by the school's chapel. We aim to foster a sense of community and spiritual growth, in line with our Catholic tradition, ensuring that students have a supportive environment to explore their faith and engage in discussions about religion. Whether you seek guidance, want to participate in religious activities, or simply wish to learn more about our Catholic identity, our student-life webpage provides valuable resources to enrich your spiritual journey.</p>
                </div>
                <video autoplay loop class="background-clip">
                    <source src="https://v.ftcdn.net/02/16/14/54/240_F_216145419_8ZL4rGJUqB6Ci4dRUrEOiRQh4Jgd2Ui1_ST.mp4" type="">
                </video>
            </div>

        </section>
        <section class="accomodation">
            <div class="title">
                <h1>STUDENT HOSTELS</h1>
            </div>
            <hr>
            <div class="boxes">
                <div class="box">
                    <div class="house-name">AMUGUNE HOUSE</div>
                    <img src="/images/dorm 1.png" alt="">
                </div>
                <div class="box">
                    <div class="house-name">VICTORY HOUSE</div>
                    <img src="/images/dorm 2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">CHETAMBE HOUSE</div>
                    <img src="/images/dorm 3.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">ELGON HOUSE</div>
                    <img src="/images/dorm 1.png" alt="">
                </div>
                <div class="box">
                    <div class="house-name">ANNEX HOUSE</div>
                    <img src="/images/dorm 2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">HARAMBEE HOUSE</div>
                    <img src="/images/dorm 3.jpg" alt=""></div>
                <div class="box">
                    <div class="house-name">MULIRO HOUSE</div>
                    <img src="/images/dorm 1.png" alt=""></div>
                <div class="box">
                    <div class="house-name">NYAYO HOUSE</div>
                    <img src="/images/dorm 2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">JAMHURI HOUSE</div>
                    <img src="/images/dorm 3.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">NYERERE HOUSE</div>
                    <img src="/images/dorm 1.png" alt="">
                </div>
                <div class="box">
                    <div class="house-name">NAKHISA HOUSE</div>
                    <img src="/images/dorm 2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">AGGREY HOUSE</div>
                    <img src="/images/dorm 3.jpg" alt="">
                </div>
            </div>
        </section>
    </main>
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        window.addEventListener('scroll', () => {
            document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
        })

        //show/hide nav menu
        const menu = document.querySelector(".nav_menu");
        const menuBtn = document.querySelector("#open-menu-btn");
        const closeBtn = document.querySelector("#close-menu-btn");



        menuBtn.addEventListener('click', () => {
            menu.style.display = "flex";
            closeBtn.style.display = "inline-block";
            menuBtn.style.display = "none";
        })

        //close navbar
        const closeNav = () => {
            menu.style.display = "none";
            closeBtn.style.display = "none";
            menuBtn.style.display = "inline-block";


        }
        closeBtn.addEventListener('click', closeNav)

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //when windo is>=600px
            breakpoints: {
                600: {
                    slidesPerView: 2

                }
            }
        });
    </script>

</body>

</html>