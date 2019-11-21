<template>
  <v-content>
    <v-container fluid>
      <router-link tag="li" to="/">Home</router-link>
      <router-link tag="li" to="/safaris">Safaris</router-link>
      <router-link tag="li" to="/destinations">Destinations</router-link>
      <router-link tag="li" to="/operators">Operators</router-link>
      <router-link tag="li" to="/operators/join">Operator Registraion</router-link>
      <router-link tag="li" to="/about">About Us</router-link>
      <router-link tag="li" to="/login">Login</router-link>
      <router-view></router-view>
    </v-container>
  </v-content>
</template>

<script>
export default {
  mounted() {
    console.log("App component");
  }
};
</script>

