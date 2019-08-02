
<template>
    <li class="has-submenu">
        <a href="#"><i class="icon-key"></i> Generar Asistencia</a>
        <ul class='submenu'>
            <li @click="$store.state.menu=100+curso.id" v-for="curso in arrayCurso" :key="curso.id" ><a href="#"><i class="icon-paper-sheet"></i> <span v-text="curso.id+' '+curso.curso"></span></a></li>
        </ul>
    </li>
                        
</template>

<script>
    export default {
        data(){
            return {
                menuCurso:0,
                nombre: '',
                descripcion:'',
                arrayCurso:[],
                
            }
        },
        methods : {
            cambiarMenu(num){
                this.menuCurso=num;
                console.log(num);
            },
            listarCursos(){
                
                let me = this;
                axios.get('/curso')
                .then(function (response) {
                    // handle success
                    me.arrayCurso=response.data;
                    me.$store.state.cursos=response.data;
                    // console.log(me.arrayCurso);
                    // console.log(me.$store.state.cursos);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });

            }
        },
        mounted() {
            this.listarCursos();
            // $().DataTable();
            // this.$emit('menuCurso', this.menuCurso);
        }
    }
</script>
