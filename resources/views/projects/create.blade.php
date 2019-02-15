<div class="my-2">
  <a href="#staticModal" data-toggle="modal"><button type="button" class="btn btn-sm btn-outline-info">プロジェクト作成</button></a>
</div>
<div class="modal" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">プロジェクト作成</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&#215;</span><span class="sr-only">Close</span>
        </button>
      </div><!-- /modal-header -->
      <form method="post" action="/projects">
        <div class="modal-body">
            @csrf
            <div class="form-group" name="name">
              <label>Project Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <label class="mt-1">Deck : </label>
            <select class="form-control" name="archetype_id">
              @foreach ($archetypes as $archetype)
              <option value="{{ $archetype->id }}">{{ $archetype->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
          <button type="submit" class="btn btn-primary">作成</button>
        </div>
      </form>
    </div> <!-- /.modal-content -->
  </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->