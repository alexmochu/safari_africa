<template>
  <v-div>
    <v-content class="text-center">
      <v-card-text>
        {{ new Date().getFullYear() }} —
        <strong>Book Africa</strong>
      </v-card-text>
    </v-content>
  </v-div>
</template>

<script>
export default {
  name: "CopyrightFooter"
};
</script>