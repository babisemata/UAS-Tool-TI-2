<?php 
    include("Koneksi.php");
    if(isset($_POST['submit'])){
        $NIM = $_POST['NIM'];
        $Nama = $_POST['Nama'];
        $Tlp = $_POST['Tlp'];
        $Email = $_POST['Email'];

        $add = mysqli_query ($koneksi, 'INSERT INTO tb_mahasiswa(NIM, Nama, Tlp, Email) VALUES ("'.$NIM.'", "'.$Nama.'", "'.$Tlp.'", "'.$Email.'")');
        
        if ($add) {
            header('Location: Index.php');
            exit;
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="stylehalaman.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hallo Mahasiswa!</h1>
                                    </div>
                                    <form id="form_mahasiswa" class="user" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-group">
                                        <input type="text" id="NIM" name="NIM" class="form-control form-control-user" placeholder="NIM">
                                        </div>
                                        <div class="form-group">
                                            <input type="Nama" id="Nama" name="Nama" class="form-control form-control-user"
                                                id="Nama" aria-describedby="emailHelp"
                                                placeholder="Nama Mahasiswa">
                                        </div>
                                        <div class="form-group">
                                            <input type="Tlp" id="Tlp" name="Tlp" class="form-control form-control-user"
                                                id="Tlp" placeholder="TLP">
                                        </div>
                                        <div class="form-group">
                                            <input type="Email" id="Email" name="Email" class="form-control form-control-user"
                                                id="Email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn">Submit</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="js2.js"></script>

</body>

</html>