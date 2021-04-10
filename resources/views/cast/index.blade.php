@extends('layout.master')

@section('title-page')
    <h3>Data Tables</h3>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Cast Film</h3>
      <a class="btn btn-primary float-right" href="{{url('/cast/create') }}" role="button"><i class="far fa-plus-square"></i> Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>name</th>
          <th>age</th>
          <th>bio</th>
          <th>#</th>
        </tr>
        </thead>
        <tbody>
          @foreach($posts as $key => $post)
          <tr>
            <td>{{$post->name}}</td>
            <td>{{$post->age}}</td>
            <td>{{$post->bio}}</td>
            <td class="d-flex">
              <a href="/cast/{{$post->id}}" class="btn btn-info btn-sm mr-1">Show</a>
              <form action="/cast/{{$post->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger btn-sm">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection


@push('scripts')
    <script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
    $(function () {
        $("#example1").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
@endpush