@php
    $events = [
        [
            'image' => 'assets/images/ramadan_c.jpg',
            'title' => 'Ramadan Checklist',
            'location' => 'UG Central Mosque',
            'time' => '8:47am - 10:00am',
            'link' => route('events.show', 1)
        ],
        [
            'image' => 'assets/images/resources/event-img1-2.jpg',
            'title' => 'Ramadan, A Month Of Blessing',
            'location' => 'Central Cafeteria (CC)',
            'time' => '8:47am - 10:00am',
            'link' => route('events.show', 2)
        ],
        [
            'image' => 'assets/images/ramadan_n.jpg',
            'title' => 'Eid-ul-Adha, Feast of Sacrifice',
            'location' => 'UG Central Mosque',
            'time' => '8:47am - 10:00am',
            'link' => route('events.show', 3)
        ],
    ];
@endphp

<section>
    <div class="w-100 pt-90 pb-80 position-relative">
        <img class="img-fluid sec-top-mckp position-absolute" src="/assets/images/sec-top-mckp2.png"
            alt="Sec Top Mockup 2">
        <div class="container">
            <div class="sec-title text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <i class="thm-clr flaticon-rub-el-hizb"></i>
                    <h2 class="mb-0">Up-Coming Events</h2>
                </div>
            </div><!-- Sec Title -->
            <div class="event-wrap res-row w-100">
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="event-box w-100">
                                <div class="event-img overflow-hidden position-relative w-100">
                                    <a href="{{ $event['link'] }}" title="">
                                        <img class="img-fluid w-100" src="/{{ $event['image'] }}" alt="Event Image">
                                    </a>
                                </div>
                                <div class="event-info pat-bg gray-layer opc85 position-relative back-blend-multiply gray-bg w-100"
                                    style="background-image: url(/assets/images/pattern-bg.jpg);">
                                    <span class="event-loc d-block thm-clr">
                                        <i class="fas fa-map-marker-alt"></i> {{ $event['location'] }}
                                    </span>
                                    <h3 class="mb-0">
                                        <a href="{{ $event['link'] }}" title="">{{ $event['title'] }}</a>
                                    </h3>
                                    <span class="event-time d-block thm-clr">{{ $event['time'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- Events Wrap -->
        </div>
    </div>
</section>