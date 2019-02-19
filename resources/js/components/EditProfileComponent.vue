<template>
     <div class="card">
            <div class="card-header text-center">
                <h6 class="text-uppercase mt-4 mb-0">Update Profile</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <dl class="row">
                        
                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="Your Name" v-if="user" v-model="user.name" required></dd>
                        
                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-9"><input type="email" class="form-control" name="email" placeholder="Your Email" v-if="user" v-model="user.email" readonly></dd>
                        
                        <dt class="col-sm-3">Phone Number</dt>
                        <dd class="col-sm-9"><input type="text" class="form-control" name="phone_number" placeholder="Your Phone Number" v-if="user" v-model="user.phone_number" required></dd>
                        
                        <dt class="col-sm-3">Address</dt>
                        <dd class="col-sm-9"><textarea name="address" id="" class="form-control" cols="30" rows="10" v-if="user" v-model="user.address"></textarea></dd>
                        
                    </dl>
                    <input type="submit" class="btn btn-primary float-right" value="Update Profile" @click="handleSubmit">
                </form>
            </div>
        </div>
</template>

<<script>
    export default {
      data() {
        return {
          user: [],
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
            let name = this.user.name
            let phone_number = this.user.phone_number
            let address = this.user.address
            console.log(name, phone_number, address);
            
            const auth = {
                headers: {Authorization:'Bearer ' + localStorage.getItem('user-token')} 
            }
            let currentUser = JSON.parse(localStorage.getItem('user'));
            let user_id = currentUser['id'];

            axios.put(`/api/users/${user_id}`, {
                name, phone_number, address
            }, auth)
            .then(response => {
                console.log(response, response.status);
                this.$router.push('/dashboard');    
            })
            .catch(error => {
                console.log(error.response)
            });
        }
    }
  }
</script>