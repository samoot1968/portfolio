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

      <mail></mail>

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
