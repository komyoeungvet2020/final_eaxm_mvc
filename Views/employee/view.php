<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <a href="index.php?action=add_form" class="btn btn-success">Add New</a>
            <table class="table table-bordered bg-light">
                <tr>
                    <th>ID</th>
                    <th>FIRSTNAME</th>
                    <th>LESTNAME</th>
                    <th>EMAIL</th>
                    <th>TEL</th>
                    <th>PROVINCE</th>
                    <th>POSITION</th>
                    <th>ACTION</th>
                </tr>
                <?php
                if (isset($data['view_data'])) {
                    foreach ($data['view_data'] as $rows) {
                        ?>
                        <tr>
                            <td><?php echo $rows['emp_id'] ?></td>
                            <td><?php echo $rows['firstname'] ?></td>
                            <td><?php echo $rows['lastname'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['tel'] ?></td>
                            <td><?php echo $rows['province'] ?></td>
                            <td><?php echo $rows['position'] ?></td>
                            <td>
                                <a href="index.php?action=edit_form&id=<?php echo $rows['emp_id'] ?>">Edit</a>
                                <a href="index.php?action=delete_employee&id=<?php echo $rows['emp_id'] ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>