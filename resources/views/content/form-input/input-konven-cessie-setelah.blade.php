@extends("layouts/contentNavbarLayout")

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

@section("content")

    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div>
                        <h5 class="card-header">FORM SURAT PEMBERITAHUAN CESSIE SETELAH PROSES: KONVEN</h5>
                        <p><span style="color: red; float:left; margin-left: 23px">*Wajib Diisi</span></p>
                    </div>
                    <div class="card-body">
                        <form action="/select_konven_cessie_sebelum" method="POST">
                            @csrf
                            <!--Nomor Penerbitan Surat-->
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="nomorsurat" class="form-label">Nomor Penerbitan Surat</label>
                                    <input type="text" class="form-control" name="nomorsurat" id="nomorsurat">
                                </div>
                                <!--Tanggal Dibuat-->
                                <div class="mb-3 col-md-6">
                                    <label for="tanggaldibuat" class="form-label">Tanggal Dibuat <span
                                            style="color: red">*</span></label>
                                    <input type="date" class="datepicker-here form-control digits" name="tanggaldibuat"
                                        id="tanggaldibuat" required>
                                </div>
                                <!--Nama Debitur-->
                                <div class="mb-3 col-md-6">
                                    <label for="namadebitur" class="form-label">Nama Debitur <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="namadebitur" name="namadebitur" required>
                                </div>
                                <!--Nomor Perjanjian Kredit-->
                                <div class="mb-3 col-md-3">
                                    <label for="nomorperjanjiankredit" class="form-label">Nomor Perjanjian Kredit <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="nomorperjanjiankredit"
                                        name="nomorperjanjiankredit" required>
                                </div>
                                <!--Tanggal Perjanjian-->
                                <div class="mb-3 col-md-3">
                                    <label for="tanggalperjanjian" class="form-label">Tanggal Perjanjian Kredit <span
                                            style="color: red">*</span></label>
                                    <input type="date" class="datepicker-here form-control digits"
                                        name="tanggalperjanjian" id="tanggalperjanjian" required>
                                </div>
                                <!--Alamat Debitur-->
                                <div class="mb-3 col-md-6">
                                    <label for="alamatdebitur" class="form-label">Alamat Debitur <span
                                            style="color: red">*</span></label>
                                    <textarea id="alamatdebitur" class="form-control" name="alamatdebitur" required></textarea>
                                </div>
                                <!--Nomor Akta Perjanjian Pengalihan-->
                                <div class="mb-3 col-md-3">
                                    <label for="nomoraktapengalihan" class="form-label">Nomor Akta Perjanjian Pengalihan
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="nomoraktapengalihan"
                                        name="nomoraktapengalihan" required>
                                </div>
                                <!--Tanggal Perjanjian Pengalihan-->
                                <div class="mb-3 col-md-3">
                                    <label for="tanggalperjanjianpengalihan" class="form-label">Tanggal Perjanjian
                                        Pengalihan
                                        <span style="color: red">*</span></label>
                                    <input type="date" class="datepicker-here form-control digits"
                                        id="tanggalperjanjianpengalihan" name="tanggalperjanjianpengalihan" required>
                                </div>
                                <!--Nama Notaris-->
                                <div class="mb-3 col-md-6">
                                    <label for="namanotaris" class="form-label">Nama Notaris
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="namanotaris" name="namanotaris" required>
                                </div>
                                <!--Tempat Notaris-->
                                <div class="mb-3 col-md-6">
                                    <label for="tempatnotaris" class="form-label">Tempat Notaris
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="tempatnotaris" name="tempatnotaris"
                                        required>
                                </div>
                                <hr>
                                <!--Nama Penerima Piutang-->
                                <div class="mb-3 col-md-3">
                                    <label for="namapenerimapiutang" class="form-label">Nama Penerima Piutang <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="namapenerimapiutang"
                                        name="namapenerimapiutang" required>
                                </div>
                                <!--Telepon Penerima Piutang-->
                                <div class="mb-3 col-md-3">
                                    <label for="teleponpenerimapiutang" class="form-label">Telepon Penerima Piutang <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="teleponpenerimapiutang"
                                        name="teleponpenerimapiutang" required>
                                </div>
                                <!--E-Mail Penerima Piutang-->
                                <div class="mb-3 col-md-3">
                                    <label for="emailpenerimapiutang" class="form-label">E-Mail Penerima Piutang <span
                                            style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="emailpenerimapiutang"
                                        name="emailpenerimapiutang" required>
                                </div>
                                <!--Faksimili Penerima Piutang-->
                                <div class="mb-3 col-md-3">
                                    <label for="faksimilipenerimapiutang" class="form-label">Faksimili Penerima Piutang
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="faksimilipenerimapiutang"
                                        name="faksimilipenerimapiutang" required>
                                </div>
                                <!--Alamat Penerima Piutang-->
                                <div class="mb-3 col-md-6">
                                    <label for="alamatpenerimapiutang" class="form-label">Alamat Penerima Piutang <span
                                            style="color: red">*</span></label>
                                    <textarea id="alamatpenerimapiutang" class="form-control" name="alamatpenerimapiutang" required></textarea>
                                </div>
                                <!--Tanggal Piutang Akan Dialihkan-->
                                <div class="mb-3 col-md-6">
                                    <label for="tanggalpiutangdialihkan" class="form-label">Tanggal Piutang Akan Dialihkan
                                        <span style="color: red">*</span></label>
                                    <input type="date" class="datepicker-here form-control digits"
                                        id="tanggalpiutangdialihkan" name="tanggalpiutangdialihkan" required>
                                </div>
                                <hr>
                                <!--Private Auction Officer-->
                                <div class="mb-3 col-md-4">
                                    <label for="privateofficer" class="form-label">Nama Staff: Private Auction Officer
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="privateofficer" name="privateofficer"
                                        required>
                                </div>
                                <!--Private Auction Department Head-->
                                <div class="mb-3 col-md-4">
                                    <label for="privatedphead" class="form-label">Nama Staff: Private Auction Department
                                        Head
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="privatedphead" name="privatedphead"
                                        required>
                                </div>
                                <!--Tembusan-->
                                <div class="mb-3 col-md-4">
                                    <label for="tembusan" class="form-label">Tembusan
                                        <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="tembusan" name="tembusan" required>
                                </div>
                            </div>


                            <!--Deskripsi-->
                            <div class="button" style="float:right">
                                <button type="reset"class="btn btn-outline-secondary text-uppercase me-2">Reset</button>
                                <button type="submit" name="print" id="validateAndSubmit"
                                    class="btn btn-outline-danger text-uppercase">Submit</i></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            var formCount = 1; // Initial form count

            // Add form field
            $("#addBarang").click(function() {
                var html = $(".form-group-barang:first").clone(true, true);
                formCount++;
                updateFormNumbers();
                html.find('h5').text(formCount);
                $(".form-group-barang:last").after(html);
                moveButtonsToBottom();
            });

            // Remove form field
            $("#removeBarang").click(function() {
                if (formCount > 1) {
                    $(".form-group-barang:last").remove();
                    formCount--;
                    updateFormNumbers();
                }
            });

            function updateFormNumbers() {
                $(".form-group-barang").each(function(index) {
                    $(this).find('h5').text(index + 1);
                });
            }

            function moveButtonsToBottom() {
                var buttonGroup = $(".form-group-buttons-barang");
                buttonGroup.detach().insertAfter($(".form-group-barang:last"));
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var formCount = 1; // Initial form count

            // Add form field
            $("#addAttachment").click(function() {
                var html = $(".form-group-attachment:first").clone(true, true);
                formCount++;
                updateFormNumbers();
                html.find('h5').text(formCount);
                $(".form-group-attachment:last").after(html);
                moveButtonsToBottom();
            });

            // Remove form field
            $("#removeAttachment").click(function() {
                if (formCount > 1) {
                    $(".form-group-attachment:last").remove();
                    formCount--;
                    updateFormNumbers();
                }
            });

            function updateFormNumbers() {
                $(".form-group-attachment").each(function(index) {
                    $(this).find('h5').text(index + 1);
                });
            }

            function moveButtonsToBottom() {
                var buttonGroup = $(".form-group-buttons-attachment");
                buttonGroup.detach().insertAfter($(".form-group-attachment:last"));
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var formCount = 1; // Initial form count

            // Add form field
            $("#addLampiran").click(function() {
                var html = $(".form-group-addattachment:first").clone(true, true);
                formCount++;
                updateFormNumbers();
                html.find('h5').text(formCount);
                $(".form-group-addattachment:last").after(html);
                moveButtonsToBottom();
            });

            // Remove form field
            $("#removeLampiran").click(function() {
                if (formCount > 1) {
                    $(".form-group-addattachment:last").remove();
                    formCount--;
                    updateFormNumbers();
                }
            });

            function updateFormNumbers() {
                $(".form-group-addattachment").each(function(index) {
                    $(this).find('h5').text(index + 1);
                });
            }

            function moveButtonsToBottom() {
                var buttonGroup = $(".form-group-buttons-addattachment");
                buttonGroup.detach().insertAfter($(".form-group-addattachment:last"));
            }
        });
    </script>

    <script>
        function formatNumber(input) {
            // Remove non-numeric characters and parse the input as a number
            const number = parseFloat(input.value.replace(/[^\d]/g, ''));

            // Check if the input is a valid number
            if (!isNaN(number)) {
                // Format the number with commas and update the input value
                input.value = number.toLocaleString('id-ID');
            }
        }
    </script>
@endsection
