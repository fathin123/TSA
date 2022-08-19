<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS-->
    <link rel="stylesheet" href="style.css">

    <!-- dataTables style CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- dataTables CDN -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
    <!-- <script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide();
        });
        $("#show").click(function(){
            $("p").show();
        });
    });
    </script> -->
    
    
    <title>Portofolio</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#about">About</a>
                    <a class="nav-link active" href="#contact">Contact Personal</a>
                </div>
            </div>
        </div>
    </nav>
    <!--Akhir-->

    <section class="jumbotron text-center">
        <p>Perkenalkan Kami Mahasiswa dari Politeknik Negeri Malang</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,288L60,256C120,224,240,160,360,133.3C480,107,600,117,720,112C840,107,960,85,1080,96C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-6 text-center">
                <div class="col-mb-3"
                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <p>Tugas magang TSA HandOut4 CSS Framework</p>
                    <p> Berikut adalah nama kelompok kami : </p>
                    <br>
                    <?php
                    $nama = array("Daniel","Fathin","Dhiyaul");
                    foreach ($nama as $val)
                    {
                       echo "$val <br>";
                    }
                    ?>

                    <!-- <button id="hide">Hide</button>
                    <button id="show">Show</button> -->

                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#d3d3d3" fill-opacity="1"
                d="M0,192L60,186.7C120,181,240,171,360,192C480,213,600,267,720,277.3C840,288,960,256,1080,224C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h4>Contact Personal</h4>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Hp</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Daniel Bagus Christyanto</td>
                            <td>danielbagoes23@gmail.com</td>
                            <td>Sidoarjo</td>
                            <td>085730183422</td>
                          </tr>
                          <tr>
                            <td>Fathin Naufaliya</td>
                            <td>fathinnaufalia@gmail.com</td>
                            <td>Bojonegoro</td>
                            <td>08136388419</td>
                          </tr>
                          <tr>
                            <td>Muhammad Dhiyaul Auliya</td>
                            <td>mdhiyaul5@gmail.com</td>
                            <td>Kepanjen</td>
                            <td>081910441609</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir -->

    <!-- Footer -->
    <footer class="bg-dark text-white text-center pb-3">
        <p> Created by <a href="" class="text-white fw-bold"> Kelompok </a></p>
    </footer>
    <!-- Akhir -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>