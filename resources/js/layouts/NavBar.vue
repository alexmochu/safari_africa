<template>
    <v-app-bar absolute light flat color="rgb(0, 0, 0, 0)">
      <span class="title ml-3 mr-5">
        Book&nbsp;
        <span class="font-weight-light">Safari</span>
      </span>

      <v-spacer></v-spacer>

      <v-btn text rounded>
        <router-link class="link" tag="li" to="/">Home</router-link>
      </v-btn>

      <v-btn text rounded>
        <router-link class="link" tag="li" to="/safaris">Safaris</router-link>
      </v-btn>

      <v-btn text rounded>
        <router-link class="link" tag="li" to="/destinations">Destinations</router-link>
      </v-btn>

      <v-btn text rounded>
        <router-link class="link" tag="li" to="/operators">Operators</router-link>
      </v-btn>

      <v-btn text rounded>
        <router-link class="link" tag="li" to="/about">About Us</router-link>
      </v-btn>

      <v-btn text rounded>
        <router-link class="link" tag="li" to="/login">Login</router-link>
      </v-btn>
    </v-app-bar>
</template>

<script>
    export default {
        name: 'NavBar'
        };
</script>

<style scoped>
    .link {
        list-style-type: none;
    }
</style>