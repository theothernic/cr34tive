@extends('layouts.subpage')
@section('title', 'Stationery Index')


@section('content')
    <div class="flex columns">
        <section class="pens flex-1">
            <h2>Latest Pens</h2>
        </section>
        <section class="inks flex-1">
            <h2>Latest Inks</h2>
            <ul class="inks-list">
                @unless($page->inks->isEmpty())
                @foreach($page->inks as $ink)
                <li data-id="{{ $ink->id }}"><a href="{{ $ink->url }}">{{ $ink->fullTitle }}</a></li>
                @endforeach
                @endunless
            </ul>
        </section>
    </div>
@endsection
