<div class="general-footer-upper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-5 mb-3">
                <h5>Location</h5>
                <div class="underline mb-4"></div>
                <p>
                    {{-- <div class="mapouter"> --}}
                        <div class="gmap_canvas">
                            <iframe width="90%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=faith%20in%20christ%20college,%20oke%20ola,%20ilaro,%20ogun%20state,%20nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2" scrolling="yes" marginheight="0" marginwidth="0">
                            </iframe>
                        </div>
                     {{--</div> --}}
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <h5>Quick links</h5>
                <div class="underline mb-4"></div>
                <p class="block-links">
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                
                    <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">
                        Register
                    </a>
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-2 mb-3">
                <h5>Alumni</h5>
                <div class="underline mb-4"></div>
                <p class="block-links">
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">
                        Register
                    </a>
                    <a href="{{ route('payment') }}" class="{{ request()->is('payment') ? 'active' : '' }}">
                        Payment
                    </a>
                    <a href="{{ route('portal') }}" class="{{ request()->is('portal') ? 'active' : '' }}">
                        Portal
                    </a>
                    <a href="{{ route('check-status') }}" class="{{ request()->is('check-status') ? 'active' : '' }}">
                        Check status
                    </a>
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-3">
                <div class="mb-3">
                    <img src="{{ asset('storage/img/logo.png') }}" class="img img-fluid" width="40%" alt="School logo" />
                </div>
                <p>
                    {{ config('app.school_address') }}
                    <p class="mt-3">
                        <a href="nailto: {{ config('app.email') }}" target="{{ __('blank') }}">
                           {{ config('app.email') }}
                        </a><br/>
                        <a href="tel: {{ config('app.phone_number') }}" target="{{ __('blank') }}">
                            {{ config('app.phone_number') }}
                        </a>
                    </p>
                </p>
                <div class="underline mt-2 mb-3"></div>
                <p class="social-icons">
                    <a href="" class="" target="{{ __('_blank') }}" title="Like our facebook page"><i class="fab fa-facebook-square"></i></a>
                    <a href="" class="" target="{{ __('_blank') }}" title="Follow us on instagram"><i class="fab fa-instagram"></i></a>
                    <a href="" class="" target="{{ __('_blank') }}" title="Follow us on twitter"><i class="fab fa-twitter"></i></a>
                    <a href="" class="" target="{{ __('_blank') }}" title="Check us out on LinkedIn"><i class="fab fa-linkedin"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="text-center text-white p-3" style="font-weight: 600; background-color: #8a12b9;">{{ config('app.name') }}, Ilaro &middot; &copy; {{ date('Y') }} &middot; All rights reserved.</div>