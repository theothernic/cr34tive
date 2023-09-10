@extends('layouts.centerstage')
@section('page.title', $page->title ?? 'frontpage')

@section('content')
    <div class="frontpage">
        <div class="brand"></div>

        <div class="columns">
            <div class="col">
                <span class="brand noodles small"></span>
                These aren't your usual noods, friend.
            </div>
        </div>

        <div class="copyleft">Made with &hearts; by Nic Barr. &copy; {{ date('Y') }}. All rights reserved.</div>
    </div>
@endsection
