<template>
    <div id="content">
        <div class="box clear">
            <label for="hakka" class="model fl" v-bind:class="{active: hakka}">
                <span class="button_label">交流会</span>
                <input type="radio" v-model="radio1" id="hakka" class="visi_h" value="交流会" name="radio1" checked>
            </label>
            <label for="mokumoku" class="model fl mrg91" v-bind:class="{active: mokumoku}" value="もくもく会">
                <span class="button_label">もくもく会</span>
                <input type="radio" v-model="radio1" id="mokumoku"  name="radio1" class="visi_h" value="もくもく会">
            </label>
        </div>
        <div class="box mrg50">
            <div class="discript">ハンドルネーム・名前</div>
            <input type="text" v-model="handle_name" class="textbox2" placeholder="ハンドルネーム・名前">

            <div class="discript">メールアドレス</div>
            <input type="text" v-model="mail" class="textbox2" placeholder="メールアドレス">

            <div class="discript">年齢</div>
            <input type="text" v-model="old" class="textbox2" placeholder="年齢">歳

            <div class="discript">ご意見</div>
            <textarea name="" id="" v-model="other" class="textarea2"></textarea>

            <input type="button" value="送信" class="submit">
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            radio1: "",
            hakka : true,
            mokumoku: false,
            handle_name: "",
            mail: "",
            old: "",
            other:""
        }
    },
    methods:{
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
.textarea2{
    width: 95%;
    height: 350px;
    border: 2px solid #005F77;
}
.error{
    width: 100%;
    padding: 5px;
    border: 1px solid rgb(255, 66, 66);
    background: rgb(255, 162, 162);
    color: #fff;
    border-radius: 5px;
}
.submit{
    width: 95%;
    height: 45px;
    background-color: #fff;
    margin: 30px 0px 50px 0px;
    border: 2px solid #005F77;
    font-size: 25px;
    font-weight: bolder;
    color: #005F77;
}
.discript{
    margin-top: 50px;
}
.textbox2{
    width: 95%;
    height: 45px;
    border: none;
    border-bottom: 2px solid #005F77;
    margin-top: 5px;
}
.button_label{
    font-size: 30px;
    font-weight: bolder;
    
}
.model{
    width: 44.3%;
    height: 100%;
    border: 5px solid #aaa;
    border-radius: 5px;
    line-height: 1220%;
    text-align: center;
}
.visi_h{
    visibility: hidden;
    height: 0;
    width: 0;
}
.fl{
    float: left;
}
.box{
    width: 75%;
    margin: 20px auto;
}
.clear::after{
    content: ".";
    display: inline-block;
    visibility: hidden;
    clear: both;
}
.mrg91{
    margin-left: 11%;
}
.mrg50{
    margin-top: 50px;
}
.active{
    border-color: #005F77;
    box-shadow: #ccc 8px 8px 14px 8px;
}
</style>