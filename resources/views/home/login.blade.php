<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('home/login/style.css')}}"/>
        <title>Portal Masjid Baiturrahman</title>
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form">
                        <h2 class="title">Login</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username/Email/No.Hp"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password"/>
                        </div>
                        <input type="submit" value="Masuk" class="btn solid"/>
                        <a href="#" class="social-text">forgot password ?</a>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </a>
                        </div>
                    </form>
                    <form action="#" class="sign-up-form">
                        <h2 class="title">Registrasi</h2>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Email/No.Hp"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Konfirmasi Password"/>
                        </div>
                        <input type="submit" class="btn" value="Daftar"/>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Baru di sini ?</h3>
                        <p>
                            Raih kebaikan lebih mudah bersama Masjid Baiturrahman
                            Perum Villa Permata Cikampek Taman Senopati
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Daftar
                        </button>
                    </div>
                    <img src="{{asset('home/login/img/log.svg')}}" class="image" alt=""/>
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Telah menjadi bagian dari kami ?</h3>
                        <p>
                            Wujudkan kebaikan bersama kami sekarang juga
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Masuk
                        </button>
                    </div>
                    <img src="{{asset('home/login/img/register.svg')}}" class="image" alt=""/>
                </div>
            </div>
        </div>

        <script src="{{asset('home/login/app.js')}}"></script>
    </body>
</html>
