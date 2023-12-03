@extends('layout.master')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,800;1,400&display=swap" rel="stylesheet">
    <style>
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Rubik', sans-serif;
}

/* Body styles */
.body {
    
    background-color: #f0f0f0;
    display: grid;
    grid-template-columns:65% auto;
    height: 100vh;
}

/* Form container */
.form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: auto;
}

/* Form title */
.form-title {
    text-align: center;
    margin-bottom: 20px;
    color: black;
}

/* Form styles */
.form-row {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

.form-label {
    color: black;
    margin-bottom: 5px;
}

.form-control {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: calc(100% - 16px);
    color: #333;
}

.form-check {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    color: black;
}

.btn1 {
    padding: 8px;
    border: none;
    background-color:var(--primary);
    border-radius: 4px;
    color: white;
    cursor: pointer;
    transition:  0.3s ease;
}


.btn-orange:hover {
    color:black
}

.forgot-password {
    display: block;
    color: black;
    margin-top: 10px;
    text-decoration: none;
}

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="body">
    <img src="laravel/public/img/landing55.jpg" style="width:100%;
      object-fit: contain;" alt="">

  <div class="form-container">
  <h1 class="m-0 display-4 text-primary text-uppercase" style="text-align:center">Gymster</h1>
    <form method="POST" action="{{ route('register') }}" class="form-row">
        @csrf
        <div class="form-group">
            <label  class="form-label text-orange">Name</label>
            <input  type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="form-label text-orange">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="form-label text-orange">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password-confirm" class="form-label text-orange">Password</label>
            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

       
        <button type="submit" class="btn1 btn-orange w-100">Register</button>
        <a class="forgot-password text-orange" style="text-align:center" href="{{ route('login') }}">already have an acoount?</a>
       
    </form>
  </div>
</div>

</body>
</html>

        
    

