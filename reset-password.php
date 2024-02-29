<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet"/>
    <title> forgot-password  | LMS</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body style="background-color: rgb(30, 31, 32);">


    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-md-12 login-form">
                <div class="card mb-3" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="./assets/images/login-bg.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h1 class="card-title text-uppercase fw-bold">GP BEED LIBRARY</h1>
                                <p class="card-text"> Reset password</p>
                                
                                <form action="./reset-password.html">

                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Reset password code</label>
                                      <input 
                                       type="text"
                                       class="form-control" 
                                       id="exampleInputEmail1" 
                                       aria-describedby="emailHelp"/>
                                     </div>

                                     <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">New Password </label>
                                        <input 
                                         type="password"
                                         class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp"/>
                                       </div>

                                       <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Confirm Password </label>
                                        <input 
                                         type="password"
                                         class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp"/>
                                       </div>
                                                                  
                                    <button type="submit" class="btn btn-primary my-3" >Submit</button>

                                  </form>

                                  <hr/>
                                  <a href="./index.html" class="card-link link-underline-light">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script src="assets\js\bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets\js\17903776.js" crossorigin="anonymous"></script>

</body>

</html>