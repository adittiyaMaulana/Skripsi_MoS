<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
    
    <section>

        <div class="imageBox">
            <img src="{{asset('image/school1.jpg')}}" alt="">
        </div>

        <div class="contentBox">
            <div class="formBox">
                <h4>Selamat Datang</h4>
                <br>
                <h1>Silahkan Login</h1>
                <form action="">

                    <div class="inputBox">
                        <span>Email</span>
                        <input type="email" name="">
                    </div>

                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="">
                    </div>

                    <div class="remember">
                        <label for=""><input type="checkbox"> Ingatkan Saya!</label>
                    </div>

                    <div class="inputBox">
                        <input type="submit" value="Masuk" name="" >
                    </div>

                    <div class="inputBox">
                        <p>Lupa Password ? <a href="#">Ganti Password</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>
</body>
</html>