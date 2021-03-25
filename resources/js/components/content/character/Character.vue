<template>
    <div>
        <template v-if='!currentCharacter'>
            <pwo-select-character></pwo-select-character>
        </template>
        <template v-else>
            <pwo-character-main :character='currentCharacter'></pwo-character-main>
        </template>
    </div>
</template>
<script>

import SelectCharacter from "./SelectCharacter";
import CharacterMain from "./CharacterMain";

export default {
    components:{
        "pwo-select-character": SelectCharacter,
        "pwo-character-main": CharacterMain,
    },

    data(){
        return{
            currentCharacter: null,
        }
    },
    created(){
        this.findCurrentCharacter();
    },
    methods:{
        findCurrentCharacter(){
            var app = this;
            axios.get("/current-character").then(function(res){
                app.currentCharacter = res.data;
            });
        }
    }
}
</script>
