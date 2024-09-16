<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalondo - Student Life</title>
    @include('favicon')
    <link rel="stylesheet" href="/css/student-life.css">
    {{-- <link rel="stylesheet" href="/css/student-leader.css"> --}}
    {{-- <script src="/js/student-leader.js" defer></script> --}}
    <script src="/js/animation-observer.js" defer></script>

    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/theme.css">
    <link rel="stylesheet" href="/css/navbar-footer.css">
    <link rel="stylesheet" href="/css/animation-observer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <style>
        #student-link {
            color: var(--h-color);
        }

        #student-link::after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            bottom: -4px;
            /* Adjust the position as needed */
            width: 100%;
            height: 3px;
            /* Height of the line */
            background-color: var(--h-color);
            /* Color of the line */
            transform: scaleX(1);
            /* Initially, the line is not visible */
            transform-origin: center;
            /* Set the transform origin to center */
            transition: transform 0.3s ease;
            /* Add animation for smoother transition */
        }
    </style>
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
                        The student-life page serves as a vibrant hub of information and
                        connection for our students. Here, you'll discover a treasure trove of resources and activities
                        that enrich your high school experience. Stay up-to-date with the latest events, club meetings,
                        and sports fixtures through our interactive calendar. Explore the diverse array of student
                        organizations and clubs that cater to a wide range of interests, from the arts to STEM and
                        beyond. </p>
                </div>
            </div>
        </section>
        <section class="clubs">
            <div class="heading">
                <h2>CLUBS AND SOCIETY</h2>
            </div>
            <hr>
            <div class="cards">
                <div class="card" style="">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/close-up-microphone_107420-63821.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Debate Club Image" width="100%">
                    <div class="card-body">
                        <h3>Debate Club</h3>
                        <p class="card-text">Sharpen your public speaking, critical thinking, and persuasion skills in
                            our Debate Club. Engage in exciting debates on current affairs and gain confidence on stage.
                        </p>
                    </div>
                </div>
                <div class="card" style="">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/group-giraffes-outdoor-zoo_53876-63253.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Wildlife Club Image" width="100%">
                    <div class="card-body">
                        <h3>Wildlife Club</h3>
                        <p class="card-text">Join the Wildlife Club and learn more about Kenya's rich biodiversity.
                            Participate in conservation projects, environmental clean-ups, and nature hikes.</p>
                    </div>
                </div>
                <div class="card" style="">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/two-different-type-elegant-venetian-mask-with-sequins-dark-backdrop_23-2148051853.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Drama Club Image" width="100%">
                    <div class="card-body">
                        <h3>Drama Club</h3>
                        <p class="card-text">Express your creativity on stage through acting, scriptwriting, and stage
                            performances. Be part of thrilling productions and compete in the Kenya Schools Drama
                            Festival.</p>
                    </div>
                </div>
                <div class="card" style="">
                    <img class="card-img-top" src="https://img.freepik.com/premium-photo/display-different-types-liquid-sign-that-says-top-it_1153744-96002.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Science Club Image" width="100%">
                    <div class="card-body">
                        <h3>Science Club</h3>
                        <p class="card-text">Explore the world of science through exciting experiments, projects, and
                            innovation. Take part in science fairs and showcase your creativity in the STEM field.</p>
                    </div>
                </div>
                <div class="card" style="">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/delicate-weding-rings-lie-strings_8353-15.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Music Club Image" width="100%">
                    <div class="card-body">
                        <h3>Music Club</h3>
                        <p class="card-text">Nurture your musical talent, whether through choir, instrumentals, or
                            traditional Kenyan music. Perform at school events and regional competitions.</p>
                    </div>
                </div>
                <div class="card" style="">
                    <img class="card-img-top" src="https://img.freepik.com/free-photo/top-view-collection-medicine-with-copy-space_23-2148529754.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Red Cross Club Image"
                        width="100%">
                    <div class="card-body">
                        <h3>Red Cross Club</h3>
                        <p class="card-text">Learn essential first aid skills and participate in community service
                            activities. Join the Red Cross Club and make a positive impact in your community.</p>
                    </div>
                </div>


            </div>
        </section>
        <section class="record">
            <div class="banner">
                <h1>
                    <marquee behavior="scroll" direction="" scrollamount="24">
                        <div>HIGHEST KCSE SCORE EVER ACHIEVED <span
                                style="color: var(--h-color); font-weight: bold;">10.5</span></div>
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
            <div class="card-group">
                <div class="card mx-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 10px;">
                  <img class="card-img-top" src="/images/koech.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">SYLVESTER KOECH</h5>
                    <h4 class="card-title">DEPUTY CAPTAIN</h4>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
                <div class="card mx-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 10px;">
                  <img class="card-img-top" src="/images/carolly.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">CAROLLY WAFULA</h5>
                    <h4 class="card-title">SCHOOL PRESIDENT</h4>
                    
                    {{-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
                <div class="card mx-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 10px;">
                  <img class="card-img-top" src="/images/kadagi.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">KADAGI MICHAEL</h5>
                    <h4 class="card-title">ACADEMIC SECRETARY</h4>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
              </div>
        </section>
        <section class="religion">
            <div class="heading" style="padding: 2rem 0">
                <h1 style="text-align: center">RELIGION</h1>
            </div>
            <div class="card mb-3">
                <img class="card-img-topp" src="https://img.freepik.com/free-photo/divine-book-ai-generated_268835-7978.jpg?ga=GA1.1.569336961.1721632028&semt=ais_hybrid" alt="Card image cap">
                <div class="card-body">
                  {{-- <h5 class="card-title">Religion</h5> --}}
                  <p class="card-text">At our school, we embrace the Catholic faith, and this section offers a space for students to connect with their spiritual beliefs and values. Here, you can access information about religious services, prayer groups, and events organized by the school's chapel. We aim to foster a sense of community and spiritual growth, in line with our Catholic tradition, ensuring that students have a supportive environment to explore their faith and engage in discussions about religion. Whether you seek guidance, want to participate in religious activities, or simply wish to learn more about our Catholic identity, our student-life webpage provides valuable resources to enrich your spiritual journey.</p>
                  {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
              </div>
        </section>
        <section class="accomodation">
            <div class="title">
                <h1>STUDENT HOSTELS</h1>
            </div>
            <hr>
            <div class="boxes">
                <div class="box">
                    <div class="house-name">STATE HOUSE A</div>
                    <img src="/images/dorm 1.png" alt="">
                </div>
                <div class="box">
                    <div class="house-name">STATE HOUSE B</div>
                    <img src="/images/dorm 2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">STATE HOUSE C</div>
                    <img src="/images/dorm 3.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">BARAKA HOSTEL</div>
                    <img src="/images/dorm 1.png" alt="">
                </div>
                <div class="box">
                    <div class="house-name">MADARAKA HOSTEL</div>
                    <img src="/images/dorm 2.jpg" alt="">
                </div>
                <div class="box">
                    <div class="house-name">ELGON HOSTEL</div>
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
