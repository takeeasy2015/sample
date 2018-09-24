@extends('layouts.default')
@section('title', '註冊')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>註冊</h5>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('users.store') }}">
                <!-- csrf token -->
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">名稱：</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                        <label for="email">Email：</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                        <label for="password">密碼：</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                        <label for="password_confirmation">確認密碼：</label>
                    <input type="password" name="password_confirmation"" class="form-control" value="{{ old('password_confirmation') }}">
                </div>
                
                <button type="submit" class="btn btn-primary">註冊</button>
            </form>
        </div>
    </div>
</div>
@stop
