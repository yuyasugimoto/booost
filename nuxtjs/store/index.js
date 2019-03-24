import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

// Vue.use(Vuex)


//data
export const state = () => ({
    token: "Nothing"
})

//method
export const mutations = {
    setToken(state,UserInfo){
        
        var parm = new URLSearchParams()
        parm.append('user_name',UserInfo.user_name)
        parm.append('user_pass',UserInfo.user_pass)

        console.log(UserInfo.user_name)
        console.log(UserInfo.user_pass)

        axios.post('/api/login',parm).then(function(response){
            var token = response.data.token

            if (token == "Nothing"){
                //ログインエラー
                state.token = "Nothing"
            }else{
                //ログイン認証完了
                state.token = token
            }

        })//axios

    }
}

export const getters = {
    getToken (state) {
        console.log(state.token)
        return state.token
    }
}

//実行
// export const actions = {
//     doUpdate({commit},UserInfo){
//         commit('setToken',{UserInfo})
//     }
// }

// const store = new Vuex.Store({
//     //state:コンポーネントでいうdata
//     state: {
//         token: "Nothing"
//     },

//     //getters:コンポーネントでいうcomputed的なもの
//     getters:{
//         //messageを使うgetter
//         token(state){
//             return state.token
//         }
//     },

//     /**
//      * 外部からの呼び出し
//      * actionsをディスパッチで呼び出す
//      * doUpdate => mutations(setToken)
//      */

//     //mutations:コンポーネントでいうmethod(setter)
//     //stateを唯一変更できる場所
//     mutations:{
//         //vuexでは、引数をペイロードと呼ぶらしいpayload
//         //payloadはObjectにすべし。
//         setToken(state,params){
//             axios.post('/api/login',params).then(function(response){
//                 var token = response.data.token

//                 if (token == "Nothing"){
//                     //ログインエラー
//                     state.token = "Nothing"
//                 }else{
//                     //ログイン認証完了
//                     state.token = response.data.token
//                 }

//             })
//         }

//     },

//     //action
//     //コミットを使うことでミューテーションを呼び出す
//     //コンポーネントにはない概念
//     actions: {
//         doUpdate({commit},params){
//             commit('setToken',{params})
//         }
//     }
// })

// const 