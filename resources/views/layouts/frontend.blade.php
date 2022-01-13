
@include('partials.head');
<body>

@include('partials.nav');
<article class="mt-5 mb-5">
    <main class="row">

    <!--  side left in all app user details plus menu nav  -->
<div class="col-lg-4 copan justify-content-center card m-3">


      @guest



      @else




  
  <article class="ro p-3 m-3" style=" font-size:16px; ">
   <div class="col-md-8  p-2 card">

   <ul class="nav flex-column  p-5">
       @if(Request::is('author*'))

 

  <li class="nav-item">
   <a class="nav-link" href="#">name: <strong>{{ Auth::user()->name }} </strong></a>
  </li>
  <li class="nav-item">
   <a class="nav-link" href="#">Username: <strong>{{ Auth::user()->username }} </strong></a>
  </li>
  <li class="nav-item">
   <a class="nav-link" href="#"> Email: <strong>{{ Auth::user()->email }}</strong></a>
  </li>

  <li class="nav-item">

  <b class="nav-in" > about: <strong>{{ Auth::user()->about }}</strong></b>

   

  </li>

  </ul>
   
   </div>
  



   
   <div class="col-md-8 col-lg-4 m-2 p-2">
   
   </div>
   <ul class="nav flex-column card p-2 mt-1">

  <li class="nav-item {{ Request::is('author/dashboard') ? 'active' : '' }}">
  <a class="nav-link" href="{{ url('author/dashboard') }}">Dashboard</a>
  </li>



  <li class="nav-item {{ Request::is('author/post*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('author.post.index') }}">Posts</a>

  </li>
 
  
  <li class="nav-item {{ Request::is('author/settings*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('author.settings') }}">Setting</a>

  </li>



  @endif
  </ul>
  
   </article>
  
  @endguest

  </div>
@yield('content')


</main>
</article>






  <div class="mt-5 mb-5"></div>

  @include('partials.footer');


 <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.2.0/jquery-migrate.min.js" integrity="sha256-04lIChOgWF7jIOxGWaIMJE5y+W/0xUVDlh2+nwJuB28=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

 <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


 <script>
/*
   @if($errors->any())
        @foreach($errors->all() as $error)
           toastr.error('{{$error}}', 'Error', {
           closeButton:true,
           progressBar:true,

            });

        @endforeach



   @endif
*/



  </script>
  <script src="{{ asset('js/code2.js') }}" defer></script>
  @stack('js')

  @yield('scripts')
</body>
</html>
