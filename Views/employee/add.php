<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center"><strong>Add Date</strong></div>
                <div class="card-body">
                    <form action="index.php?action=add_employee" method="post">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="Firstanme..">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" class="form-control" placeholder="Lastanme">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tel" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="province" class="form-control" placeholder="Province">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" class="form-control" placeholder="Position">
                        </div>
                        <a href="index.php?action=view" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-success float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>