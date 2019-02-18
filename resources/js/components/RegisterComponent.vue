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
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="phone_nummber" placeholder="Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password"  placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <label for="">Password Confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation"  placeholder="Your Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-link" href="/">Log In</a>
                        <input type="submit" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>