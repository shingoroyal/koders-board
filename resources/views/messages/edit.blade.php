@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
                <div class="form-group">    
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content') !!}
                </div>
        
                {!! Form::submit('更新') !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection