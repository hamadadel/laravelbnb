<template>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ title }}</h3>
            <p class="card-text">
                {{ content }}
                <span>{{ price }}</span>
            </p>
        </div>
    </div>
</template>
<script>
export default {
    props: { title: String, content: String, price: Number },
};
</script>
