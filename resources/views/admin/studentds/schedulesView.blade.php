
@extends('admin.layout')
@section('content')
<div class="container  mt-5">

@include('front.inc.errors')
<form action="{{ route('schedulesView.upload')}}" method="post" class="myForm" enctype="multipart/form-data">
@csrf
         
  <div class="mb-3 d-flex form-control">
  <select name="name" id="">
  <option value="نظم">القسم</option>
  <option value="نظم">نظم</option>
  <option value="كهربا">كهربا</option>
  <option value="عماره">عماره</option>
  <option value="تخطيط">تخطيط</option>

  </select>
    <!-- <input type="text" name="name" class="form-control" placeholder="القسم" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
  </div>
  <div class="mb-3">
  <input type="file" id="file-input" onchange="loadPreview(this)" name="img[]"   multiple/>
    <!-- <input  class="form-control" name="img"  type="file"  id="exampleInputPassword1"> -->
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection()