<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalondo - Faculty</title>
    @include('favicon')
    <link rel="stylesheet" href="{{ url('css/faculty.css') }}">
    <script src="/js/faculty.js" defer></script>
    <script src="js/typewriter.js"></script>
    <link rel="stylesheet" href="/css/navbar-footer.css">
    <link rel="stylesheet" href="/css/faculty.css">
    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/theme.css">
    <style>
        #faculty-link {
            color: var(--h-color);
        }

        #faculty-link::after {
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
    <div class="main-container">
        <section class="hero">
            <section class="content">
                <section class="title">
                    <q>Leadership uncovers the brilliance within</q>
                    <p>MEET THE <span class="mentors">MENTORS </span>GUIDING OUR STUDENTS TO GREATNESS</p>
                    <a href="#adminstrator-1">
                {{-- <img src="/icons/down-arrow.png" alt="" width="50px"> --}}
            </a>
                </section>
            </section>
        </section>
        <div class="adminstrator">
            <div class="senior-admin-heading" id="adminstrator-1">
                <h1>SENIOR ADMINSTRATORS</h1>
            </div>

            <!-- Images and details of the adminstrators -->
            <!-- adm 1 -->
            <div class="adminstrators adminstrators-1 opened">
                <!-- adminstrator position and down arrow -->
                <div class="adm-position">
                    <h2>SENIOR PRINCIPAL</h2>
                    <img class="arrow" src="{{ asset('icons/arrow-down-sign-to-navigate.png') }}" alt="">
                    <!-- <img class="arrow" src="{{ asset('images/.jpeg') }}" alt=""> -->

                </div>
                <!-- adminstrator name,remarks and image -->
                <div class="main-adm">
                    <div class="identity">
                        <div class="adm-name">MR. MOSES JUMA</div>
                        <div class="adm-remarks">
                            <q>Our team is dedicated to providing quality education and fostering an environment for
                                academic and personal growth. Together, let's embark on a journey of discovery and
                                achievement

                            </q>


                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/principal4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- Images and details of the adminstrators -->
            <!-- adm 2-->
            <div class="adminstrators">
                <div class="adm-position">
                    <h2>DEPUTY PRINCIPAL</h2>
                    <img class="arrow" src="{{ asset('icons/arrow-down-sign-to-navigate.png') }}" alt="">

                </div>
                <div class="main-adm">
                    <div class="identity">
                        <div class="adm-name">MR. WAFUBWA GAITANO</div>
                        <div class="adm-remarks">
                            <q> As the Deputy Principal, I ensure academic and personal development, emphasizing
                                well-rounded education beyond the classroom. </q>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/Wafubwa2.jpg') }}" alt="">
                    </div>
                </div>
            </div>


            <!-- Images and details of the adminstrators -->
            <!-- adm 3 -->
            <div class="adminstrators">
                <div class="adm-position">
                    <h2>DIRECTOR OF STUDIES</h2>
                    <img class="arrow" src="{{ asset('icons/arrow-down-sign-to-navigate.png') }}" alt="">
                </div>
                <div class="main-adm">
                    <div class="identity">
                        <div class="adm-name">MR. WANJALA RONALD</div>
                        <div class="adm-remarks">
                            <q>As Director of Studies, I'm honored to be part of an institution valuing excellence and
                                inclusivity. We are committed to nurturing well-rounded individuals prepared for the
                                challenges of the modern world.</q>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/director of studies.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!--departments-->
        <!-- Department 1.Heads of department -->
        <section class="department">
            <div class="department-title">
                <h1>DEPARTMENTAL HEADS</h1>
            </div>
            <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
            <div class=" teacher-container">

                {{-- 1st teacher --}}
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Awuor.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MADAM AWUOR ACHSAR</h4>
                        <p class="teacher-description">Assistant DOS</p>
                        <span class="subject-1">History</span><span class="subject-2">CRE</span>
                    </div>
                </div>

                <!-- 2nd teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Makuku.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. Makuku Zadock</h4>
                        <p class="teacher-description">Form 3 Co-ordinator</p>
                        <span class="subject-1">Mathematics</span><span class="subject-2">Computer</span>
                    </div>
                </div>

                <!-- 3rd teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/philip.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. PHILIP MASINDE</h4>
                        <p class="teacher-description">HOD Boarding</p>
                        <span class="subject-1">Mathematics</span><span class="subject-2">Physics</span>
                    </div>
                </div>

                <!-- 4th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Denis.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. Denis Nyongesa</h4>
                        <p class="teacher-description">Head of Night School</p>
                        <span class="subject-1">English</span><span class="subject-2">Literature</span>
                    </div>
                </div>

                <!-- 5th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Irine.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MADAM IRINE MARUTI</h4>
                        <p class="teacher-description">HOD languages</p>
                        <span class="subject-1">Kiswahili</span><span class="subject-2">CRE</span>
                    </div>
                </div>


                <!-- 6th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Roselyn.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MADAM ROSELYN WANJALA</h4>
                        <p class="teacher-description">HOD guidance and counselling</p>
                        <span class="subject-1">Business</span><span class="subject-2">History</span>
                    </div>
                </div>


                <!-- 7th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Kipkania.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. KIPKANIA COLLINS</h4>
                        <p class="teacher-description">HOD humanities</p>
                        <span class="subject-1">History</span><span class="subject-2">Geography</span>
                    </div>
                </div>


                <!-- 8th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Wanyonyi.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. WANYONYI VICTOR</h4>
                        <p class="teacher-description">Class teacher 3S</p>
                        <span class="subject-1">Computer</span><span class="subject-2">Mathematics</span>
                    </div>
                </div>


                <!-- 9th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Beatrice.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MADAM BEATRICE MULATI</h4>
                        <p class="teacher-description">HOD Sciences</p>
                        <span class="subject-1">Mathematics</span><span class="subject-2">Chemistry</span>
                    </div>
                </div>


                <!-- 10th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Mang'ara.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. MANG'ARA JOSHUA</h4>
                        <p class="teacher-description">Assistant head of night school</p>
                        <span class="subject-1">Mathematics</span><span class="subject-2">Chemistry</span>
                    </div>
                </div>


            </div>

        </section>


        <!--Departement 1 continued.Heads of department-->
        <section class="department">
            {{-- <div class="department-title"> <h2>DEPARTMENTAL HEADS</h2></div> --}}
            <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
            <div class=" teacher-container">

                {{-- 1st teacher --}}
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Humphrey.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. HUMPHREY WANGILA</h4>
                        <p class="teacher-description">Senior Teacher</p>
                        <span class="subject-1">English</span><span class="subject-2">Literature</span>
                    </div>
                </div>


                <!-- 2nd teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Mabonga.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. MABONGA DICKSON</h4>
                        <p class="teacher-description">HOS Mathematics</p>
                        <span class="subject-1">Mathematics</span><span class="subject-2">Physics</span>
                    </div>
                </div>

                <!-- 3rd teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Christine.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MADAM CHRISTINE</h4>
                        <p class="teacher-description">Subject Teacher</p>
                        <span class="subject-1">Geography</span><span class="subject-2">Kiswahili</span>
                    </div>
                </div>

                <!-- 4th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Musuya.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MR. MUSUYA EMMANUEL</h4>
                        <p class="teacher-description">Handball Coach</p>
                        <span class="subject-1">English</span><span class="subject-2">Literature</span>
                    </div>
                </div>

                <!-- 5th teacher -->
                <div class="teacher-card">
                    <div class=" teacher-image">
                        <img src="images/Florence.jpg" class="teacher-thumb" alt="">
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">MADAM FLORENCE</h4>
                        <p class="teacher-description">Subject Teacher</p>
                        <span class="subject-1">English</span><span class="subject-2">Literature</span>
                    </div>
                </div>


            </div>

        </section>
    </div>

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
                600: slidesPerView: 2

            }
        }
        });
    </script>

</body>

</html>
