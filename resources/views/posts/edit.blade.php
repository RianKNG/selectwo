@extends('layout.template')
 
@section('content')
<form action="/post/update/{{$post->id}}" method="post">
  @csrf
  <div class="form-group">
    <label for="title">NAME</label>
    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
  </div>
  <div class="form-group">
  <div class="col-sm-10">
    
      <label for="about">categories</label>
        <select class="categories" name="categories[]" multiple="multiple">
            <option value="">--- categories ---</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach    
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="description">Deskripsi</label>
    <input type="text" name="description" class="form-control" value="{{ $post->description }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@php
    $category_ids=[];
@endphp
@foreach ($post->categories as $category)
    @php
        array_push($category_ids,$category->id)
    @endphp


@endforeach
<script>
  $(document).ready(function() {
    $('.categories').select2();
    data =[];
    data = <?php echo json_encode($category_ids); ?>;
    $('.categories').val(data);
    $('.categories').trigger('change');
  });
</script>
@endsection




