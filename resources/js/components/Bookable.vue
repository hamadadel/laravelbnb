<template>
    <div>
        <h2>{{ name }}</h2>
        <p v-if="isLoading">Loading.....</p>
        <div v-else>
            <BookableItem
                v-for="bookable in bookables"
                :title="bookable.title"
                :content="bookable.content"
                :price="bookable.price"
            />
        </div>
    </div>
</template>
<script>
import BookableItem from "./BookableItem.vue";

export default {
    created() {
        setTimeout(() => {
            this.bookables = [
                {
                    title: "unique villa",
                    content: "very cheap and unique villa",
                    price: 1000,
                },
                {
                    title: "elite apartment",
                    content: "this apartment has a wonderful view",
                    price: 1500,
                },
                {
                    title: "unique villa",
                    content: "very cheap and unique villa",
                    price: 1000,
                },
                {
                    title: "elite apartment",
                    content: "this apartment has a wonderful view",
                    price: 1500,
                },
                {
                    title: "unique villa",
                    content: "very cheap and unique villa",
                    price: 1000,
                },
                {
                    title: "elite apartment",
                    content: "this apartment has a wonderful view",
                    price: 1500,
                },
                {
                    title: "unique villa",
                    content: "very cheap and unique villa",
                    price: 1000,
                },
                {
                    title: "elite apartment",
                    content: "this apartment has a wonderful view",
                    price: 1500,
                },
                {
                    title: "unique villa",
                    content: "very cheap and unique villa",
                    price: 1000,
                },
                {
                    title: "elite apartment",
                    content: "this apartment has a wonderful view",
                    price: 1500,
                },
                {
                    title: "unique villa",
                    content: "very cheap and unique villa",
                    price: 1000,
                },
                {
                    title: "elite apartment",
                    content: "this apartment has a wonderful view",
                    price: 1500,
                },
            ];
            this.isLoading = false;
        }, 2500);
    },
    data: function () {
        return {
            name: "Bookable container",
            bookables: null,
            isLoading: true,
            columns: 3,
        };
    },
    computed: {
        rows() {
            return Math.ceil(this.bookables.length / this.columns);
        },
    },

    components: {
        BookableItem,
    },
};
</script>
