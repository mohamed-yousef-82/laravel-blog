<template>
 <div class="container">
  <p>ffdsdsfdsfdfdsfds</p>

</template>
<script>
    export default {
        data: function () {
            return {
                categories: [],
                products: [],
                loading: true
            }
        },
        mounted() {
            this.loadCategories();
            this.loadProducts();
        },
        methods: {
            loadCategories: function () {
                axios.get('/api/categories')
                    .then((response) => {
                        this.categories = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            loadProducts: function () {
                axios.get('/api/products')
                    .then((response) => {
                        this.products = response.data.data;
                        this.loading = false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>

