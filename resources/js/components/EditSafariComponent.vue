// EditComponent.vue

<template>
  <div>
    <h1>Edit Safari</h1>
    <form @submit.prevent="updateSafari">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Safari Title:</label>
            <input type="text" class="form-control" v-model="safari.title">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Safari Body:</label>
              <textarea class="form-control" v-model="safari.body" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Update</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {

      data() {
        return {
          safari: {}
        }
      },
      created() {
        window.axios.get(`/api/safari/edit/${this.$route.params.id}`).then((response) => {
            this.safari = response.data;
        });
      },
      methods: {
        updateSafari() {
          window.axios.post(`/api/safari/update/${this.$route.params.id}`, this.safari).then((response) => {
            this.$router.push({name: 'safaris'});
          });
        }
      }
    }
</script>