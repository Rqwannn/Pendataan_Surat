<template>
    <div>
        <p>
            Tanyakan pertanyaan iya/tidak:
            <input v-model="question">
        </p>
        <p>{{ answer }}</p>
    </div>
</template>

<script>
    export default{
        data () {
            return {
                question: '',
                answer: 'Saya tidak dapat memberikan jawaban sampai anda bertanya kepada saya!',
                Title : "Home"
            }
        },
        watch: {
            title: {
                immediate: true,
                handler() {
                    document.title = this.Title;
                }
            },
            question: function (newQuestion, oldQuestion) {
                this.answer = 'Waiting for you to stop typing...'
                this.GetAnswer()
            }
        },
        created: function () {
            this.GetAnswer = _.debounce(this.getAnswer, 500)
        },
        methods: {
            getAnswer:  function () {
            if (this.question.indexOf('?') === -1) {
                this.answer = 'Pertanyaan biasanya berisi tanda tanya. ;-)'
                return
            }
            this.answer = 'Berfikir...'
            var vm = this
            axios.get('https://yesno.wtf/api')
                .then(function (response) {
                vm.answer = _.capitalize(response.data.answer)
                })
                .catch(function (error) {
                vm.answer = 'Error! Tidak dapat meraih API. ' + error
                })
            },
        }
    }
</script>
