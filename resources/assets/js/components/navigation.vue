<template lang="html">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>




          </div><!-- End of navbar-header -->

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">

                <li><router-link to="/" >My Skills</router-link></li>
                <li><router-link to="/portfolio">Portfolio</router-link></li>
                <li><router-link to="/contact">Contact</router-link></li>
              </ul>
          </div><!-- End of Collapse navbar-collapse -->
      </div><!-- End of Container -->
  </nav>

</template>

<script>
export default {
  data(){
    return{
      url: '/'
    }
  },


  }

</script>

<style lang="css">
</style>
