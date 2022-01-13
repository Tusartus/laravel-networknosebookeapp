@extends('layouts.frontend')

@section('content')

        <div class="col-md-7">
          <a href="{{ route('author.post.index') }}" class="btn btn-danger waves-effect">BACK</a>
        
          <br>
          <br>
           <div class="row clearfix">
               <div class=" col-sm-12 p-4">
                   <div class="card">
                     <div class="header p-3">
                          <h2>
                            {{ $post->title }} <br>
                              <small>,Posted By <strong> <a href="">{{ $post->user->name }}</a></strong> on {{ $post->created_at->toFormattedDateString() }}</small>
                          </h2>
                    </div>
                    <div class="body p-3">
                        <h1>content: </h1>
                         <p>{!! $post->body !!}</p> 
                    </div>
             </div>
           </div>



              </div>








                   </div>
               </div>











        </div>




    </div>
</div>
@endsection

