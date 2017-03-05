<template lang="html">
  <div class="modal fade modal-fullscreen force-fullscreen" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="content">
              <h1>Send me a message. You can hear from me in a day.</h1>
              <div class="contactme">
                <div class="form-container">
                  <form @submit.prevent="sendMail" method="post" action="/" >

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="colums">
                            <p :class="{ 'control': true }">
                              <input v-validate="'required|min:3'" :class="{'input': true, 'is-danger': errors.has('name') }" v-model="name" name="name" type="text" placeholder="Name" class="form-control">
                              <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="colums">
                            <p :class="{ 'control': true }">
                              <input v-validate="'required|email|min:5'" :class="{'input': true, 'is-danger': errors.has('email') }" name="email" v-model="email" type="text" placeholder="Email" class="form-control">
                              <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="colums">
                            <p :class="{ 'control': true }">
                              <input v-validate="'required|numeric'" :class="{'input': true, 'is-danger': errors.has('number') }" name="number" v-model="number" type="text" placeholder="Number" class="form-control">
                              <span v-show="errors.has('number')" class="help is-danger">{{ errors.first('number') }}</span>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="colums">
                            <p :class="{ 'control': true }">
                              <input v-validate="'required|min:4'" :class="{'input': true, 'is-danger': errors.has('website') }" name="website" v-model="website" type="text" placeholder="Website" class="form-control">
                              <span v-show="errors.has('website')" class="help is-danger">{{ errors.first('website') }}</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p :class="{ 'control': true }">
                            <input rows="5" v-validate="'required|min:5|max: 250'" :class="{'input': true, 'is-danger': errors.has('letter') }" name="letter" v-model="letter" type="text" placeholder="Message" class="form-control">
                            <span v-show="errors.has('letter')" class="help is-danger">{{ errors.first('letter') }}</span>
                          </p>
                        </div>
                        <div class="mailme-button">
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
</template>

<script>

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

export default {
  data(){
    return {
        name: '',
        email: '',
        number: '',
        website: '',
        letter: ''
      }
  },

  methods:{
    sendMail:function() {
      this.$validator.validateAll().then(() => {
        axios.post('/api/send', {
          name : this.name,
          email: this.email,
          number: this.number,
          website: this.website,
          letter: this.letter
        }).then(function (response) {
            window.location.href = '/';
        }, function (response) {
          console.log('error');
        })
      }).catch(() => {
        alert('Correct Errors please');
      });
    }
  }
}
</script>

<style lang="css">
</style>
