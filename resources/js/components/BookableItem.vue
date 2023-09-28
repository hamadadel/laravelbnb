<template>
    <div class="row">
        <p v-if="isLoading">Loading ...</p>
        <div v-else class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        {{ bookable.title }}
                    </h2>
                    <article>
                        {{ bookable.description }}
                    </article>
                </div>
            </div>
        </div>
        <div class="col-md-4">Availability & prices</div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            bookable: [],
            isLoading: true,
        };
    },
    created() {
        axios
            .get("/api/bookables/" + this.$route.params.id)
            .then((response) => {
                this.bookable = response.data;
                this.isLoading = false;
            });
    },
    computed: {},
};
</script>
