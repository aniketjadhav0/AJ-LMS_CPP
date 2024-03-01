<?php

include_once("../config/config.php");
include_once(DIR_URL."include/header.php"); 
include_once(DIR_URL."include/topbar.php"); 
include_once(DIR_URL."include/sidebar.php");
 ?>

   

<!-- Main content start -->
<main class="mt-1 pt-3">
        <div class="container-fluid">

            
            <div class="row dashboard-counts">
                <div class="col-md-12">
                    <h4 class="fw-bold text-uppercase"> Add Book </h4>
                </div>
                    <div class="col-md-12">
                        

                        <div class="card">
                            <div class="card-header">
                              Fill the form 
                            </div>
                            <div class="card-body">
                              
                                <form>
                                    <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" 
                                                class="form-label">Book Name</label>
          
                                                <input type="text" 
                                                class="form-control" 
                                                id="exampleInputEmail1" 
                                                aria-describedby="emailHelp">
                                              </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" 
                                                class="form-label">ISBN Number</label>
          
                                                <input type="text"
                                                 class="form-control" 
                                                 id="exampleInputPassword1">
                                              </div>
                                        </div>
                                   
                                        <div class="col-md-6">    
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" 
                                        class="form-label">Author Name</label>
  
                                        <input type="text"
                                         class="form-control" 
                                         id="exampleInputPassword1">
                                      </div>
                                      </div>

                                      <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" 
                                        class="form-label">Publisher Name</label>
  
                                        <input type="text"
                                         class="form-control" 
                                         id="exampleInputPassword1">
                                      </div>
                                    </div>

                                    <div class="col-md-6">
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" 
                                        class="form-label">Course</label>
  
                                        <select class="form-control">
                                            <option value=""> Please select </option>
                                            <option value=""> Computer Engineering </option>
                                            <option value=""> Civil Engineering</option>
                                            <option value=""> Printing Engineering</option>
                                            <option value=""> Electronics Engineering</option>
                                            <option value=""> Electrical Engineering</option>
                                            <option value=""> Mechanical Engineering </option>
                                         </select>
                                      </div>
                                      </div>
                                     
                                      <div class="col-md-6">
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" 
                                          class="form-label">Semester</label>
    
                                          <select class="form-control">
                                              <option value=""> Select Semester </option>
                                              <option value=""> First Semester </option>
                                              <option value=""> Second Semester</option>
                                              <option value=""> Third Semester</option>
                                              <option value=""> Fourth Semester</option>
                                              <option value=""> Fifth Semester</option>
                                              <option value=""> Sixth Semester </option>
                                           </select>
                                        </div>
                                        </div>

                                      <div class="col-md-12"> 
                                    <button type="submit" class="btn btn-success">Publish</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>

                                   
                                 

                                </form>
                                </div>
                            </div>
                          </div>

                    </div>

                </div>
            </div>
    </main>
<!-- Main content end -->


    <?php include_once(DIR_URL."include/footer.php") ?>