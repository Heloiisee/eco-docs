@extends('layouts.layout')

@section('content')
<h2>Générer un document sobre</h2>

@if(session('success'))
    <article class="success">{{ session('success') }}</article>
@endif

<form method="POST" action="{{ route('document.store') }}">
    @csrf
    <label>
        Nom :
        <input type="text" name="name" required>
    </label>

    <label>
        Email :
        <input type="email" name="email" required>
    </label>

    <button type="submit">Recevoir mon PDF</button>
</form>
@endsection
