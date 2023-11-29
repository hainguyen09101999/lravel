@extends('main.main')
@section('page')
    <section class="login_box_area section_gap" >
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3 style="margin-bottom:20px;text-align: center;font-weight: bold;">Log in to enter</h3>
                        @if ($message = Session::get('error'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                <strong>{{$message}}</strong>
                            </div>
                        @endif
                        <form class="row login_form" action="{{route('nhandulieu')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="col-md-12 form-group @error('email') has-error @enderror">
                                <label for="uname" style="font-weight:bold" class="help-block">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email"  name="email">
                                @error('email')
                                      <span class="help-block" style="color: red;font-weight: bold;}">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group @error('password') has-error @enderror">
                                <label for="psw" style="font-weight:bold">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password"  name="password">
                                @error('password')
                                      <span class="help-block" style="color: red;font-weight: bold;}">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <div style=" display: flex;justify-content: space-between;">
                                        <div>
                                            <input type="checkbox" id="f-option2" name="selector">
                                            <label for="f-option2">Keep me logged in</label>
                                        </div>
                                            <a href="#" style="ma">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group" style="text-align: center">
                                <button  class="btn btn-primary">Đăng nhập</button>
                                <a class="btn btn-secondary" href="{{route('dangki')}}">Đăng Kí</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()
