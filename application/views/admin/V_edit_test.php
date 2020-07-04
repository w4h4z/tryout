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
                  <thead>
                    <tr><td>Test questions <?= $test['test_name']; ?></td></tr>
                  </thead>
                  
                  <tbody>
                  <?php $no=1;foreach ($questions as $key) { ?>
                      <tr>
                        <td> 
                        <h5>Question <?= $no; ?></h5>
                        <?= $key->question ?>
                        <div class="collapse" id="collapseQuestion<?= $no ?>">
                          <?php if ($key->tipe_question == "pilihan ganda"){ ?>
                          <input type="hidden" name="kj" value="<?= $key->kunci_jawaban ?>" id="kj">
                          <table class="mt-2 p-0">
                            <?php if(empty($key->pilihan_c)){ ?> <!-- jika pilihan c kosong otomatis yang ada pilihan a,b -->
                            <tr>

                              <td class="kj_a"></td>
                              <td>A) <?= $key->pilihan_a ?></td>
                            </tr>
                            <tr>
                              <td class="kj_b"></td>
                              <td>B) <?= $key->pilihan_b ?></td>
                            </tr>

                            <?php }else if(empty($key->pilihan_d)){ ?> <!-- jika pilihan d kosong otomatis yang ada pilihan a,b,c-->
                            <tr>
                              <td class="kj_a"></td>
                              <td>A) <?= $key->pilihan_a ?></td>
                            </tr>
                            <tr>
                              <td class="kj_b"></td>
                              <td>B) <?= $key->pilihan_b ?></td>
                            </tr>
                             <tr>
                              <td class="kj_c"></td>
                              <td>C) <?= $key->pilihan_c ?></td>
                            </tr>

                            <?php }else if(empty($key->pilihan_e)){ ?> <!-- jika pilihan e kosong otomatis yang ada pilihan a,b,c,d-->
                            <tr>
                              <td class="kj_a"></td>
                              <td>A) <?= $key->pilihan_a ?></td>
                            </tr>
                            <tr>
                              <td class="kj_b"></td>
                              <td>B) <?= $key->pilihan_b ?></td>
                            </tr>
                             <tr>
                              <td class="kj_c"></td>
                              <td>C) <?= $key->pilihan_c ?></td>
                            </tr>
                             <tr>
                              <td class="kj_d"></td>
                              <td>D) <?= $key->pilihan_d ?></td>
                            </tr>

                            <?php }else{ ?>  <!-- otomatis yang ada pilihan a,b,c,d,e -->
                              <tr>
                              <td class="kj_a"></td>
                              <td >A) <?= $key->pilihan_a ?></td>
                            </tr>
                            <tr>
                              <td class="kj_b"></td>
                              <td>B) <?= $key->pilihan_b ?></td>
                            </tr>
                             <tr>
                              <td class="kj_c"></td>
                              <td>C) <?= $key->pilihan_c ?></td>
                            </tr>
                             <tr>
                              <td class="kj_d"></td>
                              <td>D) <?= $key->pilihan_d ?></td>
                            </tr>
                            <tr>
                              <td class="kj_e"></td>
                              <td>D) <?= $key->pilihan_e ?></td>
                            </tr>

                            <?php } ?>
                      
                            
                           
                           
                          </table>

                          <?php }else{ ?>

                          <table class="mt-2 p-0">
                            <tr>
                              <td> <i class="fa fa-check"></i></td>
                              <td>True</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>False</td>
                            </tr>
                          </table>

                          <?php } ?>
                          <hr>
                          <small>
                            <span>Tipe questions : <?= $key->tipe_question ?></span><br>
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

                  <?php $no++;} ?>
                  </tbody>


                    
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

<!-- javascript pengaturan kunci jawaban check -->
<script type="text/javascript">
  var kj = document.getElementById('kj').value;
  $('.kj_'+kj).html('<i class="fa fa-check"></i>');
</script>

<?= Flasher::flash() ?>
