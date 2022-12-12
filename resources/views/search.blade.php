@extends('layouts.app')

@section('content')
<div class="container">
    <Form action="search1"method="get">
        <input type="text" name="text" placeholder=""/>
        <button type="submit">Buscar</button>
</Form>        
</div>
@endsection