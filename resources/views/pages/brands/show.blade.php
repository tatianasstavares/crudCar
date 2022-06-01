@extends('master.main')

@section('content')



    @component('components.brands.form.show', [
                       'brand' =>$brand,
                   ])
    @endcomponent

@endsection