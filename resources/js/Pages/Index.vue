<template>
    <div>
        <h1>Index</h1>
        <p>Index page</p>
    </div>

    <div>
        this message is belognst to {{name}}
    </div>

    <Link href="/show">Show Page</Link>
</template>


<script setup>

defineProps({
    name: {
        type: String,
    }
})


import {Link} from '@inertiajs/inertia-vue3'

</script>
