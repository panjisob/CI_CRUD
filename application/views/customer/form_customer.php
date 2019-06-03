<title>Form Customer</title>
<div class="container">
    <h1><?=$tipe?> data Customer</h1>
    
    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2">
                Customer id
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="customer_id" value="<?=isset($default['customer_id'])? $default['customer_id'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
                Nama Customer					
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="cust_name" value="<?=isset($default['cust_name'])? $default['cust_name'] : ""?>">
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
                Grade			
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grade" value="<?=isset($default['grade'])? $default['grade'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
                Saleman id				
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="salesman_id" value="<?=isset($default['salesman_id'])? $default['salesman_id'] : ""?>">
            </div>
        </div>
        <center>
            <button name="tombol_submit" class="btn btn-primary">
                Simpan
            </button>
        </center>


    </form>
</div>