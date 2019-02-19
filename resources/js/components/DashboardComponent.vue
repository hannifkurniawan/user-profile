<template>
  <div class="card">
            <div class="card-header text-center">
                <h6 class="text-uppercase mt-4 mb-0">Dashboard</h6>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9">{{ user.name }}</dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">{{ user.email }}</dd>

                    <dt class="col-sm-3">Phone Number</dt>
                    <dd class="col-sm-9">{{ user.phone_number }}</dd>

                    <dt class="col-sm-3">Address</dt>
                    <dd class="col-sm-9">{{ user.address }}</dd>

                </dl>
            </div>
        </div>
</template>

<script>
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
        
      }
  }
</script>