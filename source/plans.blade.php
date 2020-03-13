@extends('_layouts.master')

@section('content')

<plans-component :prop_plans="{{ $plans->values() }}"></plans-component>

@endsection