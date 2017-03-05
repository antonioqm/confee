<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" v-text=name></div>
                    <div class="panel-body">
                        <input class="form-control" type="text" name="name" v-model=name>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){

            return {
                name: 'EU amo Vue 2'
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
