<template>
   <div>
       <ul class="list-group">
           <li class="list-group-item" v-for='character,index in characters' :key='index'>

               <div v-if='!character.isActive'>
                    <template v-if='character.isEditing'>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <label>Character Name</label>
                                <input type="text" class="form-control mb-3" v-model='newCharacter.name'>
                                <label>Race</label>
                                <select class='form-control mb-3' v-model='newCharacter.race'>
                                    <option :value='race' v-for='race in races' :key='race.id'>{{race.name}}</option>
                                </select>
                                <div v-if='newCharacter.race != null' class='card mb-3'>
                                    <div class="card-body">
                                    <h3>{{newCharacter.race.name}}</h3>
                                    <p>{{newCharacter.race.description}}</p>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            HP
                                            <div class="progress"> 
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.hp + "%"'>
                                            </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            TP
                                            <div class="progress"> 
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.tp + "%"'>
                                            </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            ATP
                                            <div class="progress"> 
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.atp + "%"'>
                                            </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            DFP
                                            <div class="progress"> 
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.dfp + "%"'>
                                            </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            MST
                                            <div class="progress"> 
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.mst + "%"'>
                                            </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            ATA
                                            <div class="progress"> 
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.ata + "%"'>
                                            </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            EVP
                                            <div class="progress"> 
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.evp + "%"'>
                                            </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            LCK
                                            <div class="progress"> 
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" 
                                                role="progressbar" :style='"width:" + newCharacter.race.lck + "%"'>
                                            </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    </div>
                                </div>

                                <label class='d-block'>Section ID</label>
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
                        <span @click='edit(character)'>New Character</span>
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
                race: null,
                identification_id: null,
            },

        }
    },
    created(){
        this.loadCharacters();
        this.loadRaces();
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
        loadRaces(){
            var app = this;
            axios.get("/races/index").then(function(response){
                app.races = response.data;
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