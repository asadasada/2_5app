<template>
    <div class="Login_container">
        <div class="jumbotron">
        <p class="lead">
            Login
        </p>
        <hr class="my-2">
        <div class="form-group">
            <label for="email">email:</label>
            <input type="text" v-model="form.email" class="form-control" id="email" placeholder="input_email">
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="text" v-model="form.password" class="form-control" id="password" placeholder="input_your_password">
        </div>
            <button type="submit" @click.prevent="login" class="btn btn-primary btn-lg">submit</button>
    </div>
  </div>
</template>
<script>
    import User from "../User";
    import Csrf from "../Csrf";
export default{
    name:'Login',
    data(){
        return{
            form:{
               email:"",
               password:""
            }
        };
    },
    //kansu
    methods:{
        login(){
            Csrf.get_cookie();
            console.warn('test');
            User.login(this.form).then(()=>{
                this.$root.$emit("login");
                //can't set boolean on localstrage
                localStorage.setItem('auth','true');
                this.$router.push({ name:"Dashbd" })
            }).catch(error =>{
                if(error.response.status === 422)
                    console.log("validation error");
            });
        }
    }
}
</script>