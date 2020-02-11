<div class="container mt-3">
    <div class="row mb-2">
        <div class="col-lg">
            <h3 class="text-center">HALAMAN UNIT </h3>
            <hr>
        </div>
    </div>
    <div class="row ml-2">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="BACK"><i class="fas fa-fw fa-caret-square-left"></i></a>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="top" title="Add Type Unit"><i class="fas fa-fw fa-plus-circle"></i></a>
        </div>
    </div>
    <div class="row mt-4 ml-4 mb-5">
        <div class="col-lg">
            <h4 class="mb-3">List Type Unit</h4>
            <ul class="list-group">
                <?php foreach ($list_tu as $ltu) :; ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $ltu['tu_name']; ?>
                        <a href="<?= base_url('unit/unitlist/' . $ltu['id_tu']); ?>" class="badge badge-primary badge-pill">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>