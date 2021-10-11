<template>
    <div>

    </div>
</template>

<script>
    export default{
        data () {
            return {
                Title : "Home | Simail",
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
    }
</script>
