<label class="mt-1">フォーマット : </label>
<select class="form-control" name="format_id" onchange="displayTerms(this.value)">
  @foreach ($formats as $format)
  <option value="{{ $format->id }}">{{ $format->name }}</option>
  @endforeach
</select>
<select id="form_terms" class="form-control invisible" name="format_term_id">
  @foreach ($format_terms as $format_term)
  <option value="{{ $format_term->id }}">{{ $format_term->range }}</option>
  @endforeach
</select>

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