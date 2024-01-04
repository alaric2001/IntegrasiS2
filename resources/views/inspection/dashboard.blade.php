@extends("template.main")
@section('title','Inspection Dashboard -')
@section('header','Inspection Dashboard')
@section('additional-header')
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addInspection">Tambah Inspection
    Baru</button>
@endsection
@section('content')
<!-- Inspection List Card -->
<div class="card mx-2">
    <!-- Card Header -->
    <div class="card-header">
        <a class="h4 font-weight-bold" data-card-widget="collapse">Inspection List</a>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <!-- Maximize Button -->
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                    class="fas fa-expand"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <!-- Card Body -->
    <div class="card-body">
        <table id="example" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Inspection Date</th>
                    <th>Batch</th>
                    <th>Total Product</th>
                    <th>Good Quality</th>
                    <th>Bad Quality</th>
                    <th>Keterangan</th>
                    <th class="fit"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2342</td>
                    <td>1-1-2024</td>
                    <td>Batch 4</td>
                    <td>43</td>
                    <td>42</td>
                    <td>1</td>
                    <td>Ketebalan, Cacat</td>
                    <th class="fit">
                        <a href="/inspecdetail" class="btn btn-primary">Cek Detail</a>
                    </th>
                </tr>
                <tr>
                    <td>2342</td>
                    <td>1-1-2024</td>
                    <td>Batch 5</td>
                    <td>45</td>
                    <td>43</td>
                    <td>2</td>
                    <td>Cacat</td>
                    <th class="fit">
                        <a href="/inspecdetail" class="btn btn-primary">Cek Detail</a>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.Inspection List card -->
<!-- Modal add-->
<div class="modal fade" id="addInspection" tabindex="-1" aria-labelledby="addInspection" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Inspection</h5>
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
                    <div class="form-group">
                        <label for="aktivitas">Activity</label>
                        <select class="form-control" id="aktivitas">
                            <option value="Act. Billet">Act. Billet</option>
                            <option value="Act. Ingot">Act. Ingot</option>
                            <option value="Act. Alloy">Act. Alloy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" type="date" name="date" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input class="form-control" type="time" name="time" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input class="form-control" type="number" name="batch" min="1"
                            placeholder="Masukkan Nomor Batch">
                    </div>
                    <div class="form-group">
                        <label for="badProduct">Produk Cacat</label>
                        <select class="form-control" id="badProduct" multiple="multiple">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <select class="form-control" id="keterangan" multiple="multiple">
                            <option>Cacat</option>
                            <option>Ketebalan</option>
                        </select>
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
                    title: 'Inspection Data',
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
        $('#badProduct').select2({
        placeholder: 'Pilih Produk Cacat',
        allowClear: true,
        })
    });
</script>
<script>
    $(document).ready(function() {
        $('#keterangan').select2({
        placeholder: 'Tulis Keterangan',
        allowClear: true,
        tags: true,
        tokenSeparators: [',']
        })
    });
</script>
@endsection
