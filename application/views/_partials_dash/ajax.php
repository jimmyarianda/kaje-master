<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<script type="text/javascript">
    $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        // View data Home
        $('#thome').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_home/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "h_id", "visible": false},
                {"data": "h_text1"},
                {"data": "h_text2"},
                {"data": "h_text3"},
                {"data": "h_picbanner"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

        // View data Kategori
        $('#tkategori').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_kategori/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "id_kategori", "visible": false},
                {"data": "nama_kategori"},
                {"data": "jenis_kategori"},
                {"data": "keterangan"},
                {"data": "foto"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

         // View data Project
         $('#tproject').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_project/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "id_project", "visible": false},
                {"data": "nama_project"},
                {"data": "nama_perusahaan"},
                {"data": "status"},
                {"data": "keterangan"},
                {"data": "foto"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

        // View data Berita
        $('#tberita').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_berita/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "id_berita", "visible": false},
                {"data": "judul_berita"},
                // {"data": "isi_berita"},
                {"data": "user"},
                {"data": "jenis"},
                {"data": "perusahaan"},
                {"data": "foto"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

         // View data Struktur
         $('#tstruktur').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_struktur/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "id_struktur", "visible": false},
                {"data": "nama"},
                {"data": "jabatan"},
                {"data": "foto"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

         // View data Testimoni
         $('#ttestimoni').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_testimoni/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "id_testimoni", "visible": false},
                {"data": "nama"},
                {"data": "perusahaan"},
                // {"data": "testi"},
                {"data": "foto"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

        // View data Kontak
        $('#tkontak').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_kontak/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "id_kontak", "visible": false},
                {"data": "lokasi"},
                {"data": "perusahaan"},
                {"data": "email"},
                {"data": "hp"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

        // View data Tentang
        $('#ttentang').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('d_tentang/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "t_id", "visible": false},
                {"data": "t_text1"},
                // {"data": "t_text2"},
                // {"data": "t_text3"},
                // {"data": "t_pic"},
                {"data": "t_pekerja"},
                {"data": "t_clients"},
                {"data": "t_projectsel"},
                {"data": "t_projectber"},
                {"data": "action"}
            ],
            "order": [[1, 'dsc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

        // View data user
        $('#tuser').DataTable({
            "processing": true,
            "language": {
                "processing": "Sedang memuat.....",
                "searchPlaceholder": "Kata Kunci..."
            },
            "serverSide": true,
            "ajax": "<?=site_url('user/get_data');?>",
            "columns": [
                {
                    "data": null,
                    "orderable": true
                },
                {"data": "usr_id", "visible": false},
                {"data": "usr_username"},
                {"data": "usr_nama"},
                {"data": "usr_level"},
                {"data": "action"}
            ],
            "order": [[1, 'asc']],
            "rowCallback": function (row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });

        // Notification alert
        $("#errorMessage").alert().delay(4000).slideUp('slow');
        $("#successMessage").alert().delay(4000).slideUp('slow');
    });
</script>