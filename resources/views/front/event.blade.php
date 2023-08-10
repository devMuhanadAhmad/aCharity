<x-header/>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset("images/bg/bg1.jpg")}}">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row">
            <div class="col-md-12">
                <h3 class="title text-white">{{__("Event")}}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Section: Contact -->
    <section id="contact" data-bg-img="{{asset("images/pattern/p4.png")}}")}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">

          </div>
        </div>
      @if (config("app.locale") == 'en')
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <h2 class="text-theme-colored">{{$event->en_title}}</h2>
              <div class="owl-carousel-1col" >
                <div>
                  <img src="{{$event->image_url}}" alt="" width="300px" height="500px">
                </div>

              </div>
            </div>



          </div>
          <div class="row mt-60">
            <div class="col-md-6">
              <h3 class="mt-0 text-theme-colored">{{__("Event Description")}}</h3>
              <p>{{$event->en_description}}</p>
            </div>
            <div class="col-md-6">
              <blockquote class="bg-theme-colored">
                <p class="text-white">{{$event->en_title}}</p>
                <footer>{{__("Created At")}}<cite title="Source Title">{{$event->date}}</cite></footer>
              </blockquote>
            </div>
          </div>


        </div>
      </section>
      @else

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <h2 class="text-theme-colored">{{$event->ar_title}}</h2>
              <div  >
                <div class="col-md-12">
                  <img src="{{$event->image_url}}" alt="" width="" height="500px">
                </div>

              </div>
            </div>



          </div>
          <div class="row mt-60">
            <div class="col-md-6">
              <h3 class="mt-0 text-theme-colored">{{__("Event Description")}}</h3>
              <p>{{$event->ar_description}}</p>
            </div>
            <div class="col-md-6">
              <blockquote class="bg-theme-colored">
                <p class="text-white">{{$event->ar_title}}</p>
                <footer>{{__("Created At")}}<cite title="Source Title">{{$event->date}}</cite></footer>
              </blockquote>
            </div>
          </div>


        </div>
      </section>
      @endif

      </div>
    </section>
  </div>
  <!-- end main-content -->

  <x-footer/>
