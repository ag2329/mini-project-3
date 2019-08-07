@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Questions


                        <a class="btn btn-primary float-right" href="{{ route('showquestions') }}">
                            Show All Question and Answers
                        </a>

                        <div class="card-body">

                            <div class="card-deck">
                                @forelse($questions as $question)
                                    <div class="col-sm-4 d-flex align-items-stretch">
                                        <div class="card mb-3 ">
                                            <div class="card-header">
                                                <small class="text-muted">




                                                </small>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text"> <b>Question: {{$question->body}}</b></p>
                                            </div>

                                            <table class="table table-striped table-bordered">
                                                @foreach ($question->answers as $answer)

                                                    <tr>

                                                        <th><strong>Answer: {{ $answer->body }}</strong></th>

                                                    </tr>


                                                @endforeach
                                            </table>
                                            <div class="card-footer">
                                                <p class="card-text">


                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    There are no questions to view, you can  create a question.
                                @endforelse


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                {{ $questions->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection