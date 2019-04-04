<template>
    <div id="contents">
        <header-view></header-view>
        <div id="form">
            <div id="header">確認画面</div>
        </div>
    </div>
</template>

<style>
#form{
    width: 1200px;
    margin-top: 20px;
}
#header{
    width: 100%;
}
</style>


<script>
import HeaderView from '~/components/common/header.vue'
export default {
    components: {
        HeaderView
    }
}
</script>

