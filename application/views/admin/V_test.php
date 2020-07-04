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
                  <h3 class="card-title">Make your online test</h3>
                  <a href="javascript:void(0);">Go Back</a>
                </div>
              </div>
              <div class="card-body">
              	<!-- Nav -->
                 <nav class="w-100">
	              <div class="nav nav-tabs" id="product-tab" role="tablist">
	                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Test</a>

	                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Questions Bank</a>

	                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Categories</a>
	              </div>
	            </nav>

	            <!-- Tab Panel -->
	            <div class="tab-content p-3" id="nav-tabContent">
	              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
              		<table id="example1" class="table table-bordered table-striped">
              		  <a href="" class="btn btn-dark btn-sm float-right" data-toggle="modal" data-target="#modal-default">New Test <i class="fa fa-plus"></i></a>
	                  <thead>
		                  <tr>
		                    <th>Name Test</th>
		                  </tr>
	                  </thead>
	                  <tbody>
	                  	<?php foreach ($test as $key) { ?>
		                  <tr class="tr-test">
		                    <td > <a href="<?= base_url('admin/edit_test_page/'.$key->id_test); ?>"><i class="fa fa-file-alt"></i> <?= $key->test_name ?></a> 
		                   	<span class="project-actions float-right" >
		                          <a class="btn  btn-primary btn-sm m-0 pt-0 pb-0" href="#">
		                            <i class="fas fa-pencil-alt">
		                              </i>
		                              Edit
		                          </a>
		                          <a class="btn btn-danger btn-sm m-0 pt-0 pb-0" href="#">
		                              <i class="fas fa-forward">
		                              </i>
		                              Assign
		                          </a>	
		                          <a class="btn btn-success btn-sm m-0 pt-0 pb-0" href="#">
		                              <i class="fas fa-chart-bar">
		                              </i>
		                              Statistic
		                          </a>	

		                     </span>
		                  </tr>
		                  <?php } ?>

		                  

		              </tbody>
	                
	                </table>
	              </div>

	              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> </div>

	              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">  </div>
	            </div>

              </div>
            </div>
      
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

<?= Flasher::flash() ?>
