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
                                General - <span class="fw-normal">Dashboard</span>
                            </h4>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <span href="#" class="breadcrumb-item">General</span>
                                <span class="breadcrumb-item active">Dashboard</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row d-flex justify-content-center align-items-center mb-3">
                        <div class="col-12 col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0 text-uppercase">Transaction Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr class="text-uppercase">
                                                    <th>Transaction Name</th>
                                                    <th>School Year</th>
                                                    <th>Semester</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Adding of Subjects</td>
                                                    <td>2024</td>
                                                    <td>1st</td>
                                                    <td><span class="badge bg-success text-uppercase">Open</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-primary">Change</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Dropping of Subjects</td>
                                                    <td>2024</td>
                                                    <td>1st</td>
                                                    <td><span class="badge bg-danger text-uppercase">Closed</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-primary">Change</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Transferring of Subjects</td>
                                                    <td>2024</td>
                                                    <td>1st</td>
                                                    <td><span class="badge bg-success text-uppercase">Open</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-primary">Change</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center mb-3">
                        <div class="col-12 col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0 text-uppercase">All Subjects</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="subjectTable">
                                            <thead>
                                                <tr class="text-uppercase">
                                                    <th>Subject</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fundamentals of Killing Yourself</td>
                                                    <td>Tara bonding, talon tayo sa building!</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center mb-3">
                        <div class="col-12 col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-0 text-uppercase d-flex justify-content-center align-items-center">
                                        <span class="flex-grow-1">Schedule</span>
                                        <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-info" aria-expanded="true"><i class="ph-info"></i></button>
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="collapse" id="collapse-info">
                                        <div class="alert alert-success">
                                            <strong>Important:</strong> When you publish a chart to the web, people can see the data used to create it. Be cautious when publishing charts containing private or sensitive information.

                                            <br><br>

                                            Any changes you make to the original document will be reflected in the published version. The updates might take a few minutes to appear.

                                            <br><br>

                                            To remove a file from the web, you must stop publishing it.

                                            <br><br>

                                            <strong>Steps to Stop Sharing a File with Collaborators:</strong>
                                            <ol>
                                                <li>In Google Sheets, open the file.</li>
                                                <li>At the top, click <strong>File</strong> &rarr; <strong>Share</strong> &rarr; <strong>Publish to web</strong>.</li>
                                                <li>Choose a publishing option:
                                                    <ul>
                                                        <li><strong>Spreadsheet:</strong> You can publish the entire spreadsheet or individual sheets.</li>
                                                        <li>Select the format for publishing.</li>
                                                    </ul>
                                                </li>
                                                <li>Click <strong>Publish</strong>.</li>
                                                <li>Copy the URL and share it with anyone you’d like to see the file, or embed it into your website.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-4 mb-3">
                                        <div class="col">
                                            <label class="form-label fw-semibold">Google Sheet Link</label>
                                            <input type="text" id="googleSheetLink" class="form-control" required />
                                        </div>
                                        <div class="col">
                                            <label class="form-label fw-semibold">School Year</label>
                                            <input class="form-control" type="number" id="year" min="1900" max="2099" step="1" placeholder="Ex: 2024" />
                                        </div>
                                        <div class="col">
                                            <label class="form-label fw-semibold">Semester</label>
                                            <select id="semester" class="form-select" required>
                                                <option selected disabled>-- SELECT SEMESTER --</option>
                                                <option value="1st">1st</option>
                                                <option value="2nd">2nd</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="d-none text-white d-md-block form-label fw-semibold">.</label>
                                            <button class="btn btn-success w-100">Update</button>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="card card-body overflow-auto shadow-1">
                                                <iframe src="" width="100%" height="500"></iframe>
                                            </div>
                                        </div>
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