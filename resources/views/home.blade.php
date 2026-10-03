@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container py-5">
    <div class="alert alert-success">
        Bienvenue {{ auth()->user()->name }}, vous êtes connecté.
    </div>
</div>
@endsection
