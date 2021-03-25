<template>
    <div>
        <div class="row">
            <div class="col-md-2">
                 <pwo-nav @changePage='changedPage'></pwo-nav>
            </div>
            <div class="col-md-10">
                <component :is="loadedComponent"></component>
            </div>
        </div>
    </div>
</template>
<script>

export default {    
    data(){
        return{
            loadedComponent: "pwo-character",
        }
    },
    methods:{

        changedPage(ev){
            this.loadedComponent = ev.page;
        }

    }
}
</script>
