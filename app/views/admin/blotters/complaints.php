<?php //$model = new BlotterModel();
        // $Blotters = $model->getAllBlotters();
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
                                    General - <span class="fw-normal">Complaints</span>
                                </h4>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <span href="#" class="breadcrumb-item">General</span>
                                    <span class="breadcrumb-item active">Complaints</span>
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
                                                <h6 class="mb-0 text-uppercase">All Complaints</h6>
                                                
												<a href="#" data-bs-toggle="modal" data-bs-target="#modal_addcomplaint"
                                                    class="btn btn-outline-success">
                                                    <i class="ph-suitcase-simple me-2"></i> Add Complaint
                                                </a>                                               


										</div>	
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-basic dataTable no-footer table-hover" id="subjectTable" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th>No</th>
                                                        <th>Date Filed</th>
                                                        <th>Complainant</th>
                                                        <th>Person to Complain</th>
                                                        <th>Complaint</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $number = 1; foreach ($Complaints as $complaints) : ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($number++) ?></td>
                                                        <td><?= htmlspecialchars($complaints['Date_Filed']) ?></td>
                                                        <td><?= htmlspecialchars($complaints['Complainant']) ?></td>                                                        
                                                        <td><?= htmlspecialchars($complaints['Person_to_Complain']) ?></td>
                                                        <td><?= htmlspecialchars($complaints['Complaint']) ?></td>
                                                        <td><?= htmlspecialchars($complaints['Status']) ?></td>
                                                        <td class="text-start">
                                                            <div class="d-inline-flex">
                                                                <div class="dropdown">
                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                        <i class="ph-list"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="#"
                                                                        class="dropdown-item btn-edit-complaint"
                                                                        data-id="<?= $complaints['complaint_id']; ?>"
                                                                        data-name="<?= htmlspecialchars($complaints['Complaint']); ?>">
                                                                            <i class="ph-pencil me-2"></i> Edit
                                                                        </a>

                                                                        <a href="#" 
                                                                        class="dropdown-item btn-delete-complaint text-danger"
                                                                        data-id="<?= $complaints['complaint_id']; ?>">
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


<!-- Add Complaint Modal -->
<div id="modal_addcomplaint" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-addcomplaintLabel"><i class="ph-plus me-2"></i>Add Complaint</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
						<form id="complaintForm">
							<div class="modal-body">								
									<div class="mb-3">
										<label class="form-label" for="addcomplaint">Complaint Name</label>
										<div class="form-control-feedback input-group">
											<input type="text" id="addcomplaint" name="complaint_name" class="form-control text-propercase " placeholder ="Enter Complaint">
										</div>
									</div>

                                    <div class="mb-3">
										<label class="form-label" for="addpersontocomplaint">Person to Complaint</label>
										<div class="form-control-feedback input-group">
											<input type="text" id="addpersontocomplaint" name="person_to_complaint" class="form-control text-propercase " placeholder ="Enter Person to Complaint">
										</div>
									</div>

                                    <div class="mb-3">
                                        <label class="form-label" for="adddescription">Description</label>
                                        <div class="form-control-feedback input-group">
                                            <textarea id="adddescription" name="description" class="form-control text-propercase" placeholder="Enter Description"></textarea>
                                        </div>
								    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="addactiontaken">Action Taken</label>
                                        <div class="form-control-feedback input-group">
                                            <textarea id="addactiontaken" name="action_taken" class="form-control text-propercase" placeholder="Enter Action Taken"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="addlocation">Location</label>
                                        <div class="form-control-feedback input-group">
                                            <input type="text" id="addlocation" name="location" class="form-control text-propercase " placeholder ="Enter Location">
                                        </div>
                                    </div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success" id="btn-save">Add Complaint</button>
							</div>
						</form>
			</div>
		</div>
	</div> 

<!-- End of Add Complaint Modal -->

<!-- Edit Complaint Modal -->
<div id="modal_editcomplaint" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white border-0">
                <h5 class="modal-title">
                    <i class="ph-pencil me-2"></i>Edit Complaint
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editComplaintForm">
                <div class="modal-body">
                    <!-- REQUIRED FOR EDIT -->
                    <input type="hidden" name="complaint_id" id="edit_complaint_id">
                    <div class="mb-3">
                        <label class="form-label">Complaint</label>
                        <input type="text" id="editcomplaint" name="complaint_name" class="form-control" placeholder="Enter Complaint">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Complaint</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End of Edit Complaint Modal -->

<script>
    const loadingConfig = {
        title: 'Please wait...',
        text: 'Processing your request',
        allowOutsideClick: false,
        didOpen: () => swalInit.showLoading()
    };

    // Add Complaint Form Submission
    $(function () {
        $('#complaintForm').on('submit', function (e) {
            e.preventDefault();

            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');

            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/addComplaint',
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
                        $('#modal_addcomplaint').modal('hide');
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

    // delete Complaint                                                  
    $(document).on('click', '.btn-delete-complaint', function (e) {
        e.preventDefault();

        const complaintId = $(this).data('id');

        swalInit.fire({
            title: 'Are you sure?',
            text: 'This complaint will be permanently deleted.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                deleteComplaint(complaintId);
            }
        });
    });

    function deleteComplaint(complaintId) {
        swalInit.fire(loadingConfig);

        $.ajax({
            url: '/admin/blotters/deleteComplaint',
            method: 'POST',
            data: { complaint_id: complaintId },
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

    // Edit Complaint Modal
    $(document).on('click', '.btn-edit-complaint', function (e) {
        e.preventDefault();

        const complaintId = $(this).data('id');
        const complaintName = $(this).data('name');

        $('#edit_complaint_id').val(complaintId);
        $('#editcomplaint').val(complaintName);

        $('#modal_editcomplaint').modal('show');
    });

    // Edit Complaint Form Submission
    $(function () {
        $('#editComplaintForm').on('submit', function (e) {
            e.preventDefault();
            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');
            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/blotters/editComplaint',
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
                        $('#modal_editcomplaint').modal('hide');
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