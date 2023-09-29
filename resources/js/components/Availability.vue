<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-border">
            check availability
        </h6>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="from">from</label>
                <input
                    id="from"
                    type="text"
                    name="from"
                    class="form-control form-control-sm"
                    placeholder="Start date"
                    v-model="from"
                    @keyup.enter="checkAvailability"
                />
            </div>
            <div class="form-group col-md-6">
                <label for="to">to</label>
                <input
                    id="to"
                    type="text"
                    name="to"
                    class="form-control form-control-sm"
                    placeholder="End date"
                    v-model="to"
                    @keyup.enter="checkAvailability"
                />
            </div>
        </div>
        <button
            v-on:click="checkAvailability"
            type="button"
            class="btn btn-secondary mt-4 btn-block"
        >
            Block level button
        </button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            from: null,
            to: null,
        };
    },
    methods: {
        checkAvailability() {
            console.log("form submited");
        },
    },
};
</script>

<style scoped>
label {
    font-size: 0.7rem;
    text-transform: uppercase;
    color: gray;
    font-weight: bolder;
}
</style>
