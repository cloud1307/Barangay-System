<?php $model = new PositionModel();
        $Positions = $model->getAllPositions();
    //  $currentUrl = $_SERVER['REQUEST_URI'];
?>

<body class="">
    <?php include('header.php'); ?>
    <div class="page-content admin-cover">
        <?php include('sidebar.php'); ?>
        <div class="content-wrapper">
            <div class="content-inner">     
                    <div class="page-header shadow header-color">
                        <div class="page-header-content d-lg-flex">
                            <div class="d-flex">
                                <h4 class="page-title mb-0">
                                    General - <span class="fw-normal">Positions</span>
                                </h4>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <span href="#" class="breadcrumb-item">General</span>
                                    <span class="breadcrumb-item active">Position</span>
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
                                                <h6 class="mb-0 text-uppercase">All Positions</h6>
                                                
												<a href="#modal_position" data-bs-toggle="modal" data-bs-target="#modal_position"
                                                    class="btn btn-outline-success <?= ($currentUrl === '/admin/positions') ? 'active fw-bold' : '' ?>">
                                                    <i class="ph-person me-2"></i> Add Positions
                                                    </a>
										</div>	
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" id="subjectTable">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th>Positions</th>                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($Positions as $position) : ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($position['varPosition']) ?></td>                                                        
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
                                                                            <i class="ph-trash me-2"></i>
                                                                            Delete
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
            </div>
        </div>
    </div>
     <script>
        $('#subjectTable').DataTable();
    </script>
    <?php include(__DIR__ . '/../modals.php'); ?>
</body>

</html>