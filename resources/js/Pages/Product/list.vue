
<template>
      <Layout :appName="appName">
            <Head :title="appName + ' -- Products List'" />
            <div class="row">

                  <h1 class="mt-3 col-md-9">All Products</h1>
                  <div class="col-md-3 d-flex align-items-end">
                        <Link class="btn btn-outline-success" type="button" as="button" :href="routes.create">
                              <i class="bi bi-plus-circle"></i> Create
                        </Link>
                  </div>
            </div>
            <Alert :flashSession="$page.props.flash"></Alert>
            <table v-if="products.length" class="table mt-4">
                  <thead class="thead-light">
                        <tr>
                              <th scope="col">Titulo</th>
                              <th scope="col">Descrição</th>
                              <th scope="col">Preço</th>
                              <th scope="col">Ações</th>

                        </tr>
                  </thead>

                  <tbody>

                        <tr v-for="(product, index) in products" :key="index">
                              <td>{{product.title}}</td>
                              <td>{{product.description}}</td>
                              <td>{{product.price}}</td>
                              <td>

                                    <div class="btn-group">
                                          <Link :id="'edit-button_'+product.id"
                                                type="button" as="button"
                                                class="btn btn-outline-primary"
                                                :href="routes.edit+ product.id"
                                          >
                                                <i class="bi bi-pencil-square"></i>
                                          </Link>
                                          <button :id="'delete-button_'+product.id" type="button"
                                                class="btn btn-outline-danger"
                                                data-bs-toggle="modal" :data-bs-target="'#deleteItemModal_'+product.id"
                                          >
                                                <i class="bi bi-trash3-fill"></i>
                                          </button>
                                    </div>
                              </td>

                              <!-- {{-- ------------------------ MODAL ------------------------- --}} -->
                              <!-- {{-- ------------------------ MODAL ------------------------- --}} -->
                              <div class="modal fade" :id="'deleteItemModal_'+product.id"
                                    tabIndex="-1" role="dialog" aria-hidden="true"
                              >
                                    <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 600px">
                                          <div class="modal-content">

                                                <div style="background: #b54c4c" class="modal-header">

                                                      <h4 class="modal-title" id="modalLongTitle">Excluindo o Produto: <strong>{{product.title}}</strong></h4>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                      <h2 class="text-center">Tem certeza que deseja excluir este Produto?</h2>
                                                </div>
                                                <div class="modal-footer">

                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                                      <Link
                                                            type="button" as="button"
                                                            :href="routes.delete+ product.id"
                                                            class="btn btn-danger"
                                                            data-bs-dismiss="modal"
                                                      >Sim</Link>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </tr>
                  </tbody>
            </table>
            <h3 class="text-center mt-5" v-else>Nenhum Produto por enquanto. Crie um novo <Link :href="routes.create">Aqui</Link>.</h3>
      </Layout>
</template>
<script>
import AlertVue from '../../components/alert.vue';
export default {
    props: {
        routes: Object,
        products: Array,
        appName: String,
    },
    components: { AlertVue }
}
</script>

