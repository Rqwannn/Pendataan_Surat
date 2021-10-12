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
                    <input type="text" v-model="Form.username" class="form-control" id="username">
                  </div>

                  <p style="font-size: 13px;" class="text-danger" v-if="Auth">{{WrongUser}}</p>
                  
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" v-model="Form.password" class="form-control" id="password">
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
                Form: {
                  username: "",
                  password: ""
                },
                Auth: false,
                WrongUser: "",
                WrongPass: "",
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
                this.Massage = ""

                for(let i = 1; i <= 3; i++){
                    if(this.Form.username.length == 0 && i == 1){
                        this.Auth = true
                        this.WrongUser = "Username Must Be Added"
                    } else if(this.Form.password.length == 0 && i == 2) {
                        this.Auth = true
                        this.WrongPass = "Password Must Be Added"
                    } else if(!this.Auth && i == 3) {

                        let config = {
                              headers: {
                                "Accept": "application/json",
                              }
                            }


                        axios.post('/api/login', this.Form, config).then((response) => {
                          if(response.data.status){

                            const Time = new Date().getTime();
                            const tzoffset = new Date().getTimezoneOffset() * 60000;
                            const Tomorrow = new Date(Time + 24 * 60 * 60 * 1000 - tzoffset).getTime();
                            const data = {
                              id_user: response.data.data.id_user,
                              name: response.data.data.name,
                              username: response.data.data.username,
                              status: response.data.status,
                              token: response.data.token,
                              role: response.data.data.role,
                              waktu: Tomorrow
                            }
                            localStorage.setItem('Authentication', JSON.stringify(data));

                            this.$router.push(`/${URL.name}`).catch(() => {

                            });
                            
                          } else {
                            Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: `${response.data.message}`,
                            })
                          }
                        }).catch((error) => {
                          console.log(error);
                            // if(error.response.status == '403'){
                            //     this.errors = error.response.data.pesan
                            // }
                        })
                    }
                }
            }
        }
    }
</script>