<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/1.png" alt="" width="15%" ><!-- height="24" -->
    </a>
    <button type="button" class="btn btn-outline-light" onclick="window.location.href = 'login.php';">Admin</button>
  </div>
</nav>  
<br><br><br>
  <!-- Side navigation -->
<div class="sidenav1">
  <a href="#">About</a>
  <a href="#">Courses</a>
  <a href="#">Alumni</a>
  <a href="#">Contact</a>
</div>
<div class="sidenav2">
  <a href="#">Vision</a>
    <a href="#">Campus</a>
  <a href="#">Gallery</a>
  <a href="#">Resources</a>
</div>
<!-- Page content -->
<div class="main">
  <h1 class="heading">Welcome to Result Portal</h1>

<!-- <div id="carousel">
    <figure><img src="images/3.jpg" alt=""></figure>
    <figure><img src="images/4.jpg" alt=""></figure>
</div> -->
<div class="container-fluid">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
<!--         <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
<!--         <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
<!--         <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

  <div class="checkresult">
  <form method="POST" action="#panel1">
  <div class="form-row" >
    <div class="col-md-4 mb-3 form-group">
      <label for="validationDefault01" class="label1">Seat Number</label>
      <input type="text" class="form-control"  placeholder="" value="" name="logseatno" required>
    </div>
    <div class="col-md-4 mb-3 form-group">
      <label for="validationDefault02"class="label1">Mother's name</label>
      <input type="text" class="form-control"  placeholder="" value="" required name="logmother">
    </div>
 
  <div class="form-group form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value=""  required>
      <label class="form-check-label" for="invalidCheck2"class="label1">
        I am not a Robot
      </label>

    </div>
  </div>
  <button class="btn btn-primary" name="button1"type="submit">Check Result</button>
<!--   <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
    <input type="submit" value="Submit" class="fb9" />
 -->
</div>
</form>
</div>
<br>



<div id='panel1'>
  <?php
// echo"console.log('hello')";
// function displayresult(){
  include_once 'database.php';
  if(isset($_POST['button1']))
    {
       $seatno = $_POST['logseatno'];
 $mothername=$_POST['logmother'];
  $result=mysqli_query($conn,"select * from studentresult where seat_no=$seatno and mothers_name='$mothername'");
  while($data = mysqli_fetch_array($result))
{
?>
<div class='container'>
<form>
<table class='table table-hover'>
<thead>


 
<tr><h1 class='heading3'>Result</h1></tr>
</thead>
<tbody>
<tr>

<td>Seat Number:</td> 
<td><input type='label' class='form-control' id='lblSeatno' placeholder='' value="<?php echo $data['seat_no'];?>" required readonly></td>
<td>Name:</td>
<td><input type='label' class='form-control' id='' placeholder='' value="<?php echo $data['name']; ?>" required readonly></td>
      
</tr>
<tr> 
<td>Mother's Name:</td>
<td><input type='label' class='form-control' id='lblMother' placeholder='' value="<?php echo $data['mothers_name']; ?>" required readonly></td>
<td>Maths:</td>
<td><input type='label' class='form-control' id='lblMaths' placeholder='' value="<?php echo $data['mathematics']; ?>" required readonly></td>
</tr>
<tr>
<td>English:</td>
<td><input type='label' class='form-control' id='lblEng' placeholder='' value="<?php echo $data['english']; ?>" required readonly></td>
<td>Physics:</td>
<td><input type='label' class='form-control' id='lblPhysics' placeholder='' value="<?php echo $data['physics']; ?>" required readonly></td>
      
</tr>
<tr>  
<td>Chemistry:</td>
<td><input type='label' class='form-control' id='lblChem' placeholder='' value="<?php echo $data['chemistry']; ?>" required  readonly></td>
<td>Computer Science:</td>
<td><input type='label' class='form-control' id='lblComp' placeholder='' value="<?php echo $data['computer']; ?>" required  readonly></td>
      
</tr>
<tr>
<td>Physical Education:</td>   
<td><input type='label' class='form-control' id='lblPE' placeholder='' value="<?php echo $data['PE']; ?>" required  readonly></td>
<td>Percentage:</td>
<td><input type='label' class='form-control' id='lblPer' placeholder='' value="<?php echo $data['percentage']; ?>" required  readonly></td>
 </tr>
 <tr>
<td>Result:</td>
<td><input type='label' class='form-control' id='lblRes' placeholder='' value="<?php echo $data['result']; ?>" required  readonly></td>
 </tr>
<?php
// echo"myFunction()";
}

}
 ?>

  </tbody>
</table>
</form>
</div>
</div>


  <script>
    function myFunction() {
  document.getElementById("panel1").style.display = "block";}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>