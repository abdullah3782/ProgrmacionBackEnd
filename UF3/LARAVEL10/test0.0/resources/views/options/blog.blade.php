<!-- Extendemos el contenido con el diseño de esta  pagina -->
@extends('layout.app')

<!-- Titulo de la paguina -->
@section('title')
    Blog
@endsection

<!-- Contenido de la paguina -->
@section('content')
    <!-- Contenido de la paguina -->
@foreach ($posts as $post)
<h2> {{ $post['title'] }} </h2>
@endforeach
@endsection
