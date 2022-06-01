<div class="container">
    <form method="" action="" class="border rounded p-4">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input
                disabled
                type="text"
                id="id"
                name="id"
                autocomplete="id"
                class="form-control"
                value="{{ $brand->id }}"
                required
                aria-describedby="idHelp"
            >
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input
                disabled
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                class="form-control"
                value="{{ $brand->name }}"
                required
                aria-describedby="nameHelp"
            >
            <small id="nameHelp" class="form-text text-muted"></small>
        </div>
    </form>
</div>