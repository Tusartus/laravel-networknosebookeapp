@extends('layouts.app')
@section('title')
{{ $query }}
@endsection

@push('css')
  
    <style>
        *{
            margin:0;
            padding:0;
        }

    </style>
@endpush

@section('content')








    <!-- Start fashion Area -->
    <section class="fashion-area section-gap" id="fashion">
      <div class="container">





        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">

              <h1 class="mb-10">{{ $posts->count() }} Results for {{ $query }}</h1>
            </div>
          </div>
        </div>

        <div class="row p-5">
        @forelse($posts as $post)
          <div class="col-lg-3 col-md-6 single-fashion">
            
            <p class="date"> {{ $post->created_at->diffForHumans()}}</p>
            <h4><a href="{{ route('post.details',$post->slug) }}"> {{ $post->title }}
                 </a></h4>
            <p>
              {{ str_limit( $post->body , 20) }}....
            </p>
            <div class="meta-bottom d-flex justify-content-between">
             
         <li class="nav-item"> <a class="nav-link" ><i class="fa fa-comment-o" aria-hidden="true"></i>{{ $post->comments->count() }}</a></li>
              <p><span class="lnr lnr-enter"></span>   <a  href="{{ route('post.details',$post->slug) }}"> read more</a>
              </p>
            </div>

          </div>
          @empty
              <div class="col-lg-12 col-md-12">
                  <div class="card h-100">
                      <div class="single-post post-style-1 p-2">
                         <strong>No Post Found :(</strong>
                      </div><!-- single-post -->
                  </div><!-- card -->
              </div><!-- col-lg-4 col-md-6 -->
          @endforelse




      </div>



    </section>
    <!-- End fashion Area -->








@endsection



