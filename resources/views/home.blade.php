@extends('layouts.layout')

@section('content')
<header>
    <h1>Bienvenue sur <strong>Éco-Docs</strong></h1>
    <p>Une petite application Laravel responsable pour générer et recevoir vos documents PDF par email, en toute sobriété.</p>
</header>

<p>📝 Ce projet s’inscrit dans une démarche de sobriété numérique : traitement en tâche de fond, interface minimale, et poids allégé.</p>

<a href="{{ route('document.form') }}">
    <button>Générer un document</button>
</a>
@endsection
