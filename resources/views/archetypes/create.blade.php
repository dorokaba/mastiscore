<div class="my-2">
  <a href="#archtypeModal" data-toggle="modal"><button type="button" class="btn btn-sm btn-outline-info">アーキタイプ追加</button></a>
</div>
<div class="modal" id="archtypeModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">アーキタイプ追加</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&#215;</span><span class="sr-only">Close</span>
        </button>
      </div><!-- /modal-header -->
      <form method="post" action="/archetypes">
      @csrf
        <div class="modal-body">
          <input type="hidden" name='back_to' value="{{ $back_to }}" />
          <input type="text" name="name" placeholder="アーキタイプ名" class="form-control">
          @component('formats.input')
            @slot('formats', $formats)
            @slot('format_terms', $format_terms)
          @endcomponent
          <div>
            <label class="mt-1">色 : </label>
            <input type="checkbox" name="color[]" id="color_w" value="W"><label for="color_w">白</label>
            <input type="checkbox" name="color[]" id="color_u" value="U"><label for="color_u">青</label>
            <input type="checkbox" name="color[]" id="color_b" value="B"><label for="color_b">黒</label>
            <input type="checkbox" name="color[]" id="color_r" value="R"><label for="color_r">赤</label>
            <input type="checkbox" name="color[]" id="color_g" value="G"><label for="color_g">緑</label>
          </div>
          <div>
            <label class="mt-1">タッチ色 : </label>
            <input type="checkbox" name="splash_color[]" id="splash_color_w" value="w"><label for="splash_color_w">白</label>
            <input type="checkbox" name="splash_color[]" id="splash_color_u" value="u"><label for="splash_color_u">青</label>
            <input type="checkbox" name="splash_color[]" id="splash_color_b" value="b"><label for="splash_color_b">黒</label>
            <input type="checkbox" name="splash_color[]" id="splash_color_r" value="r"><label for="splash_color_r">赤</label>
            <input type="checkbox" name="splash_color[]" id="splash_color_g" value="g"><label for="splash_color_g">緑</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div> <!-- /.modal-content -->
  </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->