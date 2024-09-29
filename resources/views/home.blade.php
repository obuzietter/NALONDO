<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nalondo - Home</title>
    @include('favicon')
    <!-- <link rel="stylesheet" href="/css/navbar-footer.css"> -->
    <link rel="stylesheet" href="{{ url('/css/navbar-footer.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <link rel="stylesheet" href=".p/css/style.css"> -->
    <link rel="stylesheet" href="./css/theme.css">
    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <script src="/js/home.js" defer></script>
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/counter.js" defer></script>

    <style>
        #home-link {
            color: var(--h-color);
        }

        #home-link::after {
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
        {{-- section landing --}}
        <section class="landing">
            <div class="slides">
                <div class="slide active" id="one">
                    <div class="welcome">
                        WELCOME TO
                    </div>
                    <div class="banner">
                        ST JOSEPHS NALONDO BOYS HIGHSCHOOL
                    </div>
                </div>
                <div class="slide" id="two">
                    <div class="welcome">
                        THIS IS WHERE
                    </div>
                    <div class="banner">
                        BOYS ARE TURNED INTO MEN
                    </div>
                </div>
                <div class="slide" id="three">
                    <div class="welcome">
                        OUR MOTTO
                    </div>
                    <div class="banner">
                        LEARNING FOR EMPOWERMENT
                    </div>
                </div>

            </div>

            <nav1>
                <span class="navBtns active"></span>
                <span class="navBtns"></span>
                <span class="navBtns"></span>
            </nav1>
        </section>
        <section class="brief">
            <div class="card student-life">
                <div class="icon">
                    <img src="{{ asset('/icons/student-life.png') }}" alt="">

                </div>
                <div class="desc">
                    <h3>STUDENT LIFE</h3>
                    <p>Our 'Student Life' page is your hub for an engaging high school experience. Explore a dynamic
                        calendar of events, from sports tournaments to club meetings, and stay updated on important
                        school announcements. </p>
                </div>
            </div>
            <div class="card projects">
                <div class="icon">
                    <img src="{{ asset('/icons/projects.png') }}" alt="">
                </div>
                <div class="desc">
                    <h3>SCHOOL PROJECTS</h3>
                    <p>
                        The school website's projects page is a dynamic hub showcasing a range of
                        student and faculty initiatives. From academic endeavors to community projects, this section
                        provides a snapshot of the school's commitment to innovation.
                    </p>
                </div>
            </div>
            <div class="card faculty">
                <div class="icon">
                    <img src="{{ asset('/icons/faculty.png') }}" alt="">
                </div>
                <div class="desc">
                    <h3>FACULTY</h3>
                    <p>The faculty page on our high school website provides a concise overview of our dedicated and
                        experienced teaching staff. Here, you can find brief profiles of each faculty member,
                        highlighting their academic backgrounds, areas of expertise, and a glimpse into their passion
                        for education. </p>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="blue-bg-color">
                <div class="heading">
                    Latest News

                </div>
                <div class="content">
                    <article>
                        <div class="image">
                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/458/458555.png" alt=""> --}}
                        </div>
                        <div class="body">
                            <h3>Unyielding Academic Performance</h3>
                            <p>The school has maintained a good run in performance at the Kenya National Examinations
                                Council, KNEC, exams. In the 2019 Kenya Certificate of Secondary Education, KCSE, exams
                                the school posted good results to rank among the best schools in the County. This is
                                after recording a mean score of 5.293 (C- minus).</p>
                            <span>
                                <a href="https://educationnewshub.co.ke/st-josephs-nalondo-boys-secondary-school-complete-details-kcse-results-fees-contacts-location-admissions-knec-code-history-portal-login-website/"
                                    target="_blank" style="color: var(--h-color)">
                                    See Article
                                </a>
                            </span>
                        </div>
                    </article>
                    <article>
                        <div class="image">
                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/458/458555.png" alt=""> --}}
                        </div>
                        <div class="body">
                            <h3>Elevation to Extra-County Status</h3>
                            <p>In 2022, St. Joseph's Nalondo Boys High School was elevated from a sub-county to an
                                extra-county level school. This move has allowed the school to restructure its
                                operations and enhance its academic standing. As an extra-county school, Nalondo Boys
                                High is now among the top-performing institutions in Bungoma County.</p>
                            <span>
                                <a href="https://youtu.be/-8Rx556URYU?si=KVZzpmChnFtH4wc2" target="_blank"
                                    style="color: var(--h-color)">See Article</a>
                            </span>
                        </div>
                    </article>
                    <article>
                        <div class="image">
                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/458/458555.png" alt=""> --}}
                        </div>
                        <div class="body">
                            <h3>Significant Infrastructure Upgrades</h3>
                            <p>The school has undergone significant infrastructure upgrades in recent years, thanks to
                                the support of the local community and various stakeholders. Notable improvements
                                include the construction of a new dining hall, with iron sheets donated by a generous
                                supporter. The school also plans to build a multi-story dormitory to accommodate its
                                growing student population as it transitions to an extra-county institution.</p>
                            <span>
                                <a href="https://youtu.be/-8Rx556URYU?si=KVZzpmChnFtH4wc2" target="_blank"
                                    style="color: var(--h-color)">See Article</a>
                            </span>
                        </div>
                    </article>
                </div>
                {{-- <div class="more">
                    <button>SEE MORE ARTICLES</button>
                </div> --}}
            </div>
        </section>
        {{-- section events --}}
        <section class="events">
            <div class="heading">
                <h1>Past Events</h1>
            </div>
            <div class="event-items">
                <div class="event">
                    <div class="date">
                        <div class="widget">
                            <div class="month">APR</div>
                            <div class="day">2023</div>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>Sports Tournaments Participation</h3>
                        <p>St. Joseph's Nalondo Boys High School participated in various inter-school sports
                            tournaments, showcasing its commitment to extracurricular activities and promoting teamwork
                            and physical fitness among students.</p>
                        {{-- <span>
                            See event details ->
                        </span> --}}
                    </div>
                </div>
                <div class="event">
                    <div class="date">
                        <div class="widget">
                            <div class="month">SEP</div>
                            <div class="day">2023</div>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>Academic Performance Improvement</h3>
                        <p>The school announced its target to send over 50 students to university in 2023, reflecting
                            its commitment to academic excellence and continuous improvement in performance metrics.</p>
                        {{-- <span>
                            See event details ->
                        </span> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="calender">
                <h1>SEE CALENDER OF EVENTS</h1>
            </div> --}}


        </section>
        <!-- about section styling -->
        <section class="about">
            <div class="slides">
                <div class="content">
                    <h1>ABOUT OUR SCHOOL</h1>
                    <p>
                        We don’t just give students an education and experiences that set them up for success in a
                        career. We help them succeed in their career—to discover a field they’re passionate about and
                        dare to lead it.</p>
                    <p>
                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed
                        in the exquisite sense of mere.
                    </p>
                </div>
                <div class="button">
                    <button id="btn">
                        <a href="{{ route('about') }}">LEARN MORE</a>
                        
                    </button>
                </div>
                
            </div>
        </section>
        <section class="counters" id="counters">
            <div class="counter ob">
                <span class="count" id="teachers" data-target="32">32</span>
                <h3>TEACHERS</h3>
            </div>
            <div class="counter ob">
                <span class="count" id="students" data-target="662">662</span>
                <h3>STUDENTS</h3>
            </div>
            <div class="counter ob">
                <span class="count" id="candidates" data-target="163">163</span>
                <h3>CANDIDATES</h3>
            </div>
        </section>
    </main>
    @include('footer')
</body>
<script>
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.navBtns')
    let currentSlide = 1;

    // manual navigation
    var manualNav = function(manual) {
        slides.forEach((slide) => {
            slide.classList.remove('active')

            btns.forEach((btn) => {
                btn.classList.remove('active')
            })
        });

        slides[manual].classList.add('active')
        btns[manual].classList.add('active')
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            manualNav(i)
            currentSlide = i
        })
    })
</script>

</html>
