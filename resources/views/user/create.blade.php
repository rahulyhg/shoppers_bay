@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="panel panel-primary">
                <div class="panel-heading text-center" style="margin-bottom: 2em;"><h3><b>Sign Up</b></h3></div>
                <div class="panel-body">
                    <form method="POST" class="form-group" action="/user/store" style="padding-bottom: 2em;">
                        {{csrf_field()}}
{{--                        {{method_field('post')}}--}}
                        <div class="row" style="margin: 1em;">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" name="f_name" id="f_name" class="form-control" placeholder="">
                            </div>

                            <div class="col-md-6">
                                <label>Second Name</label>
                                <input type="text" name="s_name" id="s_name" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="" style="margin: 2em;">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="">
                        </div>

                        <div class="" style="margin: 2em;">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="">
                        </div>

                        <div class="" style="margin: 2em;">
                            <label>Re-enter Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="">
                        </div>

                        <div class="" style="margin: 2em;">
                            <label>Mobile No.</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="">
                        </div>

                        <div class="" style="margin: 2em;">
                            <label>Address Line</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="">
                        </div>

                        <div>
                            <input type="submit" name="sign_up_button" id="sign_up_button" class="btn btn-success btn-lg" value="Sign Up" style="float: right; margin-top: 1em;">
                        </div>
                    </form>
                    <div>
                        @include('layouts.errors')
                    </div>

                </div>
                <div class="panel-footer">&copy; 2017</div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>


@endsection