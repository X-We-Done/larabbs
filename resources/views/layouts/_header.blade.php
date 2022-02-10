<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <a class="navbar-brand" href="#">LaraBBS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ active_class(if_route('topics.index')) }}"><a class="nav-link" href="{{ route('topics.index') }}">话题</a></li>
        <li class="nav-item {{ category_nav_active(1) }}"><a class="nav-link" href="{{ route('categories.show', 1) }}">分享</a></li>
        <li class="nav-item {{ category_nav_active(2) }}"><a class="nav-link" href="{{ route('categories.show', 2) }}">教程</a></li>
        <li class="nav-item {{ category_nav_active(3) }}"><a class="nav-link" href="{{ route('categories.show', 3) }}">问答</a></li>
        <li class="nav-item {{ category_nav_active(4) }}"><a class="nav-link" href="{{ route('categories.show', 4) }}">公告</a></li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">登录</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">注册</a>
        </li>
        @else
        <li class="nav-item">
          <a href="{{route(
          'topics.create')}}" class="nav-link mt-1 mr-3 font-weight-bold">
            <i class="fa fa-plus"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown" role="button">
              <img src="{{Auth::user()->avatar}}" class="img-responsive img-circle" width="30px" height="30px">
              {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('users.show',Auth::id())}}">
                <i class="far fa-user"></i>
                个人中心
              </a>
              <a class="dropdown-item" href="{{route('users.edit',Auth::id())}}">
                <i class="far fa-edit mr-2"></i>
                编辑资料
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <form action="{{route('logout')}}" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-block btn-danger" name="button" >
                    退出
                  </button>
                </form>
              </a>
            </div>
          </li>

        @endguest
      </ul>
    </div>
  </div>
</nav>
