@php
$services = [
    ['icon' => 'flaticon-mat', 'title' => 'Scholarships', 'desc' => 'Providing financial aid for students in need.', 'link' => 'services-detail.html'],
    ['icon' => 'flaticon-minaret', 'title' => 'Mosque Development', 'desc' => 'Supporting the construction and maintenance of mosques.', 'link' => 'services-detail.html'],
    ['icon' => 'flaticon-quran', 'title' => 'Quran Learning', 'desc' => 'Offering Quranic education and teachings.', 'link' => 'services-detail.html'],
    ['icon' => 'flaticon-arabic', 'title' => 'Community Service', 'desc' => 'Engaging in social welfare and outreach programs.', 'link' => 'services-detail.html'],
];
@endphp

    <section>
        <div class="w-100 pb-80 position-relative">
            <div class="container">
                <div class="sec-title text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <i class="thm-clr flaticon-rub-el-hizb"></i>
                        <h2 class="mb-0">Services We Offer</h2> 
                    </div>
                </div><!-- Sec Title -->
                <div class="serv-wrap wide-sec">
                    <div class="row mrg10 serv-caro">
                        @foreach($services as $service)
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="serv-box text-center pat-bg gray-layer opc85 position-relative back-blend-multiply gray-bg w-100"
                                    style="background-image: url(assets/images/pattern-bg.jpg);">
                                    <i class="{{ $service['icon'] }} thm-clr"></i>
                                    <h3 class="mb-0">{{ $service['title'] }}</h3>
                                    <p class="mb-0">{{ $service['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>