<?php

namespace RegistroAsistencia\Http\Controllers;

use Illuminate\Http\Request;

class CodigoController extends Controller
{
    public function crearCodigo(){
        
        $aleatoria = array("");
        $caracteres = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        for($x = 0; $x < 3; $x++){
            $aleatoria[] = substr(str_shuffle($caracteres), 0, 20);
            $codigo[] = $aleatoria;
            // echo $aleatoria . "\n";
        }
        $codigo =  implode ( "", $aleatoria ) ;
        // echo $codigo;
        return $codigo;
    }
    public function insertarCodigo($idcurso){
        $a = 0;
        $buscar[] = '';
        $buscar[] = Codigo::select('codigos.serial')->get();
        while ($a < 1) {
            $codigo = $this->crearCodigo();
            $buscar[] = $codigo;
            if(count($buscar) > count(array_unique($buscar))){
                echo "¡Hay repetidos!";
                
            }else{
                $Codigo = new Codigo();
                $codigo = $this->crearCodigo();
                $Codigo->serial = $codigo;
                $Codigo->id_curso = $idcurso;
                $Codigo->save();
                $a ++;
            }
        } 

    }
    public function refrescar(Request $id_Curso, $estado){
        //Refrescar la tablar de codigos
        
        while ($estado) {
            try{
                DB::beginTransaction();
                DB::table('cupons')
                ->where('id_curso', $id_Curso)
                ->update([
                    'serial' => $this->crearCodigo()
                    ]);
                    DB::commit();
            } catch (Exception $e){
                DB::rollBack();
            }
            sleep(5);
        }
        
    }


    // Para poner en registrar asistencia 
    // public function refrescar($id_Curso){
    //     while ($activo) {
            
    //         try{
    //         DB::beginTransaction();
    //         //Actualizar la table cupones
    //         DB::table('cupons')
    //         ->where('id_curso', $id_Curso)
    //         ->update([
    //             'serial' => $this->crearCodigo()
    //             ]);
    //         DB::commit();
    //     } catch (Exception $e){
    //         DB::rollBack();
    //     }
    //     }
        
    // }
    // public function refrescarQR(Request $refresco){
    //     $id_curso = Cupon::select('serial')->where('id_curso', $idCurso)
    //         ->update([
    //             'condicion' => 1,
    //             'actualizaciones' => DB::raw('actualizaciones + 1'),
    //             'expiracion'=> Carbon::now()->addMonths($meses)
                
    //             ]);;
    //     while ($refresco) {
    //         # code...
    //     }
    // }
}
