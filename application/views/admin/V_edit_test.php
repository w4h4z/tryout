<body class="hold-transition sidebar-mini">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Test</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Test</a></li>
              <li class="breadcrumb-item active">Edit test</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <hr>
        <h6><i class="fa fa-file-alt"></i> <?= $test['test_name'] ?> /</h6>
        <a href="" class="btn bg-navy btn-sm "><i class="fa fa-copy"></i> Dupplicate</a>
        <a href="" class="btn bg-navy btn-sm "><i class="fa fa-print"></i> Print</a>
        <a href="<?= base_url('test/delete_test/'.$test['id_test']) ?>" class="btn bg-navy btn-sm " onclick="return confirm('Apakah anda yakin untuk menghapus test ini secara permanen ?');"><i class="fa fa-trash"></i> Delete</a>

        <a href="" class="btn btn-danger btn-sm float-right "><i class="fa fa-forward"></i> Assign Test</a>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">

              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Add Your Introduction Test, <a href="">Here</a></h3>
                  <a href="<?= base_url('admin/test_page') ?>">Go Back</a>
                </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered  table-striped">
                    <a class=" dropdown-toggle btn btn-sm btn-dark float-right" data-toggle="dropdown" href="#">
                      Add Question <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="#"><i class="fa fas fa-plus"></i> Add Question </a>
                      <a class="dropdown-item" tabindex="-1" href="#"><i class="fa fas fa-file-import"></i> Impor Question </a>
                    </div>
                  
                  <?php $no=1;foreach ($questions as $key) { ?>

                    <thead>
                      <tr>
                        <th>Question <?= $no; ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <?= $key->question ?>
                        <div class="collapse" id="collapseQuestion<?= $no ?>">
                          <table class="mt-2 p-0">
                            <tr>
                              <td> <i class="fa fa-check"></i></td>
                              <td>A) <?= $key->pilihan_a ?></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>B) <?= $key->pilihan_b ?></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>C) <?= $key->pilihan_c ?></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>D) <?= $key->pilihan_d ?></td>
                            </tr>
                          </table>
                          <hr>
                          <small>
                            <span>Created at : <?= $key->created_at ?></span><br>
                            <span>Modifed at : 00.00</span>
                          </small>

                        </div>
                        <div class="project-actions mt-2" >
                              <a class="btn btn-primary btn-sm m-0 pt-0 pb-0" data-toggle="collapse" data-target="#collapseQuestion<?= $no ?>" aria-expanded="false" aria-controls="collapseQuestion<?= $no ?>" href="#collapseQuestion<?= $no ?>" 
                              >
                              <i class="fas fa-window-maximize">
                                  </i>
                                  Answer
                              </a>

                              <a class="btn btn-danger btn-sm m-0 pt-0 pb-0" href="#">
                                  <i class="fas fa-pen">
                                  </i>
                                  Edit
                              </a>  
                              <a class="btn btn-success btn-sm m-0 pt-0 pb-0" href="#">
                                  <i class="fas fa-copy">
                                  </i>
                                  Dupplicate
                              </a>  

                         </div>
                      </tr>                    
                    </tbody>

                  <?php $no++;} ?>

                    
                  </table>
              

	         

              </div>
            </div>
      
          </div>
  
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <!-- Modal New Test-->


    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<?php 
  $this->load->view('admin/layouts/footer');
?>

<?= Flasher::flash() ?>
