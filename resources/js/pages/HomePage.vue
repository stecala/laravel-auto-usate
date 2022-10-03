<template>
    <main>
        <div class="card" v-for="car in cars" :key="car.id">
            {{ car.car_name }}
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