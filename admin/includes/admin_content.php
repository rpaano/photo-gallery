<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin 
                <small>Subheading</small>
            </h1>

            <?php 
                /*     find all users

*/
                // $result_set = User::find_all_users();

                // while ($row = mysqli_fetch_array($result_set)) {

                //     $user_found = mysqli_fetch_array($result_set);
                //     echo $row['username'].'<br>';
                // }
                

                //find user by id

                //$found_user = User::find_user_by_id(4);

                // $user = new User();

                // //$user->id = $found_user['id'];
                // $user->username = $found_user['username'];
                // $user->password = $found_user['password'];
                // $user->first_name = $found_user['first_name'];
                // $user->last_name = $found_user['last_name'];

                //echo User::$id;

                // $user = User::instantiation($found_user);

                // echo $user->user;

                // $users = User::find_all_users();

                // foreach ($users as $user) {
                //     echo $user->username . "<br>";
                // }

                $found_user = User::find_user_by_id(4);

                echo $found_user->username;

                


             ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->