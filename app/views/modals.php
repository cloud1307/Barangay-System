<div id="forgotPasswordModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="ph-lock me-2"></i>
                    Forgot Password
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="forgotPasswordForm">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="form-label">Recovery Email Address</label>
                            <input type="email" class="form-control" id="forgotEmail" name="email" placeholder="example@gsfe.tupcavite.edu.ph" required />
                            <div class="invalid-feedback">Please enter a valid @gmail.com email address!</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-2">
                                <i class="ph-check me-1"></i>
                                Send Reset Link
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="signUpModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="ph-user me-2"></i>
                    Sign Up
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form id="signUpForm">
                <div class="modal-body">
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        <div class="col mb-md-0 mb-3">
                            <label class="form-label fw-semibold">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" required />
                        </div>
                        <div class="col">
                            <label class="form-label fw-semibold">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" required />
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        <div class="col mb-md-0 mb-3">
                            <label class="form-label fw-semibold">Student Number</label>
                            <div class="input-group">
                                <div class="input-group-text">TUPC</div>
                                <input type="text" class="form-control" placeholder="XX-XXXX" required />
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label fw-semibold">Course</label>
                            <input type="text" class="form-control" placeholder="Course" required />
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        <div class="col mb-md-0 mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" id="signUpEmail" class="form-control" placeholder="example@gsfe.tupcavite.edu.ph" required />
                            <div class="invalid-feedback">Please enter a valid @gsfe.tupcavite.edu.ph email address!</div>
                        </div>
                        <div class="col">
                            <label class="form-label fw-semibold">Year and Section</label>
                            <input type="text" class="form-control" placeholder="Year and Section" required />
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        <div class="col mb-md-0 mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="user_password" id="register_user_password" placeholder="******" style="background: rgba(255, 255, 255, 0.5);" required>
                                <div class="input-group-text">
                                    <i class="ph-eye-slash showPassword"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label fw-semibold">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="user_password" id="register_user_password1" placeholder="******" style="background: rgba(255, 255, 255, 0.5);" required>
                                <div class="input-group-text">
                                    <i class="ph-eye-slash showPassword1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-tup">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Position Modal -->
<div id="modal_position" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content dashboard-background text-white">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-AddpositionModalLabel"><i class="ph-plus me-2"></i>Add Position</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
						<div class="modal-body">
                            <form class="needs-validation" id="AddpositionForm">
								<input type="hidden" name="position_id" id="position_id">
									<div class="mb-3">
										<label class="form-label">Position</label>
										<div class="form-control-feedback input-group">
											<input type="text" id="addPosition" name="position_name" class="form-control text-propercase " placeholder ="Enter Position" required>
										</div>
									</div>
								</div>
							<div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add Position</button>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								
							</div>
						</form>
			</div>
		</div>
	</div> 

<!-- End of Position Modal -->


<!-- Purok Modal -->
<div id="modal_purok" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-title"><i class="ph-plus me-2"></i>Add Purok/Zone</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
						<form class="needs-validation" id="purokForm" action="#" novalidate method="POST">
							<div class="modal-body">
								<input type="hidden" name="purok_id" id="purok_id">
									<div class="mb-3">
										<label class="form-label">Purok/Zone</label>
										<div class="form-control-feedback input-group">
											<input type="text" name="purok" class="form-control text-propercase " placeholder ="Enter Purok/Zone" required>
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
<!-- End of Purok Modal -->

<!-- Violation Modal -->
<div id="modal_violations" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-success text-white border-0" id="modal-header">
					<h5 class="modal-title" id="modal-title"><i class="ph-plus me-2"></i>Add Violation</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
						<form class="needs-validation" id="violationForm" action="#" novalidate method="POST">
							<div class="modal-body">
								<input type="hidden" name="violation_id" id="violation_id">
									<div class="mb-3">
										<label class="form-label">Violation</label>
										<div class="form-control-feedback input-group">
											<input type="text" name="violation" class="form-control text-propercase " placeholder ="Enter Violation" required>
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
<!-- End of Violation Modal -->

<script>
    $(".showPassword").click(function() {
        if ($(this).hasClass("ph-eye")) {
            $(this).removeClass("ph-eye");
            $(this).addClass("ph-eye-slash");
            $("#register_user_password").attr("type", "password");
        } else {
            $(this).removeClass("ph-eye-slash");
            $(this).addClass("ph-eye");
            $("#register_user_password").attr("type", "text");
        }
    });

    $(".showPassword1").click(function() {
        if ($(this).hasClass("ph-eye")) {
            $(this).removeClass("ph-eye");
            $(this).addClass("ph-eye-slash");
            $("#register_user_password1").attr("type", "password");
        } else {
            $(this).removeClass("ph-eye-slash");
            $(this).addClass("ph-eye");
            $("#register_user_password1").attr("type", "text");
        }
    });
</script>