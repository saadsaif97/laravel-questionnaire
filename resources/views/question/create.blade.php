{{-- passing data from form as --}}
{{-- $questions['question'] = 'ding';
     $answers[]['answers'] = 'first';
     $answers[]['answers'] = 'second';
     $answers[]['answers'] = 'third';
     $answers[]['answers'] = 'fourth'; --}}


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3><span class="text-muted">Questionnaire:</span> <strong class="text-muted">{{ $questionnaire->title }}</strong></h3>

            <div class="card">
                <div class="card-header">{{ __('Create new Question') }}</div>

                <div class="card-body">

                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                     @csrf
                     <div class="form-group">
                        <label for="question">Question</label>
                        <input name="question[question]" type="text" class="form-control" value="{{ old('question.question') }}" id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                        <small id="questionHelp" class="form-text text-muted">Ask meaningfull and to-the-point questions for better result.</small>

                        @error('question.question')
                           <p class="text-danger">{{ $message }}</p>
                        @enderror
                     </div>

                     <fieldset>

                        <legend>Choices</legend>
                        <small id="choicesHelp" class="form-text text-muted">Give choices that give more insight into your question</small>

                        <div class="form-group">
                           <label for="answer1">Choice 1</label>
                           <input name="answers[][answer]" type="text" class="form-control" value="{{ old('answers.0.answer') }}" id="answer1" aria-describedby="choicesHelp" placeholder="Enter choice 1">

                           @error('answers.0.answer')
                              <p class="text-danger">{{ $message }}</p>
                           @enderror
                        </div>

                        <div class="form-group">
                           <label for="answer2">Choice 2</label>
                           <input name="answers[][answer]" type="text" class="form-control" value="{{ old('answers.1.answer') }}" id="answer2" aria-describedby="choicesHelp" placeholder="Enter choice 2">

                           @error('answers.1.answer')
                              <p class="text-danger">{{ $message }}</p>
                           @enderror
                        </div>

                        <div class="form-group">
                           <label for="answer3">Choice 3</label>
                           <input name="answers[][answer]" type="text" class="form-control" value="{{ old('answers.2.answer') }}" id="answer3" aria-describedby="choicesHelp" placeholder="Enter choice 3">

                           @error('answers.2.answer')
                              <p class="text-danger">{{ $message }}</p>
                           @enderror
                        </div>

                        <div class="form-group">
                           <label for="answer4">Choice 4</label>
                           <input name="answers[][answer]" type="text" class="form-control" value="{{ old('answers.3.answer') }}" id="answer4" aria-describedby="choicesHelp" placeholder="Enter choice 4">

                           @error('answers.3.answer')
                              <p class="text-danger">{{ $message }}</p>
                           @enderror
                        </div>

                     </fieldset>

                     <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
