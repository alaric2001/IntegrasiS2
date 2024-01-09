@extends('template.main')
@section('title', $detail_conv->nama .' Equipment Details -')
@section('header', $detail_conv->nama .' Equipment Details')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editequipment">Edit</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#deleteequipment">Delete</a>
        </div>
    </div>
    <table class="table border-0 my-3">
        <tbody>
            <tr>
                <td><b>ID</b></td>
                <td>:</td>
                <td>{{ $detail_conv->id }}</td>
            </tr>
            <tr>
                <td class="fit"><b>Equipment Name</b></td>
                <td class="fit">:</td>
                <td>{{ $detail_conv->nama }}</td>
            </tr>
            <tr>
                <td><b>Aktivitas</b></td>
                <td>:</td>
                <td>
                    @foreach ($detail_conv->activity as $activity)
                        {{ $activity->nama }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td><b>Kapasitas</b></td>
                <td>:</td>
                <td>{{ $detail_conv->kapasitas }}</td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>:</td>
                <td>{{ $detail_conv->status }}</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="editequipment" tabindex="-1" aria-labelledby="editequipment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Equipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group" hidden>
                        <label for="id">ID</label>
                        <input class="form-control" type="hidden" name="id" placeholder="">
                    </div>
                    <div class="form-group" hidden>
                        <label for="category">Category</label>
                        <select class="form-control" id="category">
                            <option value="Ultrasonic">Ultrasonic</option>
                            <option value="Conveyor">Conveyor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type">
                            <option>NewXT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="aktivitas">Aktivitas</label>
                        <select class="form-control" id="aktivitas">
                            <option value="Act. Billet">Act. Billet</option>
                            <option value="Act. Ingot">Act. Ingot</option>
                            <option value="Act. Alloy">Act. Alloy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="capacity">Kapasitas/Jam</label>
                        <input class="form-control" type="number" name="capacity" min="1"
                            placeholder="Masukkan Kapasitas per Jam">
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" checked>
                        <label class="custom-control-label" for="status">Status on/off</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->

<!-- Modal Delete-->
<div class="modal fade" id="deleteequipment" tabindex="-1" aria-labelledby="deleteequipment" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center align-items-center justify-content-center mx-0">
                <center><h5 class="modal-title text-center">Konfirmasi Hapus</h5></center>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    @csrf
                    <table class="table border-0 my-3">
                        <tbody>
                            <tr>
                                <td><b>ID</b></td>
                                <td>:</td>
                                <td>2345325</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Equipment Name</b></td>
                                <td class="fit">:</td>
                                <td>Conveyor XYZ</td>
                            </tr>
                            <tr>
                                <td><b>Equipment Type</b></td>
                                <td>:</td>
                                <td>NewXT</td>
                            </tr>
                            <tr>
                                <td><b>Aktivitas</b></td>
                                <td>:</td>
                                <td>Act. Billet</td>
                            </tr>
                            <tr>
                                <td><b>Kapasitas</b></td>
                                <td>:</td>
                                <td>53 product/jam</td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>:</td>
                                <td>Active</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Delete -->
@endsection
