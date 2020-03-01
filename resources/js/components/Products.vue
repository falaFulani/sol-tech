<template>
    <div class="container">
        <h3>Products</h3>
        <div
            class="card card-body"
            v-for="product in products"
            v-bind:key="product_id"
        >
            <h3>{{ product.name }}</h3>
            <p>{{ product.decsription }}</p>
            <p></p>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            products: [],
            product: {
                id: "",
                name: "",
                description: "",
                quanity: "",
                order_id: "",
                supplier_id: ""
            },
            product_id: "",
            pagination: {},
            edit: false
        };
    },
    created() {
        this.fetchProducts();
    },
    methods: {
        fetchProducts() {
            get("api/product")
                .then(res => res.json())
                .then(res => {
                    this.products = res.data;
                });
        }
    }
};
</script>
