@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new questionnaire') }}</div>

                <div class="card-body">

                    <form action="/questionnaires" method="post">
                     @csrf
                     <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Title">
                        <small id="titleHelp" class="form-text text-muted">Give an eye catching title for your questionnaire.</small>

                        @error('title')
                           <p class="text-danger">{{ $message }}</p>
                        @enderror
                     </div>

                     <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="purpose">
                        <small id="purposeHelp" class="form-text text-muted">Giving a purpose to the questionnaire will make more impact.</small>

                        @error('purpose')
                           <p class="text-danger">{{ $message }}</p>
                        @enderror
                     </div>

                     <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
