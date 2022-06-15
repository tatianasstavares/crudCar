<form method="POST" action="{{ url("brands/{$brand->id}") }}">
    @method("PUT")
    @csrf
    <div class="form-group col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <label for="name">Name</label>
        <input type="text"
        id="name" name="name"
        autocomplete="name"
        value="{{$brand->name}}"
        placeholder="Type yourname"
        class="form-control
        @error('name') is-invalid @enderror" value="{{ old('name') }}" required
            aria-describedby="nameHelp">

    </div>
    <img class="w-100 img-responsive" src="{{asset('storage/'.$brand->image) }}" alt="" title=""></a>

    <div class="form-group">
        <label for="name">Image</label>
        <input
            type="file"
            id="image"
            name="image"
            autocomplete="image"
            class="form-control
            @error('image') is-invalid @enderror"
            value="{{old('image') }}"
            required>

            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message }}</strong>
        </span>
        @enderror
    </div>


    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </div>
</form>
