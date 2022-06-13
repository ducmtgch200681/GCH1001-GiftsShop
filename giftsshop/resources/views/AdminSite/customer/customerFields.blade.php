<input type="hidden" name="Cus_id" value="{{old('Cus_id')?? $customer->Cus_id}}">
<div class="form-group">
  <label for="Cus_Fullname" class="font-weight-bold">Fullname</label>
  <input type="text" class="form-control" id="Cus_Fullname" name="Cus_Fullname" value="{{old('Cus_Fullname')?? $customer->Cus_Fullname}}">
</div>
<div class="form-group">
  <label for="Cus_Username" class="font-weight-bold">Username</label>
  <input type="text" class="form-control" id="Cus_Username" name="Cus_Username" value="{{old('Cus_Username')?? $customer->Cus_Username}}">
</div>
<div class="form-group">
  <label for="Cus_gender" class="font-weight-bold">Gender</label>
  <input type="text" class="form-control" id="Cus_gender" name="Cus_gender"  value="{{old('Cus_gender')?? $customer->Cus_gender}}">
</div>
<div class="form-group">
  <label for="Cus_phone" class="font-weight-bold">Phone number</label>
  <input type="number" class="form-control" id="Cus_phone" name="Cus_phone"  value="{{old('Cus_phone')?? $customer->Cus_phone}}">
</div>
<div class="form-group">
  <label for="Cus_DoB" class="font-weight-bold">DOB</label>
  <input type="date" class="form-control" id="Cus_DoB" name="Cus_DoB"  value="{{old('Cus_DoB')?? $customer->Cus_DoB}}">
</div>
<div class="form-group">
  <label for="Cus_add" class="font-weight-bold">Address</label>
  <input type="text" class="form-control" id="Cus_add" name="Cus_add"  value="{{old('Cus_add')?? $customer->Cus_add}}">
</div>
<div class="form-group">
  <label for="Cus_password" class="font-weight-bold">Password</label>
  <input type="password" class="form-control" id="Cus_password" name="Cus_password" placeholder="please enter the password"  value="{{old('Cus_password')?? $customer->Cus_password}}">
</div>
