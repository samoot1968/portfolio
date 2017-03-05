<template lang="html">
  <div>
    <div class="container">
      <div class="content-section">

        <div class="content-header">
          <h1>My Expertise</h1>
          <h3>I consider myself (slightly) above junior web developer</h3>
        </div>

        <div class="row">
          <div class="content">
            <div class="col-lg-4 col-md-3 col-xs-12 col-offset-lg-12" v-for="info in data">
                <div id="skill-section" class="animated bounceInLeft">
                  <div class="inner-skill-section" >
                    <div class="skill-section-icon">
                      <i v-bind:class="info.class" aria-hidden="true"></i>
                    </div>

                    <div class="skill-section-content" >
                      <div class="skill-section-header">
                          <h1>{{ info.sectionHeader }}</h1>
                      </div>

                      <div class="skill-section-rating">
                        <select v-bind:id="info.ids" name="rating" autocomplete="off" v-model="info.selected">
                          <option v-for="option in info.options" v-bind:value="option.value">
                            {{ option.text }}
                          </option>
                        </select>
                      </div>

                      <div class="skill-section-text">
                          <p>{{ info.sectionText }}</p>
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
      data: [
        {
          sectionHeader: 'Code',
          ids: 'code',
          class: 'fa fa-code',
          selected: 'good',
          options: [
            { text: 'Bad', value: 'bad'},
            { text: 'Average', value: 'Average'},
            { text: 'Good', value: 'good'},
            { text: 'Awesome', value: 'awesome'}
          ],
          sectionText: "When writing server-side code, I use PHP as main language. Ordinarily I follow OOP principles and use LARAVEL framework as backend. I have experience in *sqli databases."
        },
        {
          sectionHeader: 'UX/UI',
          ids: 'design',
          class: 'fa fa-desktop',
          selected: 'Average',
          options: [
            { text: 'Bad', value: 'bad'},
            { text: 'Average', value: 'Average'},
            { text: 'Good', value: 'good'},
            { text: 'Awesome', value: 'awesome'}
          ],
          sectionText: "For front-end I use CSS(3), HTML(5) and a touch of JS. I don't like to invent a wheel over-and-over again so I use Bootstrap. When writing JS I use Vue as framework."
        },
        {
          sectionHeader: 'Server',
          ids: 'server',
          class: 'fa fa-server',
          selected: 'Average',
          options: [
            { text: 'Bad', value: 'bad'},
            { text: 'Average', value: 'Average'},
            { text: 'Good', value: 'good'},
            { text: 'Awesome', value: 'awesome'}
          ],
          sectionText: "I don't have work experience as server administrator but i know basic (linux) commands and know basic web server(apache, ngix) structural layout .For personal use I use ubuntu server(16.*) on daily basis and have experience in setting up domains."
        }
      ]
    }
  },
  mounted(){
    this.$nextTick(function(){
      $(function() {
         $('#code').barrating({
           theme: 'bars-movie',
           readonly: true
         });
      });

      $(function() {
         $('#design').barrating({
           theme: 'bars-movie',
           readonly: true
         });
      });

      $(function() {
         $('#server').barrating({
           theme: 'bars-movie',
           readonly: true
         });
      });
    })
  }
}
</script>

<style lang="css">
</style>
