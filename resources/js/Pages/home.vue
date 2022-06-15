

<template>
      <Layout :appName="appName">
            <Head title="Home" />
            <div class="text-center">

                  <h1>hello World !! InertiaJs and VueJs !!!</h1>
                  <h3>CRUD de Produtos</h3>
            </div>
      </Layout>
</template>
<script>

export default {

      props: {
            appName: String
      }
}
</script>