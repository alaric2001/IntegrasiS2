@extends('template.main')
@section('title','<nomor product> Product Details -')
@section('header', '<nomor product> Product Details')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editProduct">Edit</a>
        </div>
        <div class="col">
            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#deleteProduct">Edit</a>
        </div>
    </div>
    <table class="table border-0 my-3">
        <tbody>
            <tr>
                <td class="fit"><b>ID</b></td>
                <td class="fit">:</td>
                <td>2345325</td>
            </tr>
            <tr>
                <td class="fit"><b>Product Date</b></td>
                <td class="fit">:</td>
                <td>1-1-2024</td>
            </tr>
            <tr>
                <td class="fit"><b>Product Time</b></td>
                <td class="fit">:</td>
                <td>12:00 AM</td>
            </tr>
            <tr>
                <td class="fit"><b>Batch</b></td>
                <td class="fit">:</td>
                <td>Batch 23</td>
            </tr>
            <tr>
                <td class="fit"><b>Quality</b></td>
                <td class="fit">:</td>
                <td>Good</td>
            </tr>
            <tr>
                <td class="fit"><b>Keterangan</b></td>
                <td class="fit">:</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>

</div>
<!-- Modal Edit-->
<div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="editProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
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
                        <label for="timestamp">Date</label>
                        <input class="form-control" type="datetime-local" name="timestamp" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="badProductCheckbox">
                            <label class="custom-control-label" for="badProductCheckbox">Produk Cacat?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        {{-- Ini disave Json soalnya untuk per option dipisahin biar kek tag gt bisa di analisis ntar --}}
                        <label for="keterangan">Keterangan</label>
                        <select class="form-control" id="keterangan" multiple="multiple">
                            <option value="Cacat">Cacat</option>
                            <option value="Ketebalan">Ketebalan</option>
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
<div class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="deleteProduct" aria-hidden="true">
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
                                <td class="fit"><b>Product Date</b></td>
                                <td class="fit">:</td>
                                <td>1-1-2024</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Product Time</b></td>
                                <td class="fit">:</td>
                                <td>12:00 AM</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Batch</b></td>
                                <td class="fit">:</td>
                                <td>Batch 23</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Quality</b></td>
                                <td class="fit">:</td>
                                <td>Good</td>
                            </tr>
                            <tr>
                                <td class="fit"><b>Keterangan</b></td>
                                <td class="fit">:</td>
                                <td>-</td>
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
