

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
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->

                  <!-- Card -->
                 
                  <!-- End card -->
                    <div class="row">
            
                       <div class="container-fluid">
                         <!-- Page Heading -->
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    
                    <div class="card">
                        <?php Flasher::flash() ?>
                    <form action="<?= BURL ?>/admin/editKelasAct" class="p-3" method="POST">
                        <div class="form-group">
                            <label for="" class="">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Kompetensi Keahlian</label>
                            <input type="text" class="form-control" name="kompetensi_keahlian">
                        </div>
                        <!-- <input type="hidden" value="1" id="role" name="role"> -->
                        <button class="btn btn-primary " type="submit">Edit <i class=" fas fa-pen mx-1"></i></button>
                        <a href="<?= BURL ?>/admin/kelas" class="btn btn-secondary " style="margin-left: 80%;">Back</a>
                    </form>
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


   
