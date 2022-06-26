<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@if(session('success'))
<div class = "alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class = "alert alert-error">
    {{ session('error') }}
</div>
@endif

<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
        S-Tailor
    </div>
    <form action="{{ url('/loginPost') }}" method="post" class="p-3 mt-3">
    @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="{{url('/register')}}">Sign up</a>
    </div>
</div>
