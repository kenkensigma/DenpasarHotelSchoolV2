<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denpasar Hotel School Program</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <section>
        
    <div class="imgbox">
        <img src="img/login.jpg" alt="">
        <div class="judul">Welcome to the Denpasar Hotel School</div>
        <div class="text-program">LOGIN</div>
     </div>

     <div class="container-alert">
        @session("success")
        <div class="alert" id="success-alert">
            {{ session("succes") }}
        </div>
        @endsession
        
        @session("error")
        <div class="alert alert-error" id="error-alert">
            {{ session("error") }}
        </div>
        @endsession
        </div>
     
     <div class="contentbox">
        <div class="formbox">
            <h2>Login</h2>
            <h3>Welcome back!</h3>
            <form class="form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="inputbox">
                    <span>Email</span>
                    <input type=" email" id="email" name="email" required>
                    @error("email")
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputbox">
                    <span>Password</span>
                    <input type="password" id="password" name="password" required>
                    @error("password")
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <div class="inputbox">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
     </div>
     </section>
</div>
</html>