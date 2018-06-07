@extends('layouts.app')

@section('content')
  @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
     <!--if ( $task->status == 0 ) {-->
     <!--               $percent = '0%';-->
     <!--               } else if ($task->status == 1) {-->
     <!--               $percent = '50%';-->
     <!--               } else if ($task->status == 2) {-->
     <!--               $percent = '100%';-->
     <!--               }-->

            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach

 </tbody>
        </table>
    @endif    
    {!! link_to_route('tasks.create', '新規taskの投稿', null, ['class' => 'btn btn-primary']) !!}
@endsection