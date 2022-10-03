<template>
    <main>
        <div class="container-lg border my-3" v-for="car in cars" :key="car.id" >
            {{ car.car_name }}<br>
            {{ car.car_model }}
        </div>
    </main>
</template>

<script>
import axios from 'axios'
export default {
    data:function(){
        return{
            cars : [],
        }
    },
    methods: {
        //! creo funzione apicall
        callFunction(){
           axios.get('/api/Cars').then((response)=>{
                console.log(response.data.results)
               this.cars=response.data.results.data;
           }).catch((error)=>{
               console.log(error)
           })

        }

    },
    created(){
        this.callFunction()
    }
}
</script>

<style>

</style>