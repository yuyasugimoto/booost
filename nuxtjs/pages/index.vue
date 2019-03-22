<template>
  <section class="container">
    <div id="user_form">
      <div class="icon">Booost</div>
      <div class="label">User Name</div>
      <div><input type="text" name="user_name" v-model="user_name" id=""></div>
      <div class="label">User pass</div>
      <div><input type="password" name="user_pass" v-model="user_pass" id=""></div>
      <button id="submit" v-on:click="sigin_from">submit</button>
      <div class="error" v-if="error_msg != ''">{{ error_msg }}</div>
    </div>
  </section>
</template>

<script>
import AppLogo from '~/components/AppLogo.vue'
import axios from 'axios'

export default {
  data() {
    return{
      user_name: "",
      user_pass: "",
      error_msg: "",
    }
  },
  components: {
    AppLogo
  },
  methods: {
    sigin_from(){
      var param = new URLSearchParams();
      param.append("user_name",this.user_name);
      param.append("user_pass",this.user_pass);


      axios.post('/api/login',param).then(function(response){
        if (response.data.token != "Nothing"){
          //ログイン成功
          alert("サインイン！");
        }else{
          //ログイン失敗
          alert("アカウント情報がありません。")
        }
      })
    }
  }
}


</script>

<style>
#user_form{
  width: 500px;
  height: 450px;
  border: 1px solid #ccc;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  margin: auto;

}
.icon{
  width: 100%;
  padding: 10px;
  font-weight: bolder;
  height: 45px;
  font-size: 20px;
  line-height: 45px;
  margin-bottom: 50px;
}
.label{
  padding: 10px;
}
input,button{
  width: 80%;
  height: 45px;
  margin-left: 10px;
}
#submit{
  margin-top: 25px;
  background-color: #fff;
  border: 1px solid #ccc;
}
</style>

