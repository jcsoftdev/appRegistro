@extends('templates.index')

@section('contenido')
    <template v-if="$store.state.menu==0">
        <h1>Pantalla Principal</h1>
    </template>
    <template v-if="$store.state.menu==1">
        <marcar-asistencia-component></marcar-asistencia-component>
    </template>
    <template v-if="$store.state.menu==2">
        <h1>Contenido 2</h1>
    </template>
    <template v-if="$store.state.menu==3">
        <h1>Contenido 3</h1>
    </template>
    <template v-if="$store.state.menu==4">
        <h1>Contenido 4</h1>
    </template>
    <template v-if="$store.state.menu==5">
        <h1>Contenido 5</h1>
    </template>
    <template v-if="$store.state.menu==6">
        <h1>Contenido 6</h1>
    </template>
    <template v-if="$store.state.menu==7">
        <h1>Contenido 7</h1>
    </template>
    <template v-if="$store.state.menu==8">
        <h1>Contenido 8</h1>
    </template>
    <template v-if="$store.state.menu==9">
        <h1>Contenido 9</h1>
    </template>
    <template v-if="$store.state.menu>=101">
        {{-- <h1>Contenido Curso <span v-text="$store.state.menu"></span></h1> --}}
        <generar-asistencia-alumno-component></generar-asistencia-alumno-component>
    </template>
    
            
            

@endsection