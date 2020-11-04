@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Balsavimo ID</th>
            <th scope="col">Balsavimo Pavadinimas</th>
            <th scope="col">Balsavimo Klausimas</th>
            <th scope="col">Atsakymai</th>
            <th scope="col">Balsai</th>
            <th scope="col">Kūrėjas</th>
            <th scope="col">Sukūrimo data</th>
            <th scope="col">Atnaujinimo data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($strawpolls as $strawpoll)
            <tr>
                <th scope="row">{{ $strawpoll->id }}</th>
                <td>{{ $strawpoll->name }}</td>
                <td>{{ $strawpoll->question }}</td>
                <td>{{ $strawpoll->answers }}</td>
                <td>{{ $strawpoll->votes }}</td>
                <td>{{ $strawpoll->creator }}</td>
                <td>{{ $strawpoll->created_at }}</td>
                <td>{{ $strawpoll->updated_at }}</td>
            </tr>
        </tbody>

    @endforeach
@endsection
