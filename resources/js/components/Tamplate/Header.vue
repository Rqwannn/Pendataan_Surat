<template>
    <div v-if="status == 'Login'">
    </div>
    <div v-else>
        <h1 class="text-center">Header</h1>
    </div>
</template>

<script>
    export default{
        props: ['status'],
    }
</script>