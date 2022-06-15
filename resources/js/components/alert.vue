<template>
      <div class="alert-div mt-4">

            <div v-if="flashSession.success" id="success-card" class="alert alert-success row">

                  <div class="col-md-11 text-center">
                        {{ flashSession.message }}
                  </div>
                  <div class="col-md-1">
                        <button type="button" data-bs-target="#success-card" class="btn-close mt-1"
                              aria-label="close" id="hide-success" data-bs-dismiss="alert"
                        ></button>
                  </div>
            </div>

            <div v-else-if="flashSession.error" id="error-card" class="alert alert-danger row">

                  <div class="col-md-11 text-center">

                        {{ flashSession.message }}
                  </div>
                  <div class="col-md-1">

                        <button type="button" data-bs-target="#success-card" class="btn-close mt-1"
                              aria-label="close" id="hide-success" data-bs-dismiss="alert"
                        ></button>
                  </div>
            </div>
      </div>
</template>
<script>
export default {
      name: 'Alert',
      props: {
            flashSession: Object,
      }
}
</script>