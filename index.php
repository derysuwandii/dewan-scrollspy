<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
  	<title>Dewan Bootstrap - Scrollspy</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-secondary">
    <a class="navbar-brand" href="index.php" style="color: #fff;">
      Dewan Komputer
    </a>
  </nav>

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="atas-tab" data-toggle="tab" href="#atas" role="tab" aria-controls="atas" aria-selected="true">Navigasi Atas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="samping-tab" data-toggle="tab" href="#samping" role="tab" aria-controls="samping" aria-selected="false">Navigasi Samping</a>
    </li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade show active" id="atas" role="tabpanel" aria-labelledby="home-tab">
      <iframe src="atas.php" width="100%" class="mb-4 mt-2" height="500px" style="border: 0;"></iframe>
    </div>
    <div class="tab-pane fade" id="samping" role="tabpanel" aria-labelledby="profile-tab">
      <iframe src="samping.php" width="100%" class="mb-4 mt-2" height="500px" style="border: 0;"></iframe>
    </div>
</div>

</body>
</html>