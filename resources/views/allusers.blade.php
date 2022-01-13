



 @extends('layouts.app')

@section('content')


   <div class="container">
       <div class="row">

       <div class="jumbotron col-lg-12">
  
  <p> vinden gebruiker door name of email</p>

  
  <p>
                    <form class="form-inline"  method="GET" action="{{ route('searchuser') }}">
        <input class="form-control mr-sm-2" type="text" value="{{ isset($query) ? $query : '' }}" name="query" placeholder="Search gebruiker .." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
</p>
  


      </div>

       @if($users->count())
    @foreach($users as $user)
        <div class="col-4 profile-box border p-1 rounded text-center bg-light mr-4 mt-3 offset-lg-5">
           
            <h5 class="m-0"><b><strong>{{ $user->name }}</strong></b></h5>
           
           
        </div>
    @endforeach
@endif 


       </div>
   </div>



@endsection