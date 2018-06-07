@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-6">
            
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    <div class="from-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null,['class' =>'form-control']) !!}
    </div>
    
    <div class="from-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null,['class' =>'form-control']) !!}
        {!! Form::submit('更新') !!}
    </div>
    

        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::close() !!}
            </div>
    </div>
@endsection