@extends('layout.template')

@section('content')
<form action="/post/store" method="post">
  @csrf
  <div class="form-group">
    <label for="title">NAME</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="col-sm-12">
    <div class="form-group col-sm-12">
      <label for="about">categories</label>
        <select class="categories" name="categories[]" multiple="multiple">
            <option value="">--- categories ---</option>
            @foreach ($categories as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach    
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="description">Deskripsi</label>
    <input type="text" name="description" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.categories').select2();
  });
</script>
@endsection



