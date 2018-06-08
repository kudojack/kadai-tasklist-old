@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            
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
    

    {!! Form::close() !!}
            </div>
    </div>
@endsection