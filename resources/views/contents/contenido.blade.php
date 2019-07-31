@extends('templates.index')

@section('contenido')
    <template v-if="$store.state.menu==0">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis adipisci, recusandae, amet quam asperiores quis laudantium voluptate itaque, sunt sequi. Atque expedita enim, odit ab corporis itaque veniam recusandae? 0</h1>
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
    </template>
    
            
            

@endsection