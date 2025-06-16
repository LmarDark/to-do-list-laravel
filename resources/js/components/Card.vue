<template>
    <div id="card" class="m-4 border border-3 rounded-lg">
        <div id="card-body" class="m-4">
            <div id="card-title" class="text-3xl m-6">{{ card.title }}</div>
            <!--<div id="card-tools"></div>-->
            <hr>
            <div id="card-box" class="ms-2 my-6">
                <div id="card-checkbox" class="flex items-center" v-for="(item, index) in card.description" :key="index">
                    <input class="w-4 h-4" type="checkbox">
                    <label class="ms-2 text-sm font-medium">{{ item }}</label>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
    export default {
        props: {
            card: {
                type: Array
            },
        }
    }
</script>