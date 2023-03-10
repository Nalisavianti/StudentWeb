<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/dashboard.css')}}" rel="stylesheet" />
  <title>User Information</title>
</head>
<body>
  <a href ="/admin-coba" class="button"><img src="{{asset('img/back-button.png')}}" width="30px" height="30px"> Back</a>
  <div class="form-body">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3>Detail Information</h3>
            <form action="/admin-coba/{{$user->id}}" class="requires-validation"  method="POST"  enctype="multipart/form-data">
              <div class="col-md-12 mb-4">
                <label for="username">Username : <br /></label>
                <input class="form-control" type="text" name="username" required value="{{$user->username}}" disabled/>
              </div>
              <div class="col-md-12 mb-4">
                <label for="email">Email Address: <br /></label>
                <input class="form-control" type="text" name="email" required  value="{{$user->email}}" disabled/>
              </div>
              <div class="col-md-12 mb-4">
                <label for="nim">NIM : <br /></label>
                <input class="form-control" type="text" name="nim" required value="{{$user->nim}}" disabled/>
              </div>
              <div class="col-md-12 mb-4">
                <label for="ttl">Date of Birth : <br /></label>
                <input class="form-control" type="text" name="ttl" required value="{{$user->ttl}}" disabled/>
              </div>
              <div class="col-md-12 mb-4">
                <label for="major">Major : <br /></label>
                <input class="form-control" type="text" name="major" required value="{{$user->major}}" disabled/>
              </div>
              <div class="col-md-12 mb-4">
                <label for="grade">Grade : <br /></label>
                <input class="form-control" type="text" name="grade" required value="{{$user->grade}}" disabled/>
              </div>
              <div class="col-md-12 mb-4">
                <label for="address">NRP/NIP : <br /></label>
                <input class="form-control" type="text" name="address" required value="{{$user->address}}" disabled/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>