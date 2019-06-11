<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form>
                <button class="btn btn-primary btn-sm mb-3">INPUT PESANAN</button></a>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID PESANAN</th>
                            <th>NAMA PEMESAN</th>
                            <th>JENIS PESANAN</th>
                            <th>NAMA FILE</th>
                            <th>JENIS KERTAS</th>
                            <th>PANJANG</th>
                            <th>LEBAR</th>
                            <th>JUMLAH</th>
                            <th>HARGA</th>
                            <th>TANGGAL PESAN</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td width="80px"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                    </tbody>
                </table>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->

<!-- Button trigger modal -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var t = $("#mytable").dataTable({
            "scrollX": true
        });
    });
</script>