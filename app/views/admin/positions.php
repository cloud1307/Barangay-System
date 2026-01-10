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
                                    <span class="breadcrumb-item active">Positions</span>
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
                                                
												<a href="#" data-bs-toggle="modal" data-bs-target="#modal_addposition"
                                                    class="btn btn-outline-success <?= ($currentUrl === '/admin/addPosition') ? 'active fw-bold' : '' ?>">
                                                    <i class="ph-suitcase-simple me-2"></i> Add Position
                                                </a>                                               


										</div>	
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-basic dataTable no-footer table-hover" id="subjectTable" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th>No</th>
                                                        <th>Positions</th>                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $number = 1; foreach ($positions as $pos) : ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($number++) ?></td>
                                                        <td><?= htmlspecialchars(mb_strtoupper($pos['varPosition'])) ?></td>                                                        
                                                        <td class="text-start">
                                                            <div class="d-inline-flex">
                                                                <div class="dropdown">
                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                        <i class="ph-list"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a href="#"
                                                                        class="dropdown-item btn-edit-position"
                                                                        data-id="<?= $pos['position_id']; ?>"
                                                                        data-name="<?= htmlspecialchars($pos['varPosition']); ?>">
                                                                            <i class="ph-pencil me-2"></i> Edit
                                                                        </a>

                                                                        <a href="#" 
                                                                        class="dropdown-item btn-delete-position text-danger"
                                                                        data-id="<?= $pos['position_id']; ?>">
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


<!-- Add Position Modal -->
<div id="modal_addposition" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-addpositionLabel"><i class="ph-plus me-2"></i>Add Position</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
						<form id="positionForm">
							<div class="modal-body">								
									<div class="mb-3">
										<label class="form-label" for="addposition">Position</label>
										<div class="form-control-feedback input-group">
											<input type="text" id="addposition" name="position_name" class="form-control text-propercase " placeholder ="Enter Position">
										</div>
									</div>
								</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success" id="btn-save">Add Position</button>
							</div>
						</form>
			</div>
		</div>
	</div> 

<!-- End of Add Position Modal -->

<!-- Edit Position Modal -->
<div id="modal_editposition" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white border-0">
                <h5 class="modal-title">
                    <i class="ph-pencil me-2"></i>Edit Position
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editPositionForm">
                <div class="modal-body">
                    <!-- REQUIRED FOR EDIT -->
                    <input type="hidden" name="position_id" id="edit_position_id">
                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <input type="text" id="editposition" name="position_name" class="form-control" placeholder="Enter Position">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Position</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- End of Edit Position Modal -->

<script>
    const loadingConfig = {
        title: 'Please wait...',
        text: 'Processing your request',
        allowOutsideClick: false,
        didOpen: () => swalInit.showLoading()
    };

    // Add Position Form Submission
    $(function () {
        $('#positionForm').on('submit', function (e) {
            e.preventDefault();

            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');

            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/addPosition',
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
                        $('#modal_addposition').modal('hide');
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

    // delete Position                                                  
    $(document).on('click', '.btn-delete-position', function (e) {
        e.preventDefault();

        const positionId = $(this).data('id');

        swalInit.fire({
            title: 'Are you sure?',
            text: 'This position will be permanently deleted.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                deletePosition(positionId);
            }
        });
    });

    function deletePosition(positionId) {
        swalInit.fire(loadingConfig);

        $.ajax({
            url: '/admin/deletePosition',
            method: 'POST',
            data: { position_id: positionId },
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

    // Edit Position Modal
    $(document).on('click', '.btn-edit-position', function (e) {
        e.preventDefault();

        const positionId = $(this).data('id');
        const positionName = $(this).data('name');

        $('#edit_position_id').val(positionId);
        $('#editposition').val(positionName);

        $('#modal_editposition').modal('show');
    });

    // Edit Position Form Submission
    $(function () {
        $('#editPositionForm').on('submit', function (e) {
            e.preventDefault();
            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');
            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/editPosition',
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
                        $('#modal_editposition').modal('hide');
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
