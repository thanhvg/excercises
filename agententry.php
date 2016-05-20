<!-- TODO better presentation -->
<form method="get" action="agentinsert.php">
   First Name:<input type="text" name="AgtFirstName" required="required" /><br />
   Middle Initial:<input type="text" name="AgtMiddleInitial" /><br />
   Last Name:<input type="text" name="AgtLastName" required="required" /><br />
   Business Phone:<input type="text" name="AgtBusPhone" required="required" /><br />
   Email:<input type="text" id="email" name="AgtEmail" required="required" /><br />
   Position:<input type="text" name="AgtPosition" required="required" /><br />
   Agency ID:<input type="number" min="1" max="2" name="AgencyId" /><br />
   <input type="submit" value="Save Agent" onclick="return validate()" />
</form>
