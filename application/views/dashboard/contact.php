<section class="dashboard-header section-padding">
      <div class="container-fluid">
        <?php echo form_open('dashboard/contact_page_details'); ?>
        <div class="form-group">
            <p>Enter Title</p>
            <input type="text" name="contact_title" placeholder="Enter Contact title Here (Ex:- Contact us, Contact Info, Contact Details)" class="form-control input-lg" id="inputlg">
            <br>
            <textarea name="contact_details"></textarea>
            <script>
                 CKEDITOR.replace( 'contact_details' );
            </script>

            
            <button class="submit-button" type="submit">Add</button>

        </div>
            
        <?php echo form_close(); ?>        

      </div>
</section>

   