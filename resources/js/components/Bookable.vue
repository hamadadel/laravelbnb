<template>
    <div>
        <h2>{{ name }}</h2>
        <p v-if="isLoading">Loading.....</p>
        <div v-else>
            <div class="row mb-4" v-for="row in rows">
                <div
                    class="col d-flex align-items-stretch"
                    v-for="(bookable, column) in bookableInRow(row)"
                >
                    <BookableItem
                        :title="bookable.title"
                        :content="bookable.description"
                        :price="bookable.price"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import BookableItem from "./BookableItem.vue";

export default {
    created() {
        axios.get("/api/bookables").then((response) => {
            console.log(response);
            this.bookables = response.data;
            this.isLoading = false;
        });
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
    methods: {
        bookableInRow(row) {
            return this.bookables.slice(
                (row - 1) * this.columns,
                row * this.columns
            );
        },
        placeholderInRow(row) {
            return this.columns - this.bookableInRow(row).length;
        },
    },
};
</script>
