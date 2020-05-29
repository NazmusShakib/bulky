<template>
    <div class="row">
        <div class="col-md-12">

            <h4>History vue component comes here!</h4>

        </div>
    </div>
</template>


<script>
    export default {
        data: function () {
            return {
                history: {},
            }
        },
        mounted() {
            this.getHistory();
        },
        methods: {
            getHistory() {
                let currentObj = this;
                axios.get('/history-get')
                    .then(resp => {
                        currentObj.history = resp.data;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        },
        created: function () {
            //
        },
    }
</script>
