<div class="container">
    <h3>Upload File Data</h3>

    <?php
    echo form_open_multipart('salesman/do_upload');
    ?>

    <input type="file" name="file">
    <button type="submit">Upload Data</button>
    <?php echo form_close(); ?>
</div>


