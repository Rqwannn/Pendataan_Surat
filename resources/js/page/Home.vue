<template>
    <div>

    </div>
</template>

<script>
    export default{
        data () {
            return {
                Title : "Home",
                DataSurat : []
            }
        },
        watch: {
            title: {
                immediate: true,
                handler() {
                    document.title = this.Title;
                }
            },
        },
        created() {
            this.$emit('header', 'Dashbord');
        },
        methods: {
        }
    }
</script>
