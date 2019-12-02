<template>
    <v-content>
        <span>
            <nav-bar></nav-bar>
        </span>
        <v-img class="home-hero" max-height="700">
            <v-layout class="header-text" justify-center align-center column pa-5>
                <div class="display-4 font-weight-black white--text text-xs-center">About</div>
                <div class="display-1 font-weight-bold white--text text-xs-center">Book incredible safaris around africa</div>
            </v-layout>
        </v-img>
    </v-content>
</template>

<script>
import NavBar from '../layouts/NavBar';

export default {
    name: 'home',
    components: {
        NavBar
    }
};
</script>

<style scoped>
    .home-hero {
        background: url('../images/LandingPageImage.jpg');
        background-size: cover;
        height: 70%
    }
    .header-text {
        margin-top: 7%;
    }
</style>
