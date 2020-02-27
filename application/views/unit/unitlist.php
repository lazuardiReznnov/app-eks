<div class="container ml-5">
    <div class="row mt-3">
        <div class="col-md">
            <h3 class="text-center judul"><?= $tu->tu_name; ?></h3>
            <hr>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <a href="<?= base_url('unit/index') ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="BACK"><i class="fas fa-fw fa-arrow-left"></i></a>
        </div>
        <div class="col-md-6 text-right">
            <a href="" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Add Unit"><i class="fas fa-fw fa-plus-circle"></i></a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pic</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Nomor Polisi</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unit as $ut) :;
                        //query untuk menampilkan table merk-->
                        $merk = $this->db->get_where('merk_unit', ['id_meu' => $ut['id_merk']])->row();
                    ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td>
                                <img class="rounded-circle" width="64px" src="<?= base_url('asset/img/unit/thum/' . $ut['img_unit']); ?>">
                            </td>
                            <td><?= $merk->merk_name; ?> </td>
                            <td><?= $ut['model_name']; ?></td>
                            <td><a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url('unit/detailunit/' . $ut['id_unit']); ?>"><?= $ut['nopol']; ?></a></td>
                            <td>
                                <a href="<?= base_url('unit/editunit/' . $ut['id_unit']) ?>" class="badge badge-success badge-pill" data-toggle="tooltip" data-placement="top" title="EDIT UNIT"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('unit/delunit/' . $ut['id_unit']) ?>" class="badge badge-danger badge-pill" data-toggle="tooltip" data-placement="top" title="HAPUS UNIT" onclick="return confirm('Yakin Ingin Dihapus')"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row mb-4 mt-4">
        <div class="col-md-6 ml-auto">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>