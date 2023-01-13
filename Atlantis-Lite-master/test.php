<div class="main-panel">
    <div class="content">
        <style media="screen">
            table,
            th,
            tr {
                text-align: center;
            }
        </style>

        <!-- Content Header (Page header) -->
        <!-- style="width: 100%;" -->
        <section class='content'>
            <div class="panel">
                <div class="panel-heading">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-12">
                                <!-- Button trigger modal -->
                                <button id="btn_tambah" class="btn btn-primary btn-md btn" data-toggle="modal" data-target="#modal_tambah" style="color: white ;margin-right:10px"><i class="fa fa-plus "></i> Tambah Data</button>
                                <button id="export" name="export" onclick="refresh()" class=" btn-md btn" style="color: black; background: #FFAD46  "><i class="fas fa-sync-alt" style="margin-right: 10px"></i>Refresh Data</button>
                            </div>
                            <script type="text/javascript">
                                function refresh() {
                                    location.reload();
                                }
                            </script>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="overflow-x:auto;">
                                <table id="example1" class="table-bordered table-sm table-hover table-striped" style="overflow:scroll" cellspacing="0" width="100%">
                                    <thead>
                                        <!-- <tr style="background: #48ABF7 ;text-align: center; color:white"> -->
                                        <!-- <td>Kode</td> -->
                                        <th width="5%">No</th>
                                        <th width="30%">ID</th>
                                        <th width="50%">Nama Lengkap</th>
                                        <th width="30%">Level</th>
                                        <!-- <th width="250px">Email</th> -->
                                        <th width="5%">Photo</th>
                                        <th style="text-align: center;" width="10%">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel" style=" font: sans-serif; "><i class="fa fa-trash mr-2"></i> Hapus</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                    </div>
                                    <form class="form-horizontal">
                                        <div class="modal-body">
                                            <input type="hidden" name="nim_hapus" id="nim_hapus" value="">
                                            <div class="alert alert-danger">
                                                <p>Hapus User..?</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-flat" data-dismiss="modal"><i class="far fa-times-circle mr-2"></i> Batal</button>
                                            <button class="btn_hapus btn btn-danger btn-flat" id="btn_hapus"><i class="fas fa-trash-alt mr-2"></i> Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL EDIT USER -->
                        <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_editLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="modal_editLabel" style="color: white;font-weight:bold;font-family: Century Gothic"><i class="far fa-user-circle" style="margin-right: 10px"></i>EDIT DATA USER</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <div class="form-group row" class="collapse" id="customer_collapse">
                                                <div class="col-sm-6 mt-2 mb-2 disnon">
                                                    <label for="nim_edit">ID</label>
                                                    <input type="text" class="form-control" id="nim_edit" name="nim_edit" disabled>
                                                </div>
                                                <div class="col-sm-12 mt-2 mb-2">
                                                    <label for="nama_lengkapx">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkapx" name="nama_lengkapx" required>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="jabatanx">Jabatan</label>
                                                    <select type="text" class="form-control" id="jabatanx" name="jabatanx" required>
                                                        <option value="Mahasiswa">Mahasiswa</option>
                                                        <option value="Wakil Rektor III">Wakil Rektor III</option>
                                                        <option value="Kepala Perpustakaan UNPAM">Kepala Perpustakaan UNPAM</option>
                                                        <option value="Staff Perpustakaan">Staff Perpustakaan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="Levelx">Level User</label>
                                                    <select type="text" class="form-control" id="levelx" name="levelx" required>
                                                        <option value="mahasiswa">mahasiswa</option>
                                                        <option value="superadmin">superadmin</option>
                                                        <option value="approver">approver</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="fakultasx">Fakultas</label>
                                                    <select class="form-control" id="fakultasx" name="fakultasx">
                                                        <option value="0" selected="selected" disabled="disabled">Pilih Fakultas</option>
                                                        <?php foreach ($fakultas as $row) { ?>
                                                            <option value="<?php echo $row->kode_fakultas ?>"><?php echo $row->nama_fakultas ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="program_studix">Program Studi</label>
                                                    <select class="form-control" id="program_studix" name="program_studix">
                                                        <option value="0" selected="selected" disabled="disabled" data="0">Pilih Program Studi</option>
                                                        <?php foreach ($prodi as $key) { ?>
                                                            <option value="<?php echo $key->kode_prodi ?>" data="<?php echo $key->kode_fakultas ?>"><?php echo $key->nama_prodi ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="emailx">Email</label>
                                                    <input type="text" class="form-control" id="emailx" name="emailx">
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="teleponx">Telepon</label>
                                                    <input type="text" class="form-control" id="teleponx" name="teleponx" required>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2 alamat">
                                                    <label for="alamatx">Alamat</label>
                                                    <textarea class="form-control" id="alamatx" name="alamatx" rows="5"></textarea>
                                                    <input type="hidden" class="form-control" id="nama_lampiranx" name="nama_lampiranx" required>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2 ">
                                                    <form method='post' action='' enctype="multipart/form-data">
                                                        <label for="foto">Pilih Foto</label>
                                                        <input type="file" id="filex" class='form-control' name="filex" onchange="cekisix()">
                                                    </form>
                                                    <br>
                                                    <img src="#" id="previewx" width="50px" class="disnon" height="50px">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <div class="form-group row" class="collapse" id="customer_collapse">
                                                <div class="col-sm-6-right">
                                                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><b>TUTUP</b></button>
                                                    <button type="button" class="btn btn-success" id="btn_update"><b>UPDATE</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="modal_detailLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 id="modal_editLabel" style="color: white;font-weight:bold;font-family: Century Gothic"><i class="far fa-user-circle" style="margin-right: 10px"></i>DETAIL USER</h5>
                                    </div>


                                    <div class="modal-body">
                                        <style type="text/css">
                                            tr {
                                                color: black;

                                            }

                                            td {
                                                word-break: break-all;
                                            }

                                            .isi {
                                                height: 10px;
                                                font-size: 11px;
                                                text-align: left;
                                                border: 1px solid black;

                                            }

                                            .judul {
                                                height: 10px;
                                                font-size: 11px;
                                                text-align: left;
                                                border: 1px solid black;
                                                width: 40%;
                                            }

                                            #gambaruser {
                                                border-radius: 50%
                                            }
                                        </style>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <center><img src="" id="gambaruser" width="150px">
                                                        <p id="jabatanuser"></p>
                                                    </center>
                                                    <div class="card-body">
                                                        <div class="tblrincian">
                                                            <table id="datarincian" class="table">
                                                                <tbody id="show_detail">
                                                                </tbody>
                                                            </table>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="modal_editLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="modal_editLabel" style="color: white;font-weight:bold;font-family: Century Gothic"><i class="far fa-user-circle" style="margin-right: 10px"></i>TAMBAH DATA USER</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <div class="form-group row" class="collapse" id="customer_collapse">
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="nim">ID</label>
                                                    <input type="text" class="form-control" id="nim" name="nim" maxlength="12" onkeypress="return hanyaAngka(event)">
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                                                    <i class="fas fa-eye" type="button" onclick="showpassword()" id="tampilkan"></i>
                                                </div>
                                                <div class="col-sm-12 mt-2 mb-2">
                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="Level">Level User</label>
                                                    <select type="text" class="form-control" id="level" name="level" required>
                                                        <option value="mahasiswa">mahasiswa</option>
                                                        <option value="superadmin">superadmin</option>
                                                        <option value="approver">approver</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="jabatan">Jabatan</label>
                                                    <select type="text" class="form-control" id="jabatan" name="jabatan" required>
                                                        <option value="Mahasiswa">Mahasiswa</option>
                                                        <option value="Wakil Rektor III">Wakil Rektor III</option>
                                                        <option value="Kepala Perpustakaan UNPAM">Kepala Perpustakaan UNPAM</option>
                                                        <!-- <option value="Staff Perpustakaan">Staff Perpustakaan</option> -->
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="fakultas">Fakultas</label>
                                                    <select class="form-control" id="fakultas" name="fakultas">
                                                        <option value="0" selected="selected" disabled="disabled">Pilih Fakultas</option>
                                                        <?php foreach ($fakultas as $row) { ?>
                                                            <option value="<?php echo $row->kode_fakultas ?>"><?php echo $row->nama_fakultas ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="program_studi">Program Studi</label>
                                                    <select class="form-control" id="program_studi" name="program_studi">
                                                        <option value="0" selected="selected" disabled="disabled" data="0">Pilih Program Studi</option>
                                                        <?php foreach ($prodi as $key) { ?>
                                                            <option value="<?php echo $key->kode_prodi ?>" data="<?php echo $key->kode_fakultas ?>"><?php echo $key->nama_prodi ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2">
                                                    <label for="telepon">Telepon</label>
                                                    <input type="text" class="form-control" id="telepon" name="telepon">
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2 alamat">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                                                    <input type="hidden" class="form-control" id="nama_lampiran" name="nama_lampiran">
                                                </div>
                                                <div class="col-sm-6 mt-2 mb-2 ">
                                                    <form method='post' action='' enctype="multipart/form-data">
                                                        <label for="foto">Pilih Foto</label>
                                                        <input type="file" id="file" class='form-control' name="file" onchange="cekisi()">
                                                    </form>
                                                    <br>
                                                    <img src="#" id="preview" width="50px" class="disnon" height="50px">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <div class="form-group row" class="collapse" id="customer_collapse">
                                                <div class="col-sm-6-right">
                                                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal"><b>TUTUP</b></button>
                                                    <button type="button" class="btn btn-success" id="btn_simpan"><b>TAMBAH</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
<div class="modal fade" id="ModalUbahPasswordUser" tabindex="-1" role="dialog" aria-labelledby="ModalUbahPasswordLabel" aria-hidden="true" style="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 id="ModalUbahPasswordLabel" style="color: white;font-weight:bold;font-family: Century Gothic"><i class="far fa-user-circle" style="margin-right: 10px"></i>UBAH PASSWORD USER</h5>
            </div>


            <div class="modal-body">

                <form method="post">


                    <div class="form-group row" class="collapse" id="customer_collapse">

                        <div class="col-sm-4" style="text-align: right;margin-top: 5px;display: none">
                            <label style="color:#343a40;" for="nim_ubah_user">NIM</label>
                        </div>
                        <div class="col-sm-8">

                            <input type="text" class="form-control" id="nim_ubah_user" name="nim_ubah_user" required style="display: none">
                        </div>

                    </div>

                    <div class="form-group row" class="collapse" id="customer_collapse">

                        <div class="col-sm-4" style="text-align: right;margin-top: 5px">
                            <label style="color:#343a40;" for="passworduser">Password Baru</label>
                        </div>
                        <div class="col-sm-7">

                            <input type="password" class="form-control" id="passworduser" name="passworduser" required>

                            <i class="fas fa-eye" type="button" style="color:black;vertical-align: middle; padding-top: 10px; background: transparent;display: inline-block;" onclick="showpassworduser()" id="tampilkanuser"></i>

                        </div>

                    </div>

                    <div class="form-group row" class="collapse" id="customer_collapse">



                        <div class="col-sm-4" style="text-align: right;margin-top: 5px;">
                            <label style="color:#343a40;" for="confirmuser">Ulangi Password</label>
                        </div>
                        <div class="col-sm-7">

                            <input type="password" class="form-control" id="confirmuser" name="confirmuser" required>

                            <i class="fas fa-eye" type="button" style="color:black;vertical-align: middle; padding-top: 10px; background: transparent;display: inline-block;" onclick="showpassworduser2()" id="tampilkanuser2"></i>

                        </div>

                    </div>


                </form>



                <div class="modal-footer">

                    <div class="form-group row" class="collapse" id="customer_collapse">

                        <div class="col-sm-12">
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" style="display: inline-block;"><b>TUTUP</b></button>
                            <button type="button" class="btn btn-sm btn-dark" id="btn_ubah_password_user"><b>UBAH</b></button>
                            <!-- <button type="button" class="btn btn-sm btn-dark" id="btn_ubah" style="display: inline-block;"><b>UBAH</b></button> -->
                        </div>
                    </div>



                </div>




            </div>
        </div>
    </div>


    <!-- /.card-body -->
</div>
<script type="text/javascript">
    $('#btn_ubah_password_user').on('click', function() {
        var nim = $('#nim_ubah_user').val();
        var passwordx = $('#passworduser').val();
        var confirm = $('#confirmuser').val();

        if (passwordx == '') {
            $('#passworduser').focus();

            Swal.fire({
                title: 'Password Kosong',
                text: 'Silahkan Masukkan Password Baru!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;


        }

        if (passwordx != confirm) {

            $('#passworduser').focus();

            Swal.fire({
                title: 'Password Tidak Cocok',
                text: 'Silahkan Masukkan Password yang Sama!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('index.php/login/update_password') ?>",
            dataType: "JSON",
            data: {
                nim: nim,
                passwordx: passwordx,
                confirm: confirm
            },
            success: function(data) {
                if (data == 'Password berhasil diubah!') {
                    Swal.fire({
                        title: 'Berhasil',
                        text: data,
                        icon: 'success'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.close();
                            $('#ModalUbahPassword').modal('hide');
                            location.reload();
                            tampil_data();
                        }
                    });


                } else {
                    Swal.fire({
                        title: 'Gagal',
                        text: data,
                        icon: 'error'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.close();

                        }
                    });
                    return false;

                }

            }
        });

        return false;
    });

    function cekisix() {
        var file = $('[name="filex"]').val();
        if (file != "") {
            var fd = new FormData();
            var files = $('#filex')[0].files[0];
            fd.append('filex', files);

            // AJAX request
            $.ajax({
                url: '<?php echo base_url() ?>index.php/user/uploadphotox',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        // Show image preview
                        $("#previewx").attr('src', "<?php echo base_url() ?>" + response);
                        $("#nama_lampiranx").val(response);

                    } else {
                        Swal.fire({
                            title: 'Upload Gagal',
                            text: 'File Gagal Diupload',
                            icon: 'error'
                        })
                    }
                }
            });

        }
    }

    function cekisi() {
        var file = $('[name="file"]').val();
        if (file != "") {

            var fd = new FormData();
            var files = $('#file')[0].files[0];
            fd.append('file', files);

            // AJAX request
            $.ajax({
                url: '<?php echo base_url() ?>index.php/user/uploadphoto',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        // Show image preview
                        $("#preview").attr('src', "<?php echo base_url() ?>" + response);
                        $("#preview").css('display', "inline-block");
                        $("#nama_lampiran").val(response);
                    } else {
                        Swal.fire({
                            title: 'Upload Gagal',
                            text: 'File Gagal Diupload',
                            icon: 'error'
                        })
                    }
                }
            });
        }
    }
    tampil_data();

    function tampil_data() {
        let level = '<?php echo $this->session->userdata('level') ?>';
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>index.php/user/data',
            // async : true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td style="text-align:center">' + (i + 1) + '</td>' +
                        '<td style="text-align:left">' + data[i].nim + '</td>' +
                        '<td style="text-align:left">' + data[i].nama_lengkap + '</td>' +
                        '<td style="text-align:center">' + data[i].level + '</td>' +
                        // '<td style="text-align:center">' + data[i].email + '</td>' +
                        '<td style="text-align:center"><img src="<?php echo base_url() ?>' + data[i].foto + '" width="50" height="40"></td>';
                    if (level == "superadmin") {
                        html += '<td style="text-align:center"><div class="btn-group">' +
                            '<a href="javascript:;" class="btn btn-success btn-sm  btn-flat item_detail_user" data="' + data[i].nim + '"><i class="fa fa-eye"></i></a>' +
                            '<a href="javascript:;" class="btn btn-info btn-sm  btn-flat item_edit_user" data="' + data[i].nim + '"><i class="fa fa-edit"></i></a>' +
                            '<a href="javascript:;" class="btn btn-warning btn-sm  btn-flat item_edit_password" data="' + data[i].nim + '"><i class="fas fa-key"></i></a>' +
                            '<a href="javascript:;" class="btn btn-danger btn-sm  btn-flat item_hapus_user" data="' + data[i].nim + '"><i class="fa fa-trash"></i></a>';
                    }
                    html += '</div></td>' +

                        '</tr>';
                }
                $('#show_data').html(html);

                set();

            }

        });
    }

    function showpassworduser2() {
        var tampilkan = document.getElementById("tampilkanuser2");
        var password = document.getElementById("confirmuser");

        if (password.type === "password") {
            password.type = "text";
            tampilkan.style.color = "green"
        } else {
            password.type = "password";
            tampilkan.style.color = "black"

        }
    }

    function showpassworduser() {
        var tampilkan = document.getElementById("tampilkanuser");
        var password = document.getElementById("passworduser");

        if (password.type === "password") {
            password.type = "text";
            tampilkan.style.color = "green"
        } else {
            password.type = "password";
            tampilkan.style.color = "black"

        }
    }


    $('#show_data').on('click', '.item_edit_user', function() {
        var nim = $(this).attr('data');
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('index.php/user/edit_user') ?>",
            dataType: "JSON",
            data: {
                nim: nim
            },
            success: function(data) {
                $.each(data, function(nim, nama_lengkap, level, fakultas, program_studi, telepon, email, alamat, foto, jabatan) {
                    $('#modal_edit').modal('show');
                    $('#nim_edit').val(data.nim);
                    $('#nama_lengkapx').val(data.nama_lengkap);

                    $('#levelx option').each(function() {
                        let level = $(this).val();
                        if (level == data.level) {
                            $(this).attr('selected', 'selected');
                        }
                    });


                    $('#jabatanx option').each(function() {
                        let jabatan = $(this).val();
                        if (jabatan == data.jabatan) {
                            $(this).attr('selected', 'selected');
                        }
                    });


                    $('#fakultasx option').each(function() {
                        let fakultas = $(this).val();
                        if (fakultas == data.fakultas) {
                            $(this).attr('selected', 'selected');
                        }
                    });

                    $('#program_studix option').each(function() {
                        let program_studi = $(this).val();
                        if (program_studi == data.program_studi) {
                            $(this).attr('selected', 'selected');
                        }
                    });

                    $('#emailx').val(data.email);
                    $('#teleponx').val(data.telepon);
                    $('#alamatx').val(data.alamat);
                    if (data.foto != '') {
                        $('#previewx').attr('src', data.foto);
                        $('#previewx').css('display', 'inline-block');
                        $('#nama_lampiranx').val(data.foto);

                    }
                });
            }
        });

        // datatemp(kode_temp);
        return false;
    });

    $('#show_data').on('click', '.item_detail_user', function() {
        var nim = $(this).attr('data');

        $.ajax({
            type: "GET",
            url: "<?php echo base_url('index.php/user/detail_user') ?>",
            dataType: "JSON",
            data: {
                nim: nim
            },
            success: function(data) {
                let html = '';
                // $.each(data,function(nim,nama_lengkap,level,fakultas,program_studi,telepon,email,alamat,foto,jabatan){
                html += '<tr><td class="judul">ID</td><td class="isi">' + data.nim + '</td></tr>' +
                    '<tr><td class="judul">Nama Lengkap</td><td class="isi">' + data.nama_lengkap + '</td></tr>' +
                    '<tr><td class="judul">Level</td><td class="isi">' + data.level + '</td></tr>' +
                    '<tr><td class="judul">Email</td><td class="isi">' + data.email + '</td></tr>';
                if (data.fakultas != '') {
                    html += '<tr><td class="judul">Fakultas</td><td class="isi">' + data.fakultas + '</td></tr>';
                }
                if (data.fakultas != '') {

                    html += '<tr><td class="judul">Program Studi</td><td class="isi">' + data.program_studi + '</td></tr>';
                }
                if (data.telepon != null) {

                    html += '<tr><td class="judul">Telepon</td><td class="isi">' + data.telepon + '</td></tr>';
                }
                if (data.alamat != null) {
                    html += '<tr><td class="judul">Alamat</td><td class="isi">' + data.alamat + '</td></tr><tr>';
                }
                $('#modal_detail').modal('show');
                $('#gambaruser').attr('src', '<?php echo base_url() ?>' + data.foto);
                $('#jabatanuser').html(data.jabatan);

                $('#show_detail').html(html);
            }
        });

    });

    $('#show_data').on('click', '.item_edit_password', function() {

        var nim = $(this).attr('data');
        $('#ModalUbahPasswordUser').modal('show');
        $('[name="nim_ubah_user"]').val(nim);


        return false;
    });

    $('#fakultasx').on('change', function() {
        let fakultas = $(this).val();
        $('#program_studix').val(0);
        $('#program_studix option').each(function() {
            let kode_fakultas = $(this).attr('data');
            if (fakultas == kode_fakultas || kode_fakultas == 0) {
                $(this).css('display', 'inline-block');
            } else {
                $(this).css('display', 'none');

            }
        });
    });

    $('#fakultas').on('change', function() {
        let fakultas = $(this).val();
        $('#program_studi').val(0);
        $('#program_studi option').each(function() {
            let kode_fakultas = $(this).attr('data');
            if (fakultas == kode_fakultas || kode_fakultas == 0) {
                $(this).css('display', 'inline-block');
            } else {
                $(this).css('display', 'none');

            }
        });
    });

    $('#btn_simpan').on('click', function() {
        var nim = $('#nim').val();
        var nama_lengkap = $('#nama_lengkap').val();
        var password = $('#password').val();
        var level = $('#level').val();
        var fakultas = $('#fakultas').val();
        var program_studi = $('#program_studi').val();
        var email = $('#email').val();
        var jabatan = $('#jabatan').val();
        var telepon = $('#telepon').val();
        var alamat = $('#alamat').val();
        var foto = $('#nama_lampiran').val();


        if (nim == "") {

            $('#nim').focus();

            Swal.fire({
                title: 'NIM Kosong',
                text: 'Silahkan Masukkan NIM!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }

        if (password == "") {
            $('#password').focus();

            Swal.fire({
                title: 'Password Kosong',
                text: 'Silahkan Masukkan Password!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }

        if (nama_lengkap == "") {

            $('#nama_lengkap').focus();

            Swal.fire({
                title: 'Nama Kosong',
                text: 'Silahkan Masukkan Nama!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }

        if (level == null) {
            $('#level').focus();

            Swal.fire({
                title: 'level Kosong',
                text: 'Silahkan Pilih Level!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }

        if (foto == '') {
            foto += "assets/img/foto_karyawan/user.png";
        }

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('index.php/login/ceknim') ?>",
            dataType: "JSON",
            data: {
                nim: nim
            },
            success: function(data) {
                if (data != 0) {
                    $('#nim').val('');

                    Swal.fire({
                        title: 'NIM Sudah Digunakan!',
                        text: 'Silahkan Masukkan NIM yang lain!',
                        icon: 'error'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.close();

                        }
                    });

                    return false;
                } else {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('index.php/user/simpan') ?>",
                        dataType: "JSON",
                        data: {
                            'nim': nim,
                            'password': password,
                            'nama_lengkap': nama_lengkap,
                            'level': level,
                            'jabatan': jabatan,
                            'fakultas': fakultas,
                            'program_studi': program_studi,
                            'email': email,
                            'telepon': telepon,
                            'alamat': alamat,
                            'foto': foto
                        },
                        success: function(data) {
                            if (data == "User Berhasil Ditambahkan!") {
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: data,
                                    icon: 'success'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.close();
                                        $('#modal_tambah').modal('hide');
                                        location.reload();
                                        tampil_data();
                                    }
                                });


                            } else {}
                        }
                    });
                }
            }
        });

        return false;
    });

    $('#btn_update').on('click', function() {
        var nim = $('#nim_edit').val();
        var nama_lengkap = $('#nama_lengkapx').val();
        var level = $('#levelx').val();
        var fakultas = $('#fakultasx').val();
        var program_studi = $('#program_studix').val();
        var jabatan = $('#jabatanx').val();
        var email = $('#emailx').val();
        var telepon = $('#teleponx').val();
        var alamat = $('#alamatx').val();
        var foto = $('#nama_lampiranx').val();


        $.ajax({
            type: "POST",
            url: "<?php echo base_url('index.php/user/update_data_user') ?>",
            dataType: "JSON",
            data: {
                'nim': nim,
                'nama_lengkap': nama_lengkap,
                'level': level,
                'fakultas': fakultas,
                'program_studi': program_studi,
                'jabatan': jabatan,
                'email': email,
                'telepon': telepon,
                'alamat': alamat,
                'foto': foto
            },
            success: function(data) {
                if (data == "Data Berhasil Diupdate!") {
                    Swal.fire({
                        title: 'Berhasil',
                        text: data,
                        icon: 'success'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.close();
                            $('#modal_edit').modal('hide');
                            location.reload();
                            tampil_data();

                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Gagal',
                        text: data,
                        icon: 'error'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.close();

                        }
                    });
                    return false
                }

            }
        });
        return false;
    });

    $('#show_data').on('click', '.item_hapus_user', function() {
        var nim = $(this).attr('data');

        $('#ModalHapus').modal('show');
        $('#nim_hapus').val(nim);
        return false;
    });
    $('#btn_hapus').on('click', function() {
        var nim = $('#nim_hapus').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('index.php/user/hapus_user') ?>",
            dataType: "JSON",
            data: {
                nim: nim
            },
            success: function(data) {
                $('#ModalHapus').modal('hide');
                location.reload();
                tampil_data();
            }
        });
        return false;
    });

    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka != 8 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }

    function showpassword() {
        let password = $("#password").attr('type');
        if (password == "password") {
            $("#password").attr('type', 'text');
            $("#tampilkan").css('color', 'green');
        } else {

            $("#password").attr('type', 'password');
            $("#tampilkan").css('color', 'black');
        }
    }

    function ceknim() {
        let nim = $('#nim').val();
        let password = $('#password').val();

        if (nim == "") {
            $('#nim').focus();

            Swal.fire({
                title: 'NIM Kosong',
                text: 'Silahkan Masukkan NIM!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }

        if (password == "") {

            $('#password').focus();

            Swal.fire({
                title: 'Password Kosong',
                text: 'Silahkan Masukkan Password!',
                icon: 'error'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();

                }
            });
            return false;

        }
    }
</script>