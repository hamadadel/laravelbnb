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
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a :href="calculateURL(bookable.id)">{{
                                    bookable.title
                                }}</a>
                            </h3>
                            <p class="card-text">
                                {{ bookable.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    created() {
        axios.get("/api/bookables").then((response) => {
            console.log(response.data);
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

    components: {},
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
        calculateURL(id) {
            return `/bookable/${id}`;
        },
    },
};
</script>
