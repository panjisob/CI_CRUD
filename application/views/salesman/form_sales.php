<title>Form Salesman</title>
<div class="container">
    <h1><?=$tipe?> data Salesman</h1>
    
    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2">
            Saleman id
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="salesman_id" value="<?=isset($default['salesman_id'])? $default['salesman_id'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
            Nama					
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?=isset($default['nama'])? $default['nama'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
                Alamat					
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="city" value="<?=isset($default['city'])? $default['city'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
                komisi		
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="commision" value="<?=isset($default['commision'])? $default['commision'] : ""?>">
            </div>
        </div>

        <center>
            <button name="tombol_submit" class="btn btn-primary">
                Simpan
            </button>
        </center>


    </form>
</div>