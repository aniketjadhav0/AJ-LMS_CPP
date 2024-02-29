  <!-- ofcanvas start -->

  <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">


        <div class="offcanvas-body">
            <ul class="navbar-nav">

                <!-- This is for add code and Dashboard -->

                <li class="nav-item">
                    <div class="text-secondary small text-uppercase fw-bold"> Core</div>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <!-- This is for icon--> <i class="fa-solid fa-table-columns me-2"> </i>Dashboard</a>
                </li>

                <li class="nav-item my-0">
                    <hr>
                </li>

                <!-- end -->

                <!-- This for  Books Management -->
                <li class="nav-item">
                    <div class="text-secondary small text-uppercase fw-bold"> Inventory </div>
                </li>

                <li class="nav-item">

                    <a class="nav-link sidebar-link " data-bs-toggle="collapse" href="#booksMgmt" role="button"
                        aria-expanded="false" aria-controls="booksMgmt">
                        <i class="fa-solid fa-book me-1"></i> Books Management
                        <span class="right-icon float-end"> <i class="fa-solid fa-chevron-down "></i></span>
                    </a>

                    <div class="collapse" id="booksMgmt">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="./add-book.html" class="nav-link ">
                                        <i class="fa-solid fa-plus me-2"></i> Add New
                                    </a>
                                </li>
                                <li>
                                    <a href="manage-books.html" class="nav-link ">
                                        <i class="fa-solid fa-list me-2"></i> Manage All
                                    </a>
                                </li>
                            </ul>
                        </div>
                </li>
                <!-- end of  Books Management -->


                <!-- This for  Students Management -->

                <li class="nav-item">

                    <a class="nav-link sidebar-link " data-bs-toggle="collapse" href="#studentMGMT" role="button"
                        aria-expanded="false" aria-controls="studentMGMT">
                        <i class="fa-solid fa-users me-1"></i> Students Management
                        <span class="right-icon float-end"> <i class="fa-solid fa-chevron-down "></i></span>
                    </a>

                    <div class="collapse" id="studentMGMT">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="./add-student.html" class="nav-link ">
                                        <i class="fa-solid fa-plus me-2"></i> Add New
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link ">
                                        <i class="fa-solid fa-list me-2"></i> Manage All
                                    </a>
                                </li>
                            </ul>
                        </div>
                </li>
                <!-- End  Students Management -->




                <li class="nav-item my-0">
                    <hr>
                </li>


                <li class="nav-item">
                    <div class="text-secondary small text-uppercase fw-bold"> Action </div>
                </li>


                <!-- Issue Book section -->
                <li class="nav-item">
                    <a class="nav-link sidebar-link " data-bs-toggle="collapse" href="#issuedMGMT" role="button"
                        aria-expanded="false" aria-controls="issuedMGMT">
                        <i class="fa-solid fa-book-open me-1"></i> Provide Books
                        <span class="right-icon float-end"> <i class="fa-solid fa-chevron-down "></i></span>
                    </a>

                    <div class="collapse" id="issuedMGMT">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="./issue-book.html" class="nav-link ">
                                        <i class="fa-solid fa-hand-holding-hand me-2"></i>Issue Books

                                    </a>
                                </li>
                                <li>
                                    <a href="./manage-issued-books" class="nav-link ">
                                        <i class="fa-solid fa-list-check me-2"></i> Manage Issued Books
                                    </a>
                                </li>



                            </ul>
                        </div>
                </li>
                <!-- End Issue Book -->

                <!-- Return Book section -->
                <li class="nav-item">
                    <a class="nav-link sidebar-link " data-bs-toggle="collapse" href="#ReturnMGMT" role="button"
                        aria-expanded="false" aria-controls="ReturnMGMT">
                        <i class="fa-solid fa-right-left me-2"></i> Return Books
                        <span class="right-icon float-end"> <i class="fa-solid fa-chevron-down "></i></span>
                    </a>

                    <div class="collapse" id="ReturnMGMT">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link ">
                                        <i class="fa-solid fa-square-envelope me-2"></i></i>Notification

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link ">
                                        <i class="fa-solid fa-arrow-right-arrow-left me-2"></i> Return History
                                    </a>
                                </li>



                            </ul>
                        </div>
                </li>
                <!-- End Return Book -->


                <li class="nav-item my-0">
                    <hr>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <!-- This is for icon--> <i class="fa-solid fa-right-from-bracket me-2"></i></i>Logout</a>
                </li>

            </ul>
        </div>

    </div>

    <!-- ofcanvas end-->