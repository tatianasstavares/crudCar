@extends('master.main')

@section('content')


    @component('components.brands.table.brands', [
                       'brands' =>$brands,           #### Muita atenção, esse valor recebido, tem que ser identico a chave que foi passada no controller!!!
                   ])
    @endcomponent

@endsection