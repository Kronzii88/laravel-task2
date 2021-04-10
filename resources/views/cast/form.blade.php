@extends('layout.master')

@section('title-page')
    <h3>Form Tambah Data</h3>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Isi Data Pemeran</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action = "{{url('/cast')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name= "name" value = "{{old('name')}}">
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Age</label>
          <input type="text" class="form-control" id="age" placeholder="enter age" name= "age" value = "{{old('age')}}">
          @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Bio</label>
          <div class="input-group">
          <textarea class="form-control" id="Textarea" placeholder="Tulis Biografi singkat" name="bio" value = "{{old('bio')}}"></textarea>
          @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
