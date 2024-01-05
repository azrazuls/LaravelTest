@extends('datas.layout')
@section('content')

<div class="card">
    <div class="card-body">
        <h1>Show Product</h1>

        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="btn btn-primary" style="float: right;">Back</a>

        <div class="card-body">
            <h5 class="card-title"><b>Name:</b> {{ $datas->name }}</h5>
            <p class="card-text"><b>Price (RM):</b> {{ $datas->price }}</p>
            <p class="card-text"><b>Details:</b> {{ $datas->details }}</p>
            <p class="card-text"><b>Publish: </b>
                @if($datas->publish == 1)
                    <span class="badge badge-success" style="color: black; font-size: 16px">Yes</span>
                @else
                    <span class="badge badge-danger" style="color: black; font-size: 16px">No</span>
                @endif
            </p>
        </div>
    </div>
</div>

@endsection
