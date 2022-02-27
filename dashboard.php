<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    



<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Rent something from nearby people.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Login</h4>
          <ul class="list-unstyled">

           <form class="row g-3">
  <div class="col-auto">
    <label for="inputEmail" class="visually-hidden">Email</label>
    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
  </div>
  <div class="col-auto">
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>


  

  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a>

</form>

<div class="container mt-5">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="register.php">

                <div class="form-outline mb-1">
                  <input type="text" name="fname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-1">
                  <input type="email"  name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                 <div class="form-outline mb-1">
                  <input type="number"  name="contact" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Contact</label>
                </div>

                 <div class="form-outline mb-1">
                  <input type="text"  name="address" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Address</label>
                </div>

                <div class="form-outline mb-1">
                  <input type="password"  name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-1">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

               

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success text-body">Register</button>
                </div>

              </form>
      </div>
    </div>
  </div>
</div>
  
</div>
  </div>

           







          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Im Looking</h1>
        <p class="lead text-muted">for</p>
        <p>
          <a href="#rents" class="btn btn-primary my-2">Something to Rent</a>
          <a href="#" class="btn btn-secondary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">People to Rent my Stuff</a>
        </p>
      </div>
    </div>
  </section>


  <!-- Button trigger modal -->




<?php 
include("config.php");
                    $sql = "SELECT * FROM rentmystufftable";
                    
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                      $no = 0;
                        while($row = $result->fetch_assoc()) {

                            $id = $row['id'];
                            $name = $row['name'];
                            $contact = $row['contact'];
                            $address = $row['address'];
                            $stuff_name = $row['stuff_name'];
                            $stuff_image = $row['stuff_image'];
                            $stuff_rent_price = $row['stuff_rent_price'];
                            $stuff_status = $row['stuff_status'];
                      $no++;
                            if($stuff_status == 0){
                                $alert = "<div class='alert alert-danger'>
                                <strong>$stuff_status</strong> Status Not Active
                                </div>";
                            }
                            if($stuff_status == 1){
                              $stuff_status = "Active";
                            }else if($stuff_status == 0){
                              $stuff_status = "Deactivate";
                            }
                          }
                        }

                           

                    ?>


  <div id="rents" class="album py-5 bg-light">
    <div class="container">
<?php 
include("config.php");

$result = mysqli_query($con,"SELECT * FROM rentmystufftable");

?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php                                 
                                    while($row = mysqli_fetch_array($result))


                                       {
                                  ?>
        <div class="col">
          <div class="card shadow-sm">
           <img src="<?php echo $row['stuff_image']; ?>" class="img-fluid mx-auto d-block" alt="...">

            <div class="card-body">
              <p class="card-text"><?php echo $row['name']; ?></p>

  <input type="text" class="form-control" id="item_name" name="name-1" value="<?php echo $row['contact']; ?>" placeholder="Firstname" required autofocus>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 
                <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-success">Info</button>





                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

                    <?php
                          }

                    ?> 
      </div>
    </div>
  </div>

</main>






<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Stuff to Rent</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
  <div class="row">
    
    <div class="row align-items-cente">
 <form class="form-horizontal" method="POST" action="addrentstuff.php" enctype="multipart/form-data">
       <fieldset>
                                <center><img id="output" src="" width="280" height="280" required></center>
                                <script>
                                  var loadFile = function(event) {
                                        var output = document.getElementById('output');
                                          output.src = URL.createObjectURL(event.target.files[0]);
                                                 };
                                </script>
                            <fieldset>

      <div class="input-group mb-3">
   <input type="file" accept="image/*" onchange="loadFile(event)" class="form-control" name="image" id="inputGroupFile02"> 
 
</div>
    </div>
   
   <div class="input-group mb-1" >
  <span class="input-group-text">Owner Name</span>
  <input type="text" aria-label="owner name" name="name" class="form-control">
</div>
<div class="input-group mb-1" >
  <span class="input-group-text">Contact Number</span>
  <input type="text" aria-label="contact number"  name="contact" class="form-control">
</div>
<div class="input-group mb-1" >
  <span class="input-group-text">Location</span>
  <input type="text" aria-label="location"  name="address" class="form-control">
</div>
<div class="input-group mb-1" >
  <span class="input-group-text">Stuff Name</span>
  <input type="text" aria-label="stuff name"  name="stuff_name" class="form-control">
</div>

<div class="input-group mb-1" >
  <span class="input-group-text">Price</span>
  <input type="text" aria-label="price"  name="price" class="form-control">
</div>
  </div>

</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add to Rent list</button>
      </div>
      </form>

    </div>
  </div>
</div>



<!-- Modal Read-->

</div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


      <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'stuff_details.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
             </div>
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">User Info</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>

      
  </body>



</html>
