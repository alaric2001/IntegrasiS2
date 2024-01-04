@extends('template.main')
@section('title','<nama activity> Activity Details -')
@section('header', '<nama activity> Activity Details')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editActivity">Edit</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#deleteActivity">Delete</a>
        </div>
    </div>
    <table class="table border-0 my-3">
        <tbody>
            <tr>
                <td><b>ID</b></td>
                <td>:</td>
                <td>2345325</td>
            </tr>
            <tr>
                <td class="fit"><b>Nama</b></td>
                <td class="fit">:</td>
                <td>Dept Billet</td>
            </tr>
            <tr>
                <td><b>Location</b></td>
                <td>:</td>
                <td>Sector 23</td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>:</td>
                <td>Active</td>
            </tr>
            <tr>
                <td><b>Equipment</b></td>
                <td>:</td>
                <td>Conveyor X, Ultasonic Y</td>
            </tr>
            <tr>
                <td><b>Active Hour</b></td>
                <td>:</td>
                <td>8 hours 43 minute</td>
            </tr>
            <tr>
                <td><b>Jlm Batch</b></td>
                <td>:</td>
                <td>32 Batch</td>
            </tr>
            <tr>
                <td><b>Result</b></td>
                <td>:</td>
                <td>2341 Produk</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal Edit-->
<div class="modal fade" id="editActivity" tabindex="-1" aria-labelledby="editActivity" aria-hidden="true">
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
                        <label for="name">ID</label>
                        <input class="form-control" type="text" name="name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <select class="form-control" id="location" required>
                            <option>Sector 23</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" required>
                            <option>NewXT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Equipment">Equipment</label>
                        <select multiple="multiple" class="form-control select2-multiple" id="Equipment" required>
                            <option>Conveyor XYZ</option>
                            <option>Ultrasonic XYZ</option>
                        </select>
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
<div class="modal fade" id="deleteActivity" tabindex="-1" aria-labelledby="deleteActivity" aria-hidden="true">
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
                                <td class="fit"><b>Nama</b></td>
                                <td class="fit">:</td>
                                <td>Dept Billet</td>
                            </tr>
                            <tr>
                                <td><b>Location</b></td>
                                <td>:</td>
                                <td>Sector 23</td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>:</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td><b>Equipment</b></td>
                                <td>:</td>
                                <td>Conveyor X, Ultasonic Y</td>
                            </tr>
                            <tr>
                                <td><b>Active Hour</b></td>
                                <td>:</td>
                                <td>8 hours 43 minute</td>
                            </tr>
                            <tr>
                                <td><b>Jlm Batch</b></td>
                                <td>:</td>
                                <td>32 Batch</td>
                            </tr>
                            <tr>
                                <td><b>Result</b></td>
                                <td>:</td>
                                <td>2341 Produk</td>
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
@section('additional-script')
<script>
    $(document).ready(function() {
        $('.select2-multiple').select2({
        placeholder: 'Pilih Equipment',
        allowClear: true
        })
    });
</script>
@endsection
