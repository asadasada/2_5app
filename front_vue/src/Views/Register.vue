<template>
  <div class="register_container">
    <div class="jumbotron">
        <p class="lead">
            register here
        </p>
        <hr class="my-2">
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" v-model="form.name" class="form-control" id="name" placeholder="input_your_name">
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input type="text" v-model="form.email" class="form-control" id="email" placeholder="input_email">
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="text" v-model="form.password" class="form-control" id="password" placeholder="input_your_password">
        </div>
        <div class="form-group">
            <label for="password_confirm">password confirm:</label>
            <input type="text" v-model="form.password_confirmation" class="form-control" id="password_confirm" placeholder="password_confirm">
        </div>
            <button type="submit" @click.prevent="register" class="btn btn-primary btn-lg">submit</button>
    </div>
  </div>
</template>
<script>
    import User from "../User";
export default{
    name:'Register',
    data(){
        return{
            form:{
                name:"",
                email:"",
                password:"",
                password_confirmation:""
            }
        };
    },
    //kansu
    methods:{
        register(){
            console.warn('test');
            User.register(this.form).then(()=>{
                this.$router.push({ name:"Login" })
            }).catch(error =>{
                if(error.response.status === 422)
                    console.log("validation error");
            });
        }
    }
}
</script>