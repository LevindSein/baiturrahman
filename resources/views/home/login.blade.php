<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="keyword" content="Portal Masjid Baiturrahman, Pembayaran Zakat, Masjid Baiturrahman, Taman Senopati, Villa Permata Cikampek"/>
        <meta name="author" content="Pemuda Baiturrahman - Levind Sein, Eki, Fahni"/>
        <meta name="description"content="Pembayaran Zakat Fitrah dan Maal" />
        <meta property="og:site_name" content="Masjid Baiturrahman">
        <meta property="og:title" content="Masjid Baiturrahman" />
        <meta property="og:description" content="Pembayaran Zakat Fitrah dan Maal" />
        <meta property="og:image" itemprop="image" content="{{asset($Gsetting->favicon)}}">
        <meta property="og:type" content="website" />
        <link rel="shortcut icon" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="16x16 32x32 64x64" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="196x196" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="160x160" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="96x96" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="64x64" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="32x32" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="16x16" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset($Gsetting->favicon)}}">
        <meta name="google" content="notranslate">

        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

        {{-- CSS for this page --}}
        <link rel="stylesheet" href="{{asset('home/login/style.css')}}"/>

        {{-- jQuery 3.60 --}}

        <script src="{{asset('home/login/jquery.min.js')}}"></script>

        {{-- Toastr --}}
        <link rel="stylesheet" type="text/css" href="{{asset('home/login/toastr.min.css')}}">
        <script src="{{asset('home/login/toastr.min.js')}}"></script>

        <title> {{$Gsetting->title}}</title>
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="{{url('login')}}" class="sign-in-form" method="post">
                        @csrf
                        <h2 class="title">Login</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input required type="text" autocomplete="off" maxlength="50" name="username" placeholder="Username/Email/No.Hp" style="text-transform:lowercase;"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input required type="password" minlength="5" name="password" placeholder="Password"/>
                        </div>
                        <input type="submit" value="Masuk" class="btn solid"/>
                        <!-- <a href="#" class="social-text">Lupa password ?</a> -->
                        <span class="social-text"></span>
                        <div class="social-media">
                            <a href="{{$Gsetting->phone}}" target="_blank" class="social-icon">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="{{$Gsetting->email}}" target="_blank" class="social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="{{$Gsetting->address}}" target="_blank" class="social-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </a>
                        </div>
                    </form>
                    <form action="#" class="sign-up-form">
                        <h2 class="title">Registrasi</h2>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input required type="text" autocomplete="off" maxlength="50" name="username" placeholder="Email/No.Hp" style="text-transform:lowercase;"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input required type="password" minlength="5" name="password" placeholder="Password"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input required type="password" minlength="5" name="password" placeholder="Konfirmasi Password"/>
                        </div>
                        <input type="submit" class="btn" value="Daftar"/>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>{!! html_entity_decode($Gsetting->home_text->home_text_title_1)!!}</h3>
                        <p>{!! html_entity_decode($Gsetting->home_text->home_text_desc_1)!!}</p>
                        <button class="btn transparent" id="sign-up-btn">
                            Daftar
                        </button>
                    </div>
                    <img src="{{asset($Gsetting->home_img_1)}}" class="image" alt=""/>
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>{{$Gsetting->home_text->home_text_title_2}}</h3>
                        <p>{{$Gsetting->home_text->home_text_desc_2}}</p>
                        <button class="btn transparent" id="sign-in-btn">
                            Masuk
                        </button>
                    </div>
                    <img src="{{asset($Gsetting->home_img_2)}}" class="image" alt=""/>
                </div>
            </div>
        </div>

        <script src="{{asset('home/login/app.js')}}"></script>
        <script src="{{asset('custom.js')}}"></script>
        <script>
            var field = document.querySelector('[name="username"]');

            field.addEventListener('keypress', function ( event ) {
            var key = event.keyCode;
                if (key === 32) {
                event.preventDefault();
                }
            });
        </script>

        @include('message.toastr')
    </body>
</html>
