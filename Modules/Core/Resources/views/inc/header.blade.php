<header class="mb-5">
    <div class="banner bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 lead">
                    <div class="header-text">
                        Welcome
                    </div>
                    <div class="body-text">
                        {{ config('app.name') }}
                    </div>
                    <p class="base-text text-justify">
                        {{ config('app.school_address') }}
                    </p>
                    <figure class="mt-2">
                        <blockquote class="blockquote">
                            Education is the passport to the future, for tomorrow belongs to those who prepare for it
                            today.
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Malcolm X">Malcolm X</cite>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-sm-7 d-none d-sm-block d-flex justify-content-center">
                    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel"
                         data-bs-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/img/textbook.png') }}" class="img-fluid rounded w-100"
                                     alt="{{ config('app.name') }} School logo"/>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('storage/img/parallax1.jpg') }}" class="img-fluid rounded w-100"
                                     alt="{{ config('app.name') }} School logo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Modules.Core.Resources.views.auth.partials.notification')
</header>
