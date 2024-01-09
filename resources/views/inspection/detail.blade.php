@extends('template.main')
@section('title','Inspection '.$inspec_detail->id.' Details -')
@section('header','Inspection '.$inspec_detail->id.' Details')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editInspection">Edit</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#deleteInspection">Delete</a>
        </div>
    </div>
    <table class="table border-0 my-3">
        <tbody>
            <tr>
                <td class="fit"><b>ID</b></td>
                <td class="fit">:</td>
                <td>{{ $inspec_detail->id }}</td>
            </tr>
            <tr>
                <td class="fit"><b>Activity</b></td>
                <td class="fit">:</td>
                <td>{{ $inspec_detail->activity->nama }}</td>
            </tr>
            <tr>
                <td class="fit"><b>Inspection Date</b></td>
                <td class="fit">:</td>
                <td>{{ $inspec_detail->created_at->format('Y-m-d') }}</td>
            </tr>
            <tr>
                <td class="fit"><b>Inspection Time</b></td>
                <td class="fit">:</td>
                <td>{{ $inspec_detail->created_at->format('h:i A') }}</td>
            </tr>
            <tr>
                <td class="fit"><b>Batch</b></td>
                <td class="fit">:</td>
                <td>Batch {{ $inspec_detail->batch->id }}</td>
            </tr>
            {{-- <tr>
                <td class="fit"><b>Total Product</b></td>
                <td class="fit">:</td>
                <td>43</td>
            </tr> --}}
            <tr>
                <td class="fit"><b>Quality</b></td>
                <td class="fit">:</td>
                <td>{{ $inspec_detail->quality }}</td>
            </tr>
            {{-- <tr>
                <td class="fit"><b>Bad Product</b></td>
                <td class="fit">:</td>
                <td>1</td>
            </tr> --}}
            <tr>
                <td class="fit"><b>Keterangan</b></td>
                <td class="fit">:</td>
                <td>{{ $inspec_detail->keterangan }}</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal Edit-->
<div class="modal fade" id="editInspection" tabindex="-1" aria-labelledby="editInspection" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Inspection Baru</h5>
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
                        <label for="aktivitas">Activity</label>
                        <select class="form-control" id="aktivitas" required>
                            <option value="Act. Billet">Act. Billet</option>
                            <option value="Act. Ingot">Act. Ingot</option>
                            <option value="Act. Alloy">Act. Alloy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" type="date" name="date" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input class="form-control" type="time" name="time" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input class="form-control" type="number" name="batch" min="1"
                            placeholder="Masukkan Nomor Batch" required>
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
<!-- Modal Edit -->

<!-- Modal Delete-->
<div class="modal fade" id="deleteInspection" tabindex="-1" aria-labelledby="deleteInspection" aria-hidden="true">
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
                                <td class="fit"><b>ID</b></td>
                                <td class="fit">:</td>
                                <td>2345325</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Activity</b></td>
                                <td class="fit">:</td>
                                <td>Dept. Billet</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Inspection Date</b></td>
                                <td class="fit">:</td>
                                <td>1-1-2024</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Batch</b></td>
                                <td class="fit">:</td>
                                <td>Batch 23</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Total Product</b></td>
                                <td class="fit">:</td>
                                <td>43</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Good Product</b></td>
                                <td class="fit">:</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Bad Product</b></td>
                                <td class="fit">:</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Keterangan</b></td>
                                <td class="fit">:</td>
                                <td>Ketebalan, Cacat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    {{-- Jadiin Inactive aja jgn delete record.
                        jadi ntar di db tambahin column status,
                        trus kalo mau nampilin select yg statusnya active --}}
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
