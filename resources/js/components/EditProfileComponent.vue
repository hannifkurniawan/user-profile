<template>
     <div class="card">
            <div class="card-header text-center">
                <h6 class="text-uppercase mt-4 mb-0">Update Profile</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <dl class="row">
                        
                        <dt class="col-sm-3">Name</dt>
                        <dd class="col-sm-9"><input type="text" class="form-control" name="name" placeholder="Your Name" value="Hannif Kurniawan M"></dd>
                        
                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-9"><input type="email" class="form-control" name="email" placeholder="Your Email" value="hannif.kurniawan@gmail.com" readonly></dd>
                        
                        <dt class="col-sm-3">Phone Number</dt>
                        <dd class="col-sm-9"><input type="phoneNumber" class="form-control" name="phone_number" placeholder="Your Phone Number" value="085722552569"></dd>
                        
                        <dt class="col-sm-3">Address</dt>
                        <dd class="col-sm-9"><textarea name="address" id="" class="form-control" cols="30" rows="10">Sompok Katapang</textarea></dd>
                        
                    </dl>
                    <input type="submit" class="btn btn-primary float-right" value="Update Profile">
                </form>
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