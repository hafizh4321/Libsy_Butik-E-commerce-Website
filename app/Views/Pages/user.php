<?php $this->extend('Layout/TemplateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <center>
        <h1>DATA USER</h1><br />
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="input-group flex-nowrap">
                <!-- <button class="input group text" type="submit" name="submit">Search</button> -->
                <span class="input-group-text" id="addon-wrapping">Search</span>
                <input type="text" name="keyword" class="form-control" placeholder="Search Item">
            </div>
        </form>
        <table class="table">
            <thead class="thead-dark"><br>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Image</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Role</th> -->
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $i = 1; ?>
                <?php foreach ($userss as $user) : ?>
                    <?php if ($user['username'] != 'okikurniawan') :  ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img style="border-radius: 50%;" src="/img/<?= $user['user_image']; ?>" width=200px;></td>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/Pages/usersdelete/<?= $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete <?= $user['username']; ?>')"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            
            </tbody>
        </table>
        <?= $pager->links('users', 'users_pagination');  ?>
    </center>
</div><br><br><br>

<?php $this->endsection(); ?>