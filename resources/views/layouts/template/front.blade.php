@extends('layouts.app')
@section('content')
  <div id="app" class="contaner-fluid">
    <fronter></fronter>
      <transition name="fade">
        <router-view></router-view>
      </transition>
      <div class="footer">
        <div class="container">
          <div class="row">
              <p>Made my me © 2017</p>
          </div>
        </div>
      </div>
  </div>

@endsection
