<x-layout>
    @php
$galleryPath = public_path('assets/images/gallery');
$galleryItems = [];

if (File::exists($galleryPath)) {
    $files = File::files($galleryPath);
    foreach ($files as $file) {
        if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $galleryItems[] = asset('assets/images/gallery/' . $file->getFilename());
        }
    }
}
    @endphp
    <section>
        <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/page-title-bg.jpg);"></div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0">Gallery</h1>
                    </div>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>


    <section>
        <div class="w-100 pb-250 position-relative">
            <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="/assets/images/sec-botm-mckp.png"
                alt="Sec Bottom Mockup">
            <div class="gallery-wrap w-100">
                <div class="row mrg">
                    @foreach($galleryItems as $index => $image)
                        @if($index % 2 == 0)
                            <div class="col-md-6 col-sm-6 col-lg-3">
                        @endif
                            <div class="gallery-box text-center overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="{{ $image }}" alt="Gallery Image {{ $index + 1 }}">
                                <div class="gallery-info position-absolute">
                                    <h3 class="mb-0">View Image ﷺ</h3> 
                                    <a class="d-inline-block thm-clr" href="{{ $image }}" data-fancybox="gallery" title="">
                                        <i class="flaticon-view"></i>
                                    </a>
                                </div>
                            </div>
                            @if($index % 2 == 1 || $index == count($galleryItems) - 1)
                                </div>
                            @endif
                    @endforeach
                </div>
            </div><!-- Gallery Wrap --> 
        </div>
    </section>

</x-layout>