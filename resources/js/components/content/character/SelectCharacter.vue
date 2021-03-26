<template>
   <div>
       <ul class="list-group">
           <li class="list-group-item" v-for='character,index in characters' :key='index'>

               <div v-if='!character.isActive'>
                    <template v-if='character.isEditing'>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <label>Nome personaggio</label>
                                <input type="text" class="form-control mb-3" v-model='newCharacter.name'>
                                <label>Razza</label>
                                <select class='form-control mb-3' v-model='newCharacter.race_id'>
                                    <option :value='rindex' v-for='race,rindex in races' :key='rindex'>{{race}}</option>
                                </select>
                                <label class='d-block'>ID di identificazione</label>
                                <button class='btn btn-primary mb-3' v-if='newCharacter.identification_id == null' @click='obtainId()'>Ottieni ID</button>
                                <h3 v-else class='mb-3'>{{newCharacter.identification_id | identification}}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-secondary" @click='character.isEditing=false'>Annulla</button>
                                <button class="btn btn-success" @click='createCharacter()' :disabled ='newCharacter.name.length < 5 || newCharacter.identification_id == null'>Crea personaggio</button>
                            </div>
                        </div>
                    </template>

                    <template v-else>
                        <span @click='edit(character)'>Crea nuovo personaggio</span>
                    </template>
               </div>

               <div v-else>
                   {{character.name}}
               </div>
           </li>
       </ul>
   </div>
</template>
<script>
import * as Constants from "../../../constants";
export default {
    data(){
        return{
            characters: [],
            races: [],
            newCharacter: {
                name: "",
                race_id: 0,
                identification_id: null,
            },

        }
    },
    created(){
        this.loadCharacters();
        this.races = Constants.RACE_ID;
    },
    methods:{
        loadCharacters(){
            var app = this;
            axios.get("/all-characters").then(function(response){
                app.characters = [];

                response.data.forEach(character => {
                    app.characters.push({
                        id: character.id,
                        name: character.name,
                        isEditing: false,
                        slot: character.slot,
                        isActive: character.isActive,
                    });
                });
            });
        },
        edit(character){
            this.characters.forEach(char=>{
                char.isEditing = false;
            });
            character.isEditing = true;
        },
        obtainId(){
            console.log("obtaining id");
            this.newCharacter.identification_id = parseInt(Math.random() * (Constants.IDENTIFICATION_ID.length - 0) + 0);
        },
        createCharacter(){
            console.log(this.newCharacter);
        }
    },
    filters:{
        identification(value){
            return Constants.IDENTIFICATION_ID[value];
        }
    }
}
</script>