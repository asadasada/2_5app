<template>
  <div class="home col-8 mx-auto py-5 mt-5">
    <h1>Dashboard</h1>
    <div class="card">
      <div class="card-body" v-if="user">
        <h3> {{ user.name }}のページ</h3>
      </div>
    </div>
  </div>
</template>

<script>
import User from "../User";
export default {
  data() {
    return {
      user: null
    };
  },
 mounted() {
    User.get_prf().then(response => {
      this.user = response.data;
    });
  }
};
</script>