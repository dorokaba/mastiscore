@extends('layout')

@section('content')
  <div class="container-fluid">
    <h2 class="mt-1 rounded">{{ $project->name }}</h2>
    <div>
    @component('matches.create')
      @slot('archetypes', $archetypes)
      @slot('project_id', $project->id)
      @slot('formats', $formats)
      @slot('format_terms', $format_terms)
      @slot('back_to', '/projects/'.$project->id)
    @endcomponent
    @component('archetypes.create')
      @slot('formats', $formats)
      @slot('format_terms', $format_terms)
      @slot('back_to', '/projects/'.$project->id)
    @endcomponent
    </div>
    <label class="mt-1">Your Deck: </label>
    <h6><mark>{{ $archetype->name }}</mark></h6>
    <ul class="nav nav-tabs">
      <li class="nav-item"><a class="nav-link" href="project-list.html">結果一覧</a></li>
      <li class="nav-item active"><a class="nav-link active" href="#">詳細分析</a></li>
    </ul>
    <table class="table table-bordered mt-2">
      <thead>
        <tr>
          <th scope="col">1 マリガン</th>
          <th scope="col">2 マリガン</th>
          <th scope="col">3+ マリガン</th>
          <th scope="col">マナフラッド</th>
          <th scope="col">マナスクリュー</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $mulligan1 }}%</td>
          <td>{{ $mulligan2 }}%</td>
          <td>{{ $mulligan3 }}%</td>
          <td>{{ $mana_flood }}%</td>
          <td>{{ $mana_screw }}%</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-bordered mt-2">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">マッチ数</th>
          <th scope="col">マッチ勝率</th>
          <th scope="col">先手勝率</th>
          <th scope="col">後手勝率</th>
          <th scope="col">メイン勝率</th>
          <th scope="col">サイド勝率</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($match_results as $match_result)
        <tr>
          <th scope="row">{{ $match_result->opponent_archetype_name}}</th>
          <td>{{ $match_result->match_count }}</td>
          <td>{{ $match_result->match_win_percentage }} %</td>
          <td>{{ $match_result->play_first_win_percentage }} %</td>
          <td>{{ $match_result->draw_first_win_percentage }} %</td>
          <td>{{ $match_result->mainboard_win_percentage }} %</td>
          <td>{{ $match_result->sideboard_win_percentage }} %</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection