<body class="hold-transition sidebar-mini">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Question <?= $test['test_name'] ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Test</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->


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
                  <h3 class="card-title">Make your Question for <?= $test['test_name'] ?></h3>
                  <a href="<?= base_url('admin/edit_test_page/'.$test['id_test']) ?>">Go Back</a>
                </div>
                <div>
                <nav class="w-100 mt-2">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">

                    <a class="nav-item nav-link active" id="pilihan-ganda-tab" data-toggle="tab" href="#pilihan-ganda-desc" role="tab" aria-controls="pilihan-ganda-desc" aria-selected="true"> <i class="fa fa-list"></i> Pilihan Ganda </a>

                    <a class="nav-item nav-link" id="true-false-tab" data-toggle="tab" href="#true-false-desc" role="tab" aria-controls="true-false-desc" aria-selected="false"><i class="fa fa-check"></i> True False</a>

                    
                  </div>
                </nav>


                </div>
              </div>
            </div>
            
        

          <form action="<?= base_url('questions/add_question/'.$test['id_test']); ?>" method="POST">
          <div class="row">
            <div class="col-9">
              <input type="hidden" name="tipe_question" id="tipe_question" value="1">

              <!-- QUESTION -->
                <div class="card-header">
                  <h3 class="card-title">
                    Add Questions ..
                  </h3>
                </div>
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea name="question" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                 
                
                	<!-- Nav -->
                </div>

              <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="pilihan-ganda-desc" role="tabpanel" aria-labelledby="pilihan-ganda-tab">
              <!-- ANSWER A-->
                <div class="card-header">
                  <h3 class="card-title">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="kunci_jawaban_a" name="kunci_jawaban" data-toggle="tooltip" data-placement="top" title="Anda memilih jawaban ini sebagai jawaban yang benar" value="a">
                      <label for="kunci_jawaban_a" class="custom-control-label">Answer A</label>
                    </div>
                  </h3>
                </div>
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea name="answer_a" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                 
                
                  <!-- Nav -->
                </div>

              <!-- ANSWER B-->
                <div class="card-header">
                  <h3 class="card-title">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="kunci_jawaban_b" name="kunci_jawaban" data-toggle="tooltip" data-placement="top" title="Anda memilih jawaban ini sebagai jawaban yang benar" value="b">
                      <label for="kunci_jawaban_b" class="custom-control-label">Answer B</label>
                    </div>
                  </h3>
                </div>
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea name="answer_b" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>

              <!-- ANSWER C-->
                <div class="card-header">
                  <h3 class="card-title">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="kunci_jawaban_c" name="kunci_jawaban" data-toggle="tooltip" data-placement="top" title="Anda memilih jawaban ini sebagai jawaban yang benar" value="c">
                      <label for="kunci_jawaban_c" class="custom-control-label">Answer C</label>
                    </div>
                  </h3>
                </div>
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea name="answer_c" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>

              <!-- ANSWER D-->
                <div class="card-header">
                  <h3 class="card-title">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="kunci_jawaban_d" name="kunci_jawaban" data-toggle="tooltip" data-placement="top" title="Anda memilih jawaban ini sebagai jawaban yang benar" value="d">
                      <label for="kunci_jawaban_d" class="custom-control-label">Answer D</label>
                    </div>
                  </h3>
                </div>
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea name="answer_d" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>

              <!-- ANSWER E-->
                <div class="card-header">
                  <h3 class="card-title">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="kunci_jawaban_e" name="kunci_jawaban" data-toggle="tooltip" data-placement="top" title="Anda memilih jawaban ini sebagai jawaban yang benar" value="e">
                      <label for="kunci_jawaban_e" class="custom-control-label">Answer E</label>
                    </div>
                  </h3>
                </div>
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea name="answer_e" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="true-false-desc" role="tabpanel" aria-labelledby="true-false-tab">
               
                 <div class="card-header">
                    <h3 class="card-title">
                      Kunci Jawaban, True or False
                    </h3>
                  </div>
                  <div class="card-body">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="answer_true" name="kunci_jawaban" value="t">
                       <label for="answer_true" class="custom-control-label">True (Pernyataan Benar)</label><br><br>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="answer_false" name="kunci_jawaban" value="f">
                       <label for="answer_false" class="custom-control-label">False (Pernyataan Salah)</label>
                    </div>



                      
                  </div>


              </div>


              </div>
            </div>
            <div class="col-3">
              <div class="card-header">
                  <h3 class="card-title">
                    Optional
                  </h3>
                </div>
                <div class="card-body pad">
                  <!-- CSRF -->
                  <?php
                      $csrf = array(
                      'name' => $this->security->get_csrf_token_name(),
                      'hash' => $this->security->get_csrf_hash()
                      );
                  ?>
                  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                  <input type="hidden" name="token" value="<?=$csrf['hash'];?>" />

                  <button type="submit" class="btn btn-success col-lg-12"><i class="fa fa-save"></i> Save question</button>
                  <button type="reset" class="btn text-success col-lg-12"> Clear reset</button>
                </div>
            </div>
          </div>
          
          </form>



      
          </div>
  
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <!-- Modal New Test-->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Test</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('test/new_test'); ?>" method="post">
	          <div class="modal-body">
              	<div class="form-group">
	                <label for="exampleInputEmail1">Test Name</label>
	                <input type="text" class="form-control" id="testName" placeholder="Enter test name" required="" name="test_name">
	                <!-- Get Token  -->
	                <?php
	                 	$csrf = array(
					        'name' => $this->security->get_csrf_token_name(),
					        'hash' => $this->security->get_csrf_hash()
						);
					?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					<input type="hidden" name="token" value="<?=$csrf['hash'];?>" />
	             </div>
	            </div>
	            <div class="modal-footer justify-content-between">
	              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	              <button type="submit" class="btn btn-dark">Start Adding Questions</button>
          	  </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

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
<script type="text/javascript"> 
   $('#pilihan-ganda-tab').on('click',function(e){
      $('#tipe_question').val("1");
   });
   $('#true-false-tab').on('click',function(e){
     $('#tipe_question').val("2");
   });
</script>
<script>
  $(function () {
    // Summernote for editors
    $('.textarea').summernote()
    // Enabel Tooltip
    $('#kunci_jawaban_a').tooltip('enable');
    $('#kunci_jawaban_b').tooltip('enable');
    $('#kunci_jawaban_c').tooltip('enable');
    $('#kunci_jawaban_d').tooltip('enable');
    $('#kunci_jawaban_e').tooltip('enable');
  })
</script>

<?= Flasher::flash() ?>



