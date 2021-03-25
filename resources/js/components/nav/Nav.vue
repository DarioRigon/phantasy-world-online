<template>
    <div>
        <ul class="list-group">
            <li class="list-group-item pointer" @click='changePage("pwo-character")'>Your Character</li>
            <li class="list-group-item pointer" @click='changePage("pwo-account")'>Your Account</li>
        </ul>
    </div>
</template>
<script>
export default {
    data(){
        return{
            message: "hellow",
        }
    },
    methods:{
        changePage(page){
            this.$emit("changePage",{page:page});
        }
    }
}
</script>