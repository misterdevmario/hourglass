<html lang="en">

<!DOCTYPE html>

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://hourglassbreathless.netlify.app/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

    <style>
        @media (max-width: 700px) {
            .bottom-img {
                font-size: 7.3vw
            }
        }
    </style>


    <title>Welcome to our today schedule</title>
</head>

<body>

<main class="main m-0 p-0 ">


    <div class="header row  m-0 p-0">
        <!-- header_clock-lg-->
        <div class="header_clock text-center d-none d-md-block col-md-4 order-md-1">
            <div class="clock-container">
                <div id="clock"></div>
                <div id='date' class="date"></div>
                <div id="dayname" class="dayname"></div>
            </div>
        </div>

        <!-- header_weather-lg -->
        <div class="header_weather d-none d-md-block m-0 p-0  col-md-4  order-md-3  ">
            <div class="container d-flex">
                <div>
                    <iframe src="https://hg2.hourglass.com.mx/assets/index.html" title="description"></iframe>
                </div>
            </div>


        </div>

        <!-- header_logo-lg -->
        <div class="header_logo p-0 m-0 col-md-4 col-12  order-md-2">
            <img src="{{ URL::asset('assets/images/logo.png') }}" alt="">
        </div>

    </div>

    <!-- carousel_lg -->
    <div class="carousel m-0 p-0 row d-none d-md-block col-md-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders->chunk(6) as $count => $item)
                    <div class="carousel-item {{ $count == 0 ? 'active' : '' }}" data-bs-interval="3000">
                        <div class="row justify-content-center">
                            <div class="imgcontainer">
                                @foreach ($item as $event)
                                    <div class="whole_img">
                                        <img src="{{ URL::asset('assets/images/' . $event->image) }}"
                                             alt="{{ $event->title }}" class="w-100">
                                        <div class="top-img" style="right:0 !important">{{ $event->hour }}</div>
                                        <div class="bottom-img">{{ Str::upper($event->title) }}
                                            <br>{{ Str::upper($event->area) }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- carousel_small -->
    <div class="carousel_small m-0 p-0 d-md-none">
        <div class="carousel_small-tittle">OUR ACTVITIES</div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders->chunk(2) as $count => $item)
                    <div class="carousel-item @if ($loop->first) {{ 'active' }} @endif"
                         data-bs-interval="3000">
                        <div class="carousel_small-container">
                            @foreach ($item as $event)
                                <div class="carousel_small-image">
                                    <img src="{{ URL::asset('assets/images/' . $event->image) }}"
                                         class="d-block w-100" alt="{{ $event->title }}">
                                    <div class="top-img1">{{ $event->hour }}</div>
                                    <div class="bottom-img1">{{ Str::upper($event->title) }}
                                        <br>{{ Str::upper($event->area) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer_inner-container  row m-0 p-0">

        <!-- dinning_lg        -->
        <div class="footer_dinnig-container d-none d-md-block m-0 p-0  col-md-4">
            <div class="footer_dinning-tittle col-12 ">DINNING RESTAURANTS</div>
            <div class="footer_dinnig-inner col-md-12">

                @foreach ($foods as $item)
                    @if ($item->section === 'dinning')
                        <div class="restaurant_container">
                            <div class="restaurant_name">{{ $item->restaurant_name }}</div>

                            <div class="restaurants_inner col-12">
                                <img src="{{ URL::asset('assets/images/' . $item->logo) }}" alt=""/>
                                <div class="logo_info-container ">
                                    <div class="logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/buffet.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->type_food }}</div>
                                    </div>

                                    <div class=" logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/menu.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->carte_name }}</div>
                                    </div>
                                    <div class=" logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/clock.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->schedule }}</div>
                                    </div>
                                    <div class="logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/members.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->type_food }}members</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>


        <!-- dinnig_small -->
        <div class="dinnig_small m-0 p-0 d-md-none">

            <div class="footer_dinning-tittle2 m-0 p-0 col-12 ">DINNING RESTAURANTS</div>

            @foreach ($foods as $item)
                @if ($item->section === 'dinning')
                    <div class="footer_dinnig-inner2 ">
                        <div class="restaurant_container2">
                            <div class="restaurant_name2">{{ $item->restaurant_name }}</div>
                            <div class="restaurants_inner2 col-12">
                                <img src="{{ URL::asset('assets/images/' . $item->logo) }}"
                                     alt="{{ $item->restaurant_name }}"/>
                                <div class="logo_info-container2 ">
                                    <div class="logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/buffet.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->type_food }}</div>
                                    </div>

                                    <div class="logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/menu.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->carte_name }}</div>
                                    </div>
                                    <div class=" logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/clock.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->schedule }}</div>
                                    </div>
                                    <div class=" logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/members.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->members }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

        <!-- footer_breakfast-lg -->
        <div class=" footer_breakfast-container d-none d-md-block m-0 p-0 col-md-2">
            <div class="footer_breakfast-tittle ">BREAKFAST & LUNCH</div>
            <div class="footer_breakfast-inner ">

                @foreach ($foods as $item)
                    @if ($item->section === 'breakfast')
                        <div class="restaurant_container-bf">

                            <div class="restaurant_name">{{ $item->restaurant_name }}</div>

                            <div class="restaurants_inner col-12">
                                <img src="{{ URL::asset('assets/images/' . $item->logo) }}"
                                     alt="{{ $item->restaurant_name }}"/>
                                <div class="logo_info-container ">
                                    <div class="logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/buffet.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->type_food }}</div>
                                    </div>

                                    <div class=" logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/menu.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->carte_name }}</div>
                                    </div>
                                    <div class="logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/clock.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->schedule }}</div>
                                    </div>
                                    <div class="logo-info">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/members.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->members }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!--breakfast_small-->

        <div class="breakfast_small m-0 p-0 d-md-none">

            <div class="footer_dinning-tittle2 m-0 p-0 col-12 ">BREAKFAST & LUNCH</div>

            @foreach ($foods as $item)
                @if ($item->section === 'breakfast')
                    <div class="footer_dinnig-inner2 ">
                        <div class="restaurant_container2">
                            <div class="restaurant_name2">{{ $item->restaurant_name }}</div>

                            <div class="restaurants_inner2 col-12">
                                <img src="{{ URL::asset('assets/images/' . $item->logo) }}"
                                     alt="{{ $item->restaurant_name }}"/>
                                <div class="logo_info-container2 ">
                                    <div class="logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/buffet.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->type_food }}</div>
                                    </div>

                                    <div class="logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/menu.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->carte_name }}</div>
                                    </div>
                                    <div class="logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/clock.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->schedule }}</div>
                                    </div>
                                    <div class="logo-info2">
                                        <img max-width="20px" height="auto"
                                             src="{{ URL::asset('assets/images/members.jpeg') }}" alt=""/>
                                        <div class="type">{{ $item->members }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- footer_barsQr-lg -->
        <div class="footer_barsQr-container  d-none d-md-block  m-0 p-0  col-md-2">
            <div class="footer_barsQr-tittle col-12 ">OUR BARS</div>
            <div class="footer_barsQr-inner ">
                <div class="bars_container ">

                    @foreach ($foods as $item)
                        @if ($item->section === 'ourbars')
                            <div class="bars">
                                <div class="logo-time">
                                    <div class="bar_name">{{ $item->restaurant_name }}</div>
                                    <div class="time-bar">{{ $item->schedule }}</div>
                                </div>
                                <img width="102px" height="54px" src="{{ URL::asset('assets/images/' . $item->logo) }}"
                                     alt="">
                            </div>
                        @endif
                    @endforeach

                </div>

                <div class="qr_container">
                    <div class="qr-inner">
                        <div class="qr">QR</div>
                        <div class="vector_qr">
                            <img src="{{ URL::asset('assets/images/VECTORQRBRCSL.png') }}" alt="">
                            <div class="scan_me">SCAN ME</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--barsQr_small-->
        <div class="barsQr_small m-0 p-0 d-md-none">

            <div class="footer_barsQr-tittle0 m-0 p-0 col-12 ">OUR BARS</div>
            <div class="footer_barsQr-inner0 ">
                <div class="bars_container0 ">

                    @foreach ($foods as $item)
                        @if ($item->section === 'ourbars')
                            <div class="bars0">
                                <div class="bar_name0">{{ $item->restaurant_name }}</div>
                                <div class="logo-time0">
                                    <div class="logo-bar0">
                                        <img width="102px" height="54px"
                                             src="{{ URL::asset('assets/images/' . $item->logo) }}"
                                             alt="{{ $item->restaurant_name }}">
                                    </div>
                                    <div class="time-bar0">{{ $item->schedule }}</div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="qr_container0">
                    <div class="qr0">QR</div>
                    <div class="qr-inner0">

                        <div class="vector_qr0">
                            <img src="{{ URL::asset('/assets/images/VECTORQRBRCSL.png') }}" alt="">
                            <div class="scan_me0">SCAN ME</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- flyer_lg -->
        <div class="footer_flyer-container d-none d-md-block m-0 p-0 order-sm-4 col-md-2">
            <div class="footer_flyer-tittle ">FLYER</div>
            <div class="flyer-inner">
                <div id="carouselExampleInterval m-0 p-0" class="carousel1 slide1"
                     data-bs-ride="carousel">
                    <div class="carousel-inner m-0 p-0">
                        @foreach ($slidersFlyer as $count => $SliderEmp)
                            <div class="carousel-item {{ $count == 0 ? 'active' : '' }}"
                                 data-bs-interval="4000">
                                <div class="staff_lg-container">
                                    <div class="staff_lg-image">
                                        <img
                                            src="{{ URL::asset('assets/images/' . $SliderEmp->image) }}"
                                            alt="{{ $SliderEmp->title }}"
                                            class="d-block w-100">
                                        <div class="bottom-img" style="right:0 !important">
                                            {{ $SliderEmp->title }}<br/>
                                            {{ $SliderEmp->area }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="flyer_small d-md-none m-0 p-0">
            <div class="footer_staff-small d-md-none m-0 p-0">
                <div class="staff_small-tittle  ">FLYER</div>
                <div id="carouselExampleInterval" class="carousel slide"
                     data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ($slidersFlyer as $count => $SliderEmp)
                            <div class="carousel-item {{ $count == 0 ? 'active' : '' }}"
                                 data-bs-interval="6000">
                                <div class="staff_small-container">
                                    <div class="staff-image">
                                        <img
                                            src="{{ URL::asset('assets/images/' . $SliderEmp->image) }}"
                                            class="d-block w-100"
                                            alt="{{ $SliderEmp->title }}">
                                        <div class="bottom-img">{{ $SliderEmp->area }} <br/>
                                            {{ $SliderEmp->title }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- flyer_small -->


        <!-- footer_staff-lg -->
        <div
            class="footer_staff-container d-none d-md-block m-0 p-0 order-md-first col-md-2">
            <div class="footer_staff-tittle  ">E-TEAM</div>

            <div id="carouselExampleInterval m-0 p-0" class="carousel1 slide1"
                 data-bs-ride="carousel">
                <div class="carousel-inner m-0 p-0">
                    @foreach ($slidersEmp as $count => $SliderEmp)
                        <div class="carousel-item {{ $count == 0 ? 'active' : '' }}"
                             data-bs-interval="4000">
                            <div class="staff_lg-container">
                                <div class="staff_lg-image">
                                    <img
                                        src="{{ URL::asset('assets/images/' . $SliderEmp->image) }}"
                                        alt="{{ $SliderEmp->title }}" class="d-block w-100">
                                    <div class="bottom-img"
                                         style="right:0 !important">{{ $SliderEmp->area }}
                                        <br/> {{ $SliderEmp->title }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


        <!-- footer_staff-small -->

        <div class="footer_staff-small d-md-none m-0 p-0">
            <div class="staff_small-tittle  ">E-TEAM</div>
            <div id="carouselExampleInterval" class="carousel slide"
                 data-bs-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($slidersEmp as $count => $SliderEmp)
                        <div class="carousel-item {{ $count == 0 ? 'active' : '' }}"
                             data-bs-interval="6000">
                            <div class="staff_small-container">
                                <div class="staff-image">
                                    <img
                                        src="{{ URL::asset('assets/images/' . $SliderEmp->image) }}"
                                        class="d-block w-100" alt="{{ $SliderEmp->title }}">
                                    <div class="bottom-img">{{ $SliderEmp->area }}
                                        <br/> {{ $SliderEmp->title }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        </section>
</main>


<script src="/assets/js/clock.js"></script>
<script src="/assets/js/weather.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>
</body>

</html>
