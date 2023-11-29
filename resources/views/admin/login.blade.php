<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @isset($title){{ $title }}@endisset
</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('form/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('form/assets/css/styles.min.css')}}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{route('home')}}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('form/assets/images/logos/shop-1.png ')}}" width="180" alt="" height="150px">
                </a> 
                <p class="text-center">Your Social Campaigns</p>
                @if ($message = Session::get('error'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                <strong>{{$message}}</strong>
                            </div>
                        @endif
                <form action="{{route('postlogin')}}" method="POST">
                    @csrf
                  <div class="mb-3  @error('email') has-error @enderror">
                    <label for="exampleInputEmail1" class="form-label help-block">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    @error('email')
                      <span class="help-block" style="color: red;font-weight: bold;}">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mb-4 @error('password') has-error @enderror">
                    <label for="exampleInputPassword1" class="form-label help-block">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    @error('password')
                    <span class="help-block" style="color: red;font-weight: bold;}" >{{$message}}</span>
                  @enderror
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="">Forgot Password ?</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                  <button  class="btn btn-primary align-items-end justify-content-center">Đăng nhập</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('form/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('form/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>