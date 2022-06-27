@extends('masters.logregMaster')
@section('main')
<!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="{{route('customer.store')}}">
                        @csrf
                        <input type="hidden" name="Cus_id" value="{{$customer->Cus_id}}">
                        <div class="form-group">
                            <label for="Cus_Fullnamename"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="Cus_Fullname" id="Cus_Fullname" placeholder="Your Name" value="{{old('Cus_Fullname')?? $customer->Cus_Fullname}}">
                        </div>
                        <div class="form-group">
                            <label for="Cus_Username">
                                <i class="zmdi zmdi-account-o"></i>

                            </label>
                            <input type="text" name="Cus_Username" id="Cus_Username" placeholder="Your Username" value="{{old('Cus_Username')?? $customer->Cus_Username}}">
                        </div>
                        <div class="form-group">
                            <label for="Cus_password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="Cus_password" id="Cus_password" placeholder="Password" value="{{old('Cus_password')?? $customer->Cus_password}}">
                        </div>
                        <div class="form-group">
                            <label for="Cus_gender">
                                <i class="zmdi zmdi-male-female"></i>
                            </label>
                            <input type="text" name="Cus_gender" id="Cus_gender" placeholder="Your Gender" value="{{old('Cus_gender')?? $customer->Cus_gender}}">
                        </div>
                        <div class="form-group">
                            <label for="Cus_phone">
                                <i class="zmdi zmdi-phone"></i>
                            </label>
                            <input type="tel" name="Cus_phone" id="Cus_phone" placeholder="Your Telephone" value="{{old('Cus_phone')?? $customer->Cus_phone}}">
                        </div>
                        <div class="form-group">
                            <label for="Cus_DoB">
                                <i class="zmdi zmdi-mood"></i>
                            </label>
                            <input type="date" name="Cus_DoB" id="Cus_DoB" placeholder="Your Date of Birth" value="{{old('Cus_DoB')?? $customer->Cus_DoB}}">
                        </div>
                        <div class="form-group">
                            <label for="Cus_add">
                                <i class="zmdi zmdi-truck"></i>
                            </label>
                            <input type="text" name="Cus_add" id="Cus_add" placeholder="Your Address" value="{{old('Cus_add')?? $customer->Cus_add}}">
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button" >
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
{{--                        <button type="submit" class="btn btn-dark">Submit</button>--}}
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="https://media.houseandgarden.co.uk/photos/618947b6f9cf3d171adad488/3:4/w_1278,h_1704,c_limit/provencale-chateau-in-france-house-27nov17-michael-sinclair-05_b.jpg" alt="sing up image"></figure>
                    <a href="{{route('customer.loginCus')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
@endsection

{{--@section('script')--}}
{{--    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>--}}
{{--@endsection--}}
