@extends('layout')

@section('content')
  <div class="container-fluid">
    @component('archetypes.create')
      @slot('formats', $formats)
      @slot('format_terms', $format_terms)
      @slot('back_to', '/archetypes')
    @endcomponent
    @component('formats.input')
      @slot('formats', $formats)
      @slot('format_terms', $format_terms)
    @endcomponent
    <table class="table table-bordered mt-2">
      <thead>
        <tr>
          <th scope="col">アーキタイプ</th>
          <th scope="col">色</th>
          <th scope="col">タッチ色</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($archetypes as $archetype)
        <tr>
          <th scope="row">{{ $archetype->name }}</th>
          <td>{{ $archetype->color }}</td>
          <td>{{ $archetype->splash_color }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
<script>
function displayTerms(formatId)
{
    if(formatId == 'OwD0SkoROVugEK2PonyKCDtu4LmaLF1s') {
      document.getElementById('form_terms').className='form-control'
    } else {
      document.getElementById('form_terms').className='form-control invisible'
    }
}
</script>
@endsection
