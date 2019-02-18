<template>
  <div class="card">
            <div class="card-header text-center">
                <h6 class="text-uppercase mt-4 mb-0">Dashboard</h6>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9">hannif</dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">hannif@gmail.com</dd>

                    <dt class="col-sm-3">Phone Number</dt>
                    <dd class="col-sm-9">085722552569</dd>

                    <dt class="col-sm-3">Address</dt>
                    <dd class="col-sm-9">Sompok Katapang</dd>

                    <dt class="col-sm-3 text-truncate">Register Date</dt>
                    <dd class="col-sm-9">3 Times without this sign in</dd>
                </dl>
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