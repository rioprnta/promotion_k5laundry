<!-- Modal Add Items-->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Items</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./controller/controller.php" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Item</span>
                    <input class="form-control" type="text" name="kodeBrg" placeholder="Kode Item">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Name</span>
                    <input class="form-control" type="text" name="nameBrg" placeholder="Name Item">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Category</span>
                    <select class="form-select form-select-sm" name="category">
                        <option> -Pilih- </option>
                        <option value="Kebaya"> Kebaya </option>
                        <option value="Jas"> Jas </option>
                        <option value="Jas"> Others </option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Price</span>
                    <input class="form-control" type="number" name="hargaBrg" placeholder="Rp -.000">
                </div>
                <div class="input-group mb-3" style="display: none;">
                    <span class="input-group-text">Date</span>
                    <input class="form-control" type="text" name="tanggalBrg"
                    value=" <?php 
                                     echo date('Y-m-d');
                            ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="btnSave">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>

<?php
    include('connection/conn.php');
    $sql_modal = "SELECT * FROM barangadmin";
    $result_modal = mysqli_query($db, $sql_modal);

    if(mysqli_num_rows($result_modal) > 0){
        while($mdl = mysqli_fetch_array($result_modal)){
?>
<!-- Modal Edit Items-->
<div class="modal fade" id="editModal<?= $mdl['idBrg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Items</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/controller.php" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Item</span>
                    <input class="form-control" type="text" name="kodeBrgUpdate" placeholder="Kode Barang" value="<?= $mdl['idBrg'] ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Name</span>
                    <input class="form-control" type="text" name="nameBrgUpdate" placeholder="Name Barang" value="<?= $mdl['namaBrg'] ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Category</span>
                    <select class="form-select form-select-sm" name="categoryUpdate">
                        <option <?=($mdl['category']==null)?'selected="selected"':''?> > -Pilih- </option>
                        <option value="Kebaya" <?=($mdl['category']=='Kebaya')?'selected="selected"':''?> > Kebaya </option>
                        <option value="Jas" <?=($mdl['category']=='Jas')?'selected="selected"':''?> > Jas </option>
                        <option value="Others" <?=($mdl['category']=='Others')?'selected="selected"':''?> > Others </option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Price</span>
                    <input class="form-control" type="number" name="hargaBrgUpdate" placeholder="Rp -.000" value="<?= $mdl['hargaBrg'] ?>">
                </div>
                <div class="input-group mb-3" style="display: none;">
                    <span class="input-group-text">Date Update</span>
                    <input class="form-control" type="text" name="tanggalUpdate"
                    value=" <?php 
                                echo date('Y-m-d');
                            ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" name="btnEdit">Save Changes</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Delete Items-->
<div class="modal fade" id="deleteModal<?= $mdl['idBrg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Items</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/controller.php" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Item</span>
                    <input class="form-control" type="text" name="kodeBrg" placeholder="Kode Barang" value="<?= $mdl['idBrg'] ?>" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" name="btnDelete">Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>
<?php    
    }
}
?>




                            <!--------------------- Modal UNTUK PROMO ----------------------->

<!-- Modal Tambah Promo-->
<div class="modal fade" id="tambahModalPromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Promo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/controller_promo.php" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Promo</span>
                    <input class="form-control" type="text" name="kodePromo" placeholder="Kode Barang">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tittle Promo</span>
                    <textarea class="form-control" type="text" name="tittlePromo" placeholder="Tittle Barang"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Start</span>
                    <input class="form-control" type="datetime-local" name="startPromo">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Sisa</span>
                    <input class="form-control" type="text" name="sisaPromo" placeholder="Sisa Waktu">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Expired</span>
                    <input class="form-control" type="datetime-local" name="expPromo">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Deskripsi</span>
                    <textarea class="form-control" type="text" name="descPromo" placeholder="Deskripsi Promo"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" name="btnSavePromo">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>

<?php
    include('connection/conn.php');
    $sql_modal_del = "SELECT * FROM promocurrent";
    $result_modal_del = mysqli_query($db, $sql_modal_del);

    if(mysqli_num_rows($result_modal_del) > 0){
        while($mdldel = mysqli_fetch_array($result_modal_del)){
?>
<!-- Modal Delete Promo-->
<div class="modal fade" id="deleteModalPromo<?= $mdldel['ID_Promo'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Promo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/controller_promo.php" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Promo</span>
                    <input class="form-control" type="text" name="kodePromoDelete" placeholder="Kode Barang" value="<?= $mdldel['ID_Promo'] ?>" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" name="deletePromo">Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Detail Promo-->
<div class="modal fade" id="detailModalPromo<?= $mdldel['ID_Promo'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Promo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="controller/controller_promo.php" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Promo</span>
                    <input class="form-control" type="text" value="<?= $mdldel['ID_Promo'] ?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tittle</span>
                    <input class="form-control" type="text" value="<?= $mdldel['Title_Promo'] ?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Start Date</span>
                    <input class="form-control" type="text" value="<?= $mdldel['start_promo'] ?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Sisa</span>
                    <input class="form-control" type="text" value="<?= $mdldel['sisa_promo'] ?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Start Date</span>
                    <input class="form-control" type="text" value="<?= $mdldel['end_promo'] ?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Deskripsi</span>
                    <textarea class="form-control" type="text" readonly>
                        <?= $mdldel['desc_promo'] ?>
                    </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>
<?php
    }
}
?>