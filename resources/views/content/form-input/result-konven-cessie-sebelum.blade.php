<title>eCOLL-Letters</title>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Styles -->
        <style>
            .table td {
                padding: .5rem !important;
            }

            body {
                font-size: 16px !important;
            }

            @media print {
                body {
                    page-break-before: always;
                }

                .page {
                    page-break-before: always;
                }
            }

            @page {
                margin: 1cm;
                /* Set margin as needed */
            }
        </style>

        <style type="text/css">
            .p {
                font-family: 'Times New Roman', Times, serif;
            }

            .h3 {
                font-family: 'Times New Roman', Times, serif;
                font-size: 14px;
            }

            .tg {
                border-collapse: collapse;
                border-spacing: 0;
            }

            .tg td {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: 'Times New Roman', Times, serif;
                font-size: 11px;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg th {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: 'Times New Roman', Times, serif;
                font-size: 11px;
                font-weight: normal;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg .tg-baqh {
                text-align: center;
                vertical-align: top
            }

            .tg .tg-0lax {
                text-align: center;
                vertical-align: top
            }
        </style>

    </head>
    <style>
        .table td {
            padding: .5rem !important;
        }

        body {
            font-size: 16px !important;
        }
    </style>

    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 11px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 11px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-baqh {
            text-align: center;
            vertical-align: top
        }

        .tg .tg-0lax {
            text-align: center;
            vertical-align: top
        }
    </style>


    <body>
        <div class="mB-40" style="margin-top: 30px;">
            <div class="page">
                <div class="mB-40" style="margin-top: 30px;">
                    <div class="p-30">
                        <!-- Company Information -->
                        <table class="table border-0" style="margin-left: auto; margin-right: auto">
                            <tr>
                                <p style="text-align: left; font-size:13px; margin-left: 38px">
                                    <strong style="font-size: 13px">KOP SURAT</strong>
                                </p>
                            </tr>
                        </table>

                        <!-- Internal Memo Content -->
                        <table class="table table-bordered"
                            style="margin-top:-10px; font-size: 12px; margin-left:30px; margin-right:30px; line-height:27px;">

                            <tr>
                                <td style="width:300px">
                                    <p style="margin-top: -27.5px"><strong>No.
                                            {{ $konven_cessie_numbers["nomorsurat"] }}</strong></p>
                                </td>
                                <td style="width: 556px">
                                    <span style="float:right">
                                        Tangerang,
                                        {{ \Carbon\Carbon::parse($konven_cessie_sebelums["tanggaldibuat"])->format("d F Y") }}</span>
                                    <br>
                                    <br>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered"
                            style="margin-top: -38px; font-size: 12px; margin-left:30px; margin-right:30px;line-height:27px;">
                            <tr>
                                <td><strong>Kepada Yth, <br> Bapak/Ibu
                                    </strong>{{ $konven_cessie_sebelums["namadebitur"] }}<br>{{ $konven_cessie_sebelums["alamatdebitur"] }}
                                </td>
                            </tr>
                        </table>

                        <h5 style="text-align: center; margin-top:5px">PERIHAL : SURAT PEMBERITAHUAN</h5>

                        <table class="table table-bordered"
                            style="margin-top:-15px; margin-right: 29px; margin-left:30px; font-size:12px; text-align: justify;">
                            <tr>
                                <td>
                                    Dengan hormat, <br><br>
                                    Berdasarkan Perjanjian Kredit No.
                                    {{ $konven_cessie_sebelums["nomorperjanjiankredit"] }} tanggal
                                    {{ $konven_cessie_sebelums["tanggalperjanjian"] }} yang dibuat dan
                                    ditandatangani oleh dan antara PT
                                    Bank CIMB Niaga Tbk ("Bank") dan Bapak/Ibu
                                    {{ $konven_cessie_sebelums["namadebitur"] }} berikut perubahan, penambahan
                                    dan/atau perpanjangannya
                                    beserta Syarat Umum Kredit Bank CIMB Niaga ("SUK")/Ketentuan Syarat Umum Pemberian
                                    Kredit ("KSUPK") yang
                                    menjadi satu kesatuan yang tidak terpisahkan dengan Perjanjian Kredit ("Perjanjian
                                    Kredit") serta catatan
                                    pembukuan Bank per tanggal {{ $konven_cessie_sebelums["tanggalpembukuanbank"] }},
                                    Bapak/Ibu masih tercatat sebagai Debitur dan
                                    memiliki kewajiban
                                    tertunggak yang masih harus diselesaikan sejumlah Rp. XXX (Terbilang) yang terdiri
                                    dari:
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered"
                            style=" font-size: 12px; margin-left:30px; margin-right:30px;line-height:10px;">
                            <tr>
                            </tr>
                        </table>

                        <table class="tg" style="margin-left: auto; margin-right: auto">
                            <thead>
                                <tr>
                                    <th class="tg-baqh" style="font-size: 11px;"><strong>No.</strong></th>
                                    <th class="tg-baqh" style="width: 500px; font-size: 11px;">
                                        <strong>Keterangan</strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="item" style="font-size: 11px;"></th>
                                    <td style="font-size: 11px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered"
                            style=" margin-right: 29px; margin-left:30px; font-size:12px; text-align: justify;">
                            <tr>
                                <td>
                                    Bahwa Bank telah melakukan penagihan kepada Bapak/Ibu untuk dapat menyelesaikan
                                    kewajiban tertunggak sebelumnya,
                                    namun sampai dengan tanggal surat ini belum ada realisasi penyelesaian oleh
                                    Bapak/Ibu sebagaimana mestinya.
                                    <br><br>
                                    Melalui surat ini, kembali Bank mengingatkan Bapak/Ibu untuk segera melakukan
                                    penyelesaian total kewajiban
                                    sebagaimana tersebut diatas selambat-selambatnya tanggal DDMMYYYY.
                                    <br><br>
                                    Apabila sampai dengan tanggal tersebut di atas Bapak/Ibu belum melakukan
                                    penyelesaian total kewajiban maka Bank
                                    berhak melakukan tindakan yang dianggap baik oleh Bank berdasarkan pertimbangan Bank
                                    sesuai Perjanjian Kredit
                                    beserta SUK/KSUPK maupun peraturan perundang-undangan yang berlaku, termasuk namun
                                    tidak terbatas pada menuntut
                                    pemenuhan kewajiban dan/atau melaksanakan hak-haknya dengan mengalihkan hak tagih
                                    (piutang) Bank beserta dokumen-
                                    dokumen agunan kepada pihak ketiga.
                                    <br><br>
                                    Dalam hal dilakukan pengalihan piutang Bank kepada pihak ketiga sebagaimana
                                    dimaksud, maka segala hak dan kewajiban Bank atas Perjanjian Kredit beserta
                                    SUK/KSUPK berikut
                                    dokumen agunan yang terkait akan beralih kepada pihak ketiga, termasuk hak tagih
                                    atas kewajiban terhutang Debitur. Untuk selanjutnya Bank tidak bertanggung jawab
                                    atas segala
                                    upaya penagihan piutang yang akan dilakukan oleh pihak ketiga di kemudian hari.
                                    <br><br>
                                    Untuk informasi lebih lanjut dapat menghubungi :
                                    <br>
                                    Contact Person:
                                    <br>
                                    Phone:
                                    <br>
                                    Email:
                                    <br>
                                    <p style="margin-top: 10px">Demikian kami sampaikan, atas perhatian dan kerjasamanya
                                        kami ucapkan terima kasih.</p>
                                    <br><br>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered"
                            style="margin-top:-50px; margin-right: 29px; margin-left:30px; font-size:12px; text-align: justify;">
                            <tr>
                                <td>
                                    Hormat kami,<br>
                                    <strong>PT Bank CIMB Niaga Tbk</strong>
                                </td>
                                <td style="width: 140px; margin-right:30px">
                                    <span style="float:right; margin-top:16px; margin-right:-20px">
                                        Mengetahui,</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered"
                            style="margin-top:60px; margin-right: 29px; margin-left:30px; font-size:12px">
                            <tr>
                                <td style="text-decoration: underline">
                                    {{ $konven_cessie_sebelums["privateofficer"] }}
                                </td>
                                <td style="width: 219px; margin-right:30px">
                                    <span
                                        style="text-decoration: underline; float:right; margin-top:4px; margin-right:24px">
                                        {{ $konven_cessie_sebelums["privatedphead"] }}</span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered"
                            style="margin-top:-20px; margin-right: 29px; margin-left:30px; font-size:12px">
                            <tr>
                                <td>
                                    Private Auction Officer
                                </td>
                                <td style="width: 268px; margin-right:30px">
                                    <span style="float:right; margin-right:-20px">
                                        Private Auction Department Head</span>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    <script>
        @if (session("targetBlank"))
            const printWindow = window.open('{{ url("print_konven_cessie_sebelum") }}', '_blank');

            if (printWindow) {
                printWindow.onload = function() {
                    // Trigger the print function in the new window
                    printWindow.print();

                    // Close the new window after printing (optional)
                    printWindow.onafterprint = function() {
                        printWindow.close();
                    };

                    // Automatically navigate the original window back to the main menu
                    window.location.href = '{{ url("/select_konven_cessie_sebelum") }}';
                };
            }
        @endif
    </script>

</html>
