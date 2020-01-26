<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    h5 {
  font-family: "Times New Roman", Times, serif;
}
    </style>
  </head>
  <body>
    <div class="container">
         <div class="row">
         <div class="col-10" style="padding-left:250px;" >
  <form>
        <div class="card-header"><h5>ลงทะเบียน</h5><small>ข้อมูลส่วนตัว</small></div>
            <div class="form-row">
                 <div class="form-group col-md-12">
                  <label for="inputEmail4">Username</label>
                 <input type="Username" class="form-control" id="inputEmail4">
          </div>
   
         </div>
  <div class="form-row">
        <div class="form-group col-md-12">
             <label for="inputPassword4">Email Address</label>
                <input type="Email Address" class="form-control" id="inputPassword4">
         </div>
  </div>
  <div class="form-row">
       <div class="form-group col-md-12">
             <label for="inputPassword4">Password</label>
            <input type="Password" class="form-control" id="inputPassword4">
        </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">Name</label>
            <input type="text" class="form-control" id="inputName">
         </div>
  <div class="form-group col-md-4">
            <label for="inputState">Surname</label>
           <input type="text" class="form-control" id="inputSurname">
            </div>
  </div>
  <div class="form-row align-items-center">
       <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
             <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
             <option selected>Gender...</option>
             <option value="1">Male</option>
             <option value="2">Female</option>
            </select>
  </div>
    <div class="input-group col-lg-8">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input type="date" id="input-date" name="date" class="form-control">
</div>
</div>
<div class="card-header"><small>ข้อมูลเกี่ยวกับการเงิน</small></div>
        <div class="form-row">
                 <div class="form-group col-md-4">
                  <label for="inputEmail4">เงินเดือน</label>
                 <div class="input-group col-lg-12">
                                <div class="input-group-addon"><strong>THB</strong></div>
                                <input type="number" step="0.01" min="0" id="input-money-income" name="moneyIncome" class="form-control" >
                            </div>
          </div>
   

</form>
</div>
</div>
</body>
</html>
