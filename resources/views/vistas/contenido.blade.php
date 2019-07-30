@extends('layouts.plantilla')

@section('titulo')
Registrar Asistencia Docente
@endsection

@section('contenido')
    <template v-if="menu==0">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis adipisci, recusandae, amet quam asperiores quis laudantium voluptate itaque, sunt sequi. Atque expedita enim, odit ab corporis itaque veniam recusandae? 0</h1>
    </template>
    <template v-if="menu==1">
        <h1>contenido 1</h1>
        <example-component></example-component>
    </template>
    <template v-if="menu==2">
        <h1>Contenido 2</h1>
    </template>
    <template v-if="menu==3">
        <h1>Contenido 3</h1>
    </template>
    <template v-if="menu==4">
        <h1>Contenido 4</h1>
    </template>
    <template v-if="menu==5">
        <h1>Contenido 5</h1>
    </template>
    <template v-if="menu==6">
        <h1>Contenido 6</h1>
    </template>
    <template v-if="menu==7">
        <h1>Contenido 7</h1>
    </template>
    <template v-if="menu==8">
        <h1>Contenido 8</h1>
    </template>
    <template v-if="menu==9">
        <h1>Contenido 9</h1>
    </template>
    
            
            {{-- <example-component></example-component> --}}
            

@endsection