<?php 
include 'db_connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/0288478d4c.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    img#cimg{
        max-height: 10vh;
        max-width: 6vw;
    }
    body {
    background-image: url('beds.jpg');
    background-size: cover;
	background-repeat: no-repeat;
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
</style>
        <div class ="login-page">
        <div class = "form">
            <div class="container mt-3 pt-2">
               	<div class="col-lg-8" style="margin-left: 200px;">
                   <div class="card mb-4">
                        <div class="card-body"style="background-color:#e3dedee0 !important;">
                            <div class="header" style="text-align: center;">
                                <h2>Register Details</h2><hr><br>
                            </div>
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <form action="connect1.php" id="create_account" method = "POST">   <!-- action-->
                                        <div class="row form-group">
										<div class="col-md-4">
                                                <label for="" class="control-label">Hospital Name</label>
                                                <select class="custom-select select2" name="id" required>
                                                    <option></option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM alumnus_bio order by hospitalname asc");
                                                    while($row=$course->fetch_assoc()):
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['hospitalname'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-5">
                                                <label for="beds" class="form-label">No. of Beds Available</label>
                                                <input type="input" class="form-control datepickerY" name="beds" required placeholder="No. of Beds Available">
                                            </div>
                                            <div class="col-md-5">
                                                <label for="cyclinders" class="form-label">No. of Oxygen Cyclinders Available</label>
                                                <input type="input" class="form-control datepickerY" name="cyclinders" required placeholder="No. of Oxygen Cyclinders Available">
                                            </div>
                                        </div><br>
                                        </div><br>
                                     
                                        <div id="msg">
                                            
                                        </div><br>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Update Records</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
                
            </div>
            </div>
    </div>
<script>
   $('.datepickerY').datepicker({
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('#create_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=signup',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp == 1){
                location.replace('index.php')
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                end_load()
            }
        }
    })
})
</script>