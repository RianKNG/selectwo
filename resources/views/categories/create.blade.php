@extends('layout.template')

@section('content')

 
   
<form action="/category/store" method="post"">
    @csrf
    <div class="card">
        <div class="card-body">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Masukan Kategori</label>
            <input type="text" name="name" class="form-control form-control-lg"> 
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection



