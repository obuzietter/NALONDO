<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalondo - Faculty</title>
    <link rel="stylesheet" href="{{ url('css/faculty.css') }}">
    <script src="/js/faculty.js" defer></script>
    <link rel="stylesheet" href="/css/navbar-footer.css">
    <link rel="stylesheet" href="/css/faculty.css">
    <!-- <link rel="stylesheet" href="/css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="/css/footer.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/theme.css">


</head>

<body>
    @include('navbar')
    <div class="main-container">
        <div class="adminstrator">
            <!-- Images and details of the adminstrators -->
            <!-- adm 1 -->
            <div class="adminstrators adminstrators-1 opened">
                <!-- adminstrator position and down arrow -->
                <div class="adm-position">
                    <h2>CHIEF PRINCIPAL</h2>
                    <img class="arrow" src="{{ asset('icons/arrow-down-sign-to-navigate (1).png') }}" alt="">
                    <!-- <img class="arrow" src="{{ asset('images/.jpeg') }}" alt=""> -->

                </div>
                <!-- adminstrator name,remarks and image -->
                <div class="main-adm">
                    <div class="identity">
                        <div class="adm-name">PROF MATTHEW</div>
                        <div class="adm-remarks">
                            Lorem ipsum dolor sit amet, consectetur.
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/nalondo24.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- Images and details of the adminstrators -->
            <!-- adm 2-->
            <div class="adminstrators">
                <div class="adm-position">
                    <h2>DEPUTY PRINCIPAL</h2>
                    <img class="arrow" src="{{ asset('icons/arrow-down-sign-to-navigate (1).png') }}" alt="">

                </div>
                <div class="main-adm">
                    <div class="identity">
                        <div class="adm-name">MR. ANDREW</div>
                        <div class="adm-remarks">
                            Lorem ipsum dolor sit amet, consectetur.
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">
                    </div>
                </div>
            </div>


            <!-- Images and details of the adminstrators -->
            <!-- adm 3 -->
            <div class="adminstrators">
                <div class="adm-position">
                    <h2>SENIOR MASTER</h2>
                    <img class="arrow" src="{{ asset('icons/arrow-down-sign-to-navigate (1).png') }}" alt="">
                </div>
                <div class="main-adm">
                    <div class="identity">
                        <div class="adm-name">MR. JAMES</div>
                        <div class="adm-remarks">
                            Lorem ipsum dolor sit amet, consectetur.
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/nalondo21.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!-- images of teachers in every department -->
        <div class="departments">

            <div class="dep-heading">OUR DEPARTMENTS</div>

            <!-- DEPARTMENT 1-->
            <div class="department-1 department" id="department-1">
                <!-- DEP TITLE -->
                <div class="title">MATHEMATICS DEPARTMENT</div>

                <!-- TEACHER'S IMAGES AND DESCRIPTIONS -->
                <div class="slider">
                    <div class="cards">
                        <!-- INDIVIDUAL TEACHER -->
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">
                            </div>

                            <div class="description">
                                <div class="name">This is my 1.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo1.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 2.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo2.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 3.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo3.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 4.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo4.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 5.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>



                    </div>

                    <!-- repeated cards -->
                    <div class="cards">
                        <!-- INDIVIDUAL TEACHER -->
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">
                            </div>

                            <div class="description">
                                <div class="name">This is my 1.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo1.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 2.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo2.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 3.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo3.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 4.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo4.jpeg') }}" alt="">
                            </div>
                            <div class="description">
                                <div class="name">This is my 5.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <!-- button to scroll back up to the first department -->
            <div class="top"><a href="#department-1"><img src="{{asset('icons/arrow (1).png')}}" alt=""></a></div>


            <!-- DEPARTMENT 2 -->
            <div class="department-2 department">
                <div class="title">SCIENCES DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo7.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo8.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo9.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo10.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo11.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo7.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo8.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo9.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo10.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo11.jpeg') }}" <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DEPARTMENT 3 -->
            <div class="department-3 department">
                <div class="title">CAREERS DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo11.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo12.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo13.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo14.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo15.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo11.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo12.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo13.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo14.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo15.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DEPARTMENT 4 -->
            <div class="department-4 department">
                <div class="title">GUIDANCE AND COUNSELLING DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo23.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo20.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo23.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo20.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DEPARTMENT  5-->
            <div class="department-5 department">
                <div class="title">GAMES DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo21.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo22.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo23.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo24.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo25.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo21.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo22.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo23.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo24.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo25.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DEPARTMENT  6-->
            <div class="department-6 department">
                <div class="title">BOARDING DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo26.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo27.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo28.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo29.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo30.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo26.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo27.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo28.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo29.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo30.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DEPARTMENT  7-->
            <div class="department-7 department">
                <div class="title">TECHNICALS DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo26.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo25.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>

                    <!-- repeated cards -->
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo25.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo20.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- DEPARTMENT  8-->
            <div class="department-8 department">
                <div class="title">HUMANITIES DEPARTMENT</div>
                <div class="slider">
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo24.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo20.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>

                    <!-- repeated cards -->
                    <div class="cards">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo22.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('images/nalondo20.jpeg') }}" alt="">

                            </div>
                            <div class="description">
                                <div class="name">This is my name.</div>
                                <div class="role">This is my role.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="contact-info">
            <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-envelope"></i> Email: info@nalondohighschool.com</p>
            <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-phone"></i> Phone: +1 (123) 456-7890</p>
            <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-map-marker-alt"></i> Address: 123 School Street, City, Country</p>
        </div>
        <div class="footer-line"></div>
        <div class="footer-icons-container">
            <div class="footer-icons-row">
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div style="color: #fff;">
            <p style="color:var(--background-color);">&copy; 2023 NALONDOHIGH SCHOOL. ALL RIGHTS RESERVED.</p>
        </div>
    </div>

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