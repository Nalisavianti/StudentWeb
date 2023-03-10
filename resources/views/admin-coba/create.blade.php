<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/dashboard.css')}}" rel="stylesheet" />
  <title>User</title>
</head>
<body>
  <div class="form-body">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3>Form Create User</h3>
            {{-- <div class="valid-feedback">
                @if(Session::has('succes'))
                {{ Session::get('succes') }}
                @endif
            </div> --}}
            {{-- @if(Session::get('update'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        <h6>update, Registrasi Anda Berhasil ! Silahkan Cek di Data Pendaftar</h6>
                    </div>
                </div>
            @endif --}}
            <form action="/admin-coba" class="requires-validation"  method="POST"  enctype="multipart/form-data">
              @csrf
              <div class="col-md-12 mb-4">
                <label for="username">Username: <br /></label>
                <input class="form-control" type="text" name="username" placeholder="Username" required />
              </div>
              <div class="col-md-12 mb-4">
                <label for="email">Email Address: <br /></label>
                <input class="form-control" type="text" name="email" placeholder="Email" required />
              </div>
              <div class="col-md-12 mb-4">
                <label for="password">Password: <br /></label>
                <input class="form-control" type="text" name="pass" placeholder="Password" required />
              </div>
              <div class="col-md-12 mb-4">
                <label for="nim">NIM : <br /></label>
                <input class="form-control" type="number" name="nrp" placeholder="NIM" required />
              </div>
              <div class="col-md-12 mb-4">
                <label for="level">Level: <br /></label>
                <input class="form-control" type="text" name="level" placeholder="Level" required />
              </div>
              <div class="form-button">
                <button id="submit" type="submit" class="btn btn-primary1">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>