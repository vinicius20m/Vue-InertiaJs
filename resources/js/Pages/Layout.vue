

<template>
      <div>
            <header>
                  <nav style="justify-content: center" class="navbar navbar-dark bg-dark">

                        <Link class="navbar-brand h1" href="/home">{{appName}}</Link>
                        <Link class="navLink" href="/products"> Lista de Produtos</Link>
                  </nav>
            </header>

            <section class="container">
                  <slot />
            </section>
      </div>
</template>
<script>

export default {
      props: {
            appName: String,
      }
}
</script>
<style>

</style>