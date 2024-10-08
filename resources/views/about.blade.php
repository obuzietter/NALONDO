<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Nalondo - About</title>
    @include('favicon')
    <link rel="stylesheet" href="/css/navbar-footer.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('/css/footer.css') }}"> -->

    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/theme.css">
    <link rel="stylesheet" href="/css/about.css">
    <script src="{{ url('/js/about.js') }}" defer></script>
    <script src="/js/counter.js" defer></script>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

  

    <style>
        #about-link {
            color: var(--h-color);
        }

        #about-link::after {
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
            <div class="content">
                <div class="title">
                    WHO ARE WE ?
                </div>
                <div class="logo">
                    <img src="./images/logo/nalondo-logo.png" alt="School-logo" width="128">
                </div>
            </div>
        </section>
        <section class="school-desc">
            <div class="quote">
                <h1>"</h1>
            </div>
            <div class="text">
                <p>
                    St Josephs Nalondo Boys High School is an extra-county level boy school located in Bungoma County.
                    It is a renowned boarding school dedicated to nurturing young men into well-rounded individuals.
                    Nestled in a picturesque setting, it provides a structured and supportive environment where students
                    thrive academically and personally. With a strong emphasis on character development, this
                    institution instills values such as discipline, integrity, and leadership. The dedicated faculty
                    encourages a love for learning and critical thinking, ensuring that students are well-prepared for
                    future challenges. </p>
            </div>
        </section>
        <section class="history">
            <div class="heading">
                <h1>History of the School</h1>
            </div>
            <hr>
            <div class="chunks">
                <div class="chunk beginning">
                    <div class="title">
                        <h3>The beginning </h3>
                    </div>
                    <div class="description">
                        <p>Its first infrastructure was in form of a classroom block donated by the neighboring Nalondo
                            Primary School. An interim school committee was inaugurated in 1973 with an intake of 11
                            students. Enrollment increased by 20 when the only secondary school in the locality Sipala
                            Secondary School shut down and all students were absorbed into Nalondo Secondary School. The
                            first chairman and headmaster of the school were Messrs. George Masinde and William Wasike
                            respectively. Others were Messrs. John Masete and Peter Makokha. The chairman was an
                            employee of the Bungoma County Council who worked hard to ensure that the school was legally
                            registered as Harambee Mixed Secondary School in 1973. The first TSC principle was Mr. John
                            F Simiyu from 1985 to 1993.</p>
                    </div>
                </div>
                <hr>
                <div class="chunk purpose">

                    <div class="description">
                        <p>At the time, there were only a few government supported secondary schools within the then
                            Bungoma District i.e. Bungoma High School and Kibabii High School. The school was therefore
                            started to meet the local demand of local primary school graduates who could not afford the
                            high fees charged by the available secondary schools over 20 km away. The first case KJSE
                            was in 1975 And EACE was done in 1977 with seven students. Their performance was impressive
                            as they all passed their exams. This encouraged more students to enroll at the school.</p>
                    </div>
                    <div class="title">
                        <h3>Purpose</h3>
                    </div>
                </div>
                <hr>
                <div class="chunk community">
                    <div class="title">
                        <h3>The Community</h3>
                    </div>
                    <div class="description">
                        <p>Through the Harambee Spirit, the locals mobilized resources to improve the school
                            infrastructure. Since the school started with a classroom block donated by the primary
                            school, the community’s first business was to raise the resources to construct one classroom
                            as compensation to the primary school. This facilitated relocation of the primary school
                            lower unit to allow the secondary school operate independently. In addition, the secondary
                            school section was given eight(8) acres of land where the school is situated today.

                        </p>
                        <p>
                            The late Mr. Wanjala Bunyasi gave a major boost to the school while he served as a village
                            elder. He mobilized and encouraged local community members to bring their children to the
                            school. In addition, the late Assistant Chief Mr. Jotham Khaemba was equally supportive. On
                            top of marshalling students from the community, he mobilized the community to raise funds in
                            support of the school through harambee Spirit. Others who supported the school in its
                            initial stages are former members of Parliament, notably Messrs. Hon. Peter. Kisuya, Joseph
                            Muliro, John Barasa, Munyasia, Moses Wetang’ula. And the current MP, Mr. James Lusweti. The
                            school picked up and got recognised in the locality in the 1980s and 1990s.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="chunk geolocation">

                    <div class="description">
                        <p>The school is the only boy school in Sirare location of Nalondo Division, Bungoma Central,
                            Sub County and Bungoma County. The people of the area are small scale farmers and some also
                            engage in small businesses whereas others in formal employment. The soils are good with a
                            favourable climate, while households land ownership per family averages 2 acres. Many people
                            suffer from inadequate resources to venture into serious economic undertakings, while the
                            market for farm produce, mainly milk, maize, sugar cane and coffee, is unreliable as prices
                            are generally uncompetitive and keep fluctuating.</p>
                    </div>
                    <div class="title">
                        <h3>Geographical Location</h3>
                    </div>
                </div>
                <hr>
            </div>
        </section>
        <section class="school-values">
            <div class="title">
                <h1 style="text-align: center">SCHOOL VALUES</h1>
            </div>
            <div class="mmv">
                <div class="motto">
                    <h3>MOTTO</h3>
                    <p>Learning for empowerment</p>
                </div>
                <div class="mission">
                    <h3>MISSION</h3>
                    <p>To become a school of excellence in education through commitment, diligence and integrity in the
                        country.</p>
                </div>

                <div class="vision">
                    <h3>VISION</h3>
                    <p>To attain academic excellence and bring out talent in young people to help the develop mentally,
                        physically, socially and spiritually.</p>
                </div>
            </div>
            <div class="core-values">
                <h1>CORE VALUES</h1>
                <ul>
                    <li class="core-value"> HARDWORK AND TEAMWORK</li>
                    <li class="core-value"> TIMELINESS</li>
                    <li class="core-value"> INTEGRITY AND HUMILITY</li>
                    <li class="core-value"> CHASTITY</li>
                    <li class="core-value"> PERSERVERENCE</li>
                    <li class="core-value"> CONTINUAL IMPROVEMENT</li>
                    <li class="core-value"> INNOVATION AND CREATIVITY</li>
                </ul>
            </div>
        </section>
        <section class="statistics">
            <div class="container">
                <div class="counters">
                    <div class="counter">
                        <span class="count" id="teachers" data-target="32">32</span>
                        <h3>TEACHERS</h3>
                    </div>
                    <div class="counter">
                        <span class="count" id="students" data-target="662">662</span>
                        <h3>STUDENTS</h3>
                    </div>
                    <div class="counter">
                        <span class="count" id="candidates" data-target="163">163</span>
                        <h3>CANDIDATES</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="traditions">
            <div class="container">
               
                <div class="tabs">
                    <div class="tab-2">
                      <label for="tab2-1">School Anthem</label>
                      <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                      <div>
                        <h2>School Anthem</h2>
                        <h3>(Verse 1)</h3>
                        <p>In St. Joseph's Nalondo, our hearts unite, Guided by knowledge, we reach for the light. With
                            courage and honor, we proudly stand, In our beloved school, hand in hand.</p>

                        <h3>(Chorus)</h3>
                        <p>Hail, St. Joseph's Nalondo, alma mater dear, In your hallowed halls, we find purpose clear.
                            Through trials and triumphs, we'll always be, Loyal to your name, for eternity.
                        </p>
                        <h3>(Verse 2)</h3>
                        <p>In the classroom's wisdom, we find our way, In every challenge, we'll never sway. With
                            mentors
                            and friends, we'll conquer all, As we answer the noblest of calls.</p>
                      </div>
                    </div>
                    <div class="tab-2">
                      <label for="tab2-2">School Prayer</label>
                      <input id="tab2-2" name="tabs-two" type="radio">
                      <div>
                        <h2>School Prayer</h2>
                        <h3>Dear Heavenly Father,</h3>

                        <p>As we gather in this place of learning, We bow our heads in gratitude, discerning, The
                            blessings
                            of knowledge and wisdom we share, In St. Joseph's Nalondo, this school so fair.</p>

                        <p>Grant us the strength to seek the truth, In every lesson, from our youth. Guide our teachers,
                            mentors, and friends, As our journey in education extends.</p>

                        <p>Help us grow in mind and soul, To reach our goals, fulfill our role. Instill in us kindness,
                            courage, and grace, As we strive to make the world a better place.</p>

                        <p>In moments of challenge and despair, Give us the resilience to persevere, And when we
                            achieve,
                            let humility be, A constant companion in all that we see.</p>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
    </main>
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



</body>

</html>
