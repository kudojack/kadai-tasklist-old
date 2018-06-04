@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のtask詳細ページ</h1>

    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'このtaskを編集', ['id' => $task->id]) !!}

@endsection