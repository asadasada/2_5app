<template>
    <div style="padding :8px">
    <!-- ここにデータベースから持ってきた値を表示 -->
    <!-- 正規表現にてリンクはreplace -->
    <div :class="{disp: (!edit_flg)}">
        nanashi
    </div>
    <!-- 値がなければ非表示 -->
 <div :class="{disp: edit_flg}">
    <b-form-textarea
      id="textarea"
      placeholder="Enter something..."
      v-model="form.text"
      rows="10"
      max-rows="10"
    ></b-form-textarea>

  </div>
  <pre>{{ form.text }}</pre>
  <b-button @click.prevent="edit">
          編集
      </b-button>
</div>
</template>
<script>
    import User from "../User";
    import Csrf from "../Csrf";
    export default {
        data() {
            return {
                edit_flg:false,
                form:{
                    text: "",
                    memo:""
                }
            };
        },
        methods:{
            edit(){
                Csrf.get_cookie();
                console.log("編集したよ！");
                if(this.edit_flg){
                    User.edit(this.form).then(response => {this.form.memo = response.data;
                        console.log(response.data);
                    });
                }
            this.edit_flg = !this.edit_flg;
            }
        },
        // マウント時にデータを取得(ない場合は表示されない)
        mounted(){
            User.get_memo().then(response => {
      this.form.memo = response.data;
      console.log(this.edit_flg);
    });
        }
    };
</script>
<style scoped>
.disp {
    display: none;
/*    border: dashed 2px #5b8bd0;
    border-radius: 5px;*/
    padding: 3px;
}
</style>