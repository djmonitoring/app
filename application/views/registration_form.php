<form method="post" class="form-floating" action="<?php echo base_url()?>Registration/reg" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="lastname"><b>Lastname</b></label>
    <input type="text" id="lastname" name="lastname" value="<?php echo set_value('lastname'); ?>">
    <span class="text-danger"><?php echo form_error("lastname")?></span>

    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>">
    <span class="text-danger"><?php echo form_error("firstname")?></span>

    <label for="initial"><b>Middle Initial</b></label>
    <input type="text" id="initial" name="initial" value="<?php echo set_value('initial'); ?>">
    <span class="text-danger"><?php echo form_error("initial")?></span>  

    <label for="birthday"><b>Birthday</b></label>
    <input type="date" id="birthday" name="birthday"  value="<?php echo set_value('birthday'); ?>">
    <span class="text-danger"><?php echo form_error("birthday")?></span>
    <hr>
    
    <label for="age"><b>Age</b></label>
    <input type="number" id="age" name="age"  value="<?php echo set_value('age'); ?>">
    <span class="text-danger"><?php echo form_error("age")?></span>
    <hr>

    <label for="address"><b>Address</b></label>
    <input type="text" name="address"  value="<?php echo set_value('address'); ?>">
    <span class="text-danger"><?php echo form_error("address")?></span>
    

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>