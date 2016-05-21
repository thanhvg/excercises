<!-- Gia Thanh Vuong - CPRG210 - Web Application Concepts - May 2016  -->
<!-- form to be included in day10.php  -->
<!-- TODO better presentation -->
<form method="get" action="agentinsert.php">
  <div class="row">
    <div class="col-5">
      <label>First Name:</label>
    </div>
    <div class="col-7">
      <input type="text" name="AgtFirstName" required="required"/>
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label>Middle Initial:</label>
    </div>
    <div class="col-7">
      <input type="text" name="AgtMiddleInitial" />
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label> Last Name:</label>
    </div>
    <div class="col-7">
      <input type="text" name="AgtLastName" required="required" />
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label>Business Phone:</label>
    </div>
    <div class="col-7">
      <input type="text" name="AgtBusPhone" required="required" />
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label>Email:</label>
    </div>
    <div class="col-7">
      <input type="text" id="email" name="AgtEmail" required="required" />
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label>Position:</label>
    </div>
    <div class="col-7">
      <input type="text" name="AgtPosition" required="required" />
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label>Agency ID:</label>
    </div>
    <div class="col-7">
      <input type="number" min="1" max="2" name="AgencyId" required="required"/>
    </div>
  </div>

  <div class="row">
    <div class="col-5">
      <label></label>
    </div>
    <div class="col-7">

      <input type="submit" value="Save Agent" onclick="return validate()" />
    </div>
  </div>

</form>
