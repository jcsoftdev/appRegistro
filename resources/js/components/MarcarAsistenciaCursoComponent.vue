<template>
  <div>
    <!-- <span class="text-center" v-text="$store.state.cursos[$store.state.menu]" ></span> -->
        <!-- <p class="alert-success text-center" v-text="'Curso de '+$store.state.menu">$store.state.menu</p> -->
        <h1 class="text-center">Registre su asistencia</h1>
        <div class="d-flex flex-column align-items-center text-center justify-content-center">
            <div class="container-fluid mt-1">
                <p class="error" v-if="noRearCamera==1 && noFrontCamera==1">No hay camaras disponibles</p>
                <p v-else-if="camera=='rear'"></p>

                <p class="error" v-if="noRearCamera==1 && camera=='rear'">
                    Parece que no tienes una cámara trasera en tu dispositivo
                </p>

                <p class="error" v-else-if="noFrontCamera==1 && camera=='front'">
                    No tienes camara frontal de tu dispositivo
                </p>

                
                <p v-else></p>
                <p class="decode-result">Resultado: <b v-text="result"></b></p>
            </div>
            <button @click="switchCamera(); getCursos()" class="btn btn-primary mt-1 m-0">Switch Camera</button>
        </div>
    <!-- <qrcode-stream :camera="camera" @init="onInit" class="pt-2">
        
    </qrcode-stream> -->
    <qrcode-drop-zone class="pt-2" @decode="onDecode" @init="logErrors">
      <qrcode-stream :camera="camera" class="pt-2" @decode="onDecode" @init="onInit" />
    </qrcode-drop-zone>

    <qrcode-capture :camera="camera" v-if="noStreamApiSupport" @decode="onDecode" />
  </div>
</template>

<script>
import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'

export default {

  components: { QrcodeStream, QrcodeDropZone, QrcodeCapture },

  data () {
    return {
        camera: 'rear',
        loading: false,
        destroyed: false,
        noRearCamera: false,
        noFrontCamera: false,
        result: 'Aun nada que mostrar',
        noStreamApiSupport: false
    }
  },

  methods: {
    switchCamera () {
      switch (this.camera) {
        case 'rear':
            this.camera = 'front'
            break
        case 'front':
            this.camera = 'rear'
            break
        default:
            this.camera = ''
      }
    },
    onDecode (result) {
      this.result = result
    },

    logErrors (promise) {
      promise.catch(console.error)
    },
    getCursos(){
        // console.log(this.$store.state.cursos);
    },
    async onInit (promise) {
        this.loading = true
      try {
        await promise
      } catch (error) {
        const triedRearCamera = this.camera === 'rear'
        const triedFrontCamera = this.camera === 'front'
        const cameraMissingError = error.name === 'OverconstrainedError'
        if (triedRearCamera && cameraMissingError) {
            this.noRearCamera = true
            }
        if (triedFrontCamera && cameraMissingError) {
            this.noFrontCamera = true
        }
        if (error.name === 'StreamApiNotSupportedError') {
          this.noStreamApiSupport = true
        }
        // if (triedRearCamera && cameraMissingError) {
        //   this.noRearCamera = true
        // }


        console.error(error)
      }finally {
        this.loading = false
      }
    },
    async reload () {
      this.destroyed = true

      await this.$nextTick()

      this.destroyed = false
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






