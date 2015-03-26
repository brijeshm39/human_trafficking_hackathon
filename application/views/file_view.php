<div class="container">
<div class="row">
    <div class="row clearfix">
        <div class="col-md-offset-3 col-md-6">
            <?php echo $error;?> <!-- Error Message will show up here -->
            <?php echo form_open_multipart('upload/do_upload');?>

            <div class="form-group">
                <label for="image_file"><h1>Image File</h1></label><input type="file" accept="image/jpeg,image/png" name="userfile" id="image_file" />
                <p class="help-block">
                    Maximum size is 2mb and height is 768px and maximum width is 1024px
                </p>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>