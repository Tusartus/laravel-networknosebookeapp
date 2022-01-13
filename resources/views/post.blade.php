@extends('layouts.app')
@section('title')
nosebooke
@endsection

@push('css')
   
    <style>
      *{
          margin: o;
          padding: o;
      }

    </style>
@endpush

@section('content')



   
  <hr class="bg-info w-100">





      <!-- Start post Area -->
         <div class="post-wrapper pt-100">
             <!-- Start post Area -->
             <section class="post-area">
                 <div class="container">
                     <div class="row justify-content-center p-5">

                         <div class="col-lg-8 p-3">

                           


                             <div class="single-page-post">
                                 
                                 <div class="top-wrapper ">
                                     <div class="row d-flex justify-content-between">
                                         <h2 class="col-lg-8 col-md-12 text-uppercase">
                                             {{ $post->title }}
                                         </h2>
                                         <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                             <div class="desc">
                                                <h2>by {{ $post->user->name }}</h2>
                                                 <h3>on:  {{ $post->created_at-> format('d/m/y H:i') }}</h3>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                                 
                                 <div class="single-post-content">


                                     <blockquote> {{ ($post->body) }}
                                     <cite class="text-info">by {{ $post->user->name }}</cite></blockquote>


                                 </div>

                                 <div class="bottom-wrapper">
                                     <div class="row">
                                       <div class="col-lg-4 single-b-wrap col-md-12">
                                             
                                           like
                                         </div>
                                         
                                         <div class="col-lg-4 single-b-wrap col-md-12">
                                             <i class="fa fa-comment-o" aria-hidden="true"></i>  {{ $post->comments->count() }} comments
                                         </div>
                                         <div class="col-lg-4 single-b-wrap col-md-12">


                                         </div>
                                     </div>
                                 </div>



                                 <!-- Start comment-sec Area -->
                                 <section class="comment-sec-area pt-80 pb-80">
                                     <div class="container">
                                         <div class="row flex-column">
                                            

                                     
                                             <br>

                                             @if($post->comments->count() > 0)
                                                 @foreach($post->comments as $comment)
                                             <div class="comment-list">
                                                 <div class="single-comment justify-content-between d-flex">
                                                     <div class="user justify-content-between d-flex">
                                                         <div class="thumb">
                                                         @if('Auth::user()->image == default.png ' )

                                                         <img src="{{ asset('bloger/img/default.png')}}" width="50" height="50" class="rounded" alt="Cinque Terre">
                                                             
                                                             @else
                                                                

                                                            <img class="rounded" src=" {{ $userprofile->image }}" width="40" height="50"  alt="Profile Image">      
                                                          
                                                             @endif
                                                         </div>
                                                         <div class="desc">
                                                             <h5><a href="#"> {{ $comment->user->name }}</a></h5>
                                                             <p class="date"> {{ $comment->created_at->diffForHumans()}}</p>
                                                             <p class="comment">
                                                                 {{ $comment->comment }}
                                                             </p>
                                                         </div>
                                                     </div>

                                                 </div>
                                             </div>
                                             @endforeach
                                         @else

                                         <div class="commnets-area  single-comment">

                                             <div class="comment">
                                                 <p>No Comment yet. Be the first :)</p>
                                         </div>
                                         </div>

                                         @endif









                                     </div>
                                 </section>
                                 <!-- End comment-sec Area -->

                                 <!-- Start commentform Area -->
                                 <section class="commentform-area  pb-120 pt-80 mb-100">
                                     <div class="container">
                                         <h5 class="text-uppercas pb-50"> add comment: </h5>
                                    
                                         @guest
                                   <span>For post a new comment. You need to login first. <a class="bt" href="{{ route('login') }}">Login</a></span>
                                         @else
                                   <form method="post" action="{{ route('comment.store',$post->id) }}">
                                       @csrf

                                            <div class="row flex-row d-flex">


                                             <div class="col-lg-6">
                                                 <textarea class="form-control mb-10"name="comment" rows="4" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>

                                                   <button class="submit-btn btn btn-info mt-20 m-2" type="submit" id="form-submit"><b>POST COMMENT</b></button>
                                             </div>
                                         </div>
                                       </form>
                                        @endguest


                                   


                                     </div>
                                 </section>
                                 <!-- End commentform Area -->

                             </div>
                         </div>
                         <div class="col-lg-4 sidebar-area ">



                           

                             <div class="single_widget recent_widget">
                                 <h4 class="text-uppercase pb-20">Recent Posts</h4>
                                 <div class="active-recent-carusel">

                                          @foreach($randomposts as $randompost)
                                     <div class="itema">
                                        
                                         <p class="mt-2  text-uppercase">
                                           <a href="{{ route('post.details',$randompost->slug) }}"><b class="display-5">{{ $randompost->title }}</b></a><br>
                                         </p>

                                          
                                     </div>
                                   <hr>
                                         @endforeach





                                 </div>
                             </div>


                        
                         </div>
                     </div>
                 </div>
             </section>
             <!-- End post Area -->
         </div>
         <!-- End post Area -->


         @endsection

         @push('js')

  

         @endpush
