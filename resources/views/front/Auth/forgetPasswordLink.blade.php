<x-header />
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-6"
        data-bg-img="{{ asset('images/bg/bg6.jpg') }}">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="font-28 text-white">{{ __('Reset Password') }}</h2>
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
                    <h4 class="text-gray mt-0 pt-5"> {{ __('Reset Password') }}</h4>
                    <hr>
                    <form action="{{ route('reset.password.post') }}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="form_username_email">{{ __('Email') }}</label>
                                <input id="form_username_email" value="{{old('email')}}" name="email" class="form-control" type="text"
                                    required>
                                @error('email')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="form_password">{{ __('Password') }}</label>
                                <input id="form_password" name="password" class="form-control" type="password" required>
                                @error('password')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="form_password">{{ __('Password confirmation') }}</label>
                                <input id="form_password" name="password_confirmation" class="form-control" type="password" required>
                            </div>
                        </div>

                        <div class="form-group pull-right mt-10">
                            <button type="submit" class="btn btn-dark btn-sm">{{ __('Reset Password') }}</button>
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

<x-footer />
