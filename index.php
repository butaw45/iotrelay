<!doctype html>
<html lang="en">

<head>
  <title>IoT Relay test</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <link rel="stylesheet" type="text/css" href="assets/css/css.css">
  <link rel="stylesheet" type="text/css" href="assets/css/material-dashboard.css?v=2.1.2">
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript" src="js/js.js"></script>

  <style type="text/css">
  .tengah{
    display: flex;
    flex-direction: column;
    justify-content:center ;
    align-items: center;
    text-align: center;
  }

  </style>
</head> 

<body>

  <div class="content">
    <div class="container-fluid tengah" >
      <div><h3 style="text-align: center;">IOT Relay Test - NodeMCU PHP </h3></div>
      <div style="width: 500px;">
        <div class="card card-chart" style="height: auto;"> 
          <div class="card-header card-header-success">
            <i class="fas fa-bell" style="font-size: 36px;"></i>
            <br>
            Pengaturan Relay
          </div>

        <div class="card-body">
            Jam Sekarang:
            <h2 style="font-weight: bold;">11.11.11</h2>
            <br>
            <div class="form-group">
              <form method="POST">
                <div>
                  <input type="text" name="jam" id="jam" class="form-control" placeholder="Jam  :  Menit  :  Detik" required style="text-align: center;">
                
                <button type="submit" name="btnSimpan" id="btnSimpan" class="btn btn-primary btn-sm">Tambah Data</button>
                </div>
              </form>
            </div>

            <!-- //!Data jam Tersimpan -->
            <table class="table table-bordered" style="text-align: center;">
            <tr style="background-color: grey; color: whitesmoke;">
              <th>List jam</th>
              <th style="width: 10px;">Aksi</th>
            
            </tr>
            <tr>
              <td></td>
              <td></td>
            
            </tr>
            </table>

        </div>


        </div>
      </div>
    </div>
  </div>

</body>
</html>