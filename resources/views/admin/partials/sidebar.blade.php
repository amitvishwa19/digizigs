<aside class="sidenav aside aside-fixed">

  <div class="aside-header">
    <a href="{{route('app.admin.home')}}" class="aside-logo" style="text-align:center">
        <!-- @if(setting('app.fevicon'))
            <img src="{{setting('app.fevicon')}}" alt="d-logo" style="height:25px;">
        @endif -->

      digizigs<span>solutions</span>
    </a>
    <img src="" alt="">
    <a href="" class="aside-menu-link">
      <i data-feather="menu"></i>
      <i data-feather="x"></i>
    </a>
  </div>

  <div class="aside-body">

    <ul class="nav nav-aside">

        <li class="nav-item">
            <a href="{{route('app.admin.home')}}" class="nav-link">
            <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
            </a>
        </li>

        {{-- <li class="nav-label mg-t-15">APPS</li>
        <li class="nav-item with-sub">
            <a href="" class="nav-link"><i class="fa fa-puzzle-piece"></i> <span>Apps</span></a>
            <ul>
            <li><a href="{{route('app.admin.calendar')}}">Calendar</a></li>
            <li><a href="{{route('mail.index')}}">Mail</a></li>
            <li><a href="">Document</a></li>
            </ul>
        </li> --}}


        {{-- <li class="nav-label mg-t-15">CMS</li> --}}

        {{--posts --}}
        <li class="nav-item">
            <a href="{{route('post.index')}}" class="nav-link">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
            <span>Posts</span>
            </a>
        </li>


        {{-- Pages --}}
        <li class="nav-item">
            <a href="{{route('page.index')}}" class="nav-link">
                <i class="fa fa-file" aria-hidden="true"></i>
                <span>Pages</span>
            </a>
        </li>

        {{-- Categories --}}
        <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
                <i class="fa fa-bookmark" aria-hidden="true"></i>
                <span>Categories</span>
            </a>
        </li>

        {{-- Menus --}}
        <li class="nav-item">
            <a href="{{route('menu.index')}}" class="nav-link">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span>Menus</span>
            </a>
        </li>


        {{-- Media --}}
        <li class="nav-item">
            <a href="{{route('media.index')}}" class="nav-link"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Media</span></a>
        </li>

        {{-- Subscriptions --}}
        <li class="nav-item">
            <a href="{{route('subscription.index')}}" class="nav-link"><i class="fa fa-rss" aria-hidden="true"></i><span>Subscriptions</span></a>
        </li>


        {{-- Inquiry --}}
        <li class="nav-item">
            <a href="{{route('inquiry.index')}}" class="nav-link"><i class="fa fa-binoculars" aria-hidden="true"></i><span>Inquiries</span></a>
        </li>


        {{menu('admin','admin.partials.menus.admin_sidebar')}}

        <li class="nav-label mg-t-15">System</li>

        <li class="nav-item with-sub">
            <a href="" class="nav-link"><i class="fa fa-universal-access" aria-hidden="true"></i> <span>Access Control</span></a>
            <ul>
            <li><a href="{{ route('user.index') }}">Users</a></li>
            <li><a href="{{ route('role.index') }}">Roles</a></li>
            <li><a href="{{ route('permission.index') }}">Permissions</a></li>
            </ul>
        </li>



        <li class="nav-item">
            <a href="{{route('activity.index')}}" class="nav-link">
            <i class="fa fa-flag" aria-hidden="true"></i>
            <span>Activity Logs</span>
            </a>
        </li><!--Logs-->

        <li class="nav-item">
            <a href="{{route('app.admin.log')}}" class="nav-link">
            <i class="fa fa-bug" aria-hidden="true"></i>
            <span>Error Logs</span>
            </a>
        </li><!--Logs-->

        <li class="nav-item">
            <a href="{{route('setting.index',['type'=>'global'])}}" class="nav-link">
            <i class="fa fa-cogs" aria-hidden="true"></i> <span>Settings</span>
            </a>
        </li><!--Settings-->

    </ul>
  </div>

</aside>
