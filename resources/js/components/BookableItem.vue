<template>
    <div>
        <h3>{{ title }}</h3>
        <div>
            {{ content }}
            <span>{{ price }}</span>
        </div>
    </div>
</template>
<script>
export default {
    props: { title: String, content: String, price: Number },
};
</script>
