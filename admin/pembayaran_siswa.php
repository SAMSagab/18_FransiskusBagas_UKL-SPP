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
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User</h6>
                        <a class="collapse-item" href="petugas.php">Data Petugas</a>
                        <a class="collapse-item" href="siswa.php">Data Siswa</a>
                        <a class="collapse-item" href="kelas.php">Data Kelas</a>
                    </div>
                </div>
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
                        <a class="collapse-item" href="pembayaran.php">Transaksi Pembayaran</a>
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

            <!--Navbar laporan -->
            <li class="nav-item">
                <a class="nav-link" href="laporan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan</span></a>
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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
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


                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

                    <div class="content flex-row-fluid" id="kt_content">
							<!--begin::Layout - Overview-->
							<div class="d-flex flex-column flex-xl-row">
								<!--begin::Sidebar-->
								<div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10">
									<!--begin::Card-->
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
												<?php
													include "../koneksi.php";
													$sql = 'select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where siswa.nisn = '  .$_GET['nisn'];
													$result = mysqli_query($conn, $sql);
												?>
												<?php while( $data_siswa = mysqli_fetch_assoc($result)) { ?>
												<a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bolder mb-1"><?=$data_siswa['nama']?></a><br>
												<a href="cetak_transaksi.php?nisn=<?=$data_siswa['nisn']?>" target="_blank" class="btn btn-primary">Cetak Laporan Transaksi SPP</a>
												<?php
												}
												?>
												<!--end::Name-->
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
									<!--end::Card-->
								</div>
								<!--end::Sidebar-->
								<!--begin::Content-->
								<div class="flex-lg-row-fluid ms-lg-10">
									<!--begin::details View-->
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bolder m-0">Detail Data Profil</h3>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
										
										<div class="card-body p-10">
											<!--begin::Row-->
											<div class="row mb-10">
												<div class="col-lg-9 fv-row ">
												<table>
										<tbody>
										<?php
											include "../koneksi.php";
											$sql = 'select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where siswa.nisn = '  .$_GET['nisn'];
											$result = mysqli_query($conn, $sql);
                                        ?>
										<?php while( $data_siswa = mysqli_fetch_assoc($result)) { ?>
											
										<tr>
											<td class="col-lg-4 fw-bold text-muted">NISN</td>
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
														<div class="fs-6 text-gray-700">Pembayaran SPP dilakukan dengan cara mencari tagihan siswa,<br> 
														<a class="fw-bolder" href="./index_admin.php">  kemudian proses pembayaran.</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::details View-->
									<!--begin::Chart widget 2-->
									<div class="card mb-xl-10">
										<!--begin::Body-->
										<div class="card-body pb-0 px-0">
											<!--begin::Header-->
											<div class="d-flex flex-stack px-9">
												<!--begin::Info-->
												<div class="d-flex flex-column">
													<h2 class="text-dark mb-3 fs-2 fw-boldest">Tagihan SPP Siswa</h2>
													<span class="text-gray-400 fw-bold fs-6">Histori Transaksi Pembayaran</span><br>
													    
													<div class="col-17 col-lg-17 col-xxl-17 d-flex">
														 <!-- Button trigger modal -->
														 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
															Tambah Transaksi
														</button> 
														
     												<div class="card ">
														
														<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
														<!-- Modal -->
														<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi Pembayaran</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																<form method="POST" action="proses_tambah_pembayaran.php" enctype="multipart/form-data">
																<section class="base">
																<div class="mb-3">
																<label for="exampleInputEmail1" class="form-label">Id Pembayaran</label>
																<input type="text" name="id_pembayaran" class="form-control">
																</div>
																<div class="mb-3">
																<label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
																					<select name="id_petugas" class="form-control">
																					<option></option>
																					
																					<?php

																					include "../koneksi.php";
																					$qry_petugas=mysqli_query($conn,"select * from petugas");
																					while($data_petugas=mysqli_fetch_array($qry_petugas)){
																						echo '<option value="'.$data_petugas['id_petugas'].'">'.$data_petugas['nama_petugas'].' | '.$data_petugas['level'].'</option>';
																					}
																					?>
																					</select>
																</div>
																<div class="mb-3">
																<label for="exampleInputEmail1" class="form-label">NISN Siswa</label>
																					<select name="nisn" class="form-control">
																					<option></option>
																					
																					<?php

																					include "../koneksi.php";
																					$qry_siswa=mysqli_query($conn,"select * from siswa");
																					while($data_siswa=mysqli_fetch_array($qry_siswa)){
																						echo '<option value="'.$data_siswa['nisn'].'">'.$data_siswa['nisn'].' | '.$data_siswa['nama'].'</option>';
																					}
																					?>
																					</select>
																</div>
																<div class="mb-3">
																<label for="exampleInputEmail1" class="form-label">Bulan</label>
																<input type="text" name="bulan_spp" class="form-control">
																</div>
																<div class="mb-3">
																<label for="exampleInputEmail1" class="form-label">Tahun</label>
																<input type="text" name="tahun_spp" class="form-control">
																</div>
																<div class="mb-3">
																<label for="exampleInputEmail1" class="form-label">Nominal</label>
																					<select name="id_spp" class="form-control">
																					<option></option>
																					
																					<?php

																					include "../koneksi.php";
																					$qry_spp=mysqli_query($conn,"select * from spp");
																					while($data_spp=mysqli_fetch_array($qry_spp)){
																						echo '<option value="'.$data_spp['id_spp'].'">'.$data_spp['tahun'].' | '.$data_spp['nominal'].'</option>';
																					}
																					?>
																					</select>
																</div>
																<br>
																<div>
																	<input type="submit" name="simpan" value="Tambah Data Pembayaran" class="btn btn-primary">
																</div>
															</section>
															</form>
																</div>
															</div>
															
														</div>
														
															</div>
														</div>
																			
															</div>
															<!--end::Modal body-->
														
														<br><br>
														
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
																<th>Aksi Bayar</th>
																<th>Aksi Hapus</th>
															</tr>
															<tbody>
																
															<?php
															include "../koneksi.php";
															$qry_pembayaran=mysqli_query($conn,"select * from pembayaran join spp on spp.id_spp = pembayaran.id_spp where pembayaran.nisn = " .$_GET['nisn'] );
															$no=0;

															while ($data_pembayaran = mysqli_fetch_array($qry_pembayaran)) {
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
																		<td>
																			<?php
																			if($data_pembayaran['tgl_bayar']=='0000-00-00'){
																				echo "<a class='btn btn-primary px-2' href='proses_transaksi.php?id_pembayaran=$data_pembayaran[id_pembayaran]&nisn=$data_pembayaran[nisn]'>Bayar</a> ";
																				// echo '<button class="btn btn-primary" type="submit" name="button1"> Bayar </button>'; 
																		}else{
																			echo "-";
																		}
																		?>
																		</td>
																		<td><a href="hapus_transaksi.php?id_pembayaran=<?=$data_pembayaran['id_pembayaran']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
																	</tr>
																	<?php
																	}
																	?>
														</tbody>
													</table>
													
													<!-- <input type="button" onClick="window.print()" value="Print The Report" class="btn btn-primary"/> -->
												</div>
												
											</div>
										</div>
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