@extends('layout.main')
@section('title') Register | @parent @endsection
@section('main')

    
        <!-- <div class="row">
            <div class=" col-md-4 col-sm-4 col-xs-12">
                <div class="info-box bg-white ">
                     <h4><i class="fa fa-edit"></i></h4>
                    <h4> CREATE ACCOUNT</h4>
                    <p class="intro"> Register to 51capitalcrypto.com and gain access to be a member</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="info-box bg-white ">
                     <h4><i class="fa fa-paypal"></i> </h4>
                    <h4>BUY BOOMTOKENS</h4>
                    <p class="intro"> Make deposit amount to your wallet, its simple and secure </p>
                </div>
            </div>

            <div class="col-md-4 co<div class="container">l-sm-4 col-xs-12">
                <div class="info-box bg-white ">
                     <h4><i class="fa fa-bar-chart-o"></i> </h4>
                    <h4> EXCHANGE BOOMTOKEN</h4>
                    <p class="intro"> Earn 1% of your deposit amount each day. Exchange token to other currencies. </p>
                </div>
            </div>

        </div>
    </div>
 -->

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                <div class="login">
                    <h3 class="authTitle">Sign up</h3>


                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{route('user.store')}}" method="post" role="form"> @csrf
                        <hr />
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('first_name')? 'has-error':'' }} ">
                                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" placeholder="First Name" tabindex="1">

                                    {!! $errors->has('first_name')? '<p class="help-block">'.$errors->first('first_name').'</p>':'' !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('last_name')? 'has-error':'' }} ">
                                    <input type="text" name="last_name" id="last_name" class="form-control"  value="{{ old('last_name') }}" placeholder="Last Name" tabindex="2">
                                    {!! $errors->has('last_name')? '<p class="help-block">'.$errors->first('last_name').'</p>':'' !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email')? 'has-error':'' }} ">
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email Address" tabindex="4">
                            {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}

                        </div>

                        <div class="form-group {{ $errors->has('phone')? 'has-error':'' }}">
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone Number" tabindex="3">
                            {!! $errors->has('phone')? '<p class="help-block">'.$errors->first('phone').'</p>':'' !!}
                        </div>


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group {{ $errors->has('gender')? 'has-error':'' }}">
                                    <select id="gender" name="gender" class="form-control select2">
                                        <option value="">Select Role</option>
                                        <option value="male">Admin</option>
                                        <option value="female">Normal User</option>
                                        <!-- <option value="third_gender">Third Gender</option> -->
                                    </select>
                                    {!! $errors->has('gender')? '<p class="help-block">'.$errors->first('gender').'</p>':'' !!}

                                </div>
                            </div>
                        </div>

                        
                        <legend>Upload profile picture</legend>
                        <div class="file-upload-wrap">
                                    <label>
                                        <input type="file" name="images" id="images" style="display: none;" />
                                        <i class="fa fa-cloud-upload"></i>
                                        <p>Upload profile picture</p>

                                        <div class="progress" style="display: none;"></div>

                                    </label>
                                </div>
                                <p class="text-info"> (Formats accepted are png and jpeg)</p>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" tabindex="5">
                                    {!! $errors->has('password')? '<p class="help-block">'.$errors->first('password').'</p>':'' !!}

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('password_confirmation')? 'has-error':'' }}">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
                                    {!! $errors->has('password_confirmation')? '<p class="help-block">'.$errors->first('password_confirmation').'</p>':'' !!}

                                </div>
                            </div>
                        </div>
                        <div class="row  {{ $errors->has('password')? 'has-error':'' }}">
                            <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<label><input type="checkbox" name="agree" value="1" /> I Agree </label>
					</span>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-9">
                                By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="{{ route('single_page', 'terms-and-condition') }}" target="_blank">Terms and Conditions</a> set out by this site, including our Cookie Use.
                            </div>

                            <div class="col-sm-12">
                                {!! $errors->has('password')? '<p class="help-block">You must agree with terms and condition</p>':'' !!}
                            </div>
                        </div>

                        <hr />
                        <div class="row">
                            <div class="col-xs-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                        </div>
                    </form>
<hr>
                    <a href="{{ route('login') }}">Already have an account? Click here to @lang('app.login')</a>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('page-js')
    <script>
        $(document).ready(function() {
            $('#phone').keyup(function(){
                $(this).val($(this).val().replace(/[^0-9]/g,""));
            });
        });

    </script>
@endsection

