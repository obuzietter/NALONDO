
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMUNITY AND EVENTS</title>
    <link rel="stylesheet" href="projects.css">
    <link rel="stylesheet" href="/css/projects.css">
    <link rel="stylesheet" href="/css/navbar-footer.css">
    <link rel="stylesheet" href="{{ url('css/projects.css') }}">

    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/theme.css">

    <style>
        #community-link {
            color: var(--h-color);
        }

        #community-link::after {
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


    <!-- MAIN CONTAINER -->
    <main class="main-container">
        <!-- THE MAIN INTODUCTORY CLAUSE -->
        <div class="intro-div">
            <video autoplay loop muted plays-inline class="video">
                <source src="vid/vid.mov" type="mov">
            </video>

            <h1><span>PROJECTS</span> YOU <span>MUST</span> <br>
                KNOW ABOUT
            </h1>

            <button><span></span><a href="#projects">VIEW</a></button>
        </div>

        <!-- THE PROJECTS -->
        <div class="projects" id="projects">

            <!-- project-1 -->
            <div class="project project-1">
                <div class="project-title">project-1</div>
                <div class="image"> <img src="{{ asset('images/nalondo30.jpeg') }}" alt=""></div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>

            <!-- project-2 -->
            <div class="project project-2">
                <div class="project-title">project-2</div>
                <div class="image">
                    <img src="{{ asset('images/nalondo14.jpeg') }}" alt="">
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>

            <!-- project-3 -->
            <div class="project project-3">
                <div class="project-title">project-3</div>
                <div class="image">
                    <img src="{{ asset('images/nalondo15.jpeg') }}" alt="">
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>

            <!-- project-5 -->
            <div class="project project-5">
                <div class="project-title">project-4</div>
                <div class="image">
                    <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>
            <!-- project-4 -->
            <div class="project project-5">
                <div class="project-title">project-5</div>
                <div class="image">
                    <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>

            </div>
            <!-- project-6 -->
            <div class="project project-6">
                <div class="project-title">project-6</div>
                <div class="image">
                    <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>
        </div>

        <!-- <div class="calendar-intro">ANNUAL CALENDAR</div> -->
        {{--<div class="calendar">
            <!-- show beginning of calendar -->
        
            <div class="headings">
                <h4>DATE</h4>
                <h4>EVENT</h4>
            </div>

            <div class="event event-1">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-2">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-3">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-4">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-5">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-6">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-7">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-8">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-9">
                <div class="date"></div>
                <div class="action"></div>
            </div>
        </div>--}}

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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
