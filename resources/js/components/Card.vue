<template>
    <div id="card" class="m-4 border border-3 rounded-lg">
        <div id="card-body" class="m-4">
            <div id="card-title" class="text-3xl">{{ title }}</div>
            <!--<div id="card-tools"></div>-->
            <hr>
            <div id="card-box" class="ms-2 my-2">
                <div id="card-checkbox" class="flex items-center">
                    <input class="w-4 h-4" type="checkbox">
                    <label class="ms-2 text-sm font-medium">{{ text }}</label>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
    export default {
        props: {
            title: {
                type: String
            },

            text: {
                type: String
            }, 

            checklist : {
                type: Array
            }
        }
    }
</script>