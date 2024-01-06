@extends("template.main")
@section('title','Batch Dashboard -')
@section('header','Batch Dashboard')
@section('additional-header')
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addBatch">Tambah Batch
    Baru</button>
@endsection
@section('content')
<!-- Batch List Card -->
<div class="card mx-2">
    <!-- Card Header -->
    <div class="card-header">
        <a class="h4 font-weight-bold" data-card-widget="collapse">Batch List</a>
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
                    <th>Waktu Produksi</th>
                    <th>Total Product</th>
                    <th>Good Quality</th>
                    <th>Bad Quality</th>
                    <th class="fit"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batches as $bc)
                    <tr>
                        <td>{{ $bc->id }}</td>
                        <td>{{ $bc->created_at }}</td>
                        <td>{{ $bc->inspectionCount() }}</td>
                        <td>{{ App\Models\Inspection::countByQuality('Good', $bc->id) }}</td>
                        <td>{{ App\Models\Inspection::countByQuality('Bad', $bc->id) }}</td>
                        <th class="fit">
                            <a href="/bcdetail/{{ $bc->id }}" class="btn btn-primary">Cek Detail</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.Batch List card -->
<!-- Modal add-->
<div class="modal fade" id="addBatch" tabindex="-1" aria-labelledby="addBatch" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Batch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group" hidden>
                        <label for="id">ID</label>
                        <input class="form-control" type="hidden" name="id" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="aktivitas">Aktivitas</label>
                        <select class="form-control" id="aktivitas" required>
                            <option value="Dept. Billet">Dept. Billet</option>
                            <option value="Dept. Ingot">Dept. Ingot</option>
                            <option value="Dept. Alloy">Dept. Alloy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="waktuProduksi">Waktu Produksi</label>
                        <input class="form-control" type="datetime-local" name="waktuProduksi" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input class="form-control" type="number" name="batch" min="1"
                            placeholder="Masukkan Nomor Batch" required>
                    </div>
                    <div class="form-group">
                        <label for="product">Pilih Produk</label>
                        <select class="form-control" id="product" multiple="multiple">
                            <option value="123">123</option>
                            <option value="124">124</option>
                            <option value="125">125</option>
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
                    title: 'Batch Data',
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
        $('#product').select2({
        placeholder: 'Tulis Keterangan',
        allowClear: true,
        tags: true,
        tokenSeparators: [',']
        })
    });
</script>
@endsection
