<template>
   <div>
       <ul class="list-group">
           <li class="list-group-item" v-for='character in characters'>

               <div v-if='character.id == null'>
                   Crea nuovo personaggio
               </div>

               <div v-else>
                   {{character.name}}
               </div>
           </li>
       </ul>
   </div>
</template>
<script>
export default {
    data(){
        return{
            characters: [],
        }
    },
    created(){
        this.loadCharacters();
    },
    methods:{
        loadCharacters(){
            var app = this;
            axios.get("/all-characters").then(function(response){
                app.characters = [];
                var slot = 1;

                response.data.forEach(character => {
                    app.character.push({
                        id: character.id,
                        name: character.name,
                        isEditing: false,
                        slot: slot,
                    });
                    slot++;
                });

                for(var i = app.characters.length; i<4; i++){
                    app.characters.push({
                        id:null,
                        name:null,
                        isEditing: false,
                        slot: slot,

                    });
                    slot++;
                }
            });
        }
    }
}
</script>