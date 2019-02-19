<template>
  <div class="row justify-content-center">
     <div class="card card-login">
            <div class="card-header text-center">
                <img src="https://via.placeholder.com/112x112?text=BRAND+LOGO" class="rounded-circle" alt="">
                <h6 class="text-uppercase mt-4 mb-0">Register</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" v-model="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email" v-model="email">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="phone_nummber" placeholder="Your Phone Number" v-model="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password"  placeholder="Your Password" v-model="password">
                    </div>
                    <div class="form-group">
                        <label for="">Password Confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation"  placeholder="Your Password" v-model="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link" href="/">Log In</a>
                        <input type="submit" class="btn btn-primary" value="Register" @click="handleSubmit">
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
                    name: "",
                    email: "",
                    phone_number: "",
                    password: "",
                    password_confirmation: ""
                }
            },
            methods: {
                
                handleSubmit(e) {
                    e.preventDefault()
                    
                    let name = this.name
                    let email = this.email
                    let phone_number = this.phone_number
                    let password = this.password
                    let password_confirmation = this.password_confirmation

                    axios.post('api/register', {
                        name, email, phone_number, password, password_confirmation
                        })
                    .then(response => {
                        console.log(response, response.status);
                        this.$router.push('home');    
                    })
                    .catch(error => {
                        console.log(error.response)
                    });
                }
            }
        }
</script>