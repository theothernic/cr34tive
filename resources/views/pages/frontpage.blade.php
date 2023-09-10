@extends('layouts.centerstage')
@section('page.title', $page->title ?? 'frontpage')

@section('content')
    <div class="frontpage">
        <div class="brand"></div>

        <div class="columns">
            <div class="col">


                <div class="site">
                    <div class="brand noodles small">
                        <a class="brand-link" href="{{ route('noodles.index') }}"></a>
                    </div>

                    <p class="description">
                        These aren't your usual noods, friend.
                    </p>
                </div>

            </div>

            <div class="col">
               <div class="box">
                   &nbsp;
               </div>
            </div>
        </div>

        <div class="copyleft">Made with <span class="heart">&hearts;</span> by Nic Barr. &copy; {{ date('Y') }}. All rights reserved.</div>
    </div>
@endsection
