<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-10 col-offset-1">
            <a href="{{ route('home') }}" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="#">用戶列表</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}  <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('users.show', Auth::user()->id) }}">個人中心</a></li>
                                <li><a href="#">編輯資料</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="logout">
                                        <form action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('help') }}">幫助</a></li>
                        <li><a href="{{ route('login') }}">登入</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>