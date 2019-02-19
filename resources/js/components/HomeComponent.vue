<template>
  <div class="row justify-content-center">
     <div class="card card-login">
            <div class="card-header text-center">
                <img src="https://via.placeholder.com/112x112?text=BRAND+LOGO" class="rounded-circle" alt="">
                <h6 class="text-uppercase mt-4 mb-0">Login</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" v-model="password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link" href="/register">Register</a>
                        <input type="submit" class="btn btn-primary" value="Sign In" @click="handleSubmit">
                    </div>
                </form>
            </div>
        </div>
  </div>
</template>

<script>
    export default {
            data() {
                return {
                    email: "",
                    password: ""
                }
            },
            methods: {
                
                handleSubmit(e) {
                    e.preventDefault()
                    
                    let email = this.email
                    let password = this.password

                    axios.post('api/login', {
                        email, password
                    })
                    .then(response => {
                        localStorage.setItem('user-token', response.data.data['token'])
                        
                        let $user = JSON.stringify(response.data.data['user']);
                        
                        localStorage.setItem('user', $user)
                        
                        this.$router.push('dashboard');    
                    })
                    .catch(error => {
                        console.log(error.response)
                    });;
                }
            }
        }
</script>