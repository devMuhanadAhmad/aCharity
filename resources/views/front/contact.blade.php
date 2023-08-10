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
              <h3 class="title text-white">{{__("Contact Us")}}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Section: Contact -->
    <section id="contact" data-bg-img="images/pattern/p4.png">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">{{__("Contact Us")}}</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">

              <!-- Contact Form -->
              <form class="contact-form-transparent" id="contact_form" action="https://kodesolution.com/html/2017/fundpro-html/demo/includes/sendmail.php" name="contact-form" method="post">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input id="form_name" name="form_name" class="form-control" type="text" placeholder="{{__("Enter Name")}}" required="">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="{{__("Enter Phone")}}" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="{{__("Enter Email")}}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="{{__("Enter Subject")}}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="{{__("Enter Message")}}"></textarea>
                </div>
                <div id="contact-form-result" class="alert alert-success" role="alert" style="display: none;">
                </div>
                <div class="form-group text-center mb-0">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-theme-colored pl-30 pr-30" type="submit">{{__("Send your message")}}</button>
                </div>
              </form>
              <!-- Contact Form Validation-->
              <script type="text/javascript">
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <x-footer/>
