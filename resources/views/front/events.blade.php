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
              <h3 class="title text-white">{{__("Events")}}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Events List -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-50">
             @if(config('app.locale') == 'en')
             @forelse ($events as $event)
             <div class="schedule-box maxwidth500 clearfix mb-30" data-bg-img="images/pattern/p26.png">
               <div class="col-md-5">
                 <div class="thumb">
                   <img class="img-fullwidth" alt="" height="250px" width="200px" src="{{$event->image_url}}">
                 </div>
               </div>
               <div class="col-md-7">
                 <div class="schedule-details clearfix p-15 pt-30">

                   <h3 class="title mt-0"><a href="{{route('front.event.show',$event->id)}}">{{$event->en_title}}</a></h3>
                   <ul class="list-inline text-gray">
                     <li><i class="fa fa-calendar mr-5"></i> {{$event->date}}</li>

                   </ul>
                   <div class="clearfix"></div>
                   <p class="mt-10">{{$event->en_description}}</p>
                   <div class="mt-10">
                    <a href="{{route('front.event.show',$event->id )}}" class="btn btn-default btn-theme-colored mt-10 font-16 btn-sm" href="page-donate.html">{{__("Show Event")}}</a>
                   </div>
                 </div>
               </div>
             </div>
             @empty
             <p class="text-danger">{{__("There are currently no events!")}}</p>
             @endforelse

             @else
             @forelse ($events as $event)
             <div class="schedule-box maxwidth500 clearfix mb-30" data-bg-img="images/pattern/p26.png">
               <div class="col-md-5">
                 <div class="thumb">
                   <img class="img-fullwidth" alt="" height="250px" width="200px" src="{{$event->image_url}}">
                 </div>
               </div>
               <div class="col-md-7">
                 <div class="schedule-details clearfix p-15 pt-30">

                   <h3 class="title mt-0"><a href="{{route('front.event.show',$event->id)}}">{{$event->ar_title}}</a></h3>
                   <ul class="list-inline text-gray">
                     <li><i class="fa fa-calendar mr-5"></i> {{$event->date}}</li>

                   </ul>
                   <div class="clearfix"></div>
                   <p class="mt-10">{{$event->ar_description}}</p>
                   <div class="mt-10">
                    <a href="{{route('front.event.show',$event->id )}}" class="btn btn-default btn-theme-colored mt-10 font-16 btn-sm" href="page-donate.html">{{__("Show Event")}}</a>
                   </div>
                 </div>
               </div>
             </div>

             @empty
             <p class="text-danger">{{__("There are currently no events!")}}</p>
             @endforelse

             @endif
             <div>
                {{$events->links()}}
             </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

 <x-footer/>
