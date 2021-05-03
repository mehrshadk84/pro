@extends('admin.dashboard.index')
@section('content')
@include('admin.partials.notifications')
@if($words && count($words) > 0)
<table class="table table-bordered">
    <thead>
        <tr>
            <th style="text-align: center;">id</th>
            <th style="text-align: center;">word</th>
            <th style="text-align: center;">picture_name</th>
            <th style="text-align: center;">word_time</th>
            <th style="text-align: center;">word_score</th>
            <th style="text-align: center;">hardness_level</th>
            <th style="text-align: center;">the operation</th>
        </tr>
    </thead>
    @foreach($words as $word)
    @include('admin.words.item', $words)
    @endforeach
</table>
@endif
@endsection