<input type="hidden" name="Ad_id" value="{{old('Ad_id')?? $admin->Ad_id}}">
<div class="form-group">
    <label for="Ad_Fullname" class="font-weight-bold">Fullname</label>
    <input type="text" class="form-control" id="Ad_Fullname" name="Ad_Fullname" value="{{old('Ad_Fullname')?? $admin->Ad_Fullname}}">
</div>
<div class="form-group">
    <label for="Ad_Username" class="font-weight-bold">Username</label>
    <input type="text" class="form-control" id="Ad_Username" name="Ad_Username" value="{{old('Ad_Username')?? $admin->Ad_Username}}">
</div>
<div class="form-group">
    <label for="Ad_Email" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" id="Ad_Email" name="Ad_Email"  value="{{old('Ad_Email')?? $admin->Ad_Email}}">
</div>
<div class="form-group">
    <label for="Ad_DoB" class="font-weight-bold">DOB</label>
    <input type="date" class="form-control" id="Ad_DoB" name="Ad_DoB"  value="{{old('Ad_DoB')?? $admin->Ad_DoB}}">
</div>
<div class="form-group">
    <label for="Ad_password" class="font-weight-bold">Password</label>
    <input type="password" class="form-control" id="Ad_password" name="Ad_password" placeholder="please enter the password"  value="{{old('Ad_password')?? $admin->Ad_password}}">
</div>
