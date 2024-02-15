@extends('layouts.subpage')
@section('title', 'Stationery Index')


@section('content')
    <div class="flex columns">
        <section class="pens flex-1">
            <h2>Latest Pens</h2>
            <ul class="pens-list">
                @unless($page->pens->isEmpty())
                    @foreach($page->pens as $pen)
                        <li class="pen"><a href="{{ $pen->url }}">{{ $pen->fullTitle }}</a></li>
                    @endforeach
                @else
                    <li class="empty">No pens available for display at the moment</li>
                @endunless
            </ul>
        </section>
        <section class="inks flex-1">
            <h2>Latest Inks</h2>
            <ul class="inks-list">
                @unless($page->inks->isEmpty())
                @foreach($page->inks as $ink)
                <li class="ink"><a href="{{ $ink->url }}">{{ $ink->fullTitle }}</a></li>
                @endforeach
                @else
                <li class="empty">No inks available for display at the moment</li>
                @endunless
            </ul>
        </section>
    </div>

    <div class="counts">
        There are <strong><span class="pen-count">{{ $page->totalPens }} pens</span></strong>,
        <strong><span class="ink-count">{{ $page->totalInks }} inks</span></strong> currently in the collection.
    </div>
@endsection
