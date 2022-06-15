<form method="POST" action="{{ url('brands') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <label for="name">Name</label>
        <input
        type="text"
        id="name"
        name="name"
        autocomplete="name"
        placeholder="Type Brand"
        class="form-control
        @error('name') is-invalid @enderror"
         value="{{ old('name') }}"
         required
        aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
        </span>@enderror


        {{-- <label for="address">Address</label>
        <input type="text" id="address" name="address" autocomplete="address" placeholder="Address"
            class="form-control
            @error('address') is-invalid @enderror" value="{{ old('address') }}"
            required aria-describedby="addressHelp"> --}}


        {{-- <small id="addressHelp" class="form-text text-muted">We'll never share your data
            with anyone else.</small>
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}
        {{-- <label for="validationTextarea">Textarea</label>
        <textarea type="text" id="description" name="description" autocomplete="description" placeholder="Your Description"
            class="form-control
        @error('description') is-invalid @enderror" required
            aria-describedby="descriptionHelp">{{ old('description') }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}
    {{-- <p>Retired</p>
        <div class="form-check" name="retired" role="checkbox" >
            <input class="form-check-input" type="radio" name="retired" id="flexRadioDefault1" value="1">
            <label class="form-check-label" for="flexRadioDefault1">
                YES
            </label>
        </div>
        <div class="form-check" name="retired" role="checkbox" >
            <input class="form-check-input" type="radio" name="retired" id="flexRadioDefault2" checked value="0">
            <label class="form-check-label" for="flexRadioDefault2">
                NO
            </label>
        </div> --}}

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


    </div>
    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </div>
</form>
