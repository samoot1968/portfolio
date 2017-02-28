@extends('layouts.app')
@section('content')
  <div id="app" class="contaner-fluid">
    <fronter></fronter>
      <transition name="slide">
        <router-view></router-view>
      </transition>
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
