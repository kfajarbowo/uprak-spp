@extends('layouts.master')

@section('title','Create')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.includes.message')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('spp.update',$spp->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Kelas</label>
                                            <select class="form-control" name="nama_kelas">
                                                @foreach($kelass as $kelas)
                                                    <option {{ $kelas->id == $spp->kelas->id ? 'selected' : '' }} value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" name="price" value="{{ $spp->price }}">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('spp.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
