<template>
<div id="main">
    <header-view></header-view>
    <goiken-view></goiken-view>
</div>
</template>

<script>
import axios from 'axios'
import HeaderView from '~/components/common/header.vue'
import GoikenView from '~/components/views/goiken.vue'

export default {
    components: {
        HeaderView,
        GoikenView
    },
    data(){
        return {
            search: "",
            qiita:[]
        }
    },
    methods: {
    },
    mounted() {
    }
}
</script>


<style>
*{
    padding: 0;
    margin: 0;
}
body{
    width: 100%;
}
#search{
    width: 1200px;
    margin: 10px auto;
    padding: 10px 0px;
}
#content{
    width: 1200px;
    margin: 10px auto;
}
#textbox{
    width: 800px;
    height: 45px;
    font-size: 20px;
    font-weight: bolder;
}
#submit{
    width: 100px;
    height: 45px;
    position: relative;
    top: -3px;
    background: #005F77;
    color: #fff;
    border: none;
}
#option{
    margin: 10px 0px;
    padding: 10px 0px;
}
.textbox1{
    width: 200px;
    height: 30px;
    font-size: 20px;
}
.switch{
    height: 30px;
    top: -3px;
    position: relative;
}
</style>
