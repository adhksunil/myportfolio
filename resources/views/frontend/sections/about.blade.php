<section class="about-area section-padding-top">
    <div class="container" style="color: aquamarine">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <figure class="about-image">
                    <img src="{{ asset('assets/img/Sunil.png') }}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
<h3 class="title wow fadeInUp" data-wow-delay="0.3s" style="color: red;">
    {{ $about->title ?? 'Sunil Adhikari' }}
</h3>

                    <div class="desc wow fadeInUp" data-wow-delay="0.4s" >
                        {!! $about->description ?? '<p>Computer Engineer And Full Stack Developer.</p>' !!}
                    </div>
                    <a href="{{ route('admin.resume.download') }}" class="button-primary-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Download Resume</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
