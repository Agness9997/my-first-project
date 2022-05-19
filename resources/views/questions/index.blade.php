@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Questions') }}</div>

                <div class="card-body">


@foreach($questions as $question)
<div class="media">
    <div class="media-body">
        <h3 class="mt-0">{{$question->title}}</h3>
                        {{Str::limit($question->body, 500)}}
                    </div>
                </div>
                <hr>
            @endforeach

<div class="mx-auto">

    {{ $questions->links()}}

</div>


        </div>
    </div>
</div>
@endsection