<x-layout>
    @php 
            $audios = [
            ['cover' => 'assets/images/audio-img2.jpg', 'artist' => '(The Cow) - 286 Verses', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Al-Baqara'],
            ['cover' => 'assets/images/audio-img2.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Al-Fatihah'],
            ['cover' => 'assets/images/audio-img3.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Az-Zumar'],
            ['cover' => 'assets/images/audio-img4.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Al-Mursalat'],
            ['cover' => 'assets/images/audio-img5.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Al-Baqara'],
            ['cover' => 'assets/images/audio-img6.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'An-Naba'],
            ['cover' => 'assets/images/audio-img7.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Ghafir'],
            ['cover' => 'assets/images/audio-img8.jpg', 'artist' => '(The Cow) - 286 Verses', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Al-Baqara'],
            ['cover' => 'assets/images/audio-img9.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Az-Zumar'],
            ['cover' => 'assets/images/audio-img10.jpg', 'url' => 'assets/audio/abdul-rahman-al-sudais-048-qurancentral.com-192.mp3', 'title' => 'Al-Mursalat'],
        ]; 
    @endphp
    <section>
        <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/page-title-bg.jpg);"></div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0">Listen To Quran Audio</h1>
                    </div>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
 
<section>
    <div class="w-100 pt-120 pb-250 position-relative">
        <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="/assets/images/sec-botm-mckp.png"
            alt="Sec Bottom Mockup">
        <div class="container">
            <div class="plyr-wrp2 d-inline-block w-100">
                @foreach ($audios as $audio)
                    <div class="plyr-box w-100 pat-bg white-layer opc85 back-blend-multiply bg-white"
                        style="background-image: url(assets/images/pattern-bg.jpg);">
                        <div class="plyr v4 w-100">
                            <ul class="playlist mb-0 list-unstyled">
                                <li data-cover="{{ $audio['cover'] }}" data-artist="{{ $audio['artist'] ?? '' }}">
                                    <a href="{{ $audio['url'] }}" title="">{{ $audio['title'] }}</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Player Wrap -->
                @endforeach

               
            </div><!-- Player Wrap 2 -->
        </div>
    </div>
</section>

</x-layout>