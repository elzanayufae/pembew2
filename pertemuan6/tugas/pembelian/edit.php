<?php 
    require_once '../dbkoneksi.php';
?>
<?php
$id = $_GET['idedit'];
$sql = "SELECT * FROM pembelian WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>
       
<form method="POST" action="proses.php">
   <input type ="hidden" name = "id" value="<?php echo $hasil['id']; ?>">
   <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="date" class="form-control" 
        value="<?php echo $hasil['tanggal']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control"
        value="<?php echo $hasil['nomor']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" type="number" class="form-control" 
        value="<?php echo $hasil['produk_id']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" value="<?php echo $hasil['jumlah']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="harga" name="harga" 
        value="<?php echo $hasil['harga']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="vendor_id" class="col-4 col-form-label">Vendor id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="vendor_id" name="vendor_id" 
        value="<?php echo $hasil['vendor_id']; ?>"
        type="number" class="form-control">
      </div>
    </div>
  </div>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>