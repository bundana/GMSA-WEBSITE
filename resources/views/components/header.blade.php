@php
$menuItems = [
    ['route' => route('index'), 'label' => 'Home'],
    ['route' => url('about'), 'label' => 'About Us'],
    ['route' => url('leadership'), 'label' => 'Leadership'],
    ['route' => url('gallery'), 'label' => 'Gallery'],
    ['route' => route('blog'), 'label' => 'Blog'],
    ['route' => url('quran'), 'label' => "Qu'ran"],
    ['route' => url('events'), 'label' => 'Events'],
    ['route' => url('contact'), 'label' => 'Contact Us'],
];
@endphp
<header class="stick style1 w-100">
    <div class="topbar bg-color1 d-flex flex-wrap justify-content-center w-100">
        <ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
            <li><i class="thm-clr flaticon-sun"></i>Sunrise At: <span class="thm-clr">5:05am</span></li>
            <li><i class="thm-clr flaticon-moon"></i>Sunset At: <span class="thm-clr">7:14pm</span></li>
        </ul>
        <div class="social-links d-inline-flex">
            <a href="https://twitter.com/" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div><!-- Topbar -->
    <div class="logo-menu-wrap d-flex flex-wrap justify-content-between w-100">
        <div class="logo position-relative thm-layer opc7 back-blend-multiply thm-bg"
            style="background-image: url(/assets/images/pattern-bg.jpg);">
            <h1 class="mb-0"><a href="/" title="Home">
                <img class="img-fluid" src="/assets/images/logo.png" 
                srcset="/assets/images/logo-dark.png" alt="Logo" width="200"  />
                    </a>
                </h1>
        </div><!-- Logo -->
        <nav class="d-flex flex-wrap align-items-center justify-content-center">
            <div class="header-left">
                <ul class="mb-0 list-unstyled d-inline-flex">
                    @foreach($menuItems as $item)
                        <li><a href="{{ $item['route'] }}" title="">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="header-right">
                <a class="thm-btn thm-bg" href="/donate" title="">Make
                    Donation<span></span><span></span><span></span><span></span></a>
            </div>
        </nav>
    </div><!-- Logo Menu Wrap -->
</header><!-- Header -->
<div class="sticky-menu">
    <div class="container">
        <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="logo">
                <h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="/assets/images/logo3.png"
                            alt="Logo" srcset="/assets/images/logo-dark.png" width="121"></a></h1>
            </div><!-- Logo -->
            <nav class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="header-left">
                    <ul class="mb-0 list-unstyled d-inline-flex">
                        @foreach($menuItems as $item)
                            <li><a href="{{ $item['route'] }}" title="">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div><!-- Sticky Menu -->
<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <div class="rspn-scil">
            <a href="https://twitter.com/" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <form class="rspn-srch">
            <input type="text" placeholder="Enter Your Keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="lg-mn">
        <div class="logo"><a href="/" title="Home"><img src="/assets/images/logo-dark.png"  alt="Logo"></a></div>
        <div class="rspn-cnt">
            <span><i class="thm-clr far fa-envelope"></i><a href="javascript:void(0);"
                    title="">info@gmsa-ug.com</a></span>
            <span><i class="thm-clr fas fa-phone-alt"></i>+233 55 176 8231</span>
        </div>
        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            @foreach($menuItems as $item)
                <li><a href="{{ $item['route'] }}" title="">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->