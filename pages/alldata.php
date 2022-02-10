<?php include ("header.php");
      include ("navbar.php"); ?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <form action="action.php" method="POST">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="search"/>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success" name="search_btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="card-header">All User Info</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Edit Or Remove</th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            if(count($allData)<1){
                                echo "<tr><td>No Result Found</td></tr>";
                            }else{
                                foreach ($allData as $data) {?>
                                    <tr>
                                        <td><?php echo $data['title'];?></td>
                                        <td><?php echo $data['author'];?></td>
                                        <td><?php echo $data['description'];?></td>
                                        <td><img src="<?php echo $data['image'];?>" height="80" width="100"/></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="action.php?pages=all-data&status=update&id=<?php echo isset($data['id'])?$data['id']:'' ?>"><i class="fa-solid fa-pen-to-square btn btn-success"></i></a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="action.php?pages=all-data&status=delete&id=<?php echo isset($data['id'])?$data['id']:'' ?>"><i class="fa-solid fa-trash-can btn btn-danger"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } }?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ("footer.php")?>
