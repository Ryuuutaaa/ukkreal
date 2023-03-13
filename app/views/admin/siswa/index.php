

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once(__DIR__ . "/../partikels/sidebar.php") ?>
        <!-- End sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top bar -->
                <?php require_once(__DIR__ . "/../partikels/topbar.php") ?>
                <!-- End tob bar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                  <!-- Card -->
                 
                  <!-- End card -->
                    <div class="row">
            
                       <div class="container-fluid">
                         <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $data['tbl'] ?></h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <a href="" class="btn btn-success my-3">Tambah Siswa</a>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Kelas</th>
                                            <th>Id Pengguna</th>
                                            <th>Pembayaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr> 
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Kelas</th>
                                            <th>Id Pengguna</th>
                                            <th>Pembayaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach($data['getAllSiswa'] as $siswa): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $siswa['nisn']?></td>
                                            <td><?= $siswa['nis']?></td>
                                            <td><?= $siswa['nama']?></td>
                                            <td><?= $siswa['alamat']?></td>
                                            <td><?= $siswa['telepon']?></td>
                                            <td><?= $siswa['kelas_id']?></td>
                                            <td><?= $siswa['pengguna_id']?></td>
                                            <td><?= $siswa['pembayaran_id']?></td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                                <form action="<?= BURL ?>/admin/deleteSiswaAct" method="POST" class="d-inline">
                                                    <input type="hidden" name="id" value="<?= $siswa['id_siswa'] ?>">
                                                    <input type="hidden" name="pengguna_id" value="<?= $siswa['pengguna_id'] ?>">
                                                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= $siswa['nama']?>?')" type="submit">Delete</button> 
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                        
                       </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   <?php require_once(__DIR__ . "/../partikels/modal.php") ?>