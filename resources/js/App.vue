<template>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/register" class="nav-link">Register</router-link>
        </li>
         <li class="nav-item">
          <router-link  v-if="auth" to="/dashboard" class="nav-link">Dashboard</router-link>
        </li>
        <li class="nav-item">
          <router-link  v-if="auth" to="/users/1/edit-profile" class="nav-link">Edit Profile</router-link>
        </li>
        <li class="nav-item">
          <router-link v-if="auth"  to="/users/1/edit-password" class="nav-link">Edit Password</router-link>
        </li>
        <li class="nav-item">
          <button v-if="auth" class="nav-link" @click="logout">Logout</button>
        </li>
      </ul>
    </nav><br />
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>
  export default {
    data() {
      return {
        auth: false,
      }
    },
    created: function () {
        if (localStorage.getItem('user-token')!=null) {
          this.auth = true;
        }
    },
    updated: function () {
      if (localStorage.getItem('user-token')!=null) {
          this.auth = true;
        }else{
          this.auth = false;
        }
    },
    methods:{
      logout(e) {
        e.preventDefault()  
          const auth = {
            headers: {Authorization:'Bearer ' + localStorage.getItem('user-token')} 
          }
        axios.get('http://user-profile.local/api/logout', auth)
        .then(response => {
          localStorage.clear()
          this.$router.push('/');
        })
        .catch(error => {
          console.log(error.response);
        });
      },
    },
  }
</script>