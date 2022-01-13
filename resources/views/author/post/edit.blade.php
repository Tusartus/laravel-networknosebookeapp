@extends('layouts.frontend')

@section('content')

        <div class="col-md-7">
          <form action="{{ route('author.post.update',$post->id) }}" method="POST">
               @csrf
               @method('PUT')
           <div class="row clearfix">
               <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                   <div class="card">
                       <div class="header">
                           <h2>
                               EDIT POST
                           </h2>
                       </div>
                       <div class="body p-2">
                               <div class="form-group form-float">
                                   <div class="form-line">
                                      <label class="form-label">Post Title</label>
                                       <input type="text" id="title" class="form-control" name="title"  value="{{ $post->title }}">
                                       @error('title')
		                     <span class="text-danger">{{ $message }}</span>
		                             @enderror
                                   </div>
                               </div>

                             

                       </div>
                   </div>
               </div>
             
           </div>
           <div class="row clearfix m-3">
               <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                   <div class="card p-3">
                       <div class="header">
                           <h2>
                              BODY:
                           </h2>
                       </div>
                       <div class="body">
                           <textarea id="tinymce" rows="5" cols="50" name="body">{{ $post->body }}</textarea>
                           <br>
                             @error('body')
		                     <span class="text-danger">{{ $message }}</span>
		                     @enderror
                       </div>
                   </div>
                   <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('author.post.index') }}">BACK</a>
                   <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

               </div>
           </div>
       </form>








        </div>




    </div>
</div>
@endsection

