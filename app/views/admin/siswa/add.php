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
                        <h1 class="h3 mb-0 text-gray-800">Siswa | <?= $data['title'] ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-6">
                        <form action="<?= BURL ?>/admin/tambahSiswaAct" method="POST">
                        <div class="form-group">  
                            <label for="username">NISN</label>
                            <input type="number" class="form-control" name="nisn">  
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>  
                            <input type="number" class="form-control" name="username"> 
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>  
                            <input type="text" class="form-control" name="nama"> 
                        </div>
                        <div class="form-group">
                            <label for="nama">Password</label>  
                            <input type="password" class="form-control" name="pass">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>  
                            <input type="text" class="form-control" name="alamat"> 
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>  
                            <input type="number" class="form-control" name="telepon"> 
                        </div>
                        <div class="form-group">
                            <label for="telepon">Kelas</label>   
                            <select name="kelas" id="kelas" class="form-control">
                                <?php foreach($data['kelas'] as $kelas): ?>
                                    <option value="<?= $kelas['id'] ?>"><?= $kelas['nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Tahun Ajaran</label>   
                            <select name="pembayaran" id="kelas" class="form-control">
                                <?php foreach($data['pembayaran'] as $pembayaran): ?>
                                    <option value="<?= $pembayaran['id'] ?>"><?= $pembayaran['tahun_ajaran'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input type="hidden" name="role" id="role" value="2">
                        <button class="btn btn-primary mt-2 float-right" type="submit">Tambah <i class="fas fa-pen ml-1"></i></button> 
                        </div>
                       </form>
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
