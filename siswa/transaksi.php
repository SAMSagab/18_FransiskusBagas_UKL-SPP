<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../siswa/login_siswa.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index_siswa.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pembayaran</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pembayaran</h6>
            <a class="collapse-item" href="transaksi.php">Transaksi Pembayaran</a>
            <a class="collapse-item" href="history_pembayaran.php">History Pembayaran</a>
        </div>
    </div>
</li>


<!--Navbar Data -->
<li class="nav-item">
    <a class="nav-link" href="spp.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Data SPP</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['nama']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

                <div class="d-flex flex-column flex-xl-row">
								<!--begin::Sidebar-->
								<div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10">


                    <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar" data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
										<!--begin::Card header-->
										<div class="card-header justify-content-end">
											<!--begin::Toolbar-->
											<div class="card-toolbar">
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0 p-10">
											<!--begin::Summary-->
											<div class="d-flex flex-center flex-column mb-10">
												<!--begin::Avatar-->
												<div class="symbol mb-3 symbol-100px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/blank.png" />
												</div>
												<!--end::Avatar-->
												<!--begin::Name-->
												<h2 class="mb-1"><?=$_SESSION['nama']?></h2>
												<!--end::Name-->
												<!--begin::Position-->
												<div class="fs-6 fw-bold text-gray-400 mb-2">Siswa</div>
												<!--end::Position-->
											</div>
											<!--end::Summary-->
											<!--begin::Menu-->
											<ul class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bolder fs-5 mb-10">
												<!--begin::Menu item-->
												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4 active">
														<span class="menu-bullet">
															<span class="bullet"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
													<!--end::Menu link-->
												</li>
											</ul>
											<!--end::Menu-->
											<!--begin::Account info-->
											<div class="border border-dashed border-gray-300 bg-lighten card-rounded p-6">
												<!--begin::Title-->
												<h5 class="mb-4">Status Akun</h5>
												<!--end::Title-->
												<!--begin::Package-->
												<div class="mb-3">
													<span class="fw-bold text-gray-600">Siswa </span>
													<span class="badge bg-danger me-2 card-rounded">SMK Telkom Malang</span>
												</div>
											</div>
											<!--end::Account info-->
										</div>
										<!--end::Card body-->
									</div>

                                    <div class="flex-lg-row-fluid ms-lg-10">
                                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bolder m-0">Detail Data Profil</h3>
											</div>
											</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
										
										<div class="card-body p-15">
											<!--begin::Row-->
											<div class="row mb-10">
												<div class="col-lg-9 fv-row ">
												<table>
										<tbody>
										<?php
											include "../koneksi.php";
											$sql = 'select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where siswa.nisn = '  .$_SESSION['nisn'];
											$result = mysqli_query($conn, $sql);
                                        ?>
										<?php while( $data_siswa = mysqli_fetch_assoc($result)) { ?>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">NIS</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['nisn']?></td>
											
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">NIS</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['nis']?></td>
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">Nama Siswa</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['nama']?></td>
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">Kelas</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['nama_kelas']?></td>
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">Jurusan</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['jurusan']?></td>
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">Angkatan</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['angkatan']?></td>
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">Alamat</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['alamat']?></td>
										</tr>
										<tr>
											<td class="col-lg-4 fw-bold text-muted">Nomor Telepon</td>
											<td></td>
											<td class="fw-bold fs-6"><?=$data_siswa['no_telp']?></td>
										</tr>
										<?php
										}
										?>
		 							</tbody>
									</table>
												<!--end::Col-->
											</div>
									</div>
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
														<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
														<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-bold">
														<h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
														<div class="fs-6 text-gray-700">Berikut data histori transaksi pembayaran SPP siswa,<br> 
														<a class="fw-bolder" href="./index_admin.php">  dan biodata siswa.</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Card body-->
									</div>
                                    <div class="card mb-5 mb-xl-10">
										<!--begin::Body-->
										<div class="card-body pb-0 px-0">
											<!--begin::Header-->
											<div class="d-flex flex-stack px-9">
												<!--begin::Info-->
												<div class="d-flex flex-column">
													<h2 class="text-dark mb-3 fs-2 fw-boldest">Tagihan SPP Siswa</h2>
													<span class="text-gray-400 fw-bold fs-6">Histori Transaksi Pembayaran</span><br>
													    
													<div class="col-17 col-lg-17 col-xxl-17 d-flex">
     												<div class="card flex-fill">
													 <table class="table table-hover">
															<tr>
																<th>No</th>
																<th>ID</th>
																<th>Bulan</th>
																<th>Tahun</th>
																<th>Tgl. Bayar</th>
																<th>Nominal</th>
																<th>Jumlah Bayar</th>
																<th>Keterangan</th>
															</tr>
															<tbody>
																
															<?php
															include "../koneksi.php";
															$qry_pembayaran=mysqli_query($conn,"select * from pembayaran join spp on spp.id_spp = pembayaran.id_spp where pembayaran.nisn = " .$_SESSION['nisn'] );
															$no=0;
															while($data_pembayaran=mysqli_fetch_array($qry_pembayaran)){
															$no++;?>
																	<tr class="text-xs font-weight-bold">
																		<td class="align-middle text-left"><?=$no?></td>
																		<td class="align-middle text-left"><?=$data_pembayaran['id_pembayaran']?></td>
																		<td class="align-middle text-left"><?=$data_pembayaran['bulan_spp']?></td>
																		<td class="align-middle text-left"><?=$data_pembayaran['tahun_spp']?></td> 
																		<td class="align-middle text-left"><?=$data_pembayaran['tgl_bayar']?></td>
																		<td class="align-middle text-left"><?=$data_pembayaran['nominal']?></td>
																		<td class="align-middle text-left"><?=$data_pembayaran['jumlah_bayar']?></td>
																		<td>
																		<?php
																			if($data_pembayaran['tgl_bayar']=='0000-00-00'){
																			echo '<div class="alert alert-danger" role="alert">Belum Lunas</div>';
																		}else{
																			echo '<div class="alert alert-success" role="alert">Lunas</div>';
																		}
																		?>
																		</td>
																	</tr>
																	<?php
																	}
																	?>
														</tbody>
													</table>
											<!--end::Card title-->
										</div>





										</div>
												
											</div>
                                            </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>