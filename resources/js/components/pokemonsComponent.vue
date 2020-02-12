<template>
    
   <div class="row">
    
       <spinner v-show="loading"></spinner>
    
    <div class="col-sm" v-for="pokemon in pokemons" v-bind:key="pokemon">
    <div class="card text-center" style="width: 18rem; margin-top:70px">
    <img style="height:100px; width:100px; background-color:beige;" class="card-img-top rounded-circle mx-auto d-block" src="images/" alts="">
        <div class="card-body">
        <h5 class="card-title">{{pokemon.name}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/trainers/" class="btn btn-primary">ver mas</a>
        </div>
      </div>
    </div>
    
    
</div>
  
    
</template>

<script>
    export default{
        data(){
            return{
                pokemons:[
                ],
                loading:true
            }
        },

        mounted(){
            axios
            .get('http://prueba.test/pokemons')
            .then((res)=>{
                this.pokemons = res.data
                this.loading = false
        })
    }
    }
</script>