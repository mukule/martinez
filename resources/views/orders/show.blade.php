@extends('layouts.dash')

@section('content')
    <a href="/orders" class="btn btn-default">Go Back <<<</a>
    <h1>{{$order->title}}</h1>
    <div>
        <ul class="list-group">
            <li class="list-group-item">
                {{$order->level}}
            </li>
            <li class="list-group-item">
                {{$order->type}}
            </li>
            <li class="list-group-item">
                {{$order->subject}}
            </li>
            <li class="list-group-item">
                {{$order->title}}
            </li>
            <li class="list-group-item">
                {!!$order->instructions!!}
            </li>
            <li class="list-group-item">
                {{$order->pages}}
            </li>
            <li class="list-group-item">
                {{$order->sources}}
            </li>
            <li class="list-group-item">
                {{$order->slides}}
            </li>
        </ul>
    </div>
    <hr>
    <small>Ordered on {{$order->created_at}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/orders/{{$order->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection