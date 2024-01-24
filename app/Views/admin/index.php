<?= $this->extend('template/index'); ?>

<?= $this->section('konten-page'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Users List</h1>
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-striped">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($users as $user):?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $user->username;?></td>
                        <td><?= $user->email;?></td>
                        <td><?= $user->name; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?=base_url('admin/'.$user->userid)?>" role="button">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>