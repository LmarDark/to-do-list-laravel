<script lang="ts" setup>
    import { Head } from '@inertiajs/vue3';
    import Card from '@/components/Card.vue';


</script>

<template>
    <Head :title="uri"/>

    <div id="main" class="flex">
        <Card :title :text/>
    </div>

</template>

<script lang="ts">
    let uri = window.location.pathname;

    if(uri === "/") {
        uri = "";
    }

    export default {
        props: {
            title: {
                type: String
            },

            text: {
                type: String
            },
        }
    }
</script>