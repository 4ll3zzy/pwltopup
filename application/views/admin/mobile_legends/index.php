<div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mobile Legends</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mobile Legends</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <?= $this->session->flashdata('pesan') ?>
            <?= $this->session->flashdata('update') ?>
            <div class="card">
              <div class="card-header">
                <a href="/topup/admin/mobile_legends/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>Tambah Data</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nominal</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                  foreach($mobile_legends as $ml) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $ml->nominal ?></td>
                      <td><?= $ml->harga ?></td>
                      <td>
                        <a href="/topup/admin/mobile_legends/edit/<?= $ml->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="/topup/admin/mobile_legends/destroy/<?= $ml->id ?>" class="btn btn-warning btn-sm" onclick="return confirm ('apakah yakin ingin menghapus data?')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  