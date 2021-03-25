<template>
    <div style="padding :8px">
    <!-- ここにデータベースから持ってきた値を表示 -->
    <!-- 正規表現にてリンクはreplace -->
    <div v-if="!edit_flg" v-html="$sanitize(parsedtext)">
        Memo :
        <br>
        {{ parsedtext }}
        <br>
        <h5><b-badge>更新時刻：{{ this.form.memo.updated_at }}</b-badge></h5>
    </div>
    <!-- 値がなければ非表示 -->
 <div v-if="edit_flg">
    <b-form-textarea
      id="textarea"
      placeholder="Enter something..."
      v-model="form.text"
      rows="10"
      max-rows="10"
    ></b-form-textarea>

  </div>
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
                //edit_flg == true で編集
                Csrf.get_cookie();
                console.log("編集したよ！");
                if(this.edit_flg){
                    User.edit(this.form).then(response => {this.form.memo = response.data;
                        this.form.text = this.form.memo.text;
                        console.log(response.data.text);
                    });
                }
            this.edit_flg = !this.edit_flg;
            }
        },computed: {
    // a computed getter
    parsedtext: function () {
      // `this` points to the vm instance
      return this.form.text.replace(/\n/g,'</br>');
    }
  },
        // マウント時にデータを取得(ない場合は表示されない)
        mounted(){
            User.get_memo().then(response => {
      this.form.memo = response.data;
      this.form.text = this.form.memo.text;
      console.log("component mounted!");
      // idを除くデータをデバッグ用に表示
      console.log(this.form.memo);
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