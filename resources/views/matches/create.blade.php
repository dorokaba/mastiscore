<div class="my-2">
  <a href="#matchModal" data-toggle="modal"><button type="button" class="btn btn-sm btn-outline-info">結果追加</button></a>
</div>
<div class="modal" id="matchModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register results</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&#215;</span><span class="sr-only">Close</span>
        </button>
      </div><!-- /modal-header -->
      <form method="post" action="/matches">
      @csrf
        <div class="modal-body">
          <input type="hidden" name='back_to' value="{{ $back_to }}" />
          <input type="hidden" name='project_id' value="{{ $project_id }}" /> 
          <label class="mt-1">Opponent Deck : </label>
          <select class="form-control" name="opponent_archetype_id">
            @foreach ($archetypes as $archetype)
            <option value="{{ $archetype->id }}">{{ $archetype->name }}</option>
            @endforeach
          </select>
          <div id="g1" class="mt-1">
            <div class="form-inline">
              <label class="mt-1">G1</label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g1first" value="P" autocomplete="off" checked> Play
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1first" value="D" autocomplete="off"> Draw
              </label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g1mulligan" value="0" autocomplete="off" checked>Mulligan 0
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1mulligan" value="1" autocomplete="off">1
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1mulligan" value="2" autocomplete="off">2
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1mulligan" value="3" autocomplete="off">3
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1mulligan" value="4" autocomplete="off">4
              </label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g1result" value="D" autocomplete="off">-
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1result" value="W" autocomplete="off" checked>o
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g1result" value="L" autocomplete="off">x
              </label>
            </div>
            <div class="mt-1 btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-warning active">
                <input type="radio" name="g1land_trouble" value="None" autocomplete="off" checked>-
              </label>
              <label class="btn btn-warning">
                <input type="radio" name="g1land_trouble" value="Screw" autocomplete="off">Screw
              </label>
              <label class="btn btn-warning">
                <input type="radio" name="g1land_trouble" value="Flood" autocomplete="off">Flood
              </label>
            </div>
            <input type="text" name="g1memo" placeholder="Memo" class="m-1 form-control">
          </div>
          <div id="g2" class="mt-1">
            <div class="form-inline">
              <label class="mt-1">G2</label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g2first" value="None" autocomplete="off" checked> -
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2first" value="P" autocomplete="off"> Play
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2first" value="D" autocomplete="off"> Draw
              </label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g2mulligan" value="0" autocomplete="off" checked>Mulligan 0
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2mulligan" value="1" autocomplete="off">1
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2mulligan" value="2" autocomplete="off">2
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2mulligan" value="3" autocomplete="off">3
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2mulligan" value="4" autocomplete="off">4
              </label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g2result" value="D" autocomplete="off">-
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2result" value="W" autocomplete="off" checked>o
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g2result" value="L" autocomplete="off">x
              </label>
            </div>
            <div class="mt-1 btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-warning active">
                <input type="radio" name="g2land_trouble" value="None" autocomplete="off" checked>-
              </label>
              <label class="btn btn-warning">
                <input type="radio" name="g2land_trouble" value="Screw" autocomplete="off">Screw
              </label>
              <label class="btn btn-warning">
                <input type="radio" name="g2land_trouble" value="Flood" autocomplete="off">Flood
              </label>
            </div>
            <input type="text" name="g2memo" placeholder="Memo" class="m-1 form-control">
          </div>
          <div id="g3" class="mt-1">
            <div class="form-inline">
              <label class="mt-1">G3</label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g3first" value="None" autocomplete="off" checked> -
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3first" value="P" autocomplete="off"> Play
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3first" value="D" autocomplete="off"> Draw
              </label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g3mulligan" value="0" autocomplete="off" checked>Mulligan 0
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3mulligan" value="1" autocomplete="off">1
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3mulligan" value="2" autocomplete="off">2
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3mulligan" value="3" autocomplete="off">3
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3mulligan" value="4" autocomplete="off">4
              </label>
            </div>
            <div class="btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="radio" name="g3result" value="D" autocomplete="off">-
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3result" value="W" autocomplete="off" checked>o
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="g3result" value="L" autocomplete="off">x
              </label>
            </div>
            <div class="mt-1 btn-group btn-group-toggle center-inline" data-toggle="buttons">
              <label class="btn btn-warning active">
                <input type="radio" name="g3land_trouble" value="None" autocomplete="off" checked>-
              </label>
              <label class="btn btn-warning">
                <input type="radio" name="g3land_trouble" value="Screw" autocomplete="off">Screw
              </label>
              <label class="btn btn-warning">
                <input type="radio" name="g3land_trouble" value="Flood" autocomplete="off">Flood
              </label>
            </div>
            <input type="text" name="g3memo" placeholder="Memo" class="m-1 form-control">
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