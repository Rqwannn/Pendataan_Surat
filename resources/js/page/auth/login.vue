<template>    
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Sign In to <strong>Simail</strong></h3>
                  <p class="mb-4">Please Login first to access this as administrator.</p>
                </div>
                <form action="" method="post" @submit.prevent="handlerSubmit({name: 'Home'})">
                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="text" v-model="Username" class="form-control" id="username">
                  </div>

                  <p style="font-size: 13px;" class="text-danger" v-if="Auth">{{WrongUser}}</p>
                  
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" v-model="Password" class="form-control" id="password">
                  </div>
                  
                  <p style="font-size: 13px;" class="text-danger" v-if="Auth">{{WrongPass}}</p>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default{
        data () {
            return {
                Title : "Login | Simail",
                Username: "",
                Password: "",
                Auth: false,
                WrongUser: "",
                WrongPass: ""
            }
        },
        watch: {
            title: {
                immediate: true,
                handler() {
                    document.title = this.Title;
                }
            },
        },
        created() {
            this.$emit('header', 'Login');
        },
        methods: {
            handlerSubmit: function(URL){
                this.Auth = false
                this.WrongUser = ""
                this.WrongPass = ""

                for(let i = 1; i <= 3; i++){
                    if(this.Username.length == 0 && i == 1){
                        this.Auth = true
                        this.WrongUser = "Harap Isi Username Anda"
                    } else if(this.Password.length == 0 && i == 2) {
                        this.Auth = true
                        this.WrongPass = "Harap Isi Password Anda"
                    } else if(!this.Auth && i == 3) {
                        this.$router.push(`/${URL.name}`).catch(() => {

                        });
                    }
                }
            }
        }
    }
</script>