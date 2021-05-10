@extends('core::layouts.master')
@section('title') Welcome @endsection
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-col-sm-6 col-md-8">
                    <div class="body-text">
                        {{ config('app.name') }}, Ilaro
                    </div>
                    <h5 class="text-secondary">We are ranked second to none...</h5>
                    <div class="long-hr mb-5"></div>
                    <p class="text-justify lead">
                        Welcome to the world of {{ config('app.name') }}, Ilaro. The institution was established by law
                        on {{ date('M, d, Y') }} and opened her gates to the public on October 26, 1999. The Institution
                        has since then acquired the reputation of a quintessential institution educating and training
                        students across her group levels.
                    </p>
                </div>
                <div class="col-12 col-col-sm-6 col-md-4 text-center">
                    <div class="mt-5">
                        <figure class="figure">
                            <img src="{{ asset('storage/img/rector.jpg') }}"
                                 class="figure-img img-fluid rounded photo-frame" width="60%"
                                 alt="__{{ "principal" }}"/>
                        </figure>
                    </div>
                    <p class="base-text">
                        Principal's name
                    </p>
                </div>
            </div>
        </div>
        <div class="text-secondary">
            <div class="mb-5 mt-5">
                <div class="col-8">
                    <div class="long-hr"></div>
                </div>
            </div>
            <div class="container">
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="body-text">
                            <i class="fa fa-award"></i> Achievements
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-12">
                        <div class="lead">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <ul style="margin: 0; list-style-type:none;">
                                        <li class="lead text-secondary"><span class="icon achievement"></span> Lorem
                                            ipsum, dolor sit amet consectetur quaerat officia rem. Sint recusandae illo
                                            repudiandae pariatur.
                                        </li>
                                        <li class="mt-3 lead text-secondary"><span class="icon achievement"></span>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi dolores atque
                                            nihil cumque est voluptate maiores ratione ab!
                                        </li>
                                        <li class="mt-3 lead text-secondary"><span class="icon achievement"></span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, in quibusdam.
                                            Aliquid, autem reprehenderit
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <ul style="margin: 0; list-style-type:none;">
                                        <li class="lead text-secondary"><span class="icon achievement"></span> Lorem
                                            ipsum, dolor sit amet consectetur quaerat officia rem. Sint recusandae illo
                                            repudiandae pariatur.
                                        </li>
                                        <li class="mt-3 lead text-secondary"><span class="icon achievement"></span>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi dolores atque
                                            nihil cumque est voluptate maiores ratione ab!
                                        </li>
                                        <li class="mt-3 lead text-secondary"><span class="icon achievement"></span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, in quibusdam.
                                            Aliquid, autem reprehenderit
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                                    <i class="fa fa-award text-purple" style="font-size: 10rem;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="col-8 offset-4">
                    <div class="long-hr"></div>
                </div>
            </div>
        </div>
        <div id="parallax1" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas eos itaque, quia porro blanditiis
                        ullam at consequuntur dolores? Dolore debitis obcaecati voluptatem possimus ipsam quaerat
                        quisquam voluptatum, minima magnam neque.
                    </div>
                </div>
            </div>
        </div>
        <div class="text-purple p-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <div class="body-text">
                                    <i class="fa fa-info"></i> News
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <figure class="figure text-center">
                                    <img src="{{ asset('storage/img/rector.jpg') }}"
                                         class="figure-img img-fluid photo-frame rounded" width="50%"
                                         alt="__{{ "principal" }}"/>
                                    <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                    <a href="" class="">Read more &raquo;</a>
                                </figure>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <figure class="figure text-center">
                                    <img src="{{ asset('storage/img/rector.jpg') }}"
                                         class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}"/>
                                    <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                    <a href="" class="">Read more &raquo;</a>
                                </figure>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <figure class="figure text-center">
                                    <img src="{{ asset('storage/img/rector.jpg') }}"
                                         class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}"/>
                                    <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                    <a href="" class="">Read more &raquo;</a>
                                </figure>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <figure class="figure text-center">
                                    <img src="{{ asset('storage/img/rector.jpg') }}"
                                         class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}"/>
                                    <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                    <a href="" class="">Read more &raquo;</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 offset-sm-1">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="body-text">
                                    <i class="fa fa-bullhorn"></i> Events
                                </div>
                            </div>
                            <div class="col-12">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum asperiores
                                quibusdam consequuntur voluptas architecto! Laboriosam, nihil quisquam accusamus nam
                                impedit est! Quasi perspiciatis dolor delectus veniam ad, consectetur dolores.
                            </div>
                            <div class="col-12 mt-3">
                                lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum asperiores
                                quibusdam consequuntur voluptas architecto! Laboriosam, nihil quisquam accusamus nam
                                impedit est! Quasi perspiciatis dolor delectus veniam ad, consectetur dolo
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
