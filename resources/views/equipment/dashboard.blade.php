@extends('template.main')
@section('title','Equipment Dashboard -')
@section('header','Equipment Dashboard')
@section('additional-header')
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addequipment">Tambah Equipment</button>
@endsection
@section('content')
<!-- Conveyor Card Group -->
<div class="card mx-2">
    <!-- Card Header -->
    <div class="card-header">
        <a class="h4 font-weight-bold" data-card-widget="collapse">Conveyor</a>
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
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Activity Active</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-success gap-2">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Equipment Active</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-pallet"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-olive gap-2">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Product Today</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-danger gap-2">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Batch Production</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.Conveyor Card Group -->
<!-- Ultrasonic Card Group -->
<div class="card mx-2">
    <!-- Card Header -->
    <div class="card-header">
        <a class="h4 font-weight-bold" data-card-widget="collapse">Ultrasonic</a>
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
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Activity Active</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-success gap-2">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Equipment Active</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-pallet"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-olive gap-2">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Product Today</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-danger gap-2">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Batch Production</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.Ultrasonic Card Group -->
<!-- Modal add-->
<div class="modal fade" id="addequipment" tabindex="-1" aria-labelledby="addequipment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Equipment Baru</h5>
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
                        <label for="category">Category</label>
                        <select class="form-control" id="category">
                            <option>Ultrasonic</option>
                            <option>Conveyor</option>
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
                            <option>Act. Billet</option>
                            <option>Act. Ingot</option>
                            <option>Act. Alloy</option>
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
                    title: 'Ultrasonic Equipment Data',
                    messageBottom:'Copyright© ' + new Date().getFullYear() + ' by Inalum'
                }
            ],
            initComplete: function() {
            $(".dataTables_filter input").addClass("form-control form-control-sm");
            }
        });
    });
</script>
@endsection
