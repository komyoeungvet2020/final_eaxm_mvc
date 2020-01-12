<div class="container mt-5">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="card">
        <div class="card-header text-center"><strong>Update Data</strong></div>
        <div class="card-body">
          <?php
          if (isset($data['view_data'])) {
            foreach ($data['view_data'] as $rows) {
              ?>
              <form action="index.php?action=update_employee&id=<?php echo $rows['emp_id'] ?>" method="post">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control" value="<?php echo $rows['firstname']; ?>" placeholder="Firstanme..">
                </div>
                <div class="form-group">
                  <input type="text" name="lname" class="form-control" value="<?php echo $rows['lastname']; ?>" placeholder="Lastanme">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" value="<?php echo $rows['email']; ?>" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="tel" class="form-control" value="<?php echo $rows['tel']; ?>" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="text" name="province" class="form-control" value="<?php echo $rows['province']; ?>" placeholder="Province">
                </div>
                <div class="form-group">
                  <input type="text" name="position" class="form-control" value="<?php echo $rows['position']; ?>" placeholder="Position">
                </div>
                <a href="index.php?action=view" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success float-right" value="submit">Submit</button>
              </form>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <div class="col-4"></div>
  </div>
</div>