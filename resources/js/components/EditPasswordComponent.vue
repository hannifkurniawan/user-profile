<template>
     <div class="card">
            <div class="card-header text-center">
                <h6 class="text-uppercase mt-4 mb-0">Update Password</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <dl class="row">
                        
                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="Your Name"  v-if="user" v-model="user.name" readonly></dd>
                        
                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-9"><input type="email" class="form-control" name="email" placeholder="Your Email" v-if="user" v-model="user.email" readonly></dd>
                        
                        <dt class="col-sm-3">Your Password</dt>
                        <dd class="col-sm-9"><input type="password" class="form-control" name="current_password" placeholder="Your Password" v-model="current_password"></dd>

                        <dt class="col-sm-3">New Password</dt>
                        <dd class="col-sm-9"><input type="password" class="form-control" name="password" placeholder="Your New Password" v-model="password"></dd>

                        <dt class="col-sm-3">New Password Confirmation</dt>
                        <dd class="col-sm-9"><input type="password" class="form-control" name="password_confirmation" placeholder="New Password Confirmation" v-model="password_confirmation"></dd>
                                                
                    </dl>
                    <input type="submit" class="btn btn-primary float-right" value="Update Password"  @click="handleSubmit">
                </form>
            </div>
        </div>
</template>

<script>
    export default {
      data() {
        return {
            user: [],
            current_password: "",
            password: "",
            password_confirmation: ""
        }
      },
      created() {
        const auth = {
            headers: {Authorization:'Bearer ' + localStorage.getItem('user-token')} 
        }
        let currentUser = JSON.parse(localStorage.getItem('user'));
        let user_id = currentUser['id'];
        
        this.axios.get(`/api/users/${user_id}`, auth)
        .then(response => {
            this.user = response.data.data;
        })
        .catch(error => {
            console.log(error.response)
        });
      },
      methods: {
        handleSubmit(e) {
            e.preventDefault()  
            let current_password = this.current_password
            let password = this.password
            let password_confirmation = this.password_confirmation
            console.log(current_password, password, password_confirmation);
            
           
            const auth = {
                headers: {Authorization:'Bearer ' + localStorage.getItem('user-token')} 
            }
            let currentUser = JSON.parse(localStorage.getItem('user'));
            let user_id = currentUser['id'];

            axios.put(`/api/users/${user_id}/update-password`, {
                current_password, password, password_confirmation
            }, auth)
            .then(response => {
                this.$router.push('/dashboard');    
            })
            .catch(error => {
                console.log('error',error.response)
            });
        }
      }
  }
</script>