<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
                    
                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
            data() {
            return {
                articles: {}
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getArticles();
        },
        methods: {
            getArticles(){
                axios.get('/api/articles')
                    .then(res => console.log(res))
                    .then(err => console.log(err))

            }
        }
    }
</script>
