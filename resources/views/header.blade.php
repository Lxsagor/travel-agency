<header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
    <div class="container position-relative">
      <a class="navbar-brand" href="/">
        <img
          class="navbar-brand-regular"
          src="{{asset('assets/img/jadoo/Jadoo.png')}}"
          alt="brand-logo"
        />
      </a>
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="navbarToggler"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-inner">
        <!--  Mobile Menu Toggler -->
        <button
          class="navbar-toggler d-lg-none"
          type="button"
          data-toggle="navbarToggler"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <nav>
          <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item dropdown">
              <a
                data-translatekey="about"
                class="nav-link scroll"
                href="#about"
              >
                Destination
              </a>
            </li>
            <li class="nav-item">
              <a
                data-translatekey="background"
                class="nav-link scroll"
                href="#background"
                >Hotel</a
              >
            </li>
            <li class="nav-item">
              <a
                data-translatekey="features"
                class="nav-link scroll"
                href="#features"
                >Flights</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                data-translatekey="purpose"
                class="nav-link scroll"
                href="#purpose"
              >
                Bookings
              </a>
              @if(Session::has('user'))
          <li class="dropdown">
            <a data-translatekey="target-users"
            class="nav-link"
            href="/login">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/userList">User List</a></li>

              <li><a href="/logout">Logout</a></li>
              
            </ul>
          </li>
          @else

        </li>
        <li class="nav-item">
          <a
            data-translatekey="target-users"
            class="nav-link"
            href="/login"
            >Login</a
          >
        </li>
        <li class="nav-item">
          
          <a class="nav-link"
          href="/register">Register 
        </a>
        
        </li>
          
          @endif
           
          </ul>
          <!-- <div class="others-option"> -->
          <div class="language_change">
            <div class="switch">
              <div class="language">
                <input
                  onclick="englishMode()"
                  id="q1"
                  name="locale"
                  type="radio"
                  value="en"
                  checked
                />
                <label for="q1">English</label>
              </div>
              <div class="language">
                <input
                  onclick="banglaMode()"
                  id="q2"
                  name="locale"
                  type="radio"
                  value="bn"
                />
                <label for="q2">বাংলা</label>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </nav>
      </div>
    </div>
  </header>