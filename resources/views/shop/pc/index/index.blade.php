@extends('shop')
@section("content")
    <ul class="list-group">
        @foreach($data as $item)
            <li class="list-group-item">
                @if($item->created_at)
                    <span class="badge"> {{$item->created_at->toDateString()}}</span>
                @endif
                <a href="/shop/show/{{$item->id}}">{{$item->name}}</a>
                [{{$item->cat->name}}]
            </li>
        @endforeach
    </ul>
    {{$data->links()}}
@endsection