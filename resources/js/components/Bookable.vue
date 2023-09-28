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
                            <router-link
                                :to="{
                                    name: 'bookable',
                                    params: { id: bookable.id },
                                }"
                            >
                                <h3 class="card-title">{{ bookable.title }}</h3>
                            </router-link>

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
    },
};
</script>
