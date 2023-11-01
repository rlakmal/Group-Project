<!DOCTYPE html>
<html>

<head>
    <title>Painter Profile</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employer/workerprof.css">
</head>

<body>
<?php include 'employernav.php'?>
<?php include 'requestpopup.php'?>
<style>
  .main-container4 {
  margin-left: 200px;
  min-width: 900px;
  max-width: 500px;
  margin-top: 120px;
  margin-bottom: 10px;

}
.profile-container3 {
  background-color: #ffffff;
  width: auto;
  box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  height: 500px;
  position: absolute;
  border-radius: 20px;
}
</style>

    <div class="main-container4">
        <div class="profile-container3">
            <a><button  class="close-button">Edit profile</button></a>

            <div class="picture">
                <img class="image" src="<?=ROOT?>/assets/images/employer/profile.jpg" alt="">
            </div>
            <div class="picture">
                <img class="rates" src="<?=ROOT?>/assets/images/employer/rates.png" alt="">
            </div>
            
            <div class="index">
   
                    <h3>
                      Full Name
                    </h3>
                  
                    <input type="text" name="fullname" value="Dasun Shanaka" class="edit-gen" readonly>
                    <h3>
                      City
                    </h3>
                    <input type="text" name="city" value="Hambanthota" class="edit-gen" readonly>
                    <h3>
                      Address
                    </h3>
                    <input type="text" name="address" value="27/A, School Road, Sooriyawewa"
                      class="edit-gen" readonly>
                    <h3>
                      Date of Birth
                    </h3>
                    <input type="text" name="birthday" value='2012-12-12' class="edit-gen" readonly>
                    
        </div>

    </div>    
</body>

</html>