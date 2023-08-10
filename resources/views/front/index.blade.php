<x-header />

<!-- Start main-content -->
<div class="main-content">

    <!-- Section: home -->
    <section id="home">
        <div class="container-fluid p-0">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider rev_slider_default" data-version="5.0">
                    <ul>
                        <!-- SLIDE 2 -->
                        <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="{{asset("images/bg/bg18.jpg")}}" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 1" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset("images/bg/bg18.jpg")}}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-6 text-white font-raleway pl-30 pr-30"
                                id="rs-2-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['middle']"
                                data-voffset="['-90']" data-fontsize="['28']" data-lineheight="['54']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px; text:center">
                                {{ __('For the poor children') }}
                            </div>

                            <!-- LAYER NR. 2 -->





                        </li>

                    </ul>
                </div>
                <!-- end .rev_slider -->
            </div>
            <!--  Revolution slider scriopt -->
            <script>
                $(document).ready(function(e) {
                    $(".rev_slider_default").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{-- title --}}</span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [700, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->
        </div>
    </section>






    <!-- Section: Causes -->
    <section id="causes" class="bg-silver-light">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="text-uppercase line-bottom-center mt-0"> <span
                                class="text-theme-colored font-weight-600">{{ __('OUR CAUSES') }}</span></h2>
                        <div class="title-icon">
                            <i class="flaticon-charity-hand-holding-a-heart"></i>
                        </div>
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati!') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                @if (config('app.locale') == 'en')
                    @forelse ($orphans as $orphan)
                        <div class="col-sm-6 col-md-4 col-lg-4 " >
                            <div class="causes bg-white maxwidth500 mb-30">
                                <div class="thumb">
                                    <img src="data:image/jpeg;base64,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" alt="" class="img-fullwidth">
                                    <div class="overlay-donate-now">
                                        <a href="{{ route('front.orphan.show', $orphan->id) }}"
                                            class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">{{__("Donate")}}
                                            <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                                    </div>
                                </div>

                                <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                                    <a
                                        href="{{ route('front.orphan.show', $orphan->id) }}">
                                    <h4 class="">{{ $orphan->en_about_his_life }}
                                    </h4></a>
                                    <p>{{ $orphan->en_reason_he_needs_bail }}</p>

                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <p>{{__("There are currently no orphans")}} </p>
                            </div>
                        </div>
                        @endforelse
                @else
                @forelse ($orphans as $orphan)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="causes bg-white maxwidth500 mb-30">
                        <div class="thumb">
                            <img src="data:image/jpeg;base64,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" alt="" class="img-fullwidth">
                            <div class="overlay-donate-now">
                                <a href="{{ route('front.orphan.show', $orphan->id) }}"
                                    class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">{{__("Donate")}}
                                    <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                            </div>
                        </div>

                        <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                            <h4 class="">{{ $orphan->ar_about_his_life }}
                                <a
                                    href="{{ route('front.orphan.show', $orphan->id) }}">
                            </h4>
                            <p>{{ $orphan->ar_reason_he_needs_bail }}</p></a>

                        </div>
                    </div>
                </div>
                @empty
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <p>{{__("لم ينم اضافة بيانات بعد")}} </p>
                            </div>
                        </div>
                        @endforelse
                @endif
            </div>
        </div>
    </section>






    <!-- Section: Our Portfolio -->
    <section id="gallery" class="">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="text-uppercase line-bottom-center mt-0"> <span
                                class="text-theme-colored font-weight-600">{{ __('Gallery') }}</span></h2>
                        <div class="title-icon">
                            <i class="flaticon-charity-hand-holding-a-heart"></i>
                        </div>
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-3 masonry gutter-10 clearfix">

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item breakfast">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset("images/portfolio/food1.jpg")}}" alt="project">
                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item breakfast special">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset("images/portfolio/food2.jpg")}}" alt="project">

                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item dinner">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset("images/portfolio/food3.jpg")}}" alt="project">

                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item breakfast">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset("images/portfolio/food4.jpg")}}" alt="project">

                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item lunch special">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset("images/portfolio/food5.jpg")}}" alt="project">

                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                        <!-- Portfolio Item Start -->
                        <div class="gallery-item lunch">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{asset("images/portfolio/food6.jpg")}}" alt="project">

                            </div>
                        </div>
                        <!-- Portfolio Item End -->

                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </section>




    <!-- Section: blog -->
    <section id="blog">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="text-uppercase line-bottom-center mt-0"> <span
                                class="text-theme-colored font-weight-600">{{ __('Events') }}</span></h2>
                        <div class="title-icon">
                            <i class="flaticon-charity-hand-holding-a-heart"></i>
                        </div>
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit1.') }}</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @forelse ($events as $event)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <article class="post clearfix mb-sm-30 bg-silver-light">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{{ $event->image_url }}" style="width=250px; height=200px;"
                                            class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content p-20 pr-10">
                                    <div class="entry-meta media mt-0 no-bg no-border">

                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a
                                                        href="{{ route('front.event.show', $event->id) }}">
                                                    @if(config('app.locale') == 'en')
                                                    {{ $event->en_title }}
                                                    @else
                                                    {{ $event->ar_title }}
                                                    @endif

                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-10">
                                        @if(config('app.locale') == 'en')
                                        {{ $event->en_description }}
                                        @else
                                        {{ $event->ar_description }}
                                        @endif
                                    </p>
                                    <p class="mt-10 text-success">
                                        {{ $event->date }}

                                    </p>
                                </div>

                            </article>
                        </div>
                    @empty
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <p>{{__("There are currently no events")}} </p>
                        </div>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </section>


    <!-- end main-content -->

    <x-footer />
