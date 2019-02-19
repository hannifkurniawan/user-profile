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
          <router-link to="/dashboard" class="nav-link">Dashboard</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/users/1/edit-profile" class="nav-link">Edit Profile</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/users/1/edit-password" class="nav-link">Edit Password</router-link>
        </li>
        <li class="nav-item">
          <router-link to="#" class="nav-link">Logout</router-link>
        </li>
        <!-- <li v-if="$auth.check()" class="pull-right">
                        <a href="#" @click.prevent="$auth.logout()">Logout</a>
        </li> -->
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

    export default{
    }
</script>