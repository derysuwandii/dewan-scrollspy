<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    ul.nav-pills {
      top: 20px;
      position: fixed;
    }
    div.col-sm-9 div {
      min-height: 350px;
    }

    @media screen and (max-width: 810px) {
      #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
      }
    }
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>                     
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1">
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div><hr>

      <div id="section2">
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div><hr>

      <div id="section3">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div><hr>

      <div id="section41">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div><hr>

      <div id="section42">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
