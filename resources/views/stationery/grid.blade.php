@extends('layouts.subpage')
@section('title', $page->title)


@section('content')
    <h1>{{ $page->headline ?? $page->title }}</h1>


    <section class="grid">
        @foreach($page->records as $record)
        @include('components.card', ['body' => sprintf('<a href="%s">%s</a>', $record->url, $record->fullTitle)])
        @endforeach
    </section>

@endsection
