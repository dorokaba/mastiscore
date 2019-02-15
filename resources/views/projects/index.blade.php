@extends('layout')

@section('content')
  <div class="container-fluid">
    @component('projects.create')
      @slot('archetypes', $archetypes)
    @endcomponent
    @component('formats.input')
      @slot('formats', $formats)
      @slot('format_terms', $format_terms)
    @endcomponent
    @foreach ($projects as $project)
    <div class="card mt-2">
      <a class="card-body text-dark" href="/projects/{{ $project->id }}">{{ $project->name }}</a>
    </div>
    @endforeach
  </div>
@endsection