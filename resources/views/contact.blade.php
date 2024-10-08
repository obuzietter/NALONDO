<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalondo - Contact</title>
    @include('favicon')
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="./theme.css">
    <script src="/js/contact.js" defer></script>
    <link rel="stylesheet" href="/css/navbar-footer.css">

    <style>
        #contact-link {
            color: var(--h-color);
        }

        #contact-link::after {
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
    <header>
        @include('navbar')
    </header>

    <main>
        <!-- google map,paragraph and button -->
        {{-- <div class="map">
            <iframe class="google-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255331.65767682373!2d34.307006886718746!3d0.6555780000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781d97dceaaf703%3A0xb1750155e3970e39!2sNalondo%20secondary%20school!5e0!3m2!1sen!2ske!4v1698776636513!5m2!1sen!2ske"
                allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- paragraph -->
            <div class="map-text">
                <h1 class="connect">CONNECT WITH US NOW</h1>
                <!-- button -->
                <a href="https://maps.app.goo.gl/J9Nt6UcJ2xDf5GS9A" class="google-maps-button">
                    <button>
                        GO TO GOOGLE MAPS
                    </button>
                </a>
            </div>
        </div> --}}

        <div class="hero">
            <div class="hero-details">
                <q>GREAT MILESTIONES ARE ACHIEVED WHENEVER <span>GREAT PEOPLE</span> COMMUNICATE</q>
            </div>
            <div class="hero-image">{!! inline_svg('teamwork.svg') !!}</div>
        </div>

        <!-- contacts div -->
        <div class="contacts">
            <div class="phone contact-info">
                {{-- <div class="left"><span class="phone-number">0728792660</span> </div> --}}
                <div class="illustration">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/0184aeb7-bc35-4021-b1f7-d904e60fffb7/78G7gxjdrX.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="right">
                    <h1 class="action-heading">TALK TO US DIRECTLY</h1>
                    <p class="action-description">Got a question or need assistance? We're just a phone call away. Our
                        team is ready to provide you with quick and helpful solutions to whatever you need.</p>
                    <a href="tel:+254796375258">
                        <div class="action-button">

                            CALL NOW
                        </div>
                    </a>
                </div>
            </div>

            <div class="phone contact-info">
                {{-- <div class="left"><span class="phone-number">0728792660</span> </div> --}}
                <div class="illustration">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/18d58ebd-8bd1-43f0-8541-a0a9f8b93dc7/A7OMopAha8.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="right">
                    <h1 class="action-heading">SEND US A MESSAGE</h1>
                    <p class="action-description">If calling isn’t convenient, you can always send us a text. Whether
                        you need information or have a quick query, we’ll respond promptly.</p>
                    <a href="sms:+254796375258">
                        <div class="action-button">

                            TEXT NOW
                        </div>
                    </a>
                </div>
            </div>
            <div class="email contact-info">
                {{-- <div class="left">nalondoboys@gmail.com</div> --}}
                <div class="illustration">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/4fe78387-df90-410f-9881-acb37644937c/MwuM4O6eT7.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="right">
                    <h1 class="action-heading">REACH US VIA EMAIL</h1>
                    <p class="action-description">For more detailed inquiries or assistance, feel free to drop us an
                        email. We’ll get back to you as soon as possible to ensure your questions are answered.</p>
                    <a href="mailto:info@nalondohighschool.co.ke">
                        <div class="action-button">
                            SEND EMAIL
                        </div>
                    </a>
                </div>
            </div>
            <div class="location contact-info">
                {{-- <div class="left">Bungoma County, Kenya</div> --}}
                <div class="illustration">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/34088bd5-0ccc-453f-a030-e973d8febe55/uyDvlv1H5n.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="right">
                    <h1 class="action-heading">COME SEE US IN PERSON</h1>
                    <p class="action-description">Prefer a face-to-face conversation? Visit our office and chat with our
                        team directly. We’d love to help you out in person</p>
                    <a href="https://maps.app.goo.gl/J9Nt6UcJ2xDf5GS9A">
                        <div class="action-button">
                            GET DIRECTIONS
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <!-- reviews -->
        {{-- <div class="reviews">
            <form action="" method="post" target="_blank">
                <h1 class="heading">TELL US WHAT YOU THINK</h1>

                <div class="name-contact">
                    <input type="text" placeholder="YOUR NAME" name="name" class="name">

                    <input type="text" class="phone-number" name="phone" placeholder="YOUR CONTACT">
                </div>


                <input type="email" name="email" placeholder="YOUR EMAIL" class="email" name>


                <textarea name="message" id="message" cols="30" rows="10" placeholder="YOUR MESSAGE"></textarea>
                <button type="submit">SEND MESSAGE</button>
            </form>
        </div> --}}
    </main>

    <footer>@include('footer')</footer>


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

</body>

</html>
