@extends('layouts.dash')
@section('content')
<h1>Edit your order</h1>
<div class="container bg-white">
    <div class="row justify-content-md-center">
{!! Form::open(['action' => ['OrdersController@update', $order->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Academic level', 'Academic level')}}
            {{Form::text('level', $order->level, ['class' => 'form-control', 'placeholder' => 'eg.High school,Undergraduate,masters,PHP'])}}
        </div>
        <div class="form-group">
            {{Form::label('Type of paper', 'Type of paper')}}
            {{Form::text('type', $order->type, ['class' => 'form-control', 'placeholder' => 'eg.math problem,essay,lab report,Assignment,case study'])}}
        </div>
        <div class="form-group">
            {{Form::label('subject area', 'subject area')}}
            {{Form::text('subject', $order->subject, ['class' => 'form-control', 'placeholder' => 'eg.Computer,economics,maths business,Engineering,ethics'])}}
        </div>
        <div class="form-group">
            {{Form::label('Title', 'Title')}}
            {{Form::text('title', $order->title, ['class' => 'form-control', 'placeholder' => 'eg.Enter a topic'])}}
        </div>
        <div class="form-group">
            {{Form::label('Paper instructions', 'Paper instructions')}}
            {{Form::textarea('instructions', $order->instructions, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'How do you want it done'])}}
        </div>
        <div class="form-group">
            {{Form::label('Number of pages', 'Number of pages')}}
            {{Form::Number('pages', $order->pages, ['class' => 'form-control', 'placeholder' => 'Number of pages'])}}
        </div>
        <div class="form-group">
            {{Form::label('sources', 'sources')}}
            {{Form::Number('sources', $order->sources, ['class' => 'form-control', 'placeholder' => 'sources'])}}
        </div>
        <div class="form-group">
            {{Form::label('Powerpoint slides', 'powerpoint slides')}}
            {{Form::Number('slides', $order->slides, ['class' => 'form-control', 'placeholder' => 'slides'])}}
        </div>
        <hr>
        <small>Written on {{$order->created_at}} by {{$order->user->name}}</small>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>

</div>
@endsection