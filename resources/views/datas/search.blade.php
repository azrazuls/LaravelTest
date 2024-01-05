@extends('datas.layout')
@section('content')
 
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price (RM)</th>
                    <th>Details</th>
                    <th>Publish</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->details }}</td>
                    <td>
                        @if($item->publish == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>
    
                    <td>
                        <a href="{{ url('/data/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
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
    <a href="{{ url('/data') }}" class="btn btn-secondary mt-3">
        <i class="fa fa-arrow-left"></i> Back to Initial Products
    </a>
 
@stop
