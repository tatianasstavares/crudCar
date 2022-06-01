@extends('master.main')

@section('content')


    @component('components.brands.form.edit', [
                       'brand' =>$brand,           #### Muita atenção, esse valor recebido, tem que ser identico a chave que foi passada no controller!!!
                   ])
    @endcomponent

@endsection