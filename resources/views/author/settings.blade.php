@extends('layouts.frontend')

@section('content')

        <div class="col-lg-7 ">



          <div class="container-fluid">
                  <div class="row clearfix">
                      <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                          <div class="card p-5" style="height="1380px;>
                              <div class="header">
                                  <h2>
                                      Profile data
                                  </h2>


 @if( $userprofile->image =='default.png')

    <img class="rounded" src="{{ asset('bloger/img/default.png')}}" width="80" height="60"  alt="Profile Image">  


@else
<div class="recent-profile-img">
                               <img src=" {{ $userprofile->image }}"  alt="user profile image">
			 </div>


 @endif
                                  

                             



                                 


                                  <hr>

                              </div>
                              <div class="body p-2">
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                      <li role="presentation" class="active ml-2 mr-3">
                                          <a href="#profile_with_icon_title" data-toggle="tab">
                                              <i class="material-icons"></i> UPDATE PROFILE
                                          </a>
                                      </li>
                                      <li role="presentation">
                                          <a href="#change_password_with_icon_title" data-toggle="tab">
                                              <i class="material-icons"></i> CHANGE PASSWORD
                                          </a>
                                      </li>

                                  </ul>

                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane fade in active" id="profile_with_icon_title">
                                          <form method="POST" action="{{ route('author.profile.update') }}" class="form-horizontal" enctype="multipart/form-data">
                                              @csrf
                                              @method('PUT')
                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="name">Name : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" value="{{ Auth::user()->name }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="name">Username : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="text" id="usename" class="form-control" placeholder="Enter your name" name="username" value="{{ Auth::user()->username }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="email_address_2">Email Address</label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address" name="email" value="{{ Auth::user()->email }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="email_address_2">Profile Image : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="file" name="image">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="email_address_2">About : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <textarea rows="5" name="about" class="form-control">{{ Auth::user()->about }}</textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>


                                              <div class="row clearfix">
                                                  <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5 ml-2">
                                                      <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                      <div role="tabpanel" class="tab-pane fade" id="change_password_with_icon_title">
                                          <form method="POST" action="{{ route('author.password.update') }}" class="form-horizontal">
                                              @csrf
                                              @method('PUT')
                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="old_password">Old Password : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="password" id="old_password" class="form-control" placeholder="Enter your old password" name="old_password">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="password">New Password : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="password" id="password" class="form-control" placeholder="Enter your new password" name="password">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row clearfix">
                                                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                      <label for="confirm_password">Confirm Password : </label>
                                                  </div>
                                                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                      <div class="form-group">
                                                          <div class="form-line">
                                                              <input type="password" id="confirm_password" class="form-control" placeholder="Enter your new password again" name="password_confirmation">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>



                                              <div class="row clearfix">
                                                  <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5 ml-2">
                                                      <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>




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
