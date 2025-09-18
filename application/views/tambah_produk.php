<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/view_data'); ?>">Data Produk</a></li>
                <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus me-1"></i>
                    Form Tambah Produk
                </div>
                <div class="card-body">
                    <?php echo form_open('dashboard/save_product'); ?>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <?php echo form_input('nama_produk', '', array('class' => 'form-control', 'id' => 'inputNamaProduk', 'placeholder' => 'Nama Produk')); ?>
                                <label for="inputNamaProduk">Nama Produk</label>
                                <?php echo form_error('nama_produk', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <?php echo form_input('harga', '', array('class' => 'form-control', 'id' => 'inputHarga', 'placeholder' => 'Harga')); ?>
                                <label for="inputHarga">Harga</label>
                                <?php echo form_error('harga', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <?php echo form_input('stok', '', array('class' => 'form-control', 'id' => 'inputStok', 'placeholder' => 'Stok')); ?>
                                <label for="inputStok">Stok</label>
                                <?php echo form_error('stok', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <?php echo form_textarea('keterangan', '', array('class' => 'form-control', 'id' => 'inputKeterangan', 'placeholder' => 'Keterangan', 'style' => 'height: 100px')); ?>
                        <label for="inputKeterangan">Keterangan</label>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <?php echo form_submit('submit', 'Simpan Produk', array('class' => 'btn btn-primary btn-block')); ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </main>
</div>
