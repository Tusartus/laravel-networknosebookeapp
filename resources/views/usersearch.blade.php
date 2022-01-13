@extends('layouts.app')


@section('content')
<script src="{{ asset('js/custom.js') }}" defer></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">user Profiele:</div>


                <div class="card-body">
                    <div class="row pl-5">
                       





     @forelse($users as $user)
                 




          <div class="col-lg-9 col-md-6 card p-4">

          <p> 
          <img src=" {{ $user->image }}"  alt="geen gebruiker profiel image">
          </p>
            
          <p> Email: 
              {{$user->email  }}
        </p>
            
             
         <p class="item-te"> Name: 
             
         {{ $user->name }}</p>
         <p class="item-te"> Username: 
             
             {{ $user->username }}</p>
             
            

          </div>
          @empty
              <div class="col-lg-12 col-md-12">
                  <div class="card h-100">
                      <div class="single-post post-style-1 p-2">
                         <strong> geen gebruiker gevonden :(</strong>
                      </div>
                  </div><!-- card -->
              </div><!-- col-lg-4 col-md-6 -->
          @endforelse



                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection