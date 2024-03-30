@extends('base')
@section('title')
    Главная
@endsection

@section('content')
    <div class="jumbotron p-4 p-md-5 text-dark rounded bg-white">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic font-weight-bold">Улыбок тебе, дед Макар</h1>
            <p class="lead my-3">Мммм, сейчас бы динамически подгружать контент, но я пока так не умею</p>
            <div class="btn-group">
                <button type="button" class="btn btn-danger text-white btn-outline-secondary" href="/tap">Тыкалка</button>
            </div>
        </div>
    </div>
@endsection
