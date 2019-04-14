@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @else
                <div class="alert alert-info" role="alert"">お気に入りがありません。</div>
            @endif
        </div>
    </div>
@endsection
{{ $microposts->render('pagination::bootstrap-4') }}