@extends('layouts.app')

@section('content')
<div class="container p-5">
    <form action="{{ route('pageEditSubmit', $page->id)}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm 12">
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок</label>
                    <input type="title" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{ $page->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-controll text-editor" name="description" id="description">{!! $page->description !!}</textarea>
                </div>
                <div class="justify-content-between d-flex">
                    <button type="submit" class="btn btn-primary">Изменить</button>
                    <a href="{{ url()->previous() }}" class="btn btn-default">Назад</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection