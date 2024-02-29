<?php include_once("include/header.php") ?>
<?php include_once("include/topbar.php") ?>
<?php include_once("include/sidebar.php") ?>

   

    <!-- Main content start -->
    <main class="mt-1 pt-3">
        <div class="container-fluid">

            <!-- Cards -->
            <div class="row dashboard-counts">
                <div class="col-md-12">
                    <h4 class="fw-bold text-uppercase"> Dashboard </h4>
                    <p>Statistics of the system!</p>
                </div>

                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase text-muted">Total Books</h5>

                            <h1>130</h1>

                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>
                <!-- end Card 1 -->

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase text-muted">Total Students</h5>

                            <h1>130</h1>

                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>
                <!-- end Card 2 -->

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase text-muted">issued Books</h5>

                            <h1>130</h1>

                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>
                <!-- end Card 3 -->

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase text-muted">Return Books</h5>

                            <h1>130</h1>

                            <a href="#" class="card-link link-underline-light">View More</a>

                        </div>
                    </div>
                </div>
                <!-- end Card 4 -->


            </div>
            <!-- end Cards -->


            <!-- Tabs -->
<div class="row mt-5 dashboard-tabs" >
    <div class="col-md-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase active" id="new-students" data-bs-toggle="tab" data-bs-target="#new-students-pane" type="button" role="tab" aria-controls="new-students-pane" aria-selected="true">
                    New Students
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase" id="recent-issued" data-bs-toggle="tab" data-bs-target="#recent-issued-pane" type="button" role="tab" aria-controls="recent-loans-pane" aria-selected="false">
                    Recent issued
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase" id="recent-return" data-bs-toggle="tab" data-bs-target="#recent-return-tab-pane" type="button" role="tab" aria-controls="recent-subscription-pane" aria-selected="false">
                    Recent Return
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="new-students-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <!-- table for recent Registered Students -->
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Preparing for</th>
                            <th scope="col">Registered on</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- first row -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-success">Active</span>
                            </td>
                        </tr>
                        <!-- second row -->
                        <tr>
                            <th scope="row">2</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-success">Active</span>
                            </td>
                        </tr>
                        <!-- third row  -->
                        <tr>
                            <th scope="row">3</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-danger">Inactive</span>
                            </td>
                        </tr>
                        <!-- fourth row -->
                        <tr>
                            <th scope="row">4</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-success">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- end of recent Registered Students -->
             </div>

            <div class="tab-pane fade" id="recent-issued-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <!-- Content for recent issued books tab -->
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Issued Date</th>
                            <th scope="col">Return Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- first row -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                01-02-2024, 12:20 PM
                            </td>
                        </tr>
                        <!-- second row -->
                        <tr>
                            <th scope="row">2</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                01-02-2024, 12:20 PM
                            </td>
                        </tr>
                        <!-- third row  -->
                        <tr>
                            <th scope="row">3</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                01-02-2024, 12:20 PM
                            </td>
                        </tr>
                        <!-- fourth row -->
                        <tr>
                            <th scope="row">4</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                01-02-2024, 12:20 PM
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>

            <div class="tab-pane fade" id="recent-return-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <!-- Content for recent returned books tab -->
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Return On</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- first row -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-warning">Returned</span>
                            </td>
                        </tr>
                        <!-- second row -->
                        <tr>
                            <th scope="row">2</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-success">Active</span>
                            </td>
                        </tr>
                        <!-- third row  -->
                        <tr>
                            <th scope="row">3</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-danger">Returned</span>
                            </td>
                        </tr>
                        <!-- fourth row -->
                        <tr>
                            <th scope="row">4</th>
                            <td>Aniket</td>
                            <td>CM</td>
                            <td>01-02-2024, 12:20 PM</td>
                            <td>
                                <span class="badge text-bg-success">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- End Tabs -->


    </main>
    <!-- Main content end -->


    <?php include_once("include/footer.php") ?>