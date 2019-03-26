<template>
<div>
    <header>
        <div id="header">
            <div class="fl" id="icon">
                Vuuuuen
            </div>
            <div class="fl" id="plus">
                <img id="button" src="img/plus.png" alt="プラスボタン">
            </div>
            <div class="fl" id="menu">
                <ul>
                    <li class="menu_button fl" v-for="menu in menu_link" :key="menu.id">
                        {{ menu.menu }}
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div id="main">
        <div id="tree" class="fl">
            <ul>
                <li v-on:click="getTask" class="Task">ロード</li>
                <li v-for="task_min in task_list" :key="task_min.id" class="Task" v-vind:id="task_min.id" v-on:click="getTask">{{ task_min.task_name }}</li>
            </ul>
        </div>
        <div id="panel" class="fl">
            
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios'

export default {
    data(){
        return {
            menu_link: [
                {id:1,menu:"受信箱"},
                {id:2,menu:"送信箱"},
                {id:3,menu:"差込箱"},
            ],
            task_list:[
                
            ]
        }
        
    },
    asyncData: {
        
    },
    methods: {
        getTask(){
            console.log(this.$refs.id);
            
        }
    },
    mounted() {
        //タスクの取得
        var param = new URLSearchParams();
        param.append('user_id',localStorage.user_id);
        axios.post('api/gettask',param).then(response => (
            //console.log(response.data[0])
            this.task_list.push(response.data[0])
        ));
    }
}
</script>


<style>
*{
    padding: 0;
    margin: 0;
    overflow: hidden;
}

header #header{
    width: 100%;
    padding: 12px 0px 8px 20px;
    background-color: #1D364C;
}
#button{
    cursor: pointer;
}

#header::after{
    content: ".";
    display: block;
    visibility: hidden;
    width: 0px;
    height: 0px;
    clear: both;
}

#icon{
    color: #fff;
    font-weight: bolder;
    width: 130px;
    height: 31px;
    text-align: center;
    line-height: 31px;

}

#menu{
    margin-left: 10px;
}

#menu > ul > .menu_button{
    list-style-type: none;
    margin-left: 10px;
    color: #ccc;
    cursor: pointer;
    line-height: 31px;
    height: 33px;
    width: 120px;
    text-align: center;
}

#main {
    width: 100%;
    overflow: hidden;
}

#main::after{
    content: ".";
    display: block;
    visibility: hidden;
    width: 0px;
    height: 0px;
    clear: both;
}

#tree{
    width: 25%;
    padding: 10px;
    height: calc(100vh - 54px);
    border-right: 1px solid #1D364C;
    background: #1D364C;
    color: #fff;
}
#panel{
    width: 75%;
    padding: 10px;
    height: calc(100vh - 54px);
    overflow-y: scroll;
}

.Task{
    width: 100%;
    padding: 15px;
    border-bottom: 1px solid #fff;
    cursor: pointer;
    font-size: 12px;
}

.Task:hover{
    background: #fff;
    color: #444;
}

.fl{
    float: left;
}
</style>
