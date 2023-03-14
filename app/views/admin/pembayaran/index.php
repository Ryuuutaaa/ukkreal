 <!-- Page Wrapper -->
 <div id="wrapper">

<?php require_once(__DIR__ . "/../partikels/sidebar.php"); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <?php require_once(__DIR__ . "/../partikels/topbar.php")?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="">

                <!-- Card -->
              

            <!-- Content Row -->
            <?php Flasher::flash();?>
            <a href="<?= BURL ?>/admin/tambahPembayaran" class="btn btn-primary mb-3">Tambah Pembayaran</a>
            <div class="row">
            <div class="col-6 table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Nominal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr> 
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Nominal</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($data['pembayaran'] as $pembayaran): ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $pembayaran['tahun_ajaran']?></td>
                                    <td><?= $pembayaran['nominal']?></td>
                                    <td>
                                        <a href="<?= BURL ?>/admin/editPembayaran/<?= $pembayaran['id']?>" class="btn btn-warning">Edit</a>
                                        <form action="<?= BURL?>/admin/deletePembayaranAct" method="POST" class="d-inline">
                                            <input type="hidden" name="id" value="<?= $pembayaran['id'] ?>">
                                            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= $pembayaran['tahun_ajaran']?>?')" type="submit">Delete</button> 
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Modal -->
<?php require_once(__DIR__ . "/../partikels/modal.php");?>