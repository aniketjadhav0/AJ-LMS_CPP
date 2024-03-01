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
                    <h4 class="fw-bold text-uppercase"> Manage Books </h4>
                </div>
                    <div class="col-md-12">
                        

                        <div class="card">
                            <div class="card-header">
                              All Books 
                            </div>
                            <div class="card-body"> 
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Book Name</th>
                                            <th scope="col">ISBN Number</th>
                                            <th scope="col">Publisher Name</th>
                                            <th scope="col">Author Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- first row -->
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Aniket</td>
                                            <td>323565646</td>
                                            <td>Techno Publisher </td>
                                            <td>Secure Minds</td>
                                            <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit </a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete </a>
                                            </td>
                                        </tr>
                                        <!-- second row -->
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Aniket</td>
                                            <td>323565646</td>
                                            <td>Techno Publisher </td>
                                            <td>Secure Minds</td>
                                            <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit </a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete </a>
                                            </td>
                                        </tr>
                                        <!-- third row  -->
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Aniket</td>
                                            <td>323565646</td>
                                            <td>Techno Publisher </td>
                                            <td>Secure Minds</td>
                                            <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit </a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete </a>
                                            </td>
                                        </tr>
                                        <!-- fourth row -->
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Aniket</td>
                                            <td>323565646</td>
                                            <td>Techno Publisher </td>
                                            <td>Secure Minds</td>
                                            <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit </a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            </div>
                          </div>
                    </div>
                </div>
            </div>
    </main>
<!-- Main content end -->


    <?php include_once(DIR_URL."include/footer.php") ?>