@php
    $pillars = [
        ['icon' => 'flaticon-quran-1', 'title' => 'Shahadah', 'desc' => 'Faith'],
        ['icon' => 'flaticon-mosque-1', 'title' => 'Salah', 'desc' => 'Prayer'],
        ['icon' => 'flaticon-star', 'title' => 'Sawm', 'desc' => 'Fasting'],
        ['icon' => 'flaticon-gift-box', 'title' => 'Zakat', 'desc' => 'Almsgiving'],
        ['icon' => 'flaticon-kaaba', 'title' => 'Hajj', 'desc' => 'Pilgrimage'],
    ];

    $campaigns = [
        [
            'image' => 'assets/images/R2J.jpg',
            'video' => 'https://www.youtube.com/embed/WxuHBTES2-s',
            'title' => 'Ramadan Iftar Contributions',
            'location' => 'UG',
            'desc' => '',
            'goal' => 'GH₵ 4,610',
            'link' => 'donation'
        ]
    ];
@endphp

<section>
    <div class="w-100 pt-110 black-layer pb-70 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/parallax-bg1.jpg);"></div>
        <div class="container">
            <div class="sec-title v2 text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="flaticon-rub-el-hizb thm-clr"></i>
                    <h1 class="mb-0">The Pillars of Islam</h1>
                    <p class="mb-0">The five essential acts of worship in Islam.</p>
                </div>
            </div><!-- Sec Title -->
            <div class="pillars-wrap w-100">
                <ul
                    class="pillars-list text-center d-flex flex-wrap justify-content-center align-items-center mb-0 list-unstyled">
                    @foreach($pillars as $pillar)
                        <li>
                            <div class="pillar-box position-relative w-100">
                                <span class="d-inline-block thm-clr position-relative">
                                    <span class="pat-bg gray-layer opc85 position-absolute back-blend-multiply gray-bg"
                                        style="background-image: url(assets/images/pattern-bg.jpg);"></span>
                                    <i class="{{ $pillar['icon'] }}"></i>
                                </span>
                                <h3 class="mb-0">{{ $pillar['title'] }}</h3>
                                <i class="d-block thm-clr">{{ $pillar['desc'] }}</i>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div><!-- Pillars Wrap -->
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-90 gray-layer pb-90 opc85 position-relative">
        <div class="fixed-bg patern-bg back-blend-multiply gray-bg"
            style="background-image: url(assets/images/pattern-bg.jpg);"></div>
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="flaticon-rub-el-hizb thm-clr"></i>
                    <h2 class="mb-0">Charity Campaigns</h2>
                    <p class="mb-0">Support initiatives that make a difference.</p>
                </div>
            </div><!-- Sec Title -->
            <div class="camp-wrap w-100">
                @foreach($campaigns as $campaign)
                    <div class="camp-box w-100">
                        <div class="row mrg align-items-center">
                            <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
                                <div class="camp-img position-relative w-100">
                                    <img class="img-fluid w-100" src="{{ $campaign['image'] }}" alt="Campaign Image">
                                    <a class="thm-bg spinner position-absolute" href="{{ $campaign['video'] }}"
                                        data-fancybox title="">
                                        <i class="flaticon-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-5">
                                <div class="camp-info pat-bg thm-layer opc8 position-relative back-blend-multiply thm-bg"
                                    style="background-image: url(assets/images/pattern-bg.jpg);">
                                    <h3 class="mb-0">{{ $campaign['title'] }}</h3>
                                    <span class="proj-loc d-block">Project In: <i>{{ $campaign['location'] }}</i></span>
                                    <p class="mb-0">{{ $campaign['desc'] }}</p>
                                    <div class="goal">
                                        <span class="price d-block">{{ $campaign['goal'] }}</span>
                                        <i class="d-block">Donations Raised</i>
                                    </div>
                                    <a class="thm-btn bg-black" href="{{ $campaign['link'] }}" title="">
                                        Make Donation<span></span><span></span><span></span><span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- Campaign Wrap -->
        </div>
    </div>
</section>