<!-- =========================== CONTENT =========================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inv Keluar
            <small>Informasi Detail</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-archive"></i> &nbsp; Inventory</li>
            <li class="active">Data Detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php foreach ($data_detail->result() as $data) {
            $curr_id               = $data->id;
            $curr_code             = $data->code;
            $curr_brand            = $data->brand;
            $curr_model            = $data->model;
            $curr_serial_number    = $data->serial_number;
            $curr_category_id      = $data->category_id;
            $curr_category         = $data->category_name;
            $curr_location_id      = $data->location_id;
            $curr_location         = $data->location_name;
            $curr_jumlah_datas     = $data->jumlah_datas;
            $curr_status           = $data->status;
            $curr_status_name      = $data->status_name;
            $curr_length           = $data->length;
            $curr_width            = $data->width;
            $curr_height           = $data->height;
            $curr_weight           = $data->weight;
            $curr_color            = $data->color;
            $curr_price            = $data->price;
            $curr_date_of_purchase = $data->date_of_purchase;
            $curr_description      = $data->description;
            $curr_photo            = $data->photo;
            $curr_thumbnail        = $data->thumbnail;
        } ?>
        <!-- Data detail box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $curr_brand . " " . $curr_model ?>
                </h3>

                <div class="box-tools pull-right">
                    <!-- <button class="btn btn-default btn-box-tool" title="Show / Hide" id="myboxwidget"><i class="fa fa-plus"></i> Show / Hide</button> -->
                </div>
            </div>
            <div class="box-body">
                <?php echo $message; ?>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <?php if ($curr_photo != "") : ?>
                        <a href="<?php echo base_url("assets/uploads/images/inventory/") . $curr_photo ?>" class="thumbnail" data-fancybox data-caption="<?php echo $curr_brand . " " . $curr_model ?>">
                            <img src="<?php echo base_url("assets/uploads/images/inventory/") . $curr_photo ?>" alt="<?php echo $curr_brand . " " . $curr_model ?>">
                        </a>
                    <?php else : ?>
                        <img src="<?php echo base_url("assets/uploads/images/no_picture.png") ?>" class="center-block" alt="<?php echo $curr_brand . " " . $curr_model ?>">
                        <h3 class="text-center">No Image</h3>
                        <br>
                        <hr>
                    <?php endif; ?>
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 form-horizontal">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th class="col-lg-3 active">Kode</th>
                            <td><?php echo $curr_code ?></td>
                        </tr>
                        <tr>
                            <th class="active">Nama Produk</th>
                            <td><?php echo $curr_brand ?></td>
                        </tr>
                        <tr>
                            <th class="active">Tipe</th>
                            <td><?php echo $curr_model ?></td>
                        </tr>
                        <tr>
                            <th class="active">Kategory</th>
                            <td><?php echo $curr_category ?></td>
                        </tr>
                        <tr>
                            <th class="active">Lokasi</th>
                            <td><?php echo $curr_location ?></td>
                        </tr>
                        <tr>
                            <th class="active">Serial Number</th>
                            <td><?php echo $curr_serial_number ?></td>
                        </tr>
                        <tr>
                            <th class="active">Status</th>
                            <td><?php echo $curr_status_name ?></td>
                        </tr>
                    </table>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-horizontal">
                            <h4>Rincian Informasi</h4>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th class="col-lg-4 active">Warna</th>
                                    <td><?php echo $curr_color ?></td>
                                </tr>
                                <tr>
                                    <th class="col-lg-4 active">Jumlah Datas</th>
                                    <td><?php echo $curr_jumlah_datas ?></td>
                                </tr>
                                <tr>
                                    <th class="active">Harga</th>
                                    <td><?php echo number_format($curr_price, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th class="active">Tanggal Pembelian</th>
                                    <td><?php echo $curr_date_of_purchase ?></td>
                                </tr>
                                <tr>
                                    <th class="active">Deskripsi</th>
                                    <td><?php echo $curr_description ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-horizontal">
                            <h4>Dimensi</h4>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th class="col-lg-4 active">Panjang</th>
                                    <td><?php echo $curr_length ?> Cm</td>
                                </tr>
                                <tr>
                                    <th class="active">Lebar</th>
                                    <td><?php echo $curr_width ?> Cm</td>
                                </tr>
                                <tr>
                                    <th class="active">Tinggi</th>
                                    <td><?php echo $curr_height ?> Cm</td>
                                </tr>
                                <tr>
                                    <th class="active">Berat</th>
                                    <td><?php echo $curr_weight ?> Kg</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <hr>
                        <a href="<?php echo base_url('inv_keluar/edit/') . $curr_id; ?>" class="btn btn-primary btn-lg">Edit Data</a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->