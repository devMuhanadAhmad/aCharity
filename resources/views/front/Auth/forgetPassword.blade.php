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
              <h3 class="font-28 text-white">{{__("Forgot Password")}}</h2>
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
          <div class="col-md-4 mb-40 mb-120 mt-130">
            <h4 class="text-gray mt-0 pt-5 "> {{__("Forgot Password")}}</h4>
            <hr>
            @if (\Session::has('message'))
            <div class="alert alert-success mt-1" role="alert">
                {{session('message')}}
                </div>
            @endif
            <form action="{{route('forget.password.post')}}" method="post">
                @csrf
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_username_email">{{__("Email")}}</label>
                  <input id="form_username_email" name="email" class="form-control" type="text" required>
                  @error('email')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                  @error('emailValidationException')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
              </div>

              <div class="form-group pull-right mt-10">
                <button type="submit" class="btn btn-dark btn-sm">{{__("Send Reset Link")}}</button>
              </div>

            </form>
          </div>
          <div class="col-md-7 col-md-offset-1">
            <div>
            </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<x-footer/>
