@extends('Layout.layout')

@section('Content')
    
    @foreach ($tasks as $task)
        <div class="row" style="padding:5mm">
            <div class="col-2">
                <strong>{{$task->title}}</strong>
            </div>
            
            <div class="col-7">
                <p>{{$task->body}}</p>
            </div>

            <div class="col-3"  style=" text-align:center">
                @if( $task->done == 1 )
                    <input type="checkbox" checked disabled>
                @else
                    <input type="checkbox" disabled>
                @endif
            </div>

        </div>
    @endforeach
@endsection