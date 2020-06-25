<template>
  <div class="m-2">
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      +
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Agregar Categoria:</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="mt-2 crear-categoria">
              <form @submit.prevent="agregar">
                <input class="form-control mx-2 mb-3" type="text" placeholder="nombre" v-model="categoria.nombre">
                <button  class="btn btn-primary btn-block mx-2">Agregar</button>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      categorias: [],
      categoria: { nombre: '' }
    }
  },
  created(){
    axios.get('/admin/categoria').then(respuesta => {
      this.categorias = respuesta.data;
    })
  },
  methods: {
     agregar(){
      if(this.categoria.nombre.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const categoriaNueva = this.categoria;
      this.categoria = {nombre: ''};
          
      axios.post('/admin/categoria', categoriaNueva)
        .then((respuesta) =>{
          const notaServidor = respuesta.data;
          this.notas.push(categorias);
        })
    }
  },
}
</script>