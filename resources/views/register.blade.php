<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />

<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
        S-Tailor
    </div>
    <form action="{{ url('/register') }}" method="post" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="text" name="nama" id="nama" placeholder="Name">
        </div>
        <div class="input-group mb-3">
            <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                <option id="jenis_kelamin" name="jenis_kelamin" selected value="">Jenis Kelamin</option>
                <option id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>
                <option id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="text" name="alamat" id="alamat" placeholder="Adress">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="text" name="no_hp" id="no_hp" placeholder="Phone Number">
        </div>
        <div class="input-group mb-3">
            <select class="custom-select" id="roles" name="roles">
                <option id="roles" name="roles" selected value="">Roles</option>
                <option id="roles" name="roles"value="konsumen">Konsumen</option>
                <option id="roles" name="roles" value="penjahit">Penjahit</option>
            </select>
        </div>
        <button class="btn mt-3">Register</button>
    </form>
    <div class="text-center fs-6">
        <a href="{{ url('/login') }}">Login</a>
    </div>
</div>
