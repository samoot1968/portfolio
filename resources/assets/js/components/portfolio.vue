<template lang="html">
  <div>
    <div class="container">
      <div class="content-section">

        <div class="content-header">
          <h1>Personal Projects</h1>
          <h3>Projects I'm building in my free time</h3>
        </div>

        <div class="row">
          <div class="content">
            <div class="col-lg-4 col-md-3 col-xs-12 col-offset-lg-12" v-for="data in portfolio">
              <div id="skill-section" class="animated bounceInLeft">
                <div class="inner-skill-section" >
                  <div class="skill-section-content" >
                    <div class="skill-section-header">
                        <h1>{{ data.name }}</h1>
                    </div>

                    <div class="skill-section-text">
                        <p>{{ data.description }}</p>
                    </div>

                    <div class="skill-section-button">
                      <a v-bind:href="data.link">CHECK IT OUT</a>
                    </div>
                  </div>
                </div><!-- End of SkillInner-section -->
              </div><!-- End of Skill-section -->
            </div><!-- End of Cols -->
          </div><!-- End of content -->
        </div><!-- End of Row -->
      </div><!-- End of content-section -->
    </div><!-- End of container -->
  </div><!-- End of myInfo -->
</template>

<script>
export default {
  data(){
    return {
      portfolio: [
        {
        name: 'Portfolio Site',
        description: 'Portfolio site to display some of my projects and to show off some of my skills. This project uses laravel as backend and bootstrap/VueJS as frontend. (Vue AJAX)',
        link: ''
      },
      {
        name: 'Ecommerce',
        description: 'Ecommerce site(beta).Uses laravel as backend. Has all main features including Shopping-cart, admin panel, categories etc. Im adding more features and design fixes soon.',
        link: ''
      },
      {
        name: 'Digitalocean API',
        description: 'Digitalocean API to create droplets. ',
        link: ''

      }
    ],
  }

  }

}
</script>

<style lang="css">
</style>
