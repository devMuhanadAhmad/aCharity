<x-header/>
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="{{asset("images/bg/bg6.jpg")}}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">{{__("Login/Register")}}</h2>
              <ol class="breadcrumb text-center text-black mt-10">

              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-40">
            <h4 class="text-gray mt-0 pt-5"> {{__("Login")}}</h4>
            <hr>
            @if (\Session::has('message1'))
            <div class="alert alert-danger mt-1" style="color: red" role="alert">
                {{ session('message1') }}
            </div>
        @endif
        <form action="{{route('front.login')}}" method="POST">
            @csrf
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_username_email">{{__("Email")}}</label>
                  <input id="form_username_email" name="email" class="form-control" type="text" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_password">{{__("Password")}}</label>
                  <input  id="form_password" name="password" class="form-control" type="password" required>
                </div>
              </div>

              <div class="form-group pull-right mt-10">
                <button type="submit" class="btn btn-dark btn-sm">{{__("Login")}}</button>
              </div>
              <div class="clear text-center pt-10">
                <a class="text-theme-colored font-weight-600 font-12" href="{{route('forget.password.get')}}">{{__("Forgot Your Password?")}}</a>
              </div>

            </form>
          </div>
          <div class="col-md-7 col-md-offset-1">
            <div>
            @if (\Session::has('message'))
            <div class="alert alert-danger mt-1" style="color: red" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{route("front.register")}}" method="POST">
            @csrf
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">{{__("Don't have an Account? Register Now.")}}</h4>
              </div>
              <hr>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>{{__("Name")}}</label>
                  <input name="name" value="{{old('name')}}" class="form-control" type="text" required>
                  @error('name')
                      <small style="color: red">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label>{{__("Email Address")}}</label>
                  <input name="email"  value="{{old('email')}}"  class="form-control" type="email" required>
                  @error('email')
                      <small style="color: red">{{$message}}</small>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_choose_username"> {{__("Country")}}</label>
                  <input id="form_choose_username" name="country" value="{{old("country")}}" class="form-control" type="text" required>
                  @error('country')
                  <small style="color: red">{{$message}}</small>
              @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="form_choose_username"> {{__("Phone")}}</label>
                    <input id="form_choose_username" name="phone" value="{{old("phone")}}" class="form-control" type="tel" required>
                    @error('phone')
                    <small style="color: red">{{$message}}</small>
                @enderror
                  </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="form_choose_password"> {{__("Password")}}</label>
                  <input id="form_choose_password" name="password" class="form-control" type="password" required>
                  @error('password')
                  <small style="color: red">{{$message}}</small>
              @enderror
                </div>
                <div class="form-group col-md-6">
                  <label>{{__("Re-enter Password")}}</label>
                  <input id="form_re_enter_password" name="password_confirmation"  class="form-control" type="password" required>
                  @error('password_confirmation')
                      <small style="color: red">{{$message}}</small>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">{{__("Register")}}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<x-footer/>
