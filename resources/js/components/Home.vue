<template>
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
</template>

<script>
export default {
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
    }
  }
};
</script>
