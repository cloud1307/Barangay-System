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
                                    General - <span class="fw-normal">Permits</span>
                                </h4>
                            </div>
                        </div>

                        <div class="page-header-content d-lg-flex border-top">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="/admin/home" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <span href="#" class="breadcrumb-item">General</span>
                                    <span class="breadcrumb-item">Permits</span>
                                    <span class="breadcrumb-item active">Cutting Trees Permits</span>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="content">

                </div>
            </div>
        </div>
    </div>
    <script>
        $('#subjectTable').DataTable();
    </script>
    <?php include(__DIR__ . '../../../modals.php'); ?>

</body>

</html>