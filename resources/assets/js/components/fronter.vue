<template>
<div>
  <navbar></navbar>
  <div class="sketch-div">
    <div id="particles-js"></div>
    <div class="sketch-div-header">
      <div class="header-center">
        <h1 id="tlt">Hi, I'm Toomas Unt.</h1>
        <h1 id="tlts">I design & build websites</h1>
      </div>
    </div>
  </div>
<div id="myInfo">
  <transition name="slide">
    <router-view></router-view>
  </transition>
</div>
</div>
</template>

<script>
import NavBar from './navigation.vue';

    export default {
      components: {
        'navbar': NavBar
      }


    }

</script>
