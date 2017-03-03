@extends('layouts.app')
@section('content')
  <div id="app" class="contaner-fluid">
    <fronter></fronter>
      <div id="contact">
        <div class="container">
          <div class="content-section">

            <div class="content-header">
              <h1>Contact Me</h1>
              <h3>Send me an Email if you want to hire me</h3>
            </div>
            <div class="mailme-button">
              <button data-toggle="modal" data-target="#emailModal">Write A Letter</button>
            </div>
          </div><!-- End of content-section -->
        </div><!-- End of container -->
      </div><!-- End of myInfo -->


      <div class="modal fade modal-fullscreen force-fullscreen" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="content">
                  <h1>Tell me about yourself</h1>
                  <div class="contactme">
                    <div class="form-container">
                      <form  action="{{ route('contact.me')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="colums">
                                <input  class="form-control" type="text" name="name" placeholder="Name *">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="colums">
                                <input  class="form-control" type="text" name="email" placeholder="Email Address*">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="colums">
                                <input  class="form-control" type="text" name="number" placeholder="Phone Number *">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="colums">
                                <input class="form-control" type="text" name="website" placeholder="Website">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <textarea  class="form-control" rows="5" name="letter" placeholder="Tell me about yourself.*"></textarea>
                            </div>
                            <div class="skill-section-button">
                              <button type="submit">Let it Fly</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div><!-- End of content -->
              </div><!-- End of Row -->
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<!-- modal -->
      <div class="footer">
        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <p>Made my me © 2017</p>
              </div>
          </div>
        </div>
      </div>
  </div>

@endsection
