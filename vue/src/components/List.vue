<template>
  <div class="bg-gray-200 rounded-sm p-2 ml-2 mr-2 list">
        <div class="flex-justify-between">
            <div class="text-gray-800 pl-2 pb-2 font-bold">Title</div>
        </div>
        <Card/>
        <Card/>
        <Card/>
        <Card/>
        <AddCard/>
    </div>
</template>

<script>
import Card from './Card.vue'
import AddCard from './AddCard.vue'
export default {
    components:{
        Card,
        AddCard
    }
}
</script>

<style>

</style>