<template>
    <div class="container">
        <nav class="nav bg-white border-bottom navbar-light">
            <router-link class="navbar-brand mr--auto" :to="{ name: 'home' }"
                >Home</router-link
            >
            <router-link class="btn nav-button" v-bind:to="{ name: 'guide' }"
                >guide</router-link
            >
        </nav>
        <router-view />
    </div>
</template>

<script>
export default {};
</script>
