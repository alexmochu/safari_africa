<template>
    <v-content>
        <span>
            <nav-bar></nav-bar>
        </span>
        <v-img class="home-hero" max-height="700">
            <v-layout class="header-text" justify-center align-center column pa-5>
                <div class="display-4 font-weight-black white--text text-xs-center">Find Your Perfect Safari</div>
                <div class="display-1 font-weight-bold white--text text-xs-center">Book incredible safaris around africa</div>
            </v-layout>
        </v-img>
        <div>
            <h1>Home</h1>
            <h4>Create A Safari</h4>
            <form @submit.prevent="addSafari">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Safari Title:</label>
                        <input type="text" class="form-control" v-model="safari.title" />
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Safari Description:</label>
                        <textarea class="form-control" v-model="safari.body" rows="5"></textarea>
                    </div>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </v-content>
</template>

<script>
import NavBar from '../layouts/NavBar';

export default {
    name: 'home',
    components: {
        NavBar
    },
    data() {
        return {
            safari: {}
        };
    },
    methods: {
    addSafari() {
      window.axios
        .post("/api/safari/create", this.safari)
        .then(response => {
          this.$router.push({ name: "safaris" });
        });
    },
    }
}
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