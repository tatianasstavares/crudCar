<h1>Brands List</h1>
<a class="btn btn-primary" href="/brands/export" role="button">Export</a>
<form action="{{ url('brands/import/') }}" method="POST" enctype="multipart/form-data">
     @csrf
        <div>
            <button class="btn btn-success" type="submit">Import User Data</button><br>
        <input type="file" name="file" class="form-control">
        </div>
</form>
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}<button
            type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                aria-hidden="true">&times;</span> </button> </div>
@endif
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col"> Name</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brands as $brand)
            <tr>
                <td> {{ $brand->name }}</td>
                <td>{{ $brand->created_at }}</td>
                <td>{{ $brand->updated_at }}</td>
                {{-- <td>
                    @if ($player->retired)
                        <i class="bi bi-emoji-smile"></i>
                    @else
                        <i class="bi bi-emoji-smile-upside-down-fill"></i>
                    @endif
                </td> --}}

           <td> <a class="btn btn-success" href="{{ url('brands/' . $brand->id) }}" role="button">Show</a> </td>
                <td>
                    @auth
                     <a type="button" href="{{ url('brands/' . $brand->id . '/edit') }}" class="btn btn-primary">Edit</a>
                    @endauth
                </td>
                <td>
                    <form action="{{url('brands/' . $brand->id)}}" method="POST">
                        @csrf    @method('DELETE')
                        @auth
                         <button type="submit" class="btn btn-danger">Delete</button>
                        @endauth
                    </form>
                </td>
            </tr>
        @endforeach
            @auth
                <a type="button" href="{{ url('brandsDelete') }}" class="btn btn-danger">Delete All</a>
            @endauth

    </tbody>
</table>

{{-- {{ $brands->links() }} --}}
