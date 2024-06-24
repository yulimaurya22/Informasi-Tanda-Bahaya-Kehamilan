<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Akun</title>
    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">History / Riwayat Periksa Bunda</h1>


<div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

<?php echo form_open('TambahAkun/search2')?>
<input type="text" name="keyword" class="form-control" placeholder="search">
<button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
<?php echo form_close()?>
</div>


    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th> 
                                        </tr>
                                    </tfoot>
                                    <?php $no = 1;
                                    foreach($tambahAkun as $TA) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$TA->username ?></td>
                                            <td><?=$TA->password ?></td>
                                            <th><?php echo anchor('TambahAkun/detail/'.$TA->id, '<div class="btn btn-success">Detail</div>')?>

                                                                         
               
                                    </th>
                                        </tr>                                      
                                        </tbody>
                                        <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>