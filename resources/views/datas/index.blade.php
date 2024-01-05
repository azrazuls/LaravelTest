@extends('datas.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h1>Laravel</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/data/create') }}" class="btn btn-success btn-sm" title="Add New Product" style="float: right">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create New Product
                        </a>
                        <br/>
                        <br/>
                        
                        <!-- Search Form -->
                        <form action="{{ url('/search') }}" method="GET" role="search" style="margin-left: 80%">
                            <div class="input-group" style="width: 250px;">
                                <input type="text" class="form-control" name="search" placeholder="Search products" style="margin-right: 10px;">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-info btn-sm" style="width: 80px; height: 40px;">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th style="width: 120px;">Price (RM)</th> <!-- Add a custom class for styling -->
                                        <th>Details</th>
                                        <th>Publish</th>
                                        <th style="width: 200px;">Actions</th> <!-- Set a custom width for the Actions column -->
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td class="price-column">{{ $item->price }}</td> <!-- Add a custom class for styling -->
                                        <td>{{ $item->details }}</td>
                                        <td>{{ $item->publish == 1 ? 'Yes' : 'No' }}</td>
 
                                        <td>
                                            <a href="{{ url('/data/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button></a>
                                            <a href="{{ url('/data/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/data' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Back Button to Initial Products -->
                        @if(isset($search_text))
                            <a href="{{ url('/data') }}" class="btn btn-secondary mt-3">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
