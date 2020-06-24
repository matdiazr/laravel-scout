<template>
  <div class="mt-2 crear-categoria">
    <h3 class="mx-2 mb-3 titulo-categoria"> Agregar Categoria:</h3>
    <form @submit.prevent="agregar">
      <input class="form-control mx-2 mb-3" type="text" placeholder="nombre" v-model="categoria.nombre">
      <button  class="btn btn-primary btn-block mx-2">Agregar</button>
    </form>

    <select name="categoria" class="custom-select custom-select-md m-2">
      <option 
      v-for="(categoria, index) in categorias" :key="index">
        {{ categoria.nombre }}
      </option>
    </select>
    
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
  }
}
</script>