@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
    
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title') !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content') !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection