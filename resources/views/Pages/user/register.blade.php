@extends('main.main')
@section('page')
    <section class="login_box_area section_gap" >
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3 style="margin-bottom:20px;text-align: center;font-weight: bold;">Register</h3>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                        <form class="row login_form"  method="POST"  action="{{route('dangkipost')}}">
                            {!! csrf_field() !!}
                            <div class="col-md-12 form-group @error('email') has-error @enderror">
                                <label for="login-email" style="font-weight:bold" class="help-block">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email"  name="email" >
                                    @error('email')
                                        <span class="help-block" 
                                        style="color: red;font-weight: bold;}">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="col-md-12 form-group @error('name') has-error @enderror">
                                <label for="login-name"class="help-block" style="font-weight:bold">Username</label>
                                <input type="text" class="form-control"placeholder="Username" name="name" >
                                @error('name')
                                    <span class="help-block" style="color: red;font-weight: bold;}">{{$message}}</span>
                                 @enderror
                            </div>
                            <div class="col-md-12 form-group @error('password') has-error @enderror">
                                <label for="login-password" class="help-block" style="font-weight:bold">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password"  name="password">
                                @error('password')
                                 <span class="help-block" style="color: red;font-weight: bold;}">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="login-password" style="font-weight:bold" >Repeat Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password"  name="password">

                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <div style=" display: flex;justify-content: space-between;">
                                        <div>

                                        </div>
                                        <a href="#" style="ma">Đã có tài khoản</a>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group" style="text-align: center">
                                <button type="submit" value="Save" class="btn btn-primary" >Đăng Kí</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()
