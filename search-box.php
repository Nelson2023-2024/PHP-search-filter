<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Search box</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <h4>Search box with filter</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search data" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require("./mysqli_connect.php");

                                if (isset($_GET['search'])) {
                                    $filtervalues = '%' . $_GET['search'] . '%';
                                    $select_query = "SELECT id, CONCAT(first_name,' ' ,last_name) AS full_name , email FROM users WHERE CONCAT(first_name, last_name, email) LIKE '$filtervalues'";
                                    $excecute = mysqli_query($dbcon, $select_query);

                                    if ($excecute && mysqli_num_rows($excecute) > 0) {
                                        while ($row = mysqli_fetch_assoc($excecute)) {
                                            echo "<tr>";
                                            echo "<td>{$row['id']}</td>";
                                            echo "<td>{$row['full_name']}</td>";
                                            echo "<td>{$row['email']}</td>";
                                            echo "</tr>";
                                            var_dump($row);
                                        }
                                    } else {
                                        echo "<tr><td colspan='3'>No Record Found</td></tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
