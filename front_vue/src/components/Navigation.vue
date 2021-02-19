<template>
   <div>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">NavBar</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <!-- search form @clickを使う search()でuserDataをリターン-->
        <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" @click.prevent="search" type="submit">Search</b-button>
      </b-nav-form>
      <b-nav-item v-if="!isLoggedIn" to="/register">register</b-nav-item>
      <b-nav-item v-if="!isLoggedIn" to="/login">login</b-nav-item>
      <b-nav-item v-if="isLoggedIn" to="/Dashbd">Dashbd</b-nav-item>
      <b-nav-item v-if="isLoggedIn" @click.prevent="logout" to="/logout">logout</b-nav-item>
  </b-navbar-nav>
</b-collapse>
</b-navbar>
</div>
</template>
<script>
    import User from "../User";
    import Csrf from "../Csrf";
   export default{
     name: 'Navigation',
     data(){
        return {
            isLoggedIn:false
        };
    },
    methods:{
        logout(){
            Csrf.get_cookie();
            User.logout().then(()=>{
                localStorage.setItem('login',"false");
                // this.isLoggedIn = localStorage.getItem("login");
                this.isLoggedIn = false;
                localStorage.removeItem('auth');
                this.$router.push({ name:"Home" })
            });
        },
        search(){
            console.log("searchしたよ！");
        }
    },
    mounted() {
        this.$root.$on("login", () => {
            localStorage.setItem('login',"true");
          this.isLoggedIn = true;
      });
        // this.isLoggedIn = localStorage.getItem("login");
    }
}
</script>
