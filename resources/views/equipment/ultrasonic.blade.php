@extends('template.main')
@section('title','Ultrasonic Equipment Data -')
@section('header','Ultrasonic Equipment Data')
@section('additional-header')
<div>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addequipment">Tambah Equipment
        Baru</button>
</div>
@endsection
@section('content')
<!-- /.KPI Card Group -->
<div class="container-fluid">
    <div class="row mx-1 row-cols-1 row-cols-md-4">
        <!-- Activity Active Card-->
        <div class="col">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalActiveActi }}</h3>
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
        <!-- Equipment Active Card-->
        <div class="col">
            <div class="small-box bg-success gap-2">
                <div class="inner">
                    <h3>{{ $totalWorkUltra }}</h3>
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
        <!-- Product Today Card-->
        <div class="col">
            <div class="small-box bg-olive gap-2">
                <div class="inner">
                    <h3>{{ $inspCount }}</h3>
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
        <!-- Batch Production Card-->
        <div class="col">
            <div class="small-box bg-danger gap-2">
                <div class="inner">
                    <h3>{{ $batchCount }}</h3>
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
<!-- /.KPI Card Group -->

<!-- Equipment List Card -->
<div class="card mx-2">
    <!-- Card Header -->
    <div class="card-header">
        <a class="h4 font-weight-bold" data-card-widget="collapse">Equipment List</a>
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
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Aktivitas</th>
                    {{-- <th>Kapasitas</th> --}}
                    <th>Status</th>
                    <th class="fit"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ultrasonics as $ultra)
                    <tr>
                        <td>{{ $ultra->id}}</td>
                        <td>{{ $ultra->nama}}</td>
                        <td>{{ $ultra->tipe}}</td>
                        <td>
                            @foreach ($ultra->activity as $activity)
                                {{ $activity->nama }} 
                            @endforeach
                        </td>
                        {{-- <td>{{ $ultra->kapasitas}} Product/H</td> --}}
                        <td>{{ $ultra->status}}</td>
                        <th class="fit">
                            <a href="/eq_ultra_detail/{{ $ultra->id }}" class="btn btn-primary">Cek Detail</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.Equipment List card -->

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
                        <label for="id">ID</label>
                        <input class="form-control" type="hidden" name="id" placeholder="">
                    </div>
                    <div class="form-group" hidden>
                        <label for="category">Category</label>
                        <select class="form-control" id="category">
                            <option selected value="Ultrasonic">Ultrasonic</option>
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
