<template>
    <div class="h-screen flex flex-col items-stretch bg-blue-400">
        <div class="text-white flex justify-between bg-blue-500 h-11">
            <div class="ml-2 mt-2 w-1/3 flex">
                <div class="btn bg-blue-400 hover:bg-blue-300">🏠Home</div>
                <div class="btn bg-blue-400 hover:bg-blue-300">📌Boards</div>
            </div>
            <div class="text-gray-100 font-bold mt-1 text-xl">☢️Bugtracker</div>
            <div class="mr-2 w-1/3 mt-2 flex justify-end">
                <div class="btn">x</div>
            </div>
        </div>
        <div class="h-full flex flex-1 flex-col items-stretch">
            <div class="mx-4  text-white font-bold text-lg mt-2">
                <span v-if="$apollo.queries.board.loading">Loading...</span>
                <span v-else>{{board.title}}</span>
            </div>
            <div class="flex flex-1 items-start overflow-x-auto mx-2 mt-6" v-if="board">
                <List :list="list" v-for="list in board.lists" :key="list.id"/>
            </div>
        </div>
    </div>
</template>

<script>
import List from './List.vue'
import { BoardsWithListsAndCards } from '@/grapqlqueries/queries'
export default {
    components:{
        List
    },
    
    apollo:{
        board:{
            query:BoardsWithListsAndCards,
            variables:{
            id:1
            },
        }
    }
}
</script>

<style>
    .list{
        width:250px;
    }
    .card{
        box-shadow: 0 1px 0 rgba(9,30,66,.15);
    }
</style>