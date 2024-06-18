@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Rating Aplikasi untuk {{ $businessType }}</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Aplikasi</th>
                        <th>Rating</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $app)
                        <tr>
                            <td>{{ $app->application_name }}</td>
                            <td>{{ $app->rating }}</td>
                            <td>{{ $app->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </section>
@endsection
