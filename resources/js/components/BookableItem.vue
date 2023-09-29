<template>
    <div class="row">
        <p v-if="isLoading">Loading ...</p>
        <div v-else class="col-md-8 pb-4">
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
        <div class="col-md-4 pb-4">
            <Availability />
        </div>
    </div>
</template>
<script>
import Availability from "./Availability.vue";
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
    components: { Availability },
};
</script>
