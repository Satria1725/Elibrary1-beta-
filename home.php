<?php include('db_connect.php') ?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Users</span>
                <span class="info-box-number">
                  <h3>
                    <?php echo $conn->query("SELECT * FROM users where type = 2")->num_rows; ?>
                  </h3>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Documents</span>
                <span class="info-box-number">
                  <h3>
                    <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                  </h3>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
      </div>

          <!-- // data table for history transaksi  -->
          <div class="card card-outline card-primary">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center" width="15%">Transaction Date</th>
                    <th class="text-left">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center">08/02/2022</th>
                    <td>user <b>Admin</b> Created Document File</td>
                  </tr>
                  <tr>
                    <th class="text-center">08/02/2022</th>
                    <td><b>Super Admin</b> Created New Department  </td>
                  </tr>
                  <tr>
                    <th class="text-center">08/02/2022</th>
                    <td>user <b>Admin</b> Edited the Document File  </td>
                  </tr>
                  <tr>
                    <th class="text-center">08/02/2022</th>
                    <td><b>Super Admin</b> Created New User <b> Admin1 </b> in <b>Department IT</b> </td>
                  </tr>	
                  <tr>
                    <th class="text-center">08/02/2022</th>
                    <td>user <b>Admin</b> Edited the Document File  </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>



    <?php else: ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body">
          		Welcome <?php echo $_SESSION['login_name'] ?>!
          	</div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Documents</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
      </div>
          
<?php endif; ?>
