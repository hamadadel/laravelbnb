<template>
    <div>
        <h2>{{ name }}</h2>
        <BookableItem
            :title="bookable1.title"
            :content="bookable1.content"
            :price="bookable1.price"
        />
        <BookableItem
            :title="bookable2.title"
            :content="bookable1.content"
            :price="bookable1.price"
        />
    </div>
</template>
<script>
import BookableItem from "./BookableItem.vue";

export default {
    created() {
        console.log(this.bookable1);
        console.log(this.bookable2);

        setTimeout(() => {
            this.bookable1.title = "new apartment from the server";
        }, 1500);
    },
    data: function () {
        return {
            name: "Bookable container",
            bookable1: {
                title: "unique villa",
                content: "very cheap and unique villa",
                price: 1000,
            },
            bookable2: {
                title: "elite apartment",
                content: "this apartment has a wonderful view",
                price: 1500,
            },
        };
    },
    components: {
        BookableItem,
    },
};
</script>
