<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Database</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/user.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</head>
<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Users</b></h2>
                        </div>
                        <div class="col-sm-6 d-flex">
                            <form method="post">
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control form-control" placeholder="Find users" name="searchUser">
                                    <button type="submit" class="input-group-text btn-primary"><i class="bi bi-search me-2"></i> Search </button>
                                </div>
                            </form>
                            <a href="#addUserModal" class="btn btn-success" data-toggle="modal" style="width: 150px; margin-bottom: 15px"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Profile</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <!-- php loop to diplay each info -->
                    <?php
                        require_once('inc/database.php');

                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $users = searchUser($_POST);
                        }else{
                            $users = selectAllUsers();
                        }

                        foreach ($users as $user):
                    ?>

                    <tbody>
                        <tr>
                            <td><?= $user['userName'] ?></td>
                            <td><img src="assets/img/<?= $user['userProfile'] ?>" width="60" height="60" class="rounded-circle" alt=""></td>
                            <td><?= $user['userRole'] ?></td>
                            <td><?= $user['userEmail'] ?></td>
                            <td><?= $user['userPassword'] ?></td>
                            <?php
                                if($user['userRole'] != 'admin'):
                            ?>
                            <td>
                                <a href="process/update_user_html.php?id=<?= $user['userID'] ?>"><i class="fa fa-pencil text-warning"></i></a>
                                <a href="process/delete_user_model.php?id=<?= $user['userID'] ?>"><i class="fa fa-trash-alt text-danger"></i></a>
                            </td>
                            <?php
                                elseif($user['userRole'] == 'admin'):
                            ?>
                            <td>
                                <a href="process/update_user_html.php?id=<?= $user['userID'] ?>"></i></a>
                                <a href="process/delete_user_model.php?id=<?= $user['userID'] ?>"></i></a>
                            </td>
                            <?php
                                endif;
                            ?>
                        </tr>
                    </tbody>
                    <?php
                        endforeach;
                    ?>
                    <!-- end php loop -->
                    
                </table>
            </div>
        </div>        
    </div>

    <!-- Create Modal HTML -->
    <div id="addUserModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="process/create_user_model.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">						
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="userName" required>
                        </div>
                        <div class="form-group">
                            <label>Profile</label>
                            <input type="file" class="form-control" name="userProfile">
                        </div>
                        <div class="form-group">
                            <label>User Role</label>
                            <input type="text" class="form-control" name="userRole" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="userEmail" required>
                        </div>	
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="userPassword" required>
                        </div>	
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</body>
</html>