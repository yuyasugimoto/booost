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
    async sigin_from(){
      var param = {
        'user_name' : this.user_name,
        'user_pass' : this.user_pass
      }

      //storeのdoUpdateを呼び出し
      this.$store.commit('setToken',param)

      //storeからログイン成功したかの判定をもらう
      var str_login = this.$store.getters['getToken']

    console.log(str_login)

      if (str_login == "Nothing"){
        this.$router.push('/main')
      }else{
        this.error_msg = "認証できませんでした！"
      }

    }


    // async sigin_from(){
    //   var param = new URLSearchParams();
    //   const userid = this.user_name;
    //   const userpass = this.user_pass;

    //   param.append("user_name",userid)
    //   param.append("user_pass",userpass)

    //   const axiosPost = ({url,param,router,store}) => {
    //     return (
    //       axios.post(url,param)
    //         .then(
    //           response => {

    //             console.log(response.data.token);
    //             if (response.data.token != "Nothing"){
    //               store.state.index.setToken
    //               router.push('main')
    //               return true
    //             }else{
    //               this.error_msg = "情報照会に誤りがあります！"
    //               return false
    //             }
    //           }
    //         )
    //     )
    //   }


    //   //Promis
    //   var router = this.$router
    //   var get = axiosPost({url:'api/login',param,router})

    //}
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

