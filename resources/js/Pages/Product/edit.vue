

<template>
      <Layout :appName="appName">
            <Head :title="appName+' -- Edit Product'" />

            <h1>Editando Produto</h1>

            <form @submit.prevent="form.post(formRoute)">

                  <div>

                        <Alert :flashSession="$page.props.flash"></Alert>
                        <div v-if="Object.keys(errors).length" id="error-card" class="alert alert-danger row">

                              <div class="col-md-11">
                                    <ul>
                                          <li v-for="(error, index) in errors" :key="index"> {{ error }} </li>
                                    </ul>
                              </div>
                              <div class="col-md-1">

                                    <button type="button" data-bs-target="#error-card" class="btn-close mt-1"
                                          aria-label="close" id="hide-error" data-bs-dismiss="alert"
                                    ></button>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-6">

                              <input required
                                    v-model="form.title"
                                    class="m-4 form-control" placeholder="title"
                                    name="title" type="text"
                              >
                        </div>
                        <div class="col-md-6">

                              <input required
                                    v-model="form.price"
                                    class="m-4 form-control" placeholder="price"
                                    name="price" type="number"
                              >
                        </div>
                  </div>
                  <input
                        v-model="form.description"
                        class="m-4 form-control" placeholder="description"
                        name="description" type="text"
                  >
                  <div class="text-end">
                        <button class="btn btn-success" type="submit">Edit</button>
                  </div>
            </form>
      </Layout>
</template>
<script>
export default {

      props: {

            appName: String,
            product: Object,
            errors: Object,
            formRoute: String,
      },

      data () {
            return {
                  form: this.$inertia.form({
                        title: this.product.title,
                        price: this.product.price,
                        description: this.product.description,
                  })
            }
      },
}
</script>