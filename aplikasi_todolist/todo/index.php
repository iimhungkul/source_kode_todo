<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="../todolist.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="img/icon.png" rel="icon"><title>Aplikasi To-Do List</title>

    <style type="text/css">
    .teks-putih{
      color: white !important;
    }
  </style>
    <script>
          function updateStatus(id, checkbox) {
        var status = checkbox.checked ? "Selesai" : "Belum Selesai";

        $.ajax({
          url: 'todo/update_status.php',
          type: 'POST',
          data: { id: id, keterangan: status },
          success: function(response) {
            if (response.trim() === "success") {
              document.getElementById('status-' + id).innerText = status;
            } else {
              alert('Gagal memperbarui status!');
              checkbox.checked = !checkbox.checked; //kembalikan checkbox jadi gagal
            }
          },
          error: function() {
            alert('Terjadi kesalahan, coba lagi!');
            checkbox.checked = !checkbox.checked;
          }
        });
      }
    </script>
  </head>
  
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg teks-putih" style="background:rgba(0, 0, 0, 0.92);">

      <?php
        session_start();
        $username = $_SESSION['username'];
        $level = $_SESSION['level'];
        if(!empty($username) && ($level == '1')){
            echo "Selamat datang! ".$username;
        }else{
            header('location:../index.html');
        }

    ?>

      <div class="container-fluid">
        <a class="navbar-brand teks-putih" href="#"><img src="todolist.png" width="50" height="50" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">                                   
              <a class="nav-link active teks-putih" aria-current="page" href="index.php?halaman=home"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link teks-putih" href="index.php?halaman=todo"><b>To-Do List</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link teks-putih" href="index.php?halaman=cetaklist"><b>Cetak List</b></a>
            </li>
          
          </ul>
          <form class="d-flex" role="search">
          <a href="../logout1.php" class="btn btn-outline-danger m-1" title="keluar">Keluar</a>
        </form>
        </div>
      </div>
    </nav>
    <!--Navbar-->
    <!--Content-->
    <div  class="container-fluid">
      <div class="row d-flex justify-content-center mt-3" style="min-height: 400px;">
        <div class="col-md-10 p-4 rounded-2">
        <?php
        $halaman = isset($_GET['halaman'])? $_GET['halaman'] : 'home';
      
    					if ($halaman=='home') {
    						include "home/home.php";
    					}
    					else if ($halaman=='todo') {
    						include "todo/todo.php";
    					}
    					else if ($halaman=='edit_todo') {
    						include "todo/edit_todo.php";
    					}
              else if ($halaman=='cetaklist') {
    						include "cetaklist/cetaklist.php";
              }
    		?>
        </div>
      </div>
    </div>
    <!--Content-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(".alert").delay(1000).slideUp(200, function() {
      $(this).alert('close');
      });
    </script>
  </body>
</html>