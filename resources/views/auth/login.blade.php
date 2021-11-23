@extends('layouts.loginlayout')

@section('content')
    <div class="middle-box text-center animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">B1T+</h1>

            </div>


            <form class="form-horizontal loginscreen middle-box" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Сануулах
                        </label>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Нэвтрэх</button>

                <a href="{{ url('/password/reset') }}"><small>Нууц үгээ мартсан уу?</small></a>

            </form>
            <p class="m-t"> <small>B1T+ CMS Удирдлага v01 &copy; 2017</small> </p>
        </div>
    </div>
@endsection
