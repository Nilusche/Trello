<template>
  <div class="bg-gray-200 rounded-sm p-2 ml-2 mr-2 list">
        <div class="flex-justify-between">
        <input class="mb-4 w-full  transition text-gray-800 hover:cursor-pointer pl-2 pb-2 rounded-sm font-bold focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-500 focus:bg-white bg-gray-200"
             :value="list.title"/>
        </div>
        <Card v-for="card in list.cards" :key="card.id" :card="card"/>
        <AddCard/>
    </div>
</template>

<script>
import Card from './Card.vue'
import AddCard from './AddCard.vue'
export default {
    props:['list'],
    components:{
        Card,
        AddCard
    }
}
</script>

<style>

</style>