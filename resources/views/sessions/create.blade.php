@extends('layouts.default')
@section('title', '登入')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登入</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form group">
                        <label for="email">電子郵件：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="form group">
                        <label for="password">密碼：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">登入</button>
                </form>

                <hr />

                <p>還沒帳號？ <a href="{{ route('signup') }}">現在註冊</a></p>
            </div>
        </div>
    </div>
@stop