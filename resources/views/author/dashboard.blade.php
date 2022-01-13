@extends('layouts.frontend')

@section('content')




   <!-- right side in all user   -->
        <div class="col-lg-7">
            <div class="card ">
               

              

              
                <!-- Task Info -->
                     <div class="col-md-5 col-sm-10 offset-md-2">
                         <div class=" p-3">
                             <div class="header p-3">
                                 
                             </div>
                             <div class="body">
                                
                             </div>
                         </div>
                     </div>
                     <!-- #END# Task Info -->


                            <!-- Task Info -->
                            <div class="col-md-5 col-sm-10 offset-md-2">
                         <div class=" p-3">
                             <div class="header p-3">
                                 <h2>All posts</h2>
                                 <ul>
                                 <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.index') }}"> all posts</a>
                                  </li>


                                 </ul>
                            
                             </div>
                             <div class="body">
                                 
                             </div>
                         </div>
                     </div>
                     <!-- #END# Task Info -->

                            <!-- Task Info -->
                            <div class="col-md-5 col-sm-10 offset-md-2">
                         <div class=" p-3">
                             <div class="header p-3">
                                
                             </div>
                             <div class="body">
                              
                             </div>
                         </div>
                     </div>
                     <!-- #END# Task Info -->



            </div>

        </div>





</article>
</main>

@endsection

