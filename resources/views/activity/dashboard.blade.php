@extends("template.main")
@section('title','Activity Dashboard -')
@section('header','Activity Dashboard')
@section('additional-header')
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addActivity">Tambah Activity
    Baru</button>
@endsection
@section('content')
<div class="container-fluid">
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Location</th>
                <th>Equipment</th>
                <th>Active Hour</th>
                <th>Jlm Batch</th>
                <th>Result</th>
                <th>Status</th>
                <th class="fit"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2345325</td>
                <td>Dept BIllet</td>
                <td>Sector 23</td>
                <td>Conveyor X, Ultrasonic Y</td>
                <td>8 hours 43 minute</td>
                <td>32 Batch</td>
                <td>2341 Produk</td>
                <td>Active</td>
                <th class="fit">
                    <a href="/acdetail" class="btn btn-primary">Cek Detail</a>
                </th>
            </tr>
            <tr>
                <td>2345325</td>
                <td>Dept BIllet</td>
                <td>Sector 23</td>
                <td>Conveyor X, Ultrasonic Y</td>
                <td>8 hours 43 minute</td>
                <td>32 Batch</td>
                <td>2341 Produk</td>
                <td>Active</td>
                <th class="fit">
                    <a href="/acdetail" class="btn btn-primary">Cek Detail</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal add-->
<div class="modal fade" id="addActivity" tabindex="-1" aria-labelledby="addActivity" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Activity Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group" hidden>
                        <label for="name">ID</label>
                        <input class="form-control" type="text" name="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <select class="form-control" id="location">
                            <option>Sector 23</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type">
                            <option>NewXT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Equipment">Equipment</label>
                        <select multiple="multiple" class="form-control select2-multiple" id="Equipment">
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
<!-- Modal Add -->
@endsection
@section('additional-script')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            dom:
                "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                {
                    extend:'csv',
                    text: 'Export CSV',
                    split:['excel', 'pdf']
                },
                {
                    extend:'print',
                    title: 'Activity Data',
                    messageBottom:'Copyright© ' + new Date().getFullYear() + ' by Inalum'
                }
            ],
            initComplete: function() {
            $(".dataTables_filter input").addClass("form-control form-control-sm");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.select2-multiple').select2({
        placeholder: 'Pilih Equipment',
        allowClear: true
        })
    });
</script>
@endsection
