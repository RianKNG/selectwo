@extends('layout.template')

@section('content')

<div class="card-md-4">
    <div class="card-body">
        
        <table class="table">
            <div class="col-md-12">
            <thead>
                <tr bgcolor='danger' align='center' widtd="6px">
                    <td width="5%">No</td>
                    <td width="25%">Nama</td>
                   
                </tr> 
            </thead>
            @php
            $no=1;
            @endphp
            <tbody>
                @foreach ($data as $index)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $index->name}}</td>
                </tr>  
                @endforeach
            </tbody>
        </table>  
    <div>          
<div>          
@endsection



