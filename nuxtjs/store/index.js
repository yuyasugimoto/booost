import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

// Vue.use(Vuex)


//data
export const state = () => ({
    data() {
        return {
            token_pres: "Nothing",
            user_id: '0'
        }
    }
})

//method
export const mutations = {
    async setToken(state,UserInfo){
        
        var parm = new URLSearchParams()
        parm.append('user_name',UserInfo.user_name)
        parm.append('user_pass',UserInfo.user_pass)


        await axios.post('/api/login',parm).then(function(response){
        var token = response.data.token


        if (token == "Nothing"){
            //ログインエラー
            state.token_pres = "Nothing"
            state.user_id = '0'
        }else{
            //ログイン認証完了
            state.token_pres = token
            state.user_id = response.data.id
            localStorage.token_pres = token
            localStorage.user_id = response.data.id
        }

        })//axios

    }
}

export const getters = {
    getToken (state) {
        console.log(state.token_pres)
        return state.token_pres
    },
    getUserID (state){
        return state.user_id
    }
}