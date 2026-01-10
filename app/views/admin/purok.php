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
                                    General - <span class="fw-normal">Purok</span>
                                </h4>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <span href="#" class="breadcrumb-item">General</span>
                                    <span class="breadcrumb-item active">Purok</span>
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

												<a href="#" data-bs-toggle="modal" data-bs-target="#modal_purok"
                                                    class="btn btn-outline-success <?= ($currentUrl === '/admin/purok') ? 'active fw-bold' : '' ?>">
                                                    <i class="ph-person me-2"></i> Add Purok
                                                    </a>
										</div>	
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" id="subjectTable">
                                                <thead>
                                                    <tr class="text-uppercase">
                                                        <th>No</th>
                                                        <th>Purok</th>                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $number = 1; foreach ($Puroks as $puroks) : ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($number++) ?></td>
                                                        <td><?="Purok/Zone " . htmlspecialchars($puroks['purok_zone']) ?></td>                                                        
                                                        <td class="text-center">
                                                            <div class="d-inline-flex">
                                                                <div class="dropdown">
                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                        <i class="ph-list"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">                                                                        
                                                                        <a href="#"
                                                                        class="dropdown-item btn-edit-purok"
                                                                        data-id="<?= $puroks['purok_id']; ?>"
                                                                        data-name="<?= htmlspecialchars($puroks['purok_zone']); ?>">
                                                                            <i class="ph-pencil me-2"></i> Edit
                                                                        </a>

                                                                        <a href="#" 
                                                                        class="dropdown-item btn-delete-purok text-danger"
                                                                        data-id="<?= $puroks['purok_id']; ?>">
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

<!-- Add Purok Modal -->
<div id="modal_purok" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-addPurokLabel"><i class="ph-plus me-2"></i>Add Purok/Zone</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
						<form id="addpurokForm">
							<div class="modal-body">								
									<div class="mb-3">
										<label class="form-label" for="addpurok">Purok/Zone</label>
										<div class="form-control-feedback input-group">
											<input type="text" id="addpurok" name="purok_zone" class="form-control text-propercase " placeholder ="Enter Purok/Zone" required>
										</div>
									</div>
								</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success" id="btn-save">Add Purok/Zone</button>
							</div>
						</form>
			</div>
		</div>
	</div>
<!-- End of Add Purok Modal -->

<!-- Edit Purok Modal -->
<div id="modal_editpurok" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white border-0" id="modal-header">
                    <h5 class="modal-title" id="modal-editPurokLabel"><i class="ph-pencil me-2"></i>Edit Purok/Zone</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                        <form id="editPurokForm">
                            <div class="modal-body">
                                <!-- REQUIRED FOR EDIT -->
                                    <input type="hidden" name="purok_id" id="edit_purok_id">                               
                                    <div class="mb-3">
                                        <label class="form-label" for="editpurok">Purok/Zone</label>
                                        <div class="form-control-feedback input-group">
                                            <input type="text" id="editpurok" name="purok_zone" class="form-control text-propercase " placeholder ="Enter Purok/Zone" required>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="btn-update">Update Purok/Zone</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
<!-- End of Edit Purok Modal -->

<script>
    const loadingConfig = {
        title: 'Please wait...',
        text: 'Processing your request',
        allowOutsideClick: false,
        didOpen: () => swalInit.showLoading()
    };

    // Add Purok Form Submission
    $(function () {
        $('#addpurokForm').on('submit', function (e) {
            e.preventDefault();

            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');

            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/addPurok',
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
                        $('#modal_addpurok').modal('hide');
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

    // delete Purok                                                  
    $(document).on('click', '.btn-delete-purok', function (e) {
        e.preventDefault();

        const purokId = $(this).data('id');

        swalInit.fire({
            title: 'Are you sure?',
            text: 'This purok will be permanently deleted.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                deletePurok(purokId);
            }
        });
    });

    function deletePurok(purokId) {
        swalInit.fire(loadingConfig);

        $.ajax({
            url: '/admin/deletePurok',
            method: 'POST',
            data: { purok_id: purokId },
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

    // Edit Purok Modal
    $(document).on('click', '.btn-edit-purok', function (e) {
        e.preventDefault();

        const purokId = $(this).data('id');
        const purokName = $(this).data('name');
        $('#edit_purok_id').val(purokId);
        $('#editpurok').val(purokName);

        $('#modal_editpurok').modal('show');
    });

    // Edit Purok Form Submission
    $(function () {
        $('#editPurokForm').on('submit', function (e) {
            e.preventDefault();
            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');
            $submitBtn.prop('disabled', true);
            swalInit.fire(loadingConfig);

            $.ajax({
                url: '/admin/editPurok',
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
                        $('#modal_editpurok').modal('hide');
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
