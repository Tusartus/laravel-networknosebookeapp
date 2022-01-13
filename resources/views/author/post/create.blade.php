@extends('layouts.app')

@section('content')

        <div class="col-md-7">
          <form action="{{ route('author.post.store') }}" method="POST" >
           @csrf
           <div class="row clearfix">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 offset-lg-4">
                   <div class="card">
                       <div class="header">
                           <h2>
                              ADD NEW POST
                           </h2>
                       </div>
                       <div class="body p-2">
                               <div class="form-group form-float">
                                   <div class="form-line">
                                      <label class="form-label">Post Title</label>
                                       <input type="text" id="title" class="form-control" name="title">
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
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 offset-lg-4">
                   <div class="card p-3 mb-2">
                       <div class="header">
                           <h2>
                              BODY:
                           </h2>
                       </div>
                       <div class="body">
                           <textarea id="tinymce" rows="5" cols="30" name="body"></textarea>
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


@section('scripts')

<script src="https://cdn.tiny.cloud/1/faa0k3cbise17dmy0t4n8p96e8re043lydm41azy51vevv0k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>



<script>



   tinymce.init({
        selector:'textarea.tinymce',
        width: 900,
        height: 300
    });



</script>


@endsection


