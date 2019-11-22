// SafarisComponent.vue

<template>
  <div>
    <h1>Safaris</h1>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'home' }" class="btn btn-primary">Create Safari</router-link>
      </div>
    </div>
    <br />

    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Item Name</th>
          <th>Item Price</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="safari in safaris" :key="safari.id">
          <td>{{ safari.id }}</td>
          <td>{{ safari.title }}</td>
          <td>{{ safari.body }}</td>
          <td>
            <router-link :to="{name: 'edit', params: { id: safari.id }}" class="btn btn-primary">Edit</router-link>
          </td>
          <td>
            <button class="btn btn-danger" @click.prevent="deleteSafari(safari.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      safaris: []
    };
  },
  created() {
    window.axios.get("/api/safaris").then(response => {
      this.safaris = response.data.data;
    });
  },
  methods: {
    deleteSafari(id)
      {
        window.axios.delete(`/api/safari/delete/${id}`).then(response => {
          this.safaris.splice(this.safaris.indexOf(id), 1);
        });
      }
  }
};
</script>