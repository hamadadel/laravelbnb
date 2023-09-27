<template>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                <a :href="url">{{ bookable.title }}</a>
            </h3>
            <p class="card-text">
                {{ bookable.description }}
            </p>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            bookable: [],
        };
    },
    created() {
        axios.get("/api/bookable/" + this.$route.params.id).then((response) => {
            this.bookable = response.data;
        });
    },
    computed: {
        url() {
            return "/bookable/" + this.bookable.id;
        },
    },
};
</script>
