<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
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
                nombre: '',
                descripcion:'',
                arrarUser:[]
            }
        },
        methods : {
            // listarUsuarios(){
                
            //     let me = this;
            //     axios.get('/usuario')
            //     .then(function (response) {
            //         // handle success
            //         me.arrarUser=response.data;
            //         console.log(me.arrarUser);
            //     })
            //     .catch(function (error) {
            //         // handle error
            //         console.log(error);
            //     })
            //     .finally(function () {
            //         // always executed
            //     });

            // }
        },
        mounted() {
            // this.listarUsuarios();
            // $().DataTable();
        }
    }
</script>
