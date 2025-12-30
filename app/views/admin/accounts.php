<?php  $model = new EmployeeModel(); 
        $Employees = $model->getAllEmployee();
?>

<body class="">
    <?php include('header.php'); ?>
    <div class="page-content admin-cover">
        <?php include('sidebar.php'); ?>
        <div class="content-wrapper">
            <div class="content-inner">                
                     <!--  -->
                    <div class="page-header shadow header-color">
                        <div class="page-header-content d-lg-flex">
                            <div class="d-flex">
                                <h4 class="page-title mb-0">
                                    General - <span class="fw-normal">Officials</span>
                                </h4>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <span href="#" class="breadcrumb-item">General</span>
                                    <span class="breadcrumb-item active">Officials</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="row d-flex justify-content-center align-items-center mb-3">
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">                                        
                                       <div class="card-title modal-footer justify-content-between">
                                                <h6 class="mb-0 text-uppercase">All Officials</h6>
												<a href="/admin/officials"
                                                    class="btn btn-outline-success <?= ($currentUrl === '/admin/officials') ? 'active fw-bold' : '' ?>">
                                                    <i class="ph-users me-2"></i> Add Officials
                                                    </a>
										</div>	
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" id="subjectTable">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th>Officials</th>
                                                        <th>Position</th>
                                                        <th>Job Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($Employees as $employee) : ?>
                                                    <tr>
                                                        <td><?= $employee['varFirstName']. " " . $employee['varMiddleName'] ." ". $employee['varLastName'] ?></td>
                                                        <td><?= $employee['varPosition'] ?></td>
                                                        <td><?= $employee['enumJobStatus'] ?></td>
                                                        <td><span class="badge bg-success bg-opacity-10 text-success"><?= $employee['enumEmploymentStatus'] ?></span></td>
                                                        <td class="text-center">
                                                            <div class="d-inline-flex">
                                                                <div class="dropdown">
                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                        <i class="ph-list"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="#" class="dropdown-item">
                                                                            <i class="ph-pencil me-2"></i>
                                                                            Edit
                                                                        </a>
                                                                        <a href="#" class="dropdown-item">
                                                                            <i class="ph-eye me-2"></i>
                                                                            View Profile
                                                                        </a>
                                                                        <a href="#" class="dropdown-item">
                                                                            <i class="ph-key me-2"></i>
                                                                            Reset Password
                                                                        </a>																
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                     <!--  -->               
            </div>
        </div>
    </div>
     <script>
        $('#subjectTable').DataTable();
    </script>
</body>

</html>