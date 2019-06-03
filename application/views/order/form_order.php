<title>Form Order</title>
<div class="container">
    <h1><?=$tipe?> data Order</h1>
    
    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2">
            Nomer Order
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ord_no" value="<?=isset($default['ord_no'])? $default['ord_no'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
            Pembeli					
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="purch_amt" value="<?=isset($default['purch_amt'])? $default['purch_amt'] : ""?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">
            Tanggal					
            </label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="ord_date" value="<?=isset($default['ord_date'])? $default['ord_date'] : ""?>">
            </div>
        </div>
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