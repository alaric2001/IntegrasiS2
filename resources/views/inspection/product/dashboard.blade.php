@extends("template.main")
@section('title','Product Dashboard -')
@section('header','Product Dashboard')
@section('additional-header')
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addProduct">Tambah Product
    Baru</button>
@endsection
@section('content')
<!-- Product List Card -->
<div class="card mx-2">
    <!-- Card Header -->
    <div class="card-header">
        <a class="h4 font-weight-bold" data-card-widget="collapse">Product List</a>
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
                    <th>Tipe Produk</th>
                    <th>Batch</th>
                    <th>Quality</th>
                    <th class="fit"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2342</td>
                    <td>1-1-2024 12:00 AM</td>
                    <th>Aluminium Billet</th>
                    <td>Batch 4</td>
                    <td>Good</td>
                    <th class="fit">
                        <a href="/prdetail" class="btn btn-primary">Cek Detail</a>
                    </th>
                </tr>
                <tr>
                    <td>2342</td>
                    <td>1-1-2024 12:00 AM</td>
                    <td>Aluminium Ingot</td>
                    <td>Batch 5</td>
                    <td>Bad</td>
                    <td>Cacat</td>
                    <th class="fit">
                        <a href="/prdetail" class="btn btn-primary">Cek Detail</a>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.Product List card -->
<!-- Modal add-->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Product Baru</h5>
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
                            <option selected disabled value="-">Pilih AKtivitas</option>
                            <option value="Dept. Ingot">Dept. Ingot</option>
                            <option value="Dept. Alloy">Dept. Alloy</option>
                            <option value="Dept. Billet">Dept. Billet</option>
                        </select>
                    </div>

                    <div class="form-group" id="component1Container">
                        <label id="componentLabel 1" for="component1">Component 1</label>
                        <input class="form-control" type="number" name="component1" min="1" placeholder="Enter Component 1" required>
                    </div>

                    <div class="form-group" id="component2Container">
                        <label id="componentLabel 2" for="component2">Component 2</label>
                        <input class="form-control" type="number" name="component2" min="1" placeholder="Enter Component 2" required>
                    </div>

                    <div class="form-group" id="component3Container">
                        <label id="componentLabel 3" for="component3">Component 3</label>
                        <input class="form-control" type="number" name="component3" min="1" placeholder="Enter Component 3" required>
                    </div>

                    <div class="form-group" id="component4Container">
                        <label id="componentLabel 4" for="component4">Component 4</label>
                        <input class="form-control" type="number" name="component4" min="1" placeholder="Enter Component 4" required>
                    </div>

                    <div class="form-group" id="component5Container">
                        <label id="componentLabel 5" for="component5">Component 5</label>
                        <input class="form-control" type="number" name="component5" min="1" placeholder="Enter Component 5" required>
                    </div>

                    <div class="form-group" id="component6Container" style="display: none;">
                        <label id="componentLabel 6" for="component6">Component 6</label>
                        <input class="form-control" type="number" name="component6" min="1" placeholder="Enter Component 6" required>
                    </div>

                    <div class="form-group" id="component7Container" style="display: none;">
                        <label id="componentLabel 7" for="component7">Component 7</label>
                        <input class="form-control" type="number" name="component7" min="1" placeholder="Enter Component 7" required>
                    </div>

                    <div class="form-group" id="component8Container" style="display: none;">
                        <label id="componentLabel 8" for="component8">Component 8</label>
                        <input class="form-control" type="number" name="component8" min="1" placeholder="Enter Component 8" required>
                    </div>

                    <div class="form-group" id="component9Container" style="display: none;">
                        <label id="componentLabel 9" for="component9">Component 9</label>
                        <input class="form-control" type="number" name="component9" min="1" placeholder="Enter Component 9" required>
                    </div>

                    <div class="form-group" id="component10Container" style="display: none;">
                        <label id="componentLabel 10" for="component10">Component 10</label>
                        <input class="form-control" type="number" name="component10" min="1" placeholder="Enter Component 10" required>
                    </div>

                    <script>
                                document.getElementById('component1Container').style.display = 'none';
                                document.getElementById('component2Container').style.display = 'none';
                                document.getElementById('component3Container').style.display = 'none';
                                document.getElementById('component4Container').style.display = 'none';
                                document.getElementById('component5Container').style.display = 'none';
                                document.getElementById('component6Container').style.display = 'none';
                                document.getElementById('component7Container').style.display = 'none';
                                document.getElementById('component8Container').style.display = 'none';
                                document.getElementById('component9Container').style.display = 'none';
                                document.getElementById('component10Container').style.display = 'none';
                        document.getElementById('aktivitas').addEventListener('change', function() {
                            var aktivitasValue = this.value;

                            // Hide all component form groups
                            if (aktivitasValue === '-') {
                            }

                            // Show component form groups based on aktivitas value
                            if (aktivitasValue === 'Dept. Ingot') {
                                document.getElementById('component1Container').style.display = 'block';
                                document.getElementById('component2Container').style.display = 'block';
                                document.getElementById('component3Container').style.display = 'block';
                                document.getElementById('component4Container').style.display = 'none';
                                document.getElementById('component5Container').style.display = 'none';
                                document.getElementById('component6Container').style.display = 'none';
                                document.getElementById('component7Container').style.display = 'none';
                                document.getElementById('component8Container').style.display = 'none';
                                document.getElementById('component9Container').style.display = 'none';
                                document.getElementById('component10Container').style.display = 'none';

                                // Change label and placeholder for each component
                                document.getElementById('componentLabel 1').textContent = 'Si';
                                document.getElementById('componentLabel 2').textContent = 'Fe';
                                document.getElementById('componentLabel 3').textContent = 'Cu';
                                document.getElementById('component1').setAttribute('placeholder', 'Enter Component 1 for Dept. Ingot');
                                document.getElementById('component2').setAttribute('placeholder', 'Enter Component 2 for Dept. Ingot');
                                document.getElementById('component3').setAttribute('placeholder', 'Enter Component 3 for Dept. Ingot');
                            } else if (aktivitasValue === 'Dept. Alloy') {
                                document.getElementById('component1Container').style.display = 'none';
                                document.getElementById('component2Container').style.display = 'none';
                                document.getElementById('component3Container').style.display = 'block';
                                document.getElementById('component4Container').style.display = 'block';
                                document.getElementById('component5Container').style.display = 'block';
                                document.getElementById('component6Container').style.display = 'block';
                                document.getElementById('component7Container').style.display = 'block';
                                document.getElementById('component8Container').style.display = 'block';
                                document.getElementById('component9Container').style.display = 'none';
                                document.getElementById('component10Container').style.display = 'none';

                                // Change label and placeholder for each component
                                document.getElementById('component3').setAttribute('placeholder', 'Enter Component 3 for Dept. Alloy');
                                document.querySelector('label[for="component3"]').textContent = 'Component 3 for Dept. Alloy';
                                document.getElementById('component4').setAttribute('placeholder', 'Enter Component 4 for Dept. Alloy');
                                document.querySelector('label[for="component4"]').textContent = 'Component 4 for Dept. Alloy';
                                document.getElementById('component5').setAttribute('placeholder', 'Enter Component 5 for Dept. Alloy');
                                document.querySelector('label[for="component5"]').textContent = 'Component 5 for Dept. Alloy';
                                document.getElementById('component6').setAttribute('placeholder', 'Enter Component 6 for Dept. Alloy');
                                document.querySelector('label[for="component6"]').textContent = 'Component 6 for Dept. Alloy';
                                document.getElementById('component7').setAttribute('placeholder', 'Enter Component 7 for Dept. Alloy');
                                document.querySelector('label[for="component7"]').textContent = 'Component 7 for Dept. Alloy';
                                document.getElementById('component8').setAttribute('placeholder', 'Enter Component 8 for Dept. Alloy');
                                document.querySelector('label[for="component8"]').textContent = 'Component 8 for Dept. Alloy';
                            } else if (aktivitasValue === 'Dept. Billet') {
                                document.getElementById('component1Container').style.display = 'none';
                                document.getElementById('component2Container').style.display = 'none';
                                document.getElementById('component3Container').style.display = 'none';
                                document.getElementById('component4Container').style.display = 'none';
                                document.getElementById('component5Container').style.display = 'block';
                                document.getElementById('component6Container').style.display = 'block';
                                document.getElementById('component7Container').style.display = 'block';
                                document.getElementById('component8Container').style.display = 'block';
                                document.getElementById('component9Container').style.display = 'block';
                                document.getElementById('component10Container').style.display = 'block';

                                // Change label and placeholder for each component
                                document.getElementById('component5').setAttribute('placeholder', 'Enter Component 5 for Dept. Billet');
                                document.querySelector('label[for="component5"]').textContent = 'Component 5 for Dept. Billet';
                                document.getElementById('component6').setAttribute('placeholder', 'Enter Component 6 for Dept. Billet');
                                document.querySelector('label[for="component6"]').textContent = 'Component 6 for Dept. Billet';
                                document.getElementById('component7').setAttribute('placeholder', 'Enter Component 7 for Dept. Billet');
                                document.querySelector('label[for="component7"]').textContent = 'Component 7 for Dept. Billet';
                                document.getElementById('component8').setAttribute('placeholder', 'Enter Component 8 for Dept. Billet');
                                document.querySelector('label[for="component8"]').textContent = 'Component 8 for Dept. Billet';
                                document.getElementById('component9').setAttribute('placeholder', 'Enter Component 9 for Dept. Billet');
                                document.querySelector('label[for="component9"]').textContent = 'Component 9 for Dept. Billet';
                                document.getElementById('component10').setAttribute('placeholder', 'Enter Component 10 for Dept. Billet');
                                document.querySelector('label[for="component10"]').textContent = 'Component 10 for Dept. Billet';
                            }
                        });
                    </script>

                    {{-- <div class="form-group" id="tipeProdukContainer" style="display: none;">
                        <label for="tipeProduk">Tipe Produk</label>
                        <select class="form-control" id="tipeProduk" required>
                        </select>
                    </div>

                    <script>
                        document.getElementById('aktivitas').addEventListener('change', function() {
                            var tipeProdukContainer = document.getElementById('tipeProdukContainer');
                            var tipeProdukSelect = document.getElementById('tipeProduk');
                            var selectedAktivitas = this.value;

                            // Reset tipeProduk options
                            tipeProdukSelect.innerHTML = '';

                            // Add filtered options based on selected aktivitas
                            if (selectedAktivitas === 'Dept. Billet') {
                                tipeProdukSelect.innerHTML += `
                                    <option value="Billet 6005">Billet 6005</option>
                                    <option value="Billet 6063">Billet 6063</option>
                                    <option value="Billet 6061">Billet 6061</option>
                                    <option value="Billet 6463">Billet 6463</option>
                                    <option value="Billet 6060">Billet 6060</option>
                                    `;
                            } else if (selectedAktivitas === 'Dept. Ingot') {
                                tipeProdukSelect.innerHTML += `
                                    <option value="Ingot S1-A">Ingot S1-A</option>
                                    <option value="Ingot S1-B">Ingot S1-B</option>
                                    <option value="Ingot S2">Ingot S2</option>
                                    <option value="Ingot G1">Ingot G1</option>
                                `;
                            } else if (selectedAktivitas === 'Dept. Alloy') {
                                tipeProdukSelect.innerHTML += `
                                    <option value="Alloy A356.2 - Si7">Alloy A356.2 - Si7</option>
                                    <option value="Alloy A356.2 - Si11">Alloy A356.2 - Si11</option>
                                    <option value="Alloy A941.1">Alloy A941.1</option>
                                `;
                            }

                            // Show/hide tipeProduk container based on selected aktivitas
                            if (selectedAktivitas !== '') {
                                tipeProdukContainer.style.display = 'block';
                            } else {
                                tipeProdukContainer.style.display = 'none';
                            }
                        });
                    </script> --}}

                    <div class="form-group">
                        <label for="timestamp">Date</label>
                        <input class="form-control" type="datetime-local" name="timestamp" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="diameter">Diameter</label>
                        <input class="form-control" type="number" name="diameter" min="1"
                            placeholder="Masukkan Diameter Produk" required>
                    </div>

                    <div class="form-group">
                        <label for="Berat">Berat</label>
                        <input class="form-control" type="number" name="Berat" min="1"
                            placeholder="Masukkan Berat Produk" required>
                    </div>

                    <div class="form-group">
                        <label for="lebar">Lebar</label>
                        <input class="form-control" type="number" name="lebar" min="1"
                            placeholder="Masukkan Nomor Lebar" required>
                    </div>

                    <div class="form-group">
                        <label for="panjang">Panjang</label>
                        <input class="form-control" type="number" name="panjang" min="1"
                            placeholder="Masukkan Nomor Panjang" required>
                    </div>

                    <div class="form-group">
                        <label for="Tinggi">Tinggi</label>
                        <input class="form-control" type="number" name="Tinggi" min="1"
                            placeholder="Masukkan Nomor Tinggi" required>
                    </div>

                    <div class="form-group">
                        <label for="Lebar">Lebar</label>
                        <input class="form-control" type="number" name="Lebar" min="1"
                            placeholder="Masukkan Nomor Lebar" required>
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
                    title: 'Product Data',
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
