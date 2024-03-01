@
                    @section('sign')
                        <div style="width:100%;display: flex;height:200px;align-items:center;">
                <h1 class="mb-0" style="width:100%;padding:0px 0px 70px 0px;">Sign In</h1>
                    <a class="sign-in-logo mb-5" style="margin-bottom:0px;" href="#">
                        <img src="../assets/images/login/sign.png"
                        style="width:100%;height:200px;display: block;margin-left: auto;margin-right: auto;"
                        class="img-fluid"
                        alt="logo">
                    </a>
                        </div>
                        <form action="/" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <a href="#" class="float-end">Forgot password?</a>
                                <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="form-check d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="form-check-input" id="customCheck11">
                                    <label class="form-check-label" for="customCheck11">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Sign in</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="register">Sign up</a></span>

                            </div>
                        </form>
                        @endsection

