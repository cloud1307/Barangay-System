<?php 
    $model = new ViolationModel();
    $violations = $model->getAllViolations();
    //  $currentUrl = $_SERVER['REQUEST_URI'];
?>
<body class="">
    <?php include __DIR__ . '/../header.php'; ?>
    <div class="page-content admin-cover">
        <?php include(__DIR__ . '/../sidebar.php'); ?>
        <div class="content-wrapper">
            <div class="content-inner">     
                    <div class="page-header shadow header-color">
                        <div class="page-header-content d-lg-flex">
                            <div class="d-flex">
                                <h4 class="page-title mb-0">
                                    General - <span class="fw-normal">Violations</span>
                                </h4>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <span href="#" class="breadcrumb-item">General</span>
                                    <span class="breadcrumb-item active">Violations</span>
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
                                                <h6 class="mb-0 text-uppercase">All Violations</h6>
                                                
												<a href="#" data-bs-toggle="modal" data-bs-target="#modal_addviolation"
                                                    class="btn btn-outline-success">
                                                    <i class="ph-suitcase-simple me-2"></i> Add Violation
                                                </a>                                               


										</div>	
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-basic dataTable no-footer table-hover" id="subjectTable" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th>No</th>
                                                        <th>Violations</th>                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $number = 1; foreach ($violations as $viol) : ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($number++) ?></td>
                                                        <td><?= htmlspecialchars(mb_strtoupper($viol['violation_Name'])) ?></td>                                                        
                                                        <td class="text-start">
                                                            <div class="d-inline-flex">
                                                                <div class="dropdown">
                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                        <i class="ph-list"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="#"
                                                                        class="dropdown-item btn-edit-violation"
                                                                        data-id="<?= $viol['violation_id']; ?>"
                                                                        data-name="<?= htmlspecialchars($viol['violation_Name']); ?>">
                                                                            <i class="ph-pencil me-2"></i> Edit
                                                                        </a>

                                                                        <a href="#" 
                                                                        class="dropdown-item btn-delete-violation text-danger"
                                                                        data-id="<?= $viol['violation_id']; ?>">
                                                                            <i class="ph-trash me-2"></i> Delete
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
</body>

</html>


<!-- Add Violation Modal -->
<div id="modal_addviolation" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-addviolationLabel"><i class="ph-plus me-2"></i>Add Violation</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
						<form id="violationForm">
							<div class="modal-body">								
									<div class="mb-3">
										<label class="form-label" for="addviolation">Violation</label>
										<div class="form-control-feedback input-group">
											<input type="text" id="addviolation" name="violation_name" class="form-control text-propercase " placeholder ="Enter Violation">
										</div>
									</div>
								</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success" id="btn-save">Add Violation</button>
							</div>
						</form>
			</div>
		</div>
	</div> 

<!-- End of Add Violation Modal -->

<!-- Edit Violation Modal -->
<div id="modal_editviolation" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white border-0">
                <h5 class="modal-title">
                    <i class="ph-pencil me-2"></i>Edit Violation
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editViolationForm">
                <div class="modal-body">
                    <!-- REQUIRED FOR EDIT -->
                    <input type="hidden" name="violation_id" id="edit_violation_id">
                    <div class="mb-3">
                        <label class="form-label">Violation</label>
                        <input type="text" id="editviolation" name="violation_name" class="form-control" placeholder="Enter Violation">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Violation</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End of Edit Violation Modal -->

<script>
    const loadingConfig = {
        title: 'Please wait...',
        text: 'Processing your request',
        allowOutsideClick: false,
        didOpen: () => swalInit.showLoading()
    };

    // Add Violation Form Submission
    $(function () {
        $('#violationForm').on('submit', function (e) {
            e.preventDefault();

            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');

            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/addViolation',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                dataType: 'json'
            })
            .done(response => {
                swalInit.close();

                const icon = response.type || 'error';
                const title = icon === 'success'
                    ? 'Success!'
                    : icon === 'warning'
                        ? 'Warning!'
                        : 'Error!';

                swalInit.fire({
                    icon: icon,
                    title: title,
                    text: response.message
                }).then(() => {
                    if (response.success) {
                        $('#modal_addviolation').modal('hide');
                        location.reload();
                    }
                });
            })
            .fail(() => {
                swalInit.close();
                swalInit.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Server error. Please try again.'
                });
            })
            .always(() => {
                $submitBtn.prop('disabled', false);
            });
        });

    });

    // delete Violation                                                  
    $(document).on('click', '.btn-delete-violation', function (e) {
        e.preventDefault();

        const violationId = $(this).data('id');

        swalInit.fire({
            title: 'Are you sure?',
            text: 'This violation will be permanently deleted.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                deleteViolation(violationId);
            }
        });
    });

    function deleteViolation(violationId) {
        swalInit.fire(loadingConfig);

        $.ajax({
            url: '/admin/blotters/deleteViolaton',
            method: 'POST',
            data: { violation_id: violationId },
            dataType: 'json'
        })
        .done(response => {
            swalInit.close();

            const icon = response.type || 'error';
            const title = icon === 'success'
                ? 'Deleted!'
                : icon === 'warning'
                    ? 'Warning!'
                    : 'Error!';

            swalInit.fire({
                icon: icon,
                title: title,
                text: response.message
            }).then(() => {
                if (response.success) {
                    location.reload(); // or DataTable refresh
                }
            });
        })
        .fail(() => {
            swalInit.close();
            swalInit.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Server error. Please try again.'
            });
        });
    }

    // Edit Violation Modal
    $(document).on('click', '.btn-edit-violation', function (e) {
        e.preventDefault();

        const violationId = $(this).data('id');
        const violationName = $(this).data('name');

        $('#edit_violation_id').val(violationId);
        $('#editviolation').val(violationName);

        $('#modal_editviolation').modal('show');
    });

    // Edit Violation Form Submission
    $(function () {
        $('#editViolationForm').on('submit', function (e) {
            e.preventDefault();
            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');
            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/blotters/editViolation',
                method: 'POST',
                data: $form.serialize(),
                dataType: 'json'
            })
            .done(response => {
                swalInit.close();

                const icon = response.type || 'error';
                const title = icon === 'success'
                    ? 'Success!'
                    : icon === 'warning'
                        ? 'Warning!'
                        : 'Error!';

                swalInit.fire({
                    icon: icon,
                    title: title,
                    text: response.message
                }).then(() => {
                    if (response.success) {
                        $('#modal_editviolation').modal('hide');
                        location.reload();
                    }
                });
            })
            .fail(() => {
                swalInit.close();
                swalInit.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Server error. Please try again.'
                });
            })
            .always(() => {
                $submitBtn.prop('disabled', false);
            });
        });

    });

</script>