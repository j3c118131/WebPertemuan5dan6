<section class="my-4">
        <div class="container">
            <h2>Hobi</h2>

            <?php if(!empty($session)) { ?>

            <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                <?php echo $session['message']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php } ?>
            
            <p>
                <a href="<?php echo site_url('Hobi/add');?>" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>Tambah
                </a>
            </p>
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Aksi</th>
                        <th>Kode</th>
                        <th>Hobi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($dataHobi as $row) : ?> 

                    <tr>
                        <th>
                            <a href="<?php echo site_url('Hobi/edit/'.$row->kode_hobi); ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil"></i>Ubah
                            </a>
                            <a href="<?php echo site_url('Hobi/delete/'.$row->kode_hobi); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');">
                                <i class="fa fa-trash"></i>Hapus
                            </a>
                        </th>
                        <td><?php echo $row->kode_hobi; ?></td>
                        <td><?php echo $row->hobi; ?></td>
                    </tr>

                    <?php 
                        endforeach; 
                    
                        if (empty($dataHobi)) {
                    ?>

                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data.</td>
                    </tr>

                    <?php } ?>
                </tbody>

            </table>
        </div>
</section>