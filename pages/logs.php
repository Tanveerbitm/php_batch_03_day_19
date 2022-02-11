<?php include ("header.php");
include ("navbar.php"); ?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h3 class="pl-3">All Logs</h3></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover no-gutters">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Added By (user)</th>
                                    <th>Modified By (user)</th>
                                    <th>Added At</th>
                                    <th>Modified At</th>
                                </tr>

                                </thead>
                                <tbody>
                                <?php
                                if(count($allData)<1){
                                    echo "<tr><td>No Result Found</td></tr>";
                                }else{
                                    foreach ($allData as $data) {?>
                                        <tr>
                                            <td><?php echo $data['code'];?></td>
                                            <td><?php echo $data['name'];?></td>
                                            <td><img src="<?php echo $data['image'];?>" height="80" width="100"/></td>
                                            <td><?php echo $data['addedBy'];?></td>
                                            <td><?php echo $data['modifiedBy'];?></td>
                                            <td><?php echo $data['addedAt'];?></td>
                                            <td><?php echo $data['modifiedAt'];?></td>
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
