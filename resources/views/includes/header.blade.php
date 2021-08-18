<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-0">
    <a class="navbar-brand" href="/">
      <img alt="CSGO Nades logo" src="../logo.png" width=55 height=36>
    </a>
    <div class="d-flex ml-auto flex-row">

      <div class="p-2">
        <button class="btn border-secondary" onclick="darkModeTrigger()">
          <i class="fas fa-moon"></i>
        </button>
      </div>

      @guest
      <div class="p-2">
        <a href="/login">
          <button class="btn btn-primary">
            <i class="fab fa-steam"></i>
            Sign in with <strong>STEAM</strong>
          </button>
        </a>
      </div>
      @else
      <div class="p-2">
        <div class="drop-down">
          <button type="button" class="dropdown-toggle button" style="outline:none; border:none; background:transparent" data-toggle="dropdown">
            <img src="{{Auth::user()->avatar}}" alt="avatar for {{Auth::user()->name}}" class="user-avatar">
            <span class="pr-1">{{Auth::user()->name}}</span>
          </button>
          <div>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="../createnade">Add Nades</a></li>
              <li><a class="dropdown-item" href="../users/{{Auth::user()->steam_id}}">Profile</a></li>
              <li><a class="dropdown-item" href="{{Auth::logout()}}">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
      @endguest
    </div>
  </nav>
</header>