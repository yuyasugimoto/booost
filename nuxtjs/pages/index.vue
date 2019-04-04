<template>
    <div id="content">
        <header-view></header-view>
        <goiken-view></goiken-view>
    </div>
</template>

<script>
import HeaderView from '~/components/common/header.vue'
import GoikenView from '~/components/views/goiken.vue'

export default {
    components: {
        HeaderView,
        GoikenView
    },
    data(){
        return{
            radio1: "",
            hakka : true,
            mokumoku: false,
            handle_name: "",
            mail: "",
            old: "",
            other:"",
            error: ""
        }
    },
    methods:{
        on_submit: function(){
            var flg = true

            if (!this.handle_name){
                this.error = "ハンドルネーム・名前を入力してください。"
                flg = false
                return
            }

            if (!this.mail){
                this.error = "メールアドレスを入力してください。"
                flg = false
                return
            }

            if (!this.old){
                this.error = "年齢を入力してください。"
                flg = false
                return
            }

            if (!this.other){
                this.error = "ご意見をお書きください。"
                flg = false
                return
            }


            if (flg == true){
                localStorage.radio1 = this.radio1
                localStorage.handle_name = this.handle_name
                localStorage.mail = this.mail
                localStorage.old = this.old
                localStorage.other = this.other
                this.$router.push("/confirm")
            }
        }
    },
    mounted: function(){
        this.handle_name = localStorage.handle_name
        this.mail = localStorage.mail
        this.old = localStorage.old
        this.other = localStorage.other
    },
    watch:{
        radio1(value){
            if (this.radio1 == "交流会"){
                this.hakka = true;
                this.mokumoku = false;
            }else if(this.radio1 == "もくもく会"){
                this.hakka = false;
                this.mokumoku = true;
            }
        }
    }
}
</script>


<style>
#content{
    width: 100%;
    margin: 10px auto;
}
</style>
