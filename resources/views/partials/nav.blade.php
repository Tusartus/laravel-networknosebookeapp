

<!-- Start Header Area -->
<header class="default-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

            <a class="navbar-brand text-info" href="{{ url('/') }}">
               nosebooke
            </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
         
   
          


        


            @guest

                <li>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else

            

              <li>
              <a class="nav-link text-danger" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

            </li>
         

      

          @endguest




          </ul>













        </div>
    </div>
  </nav>
</header>
<!-- End Header Area -->


