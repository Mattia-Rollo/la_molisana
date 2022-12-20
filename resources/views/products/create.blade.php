@extends('layouts.app')

@section('content')
<form action="{{ route('products.store') }}" method="POST">
    @csrf
 
    <label for="name">Titolo</label>
    <input type="text" name="title" id="name">
 
    <label for="description">Descrizione</label>
    <input type="text" name="description" id="description">
    
    <label for="type">Tipo</label>
    <input type="text" name="type" id="type">
    
    <label for="image">Immagine</label>
    <input type="text" name="image" id="image">
    
    <label for="cooking_time">Tempo Cottura</label>
    <input type="text" name="cooking_time" id="cooking_time">
    
    <label for="weight">Peso</label>
    <input type="text" name="weight" id="weight">
 
    <input type="submit" value="Invia">
 </form>
 
@endsection