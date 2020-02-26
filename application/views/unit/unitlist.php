<div class="container">
    <div class="row mt-3">
        <div class="col-md">
            <h3 class="text-center"><?= $tu->tu_name; ?></h3>
            <hr>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Nomor Polisi</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unit as $ut) :; ?>
                        <!--query untuk menampilkan table merk-->
                        <?php $no = 1;
                        $merk = $this->db->get_where('merk_unit', ['id_meu' => $ut['id_merk']])->row(); ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $merk->merk_name; ?> </td>
                            <td><?= $ut['model_name']; ?></td>
                            <td><?= $ut['nopol']; ?></td>
                            <td><a href="">Edit</a><a href="">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>