@extends('layouts.master')

@section('title','Dashboard')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('kelas.create')}}" class="btn btn-primary">Add New</a>
                {{--@include('layouts.partial.msg')--}}
             @include('layouts.includes.message')
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">All Siswa</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table id="table" class="table"  cellspacing="0" width="100%">
                            <thead class="text-primary">
                             <th>ID</th>
                             <th>Nama Kelas</th>
                             <th>Jurusan</th>
                             <th>Action</th>
                         </thead>
                         <tbody>
                           @foreach($kelass as $key=>$kelas)
                           <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $kelas->nama_kelas }}</td>
                            <td>{{ $kelas->jurusan }}</td>
                            <td><a href="{{route('kelas.edit',$kelas->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i>
                                </a>
                                <form method="POST" id="delete-form-{{$kelas->id}}" action="{{route('kelas.destroy',$kelas->id)}}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Yakin ingin dihapus!?!?!?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$kelas->id}}').submit();
                                }else{
                                     event.preventDefault();
                                }">
                                <i class="material-icons">delete</i>
                            </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@endpush
