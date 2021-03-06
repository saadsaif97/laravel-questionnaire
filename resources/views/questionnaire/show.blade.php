@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ $questionnaire->title }}</div>

                <div class="card-body">

                  <p>{{ $questionnaire->purpose }}</p>
                  <a href="/questionnaires/{{ $questionnaire->id }}/questions/create" class="btn btn-dark">Create new Question</a>
                  
                </div>
            </div>

            @foreach($questionnaire->questions as $question)
                <div class="card my-3">


                    <div class="card-header">{{ $question->question }}</div>

                    <div class="card-body">

                        <ul class="list-group">

                            @foreach($question->answers as $answer)
                                <li class="list-group-item">{{ $answer->answer }}</li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
