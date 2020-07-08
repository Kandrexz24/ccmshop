 <?php include "includes/header_admin_mant.php" ?> 
<!DOCTYPE html>
<html lang="en">

<head> 

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>
  <link href="/CCMSHOP-MASTER/view/css/bootstrap.min.css" rel="stylesheet">
  <link href="/CCMSHOP-MASTER/view/css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="/CCMSHOP-MASTER/view/css/bootstrap-reboot.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/CCMSHOP-MASTER/view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/CCMSHOP-MASTER/view/css/admin.css" rel="stylesheet">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


  <?php include "Includes/header_nav.php" ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

  <!-- Topbar Navbar -->

<?php include "Includes/header_hor_admin.php" ?>
<!-- End of Topbar -->
        <!-- contenido de la pagina -->
        <div class="container-fluid">

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Usuario</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tab_estado_tab" data-toggle="pill" href="#tab_estado" role="tab" aria-controls="pills-contact" aria-selected="false">Estado</a>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <h1 class="page-header">
                <?php echo @$region->ID != null ? $region->DESC_REG : 'Nuevo Registro'; ?>
            </h1>

            <ol class="breadcrumb">
              <li><a href="?c=region">Region /</a></li>
              <li class="active"><?php echo @$region->ID != null ? $region->DESC_REG : 'Nuevo Registro'; ?></li>
            </ol>
            <form id="frm-region" action="?c=region&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="ID" value="<?php echo $region->ID; ?>" />
              <div class="form-group">
                  <label>Codigo region</label>
                  <input type="text" name="COD_REG" value="<?php echo @$region->COD_REG; ?>" class="form-control" placeholder="Ingrese codigo de la region" required>
              </div>
              
              <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" name="DESC_REG" value="<?php echo @$region->DESC_REG; ?>" class="form-control" placeholder="Ingrese nombre de la region" required>
              </div>
              <hr /> 
              <div class="text-right">
                  <button class="btn btn-primary">Guardar</button>
              </div>
            </form>
            <div class="tab-pane fade" id="pills-home-tab" role="tabpanel" >
              
            </div>
            <div class="tab-pane fade" id="tab_estado" role="tabpanel" >
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Example label</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Another label</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
                <div class="form-group">
                  <input class="btn btn-primary" type="submit" value="Submit">
                </div>
              </form>
            </div>
          </div>

          
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo Region</th>
                    <th scope="col">Region</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($this->model->Listar() as $r): ?>
                      <tr>
                      <td><?php echo $r->ID; ?></td>
                          <td><?php echo $r->COD_REG; ?></td>
                          <td><?php echo $r->DESC_REG; ?></td>
                          <td>
                              <a  class="btn btn-warning" href="?c=region&a=Crud&ID=<?php echo $r->ID; ?>">Editar</a>
                              <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=region&a=Eliminar&ID=<?php echo $r->ID; ?>">Eliminar</a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            ...
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            ...
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
   <!-- Bootstrap core JavaScript-->
   <script src="/CCMSHOP-MASTER/view/vendor/jquery/jquery.min.js"></script>
   <script src="/CCMSHOP-MASTER/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
   <!-- Core plugin JavaScript-->
   <script src="/CCMSHOP-MASTER/view/vendor/jquery-easing/jquery.easing.min.js"></script>
 
   <!-- Custom scripts for all pages-->
   <script src="/CCMSHOP-MASTER/view/js/admin.js"></script>
 
   <!-- Page level plugins -->
   <script src="/CCMSHOP-MASTER/view/vendor/chart.js/Chart.min.js"></script>
 
   <!-- Page level custom scripts -->
   <script src="/CCMSHOP-MASTER/view/js/demo/chart-area-demo.js"></script>
   <script src="/CCMSHOP-MASTER/view/js/demo/chart-pie-demo.js"></script>
   <script src="/CCMSHOP-MASTER/view/js/demo/chart-bar-demo.js"></script>

</body>

</html>
