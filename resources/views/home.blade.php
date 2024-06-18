@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Pilih Jenis Bisnis</h1>
            <form action="{{ route('rating') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="business_type">Pilih Jenis Bisnis:</label>
                    <select id="business_type" name="business_type" class="form-control">
                        @foreach ($businessTypes as $type)
                            <option value="{{ $type->business_type }}">{{ $type->business_type }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary mt-3">Submit</button>
            </form>
        </div>
    </section>
@endsection
