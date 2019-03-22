export const state = () => ({
    token: null
})

export const mutations = {
    login(state,token){
        state.token = token
    },
    logout(state){
        state.usre = null
    }
}