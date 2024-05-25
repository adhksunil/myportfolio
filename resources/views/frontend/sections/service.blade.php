<style>
    .service-area {
        background-color:  rgba(99, 14, 14, 0.7);  /* Change this color to your desired background color */
    }
</style>

<section class="service-area section-padding-top" id="about-page">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-6 my-3" style="color: #030b55">
                    <div class="single-service">
                        <h2 class="title wow fadeInRight" data-wow-delay="0.3s">{{ $service->title }}</h2>
                        <h6 class="wow fadeInRight" data-wow-delay="0.3s">{{ $service->sub_title }}</h6>
                        <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

