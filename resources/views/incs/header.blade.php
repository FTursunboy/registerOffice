<div id="topbar"  class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center ">
            <img style="margin-right: -100px" src="{{asset('dist/assets/img/gerb.png')}}" width="70px" height="60px">
            <span class="px-5" style="font-size: 23px; color: black; margin-left: 90px">Раёсати асноди ҳолати шаҳрвандии<br>
          Вазорати адлияи Ҷумҳурии Тоҷикистон</span>
        </div>

    </div>
</div>
<div>
<!-- ======= Header ======= -->
<header id="header" style="margin-top: 30px"  class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">САХШ</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a style="font-weight: bold; color: rgba(252,248,248,0.92)" class="nav-link scrollto active"
                       href="#hero">Асоси</a></li>
                <li class="dropdown"><a style="font-weight: bold; color: rgba(252,248,248,0.92)"
                                        href="#"><span>Назорат</span>
                        <ul>
                            <li><a href="#">Дастгоҳи Раёсати асноди <br> ҳолати шаҳрвандӣ</a></li>
                            <li><a href="#">Рохбарият</a></li>
                            <li><a href="#">Сохтор</a></li>
                            <li><a href="#">Шӯъбаҳои ҳудудии САҲШ</a></li>
                            <li><a href="#">Низоми электронии идоракунии<br> бойгонӣ</a></li>
                        </ul>
                </li>
                <li class="dropdown"><a style="font-weight: bold; color: rgba(252,248,248,0.92)" href="#"><span>Хизматрасонихо</span></a>
                    <ul>
                        <li><a href="#">Андозаи пардохтҳо</a></li>
                        <li><a href="#">Бақайдгирии таваллуди <br> кӯдак</a></li>
                        <li><a href="#">Бақайдгирии вафот</a></li>
                        <li><a href="{{route('user.registration.brak')}}">Бақайдгирии ақди никоҳ</a></li>
                        <li><a href="#">Бақайдгирии бекоркунии <br> ақди никоҳ</a></li>
                        <li><a href="#">Бақайдгирии фарзандхондӣ</a></li>
                        <li><a href="#">Додани маълумотнома</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a style="font-weight: bold; color: rgba(252,248,248,0.92)" href="#"><span>Санадхои меъерии хукуки</span> </i></a>
                    <ul>
                        <li><a href="#">Конститутсияи ҶТ</a></li>
                        <li><a href="#">Қонунҳои ҶТ</a></li>
                        <li><a href="#">Қарорҳои Ҳукумати ҶТ</a></li>
                        <li><a href="#">Фармоишҳо</a></li>
                        <li><a href="#">Дастурҳо</a></li>
                    </ul>
                </li>
                <li><a style="font-weight: bold; color: rgba(252,248,248,0.92)" class="nav-link" href="#hero">Тамос</a>
                </li>
                <li><a style="font-weight: bold; color: rgba(252,248,248,0.92)" class="nav-link" href="#hero">Ислохоти
                        низоми САХШ</a></li>

                <li><a class="text-white"><span class="span">|</span><i class="bi bi-search"></i><span class="span">|</span></a></li>
                @if(\Illuminate\Support\Facades\Auth::user() !== null)
                    <li><a href="#" style="font-weight: bold; font-size: 16px" class="text-orange text-bold" ><span class="span">|</span>{{\Illuminate\Support\Facades\Auth::user()->name . " " . \Illuminate\Support\Facades\Auth::user()->surname}}<span class="span">|</span></a></li>
                @else
                    <li><a href="{{route('login')}}" class="text-white">Войти</a></li>
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
</div>
