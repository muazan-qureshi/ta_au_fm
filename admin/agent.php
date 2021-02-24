<?php include('header.php'); ?>

<section class="container">
    <h3 class="py-3 text-center">
        All Agents
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>ID</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>EMail</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            foreach ($object->agentsinfo() as $agent) {
            ?>
                <tr>
                    <td><?php echo $srno ?></td>
                    <td><?php echo $agent['id'] ?></td>
                    <td><?php echo $agent['fullname'] ?></td>
                    <td><?php echo $agent['username'] ?></td>
                    <td><?php echo $agent['email'] ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary modal-lg" data-toggle="modal" data-target="#modelId">
                            More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?php echo $agent['username'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="h5">ID</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['id'] ?></b></span>
                                        <br>
                                        <span class="h5">Full Name</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['fullname'] ?></b></span>
                                        <br>
                                        <span class="h5">Username</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['username'] ?></b></span>
                                        <br>
                                        <span class="h5">CNIC</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['cnic'] ?></b></span>
                                        <br>
                                        <span class="h5">Email</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['email'] ?></b></span>
                                        <br>
                                        <span class="h5">Phone</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['phone'] ?></b></span>
                                        <br>
                                        <span class="h5">Date of Birth</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['dob'] ?></b></span>
                                        <br>
                                        <span class="h5">Gender</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['gender'] ?></b></span>
                                        <br>
                                        <span class="h5">Company/Agency</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['company'] ?></b></span>
                                        <br>
                                        <span class="h5">Location</span>
                                        <span class="h4 ml-5 pl-5 ml-5 pl-5"><b><?php echo $agent['location'] ?></b></span>
                                        <br>
                                        <span class="h5">Address</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['address'] ?></b></span>
                                        <br>
                                        <span class="h5">Added By</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['createby'] ?></b></span>
                                        <br>
                                        <span class="h5">Create Date & Time</span>
                                        <span class="h4 ml-5 pl-5"><b><?php echo $agent['createDT'] ?></b></span>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-success">
                            Update
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger">
                            Delete Agent
                        </button>
                    </td>
                </tr>
            <?php
                $srno++;
            }
            ?>
        </tbody>
    </table>
</section>

<?php include('footer.php'); ?>