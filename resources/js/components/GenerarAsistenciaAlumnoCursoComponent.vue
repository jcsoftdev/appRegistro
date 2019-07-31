<template>
  <div>
        <p class="alert-success text-center" v-text="'Curso de '+$store.state.cursos[$store.state.menu-101].curso+$store.state.menu">$store.state.menu</p>
  </div>
</template>

<script>
import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'

export default {

  components: { QrcodeStream, QrcodeDropZone, QrcodeCapture },

  data () {
    return {
        
    }
  },

  methods: {
    
    
    getCursos(){
        console.log(this.$store.state.cursos);
        console.log(this.$store.state.cursos);
        console.log(this.$store.state.cursos);
        console.log(this.$store.state.cursos);
        console.log(this.$store.state.cursos);
        console.log(this.$store.state.cursos);
    }
  },
  mounted(){
      this.getCursos()
  }
}
</script>

<style scoped>
/* button {
  position: absolute;
  left: 10px;
  top: 10px;
} */

.error {
  color: red;
  font-weight: bold;
}
/* .wrapper{
    padding-top: 1rem;
} */
</style>






