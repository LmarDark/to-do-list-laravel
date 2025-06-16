<script lang="ts" setup>
    import { Head } from '@inertiajs/vue3';
    import Card from '@/components/Card.vue';
</script>

<template>
    <Head :title="uri"/>
    
    <div id="main" class="flex">
        <Card :card/>
    </div>
</template>

<script lang="ts">
    let uri = window.location.pathname.replace(/^\/+/, '');

    if(uri === "/") {
        uri = "";
    }

    export default {
        props: {
            card: {
                type: Array,
                required: true
            },
        },
    }
    
</script>