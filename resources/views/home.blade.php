@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Jenis Buku</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="chart-responsive">
                  <canvas id="pieChart" height="150"></canvas>
                </div>
                <!-- ./chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <ul class="chart-legend clearfix">
                  <li><i class="fas fa-circle text-danger"></i> Novel</li>
                  <li><i class="fas fa-circle text-success"></i> Komik</li>
                  <li><i class="fas fa-circle text-warning"></i> Sejarah</li>
                  <li><i class="fas fa-circle text-info"></i> Sains</li>
                  <li><i class="fas fa-circle text-primary"></i> Fiksi</li>
                  <li><i class="fas fa-circle text-secondary"></i> Biologi</li>
                </ul>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->

        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Penambahan Buku Terbaru</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <li class="item">
                <div class="product-img">
                  <img src="gambar/tokyoghoul.jpg" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Tokyo Ghoul
                    <span class="badge badge-warning float-right">Rp 35.000</span></a>
                  <span class="product-description">
                    Komik Action, Thriller.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="gambar/bumi.jpg" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Bumi
                    <span class="badge badge-info float-right">Rp 20.000</span></a>
                  <span class="product-description">
                    Novel Bergenre Fantasi, Mistis.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="gambar/knn.jpg" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">
                    Kimi No Nawa <span class="badge badge-danger float-right">
                    Rp 35.000
                  </span>
                  </a>
                  <span class="product-description">
                    Novel Bergender Romantis, Misitis, Thriller.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="gambar/naruto.jpg" alt="Product Image" class="img-size-100">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Naruto Shippuden
                    <span class="badge badge-success float-right">Rp 55.000</span></a>
                  <span class="product-description">
                    Komik Terlaris Tahun 2023, Bergenre Fantasy, Action.
                  </span>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="read_bk" class="uppercase">Lihat Semua Produk</a>
          </div>
          <!-- /.card-footer -->
        </div>

        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Transaksi Terakhir</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>Nama Buku</th>
                  <th>Status</th>
                  <th>Popularity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="pages/examples/invoice.html">KN02</a></td>
                  <td>Kimi No Nawa</td>
                  <td><span class="badge badge-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">TG01</a></td>
                  <td>Tokyo Ghoul</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">NR03</a></td>
                  <td>Naruto Shippuden</td>
                  <td><span class="badge badge-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">BM04</a></td>
                  <td>Bumi</td>
                  <td><span class="badge badge-info">Processing</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">BL02</a></td>
                  <td>Bulan</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">BR11</a></td>
                  <td>Boruto</td>
                  <td><span class="badge badge-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">DL92</a></td>
                  <td>Dilan</td>
                  <td><span class="badge badge-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="create_tr" class="btn btn-sm btn-info float-left">Tambah Transaksi</a>
            <a href="read_tr" class="btn btn-sm btn-secondary float-right">Lihat Semua Transaksi</a>
          </div>
          <!-- /.card-footer -->
        </div>
        

            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                      Add Products to Cart
                      <span class="float-right"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Complete Purchase
                      <span class="float-right"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Visit Premium Page</span>
                      <span class="float-right"><b>480</b>/800</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-right"><b>250</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">$35,210.43</h5>
                      <span class="description-text">TOTAL REVENUE</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">$10,390.90</h5>
                      <span class="description-text">TOTAL COST</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">$24,813.53</h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1200</h5>
                      <span class="description-text">GOAL COMPLETIONS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          -->
         

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
