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
        
            <!-- Content Row -->
            <div class="row">
                <div class="col-6">
                <form action="<?= BURL ?>/admin/editPembayaranAct" method="POST">
                <input type="hidden" name="id" value="<?= $data['pembayaran']['id'] ?>"> 
                <div class="form-group">  
                    <label for="nama_kelas">Tahun Ajaran</label>
                    <input type="text" class="form-control" name="tahun_ajaran" value="<?= $data['pembayaran']['tahun_ajaran'] ?>">  
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>  
                    <input type="number" class="form-control" name="nominal" value="<?= $data['pembayaran']['nominal'] ?>">   
                </div> 
                <button class="btn btn-warning mt-2 float-right" type="submit">Edit <i class="fas fa-pen ml-1"></i></button> 
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