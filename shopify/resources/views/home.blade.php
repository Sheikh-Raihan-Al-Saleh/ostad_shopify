@extends('layout.layouts')
@section('content')
    <!-- You are: (shop domain name) -->
    <h3>Welcome to the dashboard</h3>
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection