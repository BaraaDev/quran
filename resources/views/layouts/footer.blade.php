<div class="footer-wrapper mt-0 bg-dark pt--lg-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-sm-9 col-xs-12 sm-mb-4">
                        <a href="{{route('home')}}"><h1 class="cairo-font ls-3 fw-700 text-white font-xxl">{{$settingsFind->title}}<span class="d-block font-xsssss ls-1 text-grey-500 open-font ">{{$settingsFind->description}}</span></h1></a>
                        <p class="w-100 mt-5">{{$settingsFind->location}} <br> {{$settingsFind->email}}</p>
                        <ul class="d-flex align-items-center mt-3 float-left">
                            <li class="ml-2"><a href="https://www.facebook.com/{{$settingsFind->facebook}}" target="_blank" rel="nofollow"><i class="fab fa-facebook fa-3x"></i></a></li>
                            <li class="ml-2"><a href="https://wa.me/{{$settingsFind->whatsApp}}" target="_blank" rel="nofollow"><i class="fab fa-whatsapp fa-3x"></i></a></li>
                            <li class="ml-2"><a href="mailto:{{$settingsFind->email}}" target="_blank" rel="nofollow" ><i class="fas fa-envelope fa-3x"></i></a></li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-3 col-xs-6 sm-mb-4">
                        <h5>Language</h5>
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Arab</a></li>
                            <li><a href="#">Urdu</a></li>
                            <li><a href="#">Brazil</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 sm-mb-4">
                        <h5>Channel</h5>
                        <ul>
                            <li><a href="#">Makeup</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Girls</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Headphones</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 sm-mb-4">
                        <h5>About</h5>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Term of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6">
                        <h5 class="mb-3">دا التحفيظ</h5>
                        <p class="w-100">{{$settingsFind->location}}<br>{{$settingsFind->phone}}</p>
                    </div>
                </div>
                <div class="middle-footer mt-5 pt-4"></div>
            </div>
            <div class="col-sm-12 lower-footer pt-0"></div>
            <div class="col-sm-6 col-xs-12">
                <p class="copyright-text">© 2021 حقوق النشر. كل الحقوق محفوظة.</p>
            </div>
            <div class="col-sm-6 col-xs-12 text-right">
                <p class="copyright-text float-right">Design by <a href="#" class="">uitheme</a></p>
            </div>
        </div>
    </div>
</div>
