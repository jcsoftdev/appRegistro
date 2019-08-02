<template>
  <div>
        <p class="alert-success text-center" v-text="'Curso de '+$store.state.cursos[$store.state.menu-101].curso+$store.state.menu">$store.state.menu</p>
        <h1>{{$store.state.menu-100}}</h1>
        <!-- <vue-qr text="Hello world!" :callback="test" qid="testid"></vue-qr> -->
        <!-- <qrcode value="Codigo01" :options="{ color: { dark: '#0275d8' } }"></qrcode> -->
        <div class="container">
          <div  class="d-flex flex-column h-400 align-items-center justify-content-center  m-1 bg-white">
            <qr-code class="mb-5"
                text="Ruth"
                color="#000"
                bg-color="#fff" 
                error-level="H">
            </qr-code>
            <div class="d-flex">
              <!-- <button class="btn btn-success" @click="refrescarCodigo()">ACTIVAR </button> -->
              <button class="btn btn-primary" @click="beforeDestroy()">DESACTIVAR</button>
            </div>
          </div>
        </div>
  </div>
</template>

<script>
 
import Vuex from 'vuex';
import { mapActions } from 'vuex';
import VueQRCodeComponent from 'vue-qrcode-component'
Vue.component('qr-code', VueQRCodeComponent)
export default {

  
  
  data () {
    return {
        idcurso:0,
        estado:true,
        codigo: '',
        polling: null
    }
  },
  state:{
    codigos:[]
  },
  mutations:{
    codigos(state, refrescarCodigo){
      state.codigos = codigoAccion
    }
  },
  actions: {
    actCodigos (context) {
      this.refrescarCodigo()
      // context.commit('actCodigos')
    }
  },
  methods: {
    
    
    getCursos(){
        console.log(this.$store.state.cursos);
    },
    getCodigo(){
      var me = this;
      axios.get('/codigo', {
        params: {
          idcurso: this.$store.state.menu-100
        }
      })
      .then(function (response) {
        console.log(response.data.serial);
        me.codigo = response.data.serial;
        // this.$store.state.codigo = response.data.serial;
        // me.test(response.data.serial,me.$store.state.menu-100)
      })
      .catch(function (error) {
        console.log(error);
      })
      .then(function () {
        // always executed
      });  
    },
    generarCodigo(){
      axios.post('/insertarCodigo', {
        idcurso: this.$store.state.menu-100,
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    
    refrescarCodigo () {
      var me = this;
      me.polling = setInterval(() => {
        // this.$store.dispatch('actCodigos');
          
            
            axios.post('/refCodigo', {
              idcurso: me.$store.state.menu-100,

            })
            .then(function (response) {
              console.log(me.$store.state.menu-100);
              console.log(response.data);
            })
            .catch(function (error) {
              console.log(error);
            });
            
          
            // me.getCodigo();
      }, 3000)
    },
    beforeDestroy() {
      clearInterval(this.polling);
      console.log('detenido');
    },
    
    async mostrarQR({text}){
      try {
        console.log(await QRCode.toDataURL(text))
      } catch (err) {
        console.error(err)
      }
    }

  },
  mounted(){
      this.getCursos();
      // this.generarCodigo();
      // this.rCodigo();
      // this.reload();
      // this.actionA();
      
      this.refrescarCodigo(true);
      
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
.h-400{
  height: 400px !important;
}
/* .wrapper{
    padding-top: 1rem;
} */
</style>






