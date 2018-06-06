@extends('layouts.app')

@section('content')

    <h1>タスクリスト一覧</h1>

    
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : タスク{{ $task->content }} ステータス{{ $task->stauts }}</li>
            @endforeach
        </ul>
    
    {!! link_to_route('tasks.create', '新規taskの投稿') !!}
@endsection