@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のtask詳細ページ</h1>

    <p>タスク{{ $task->content }}</p>
    <p>ステータス{{ $task->status }}</p>

    {!! link_to_route('tasks.edit', 'このtaskを編集', ['id' => $task->id]) !!}

@endsection