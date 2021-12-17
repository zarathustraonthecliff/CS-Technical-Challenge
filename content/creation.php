<div class="card p-5 mt-7">

    <form>
            <h3 class="mb-2">Please create your file</h3>









          


            
            <div class=" mt-4 mb-4">
                <div class="row justify-content-md-center">
                    <div class="col-md-12 col-lg-12">
                    
                    <label>Describe the file in detail</label>
                    <div class="form-group">
                        <textarea id="editor"></textarea>
                    </div>
                    
                    </div>
                </div>
            </div>

            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>























        <div class="form-group">
            <label for="exampleFormControlInput1">Please enter your pin code!</label>
            
            <input type="password" class="form-control" placeholder="PIN Number"  aria-describedby="button-addon2">
            <button type="button" class="btn btn-outline-primary btn-lg w-100 mt-4"><a href="creation.php?id=1">sign</a></button>
        
        </div>

    </form>

    <div class="row">
        <div class="col-md-6">
           
           
           <button type="button" class="btn bg-gradient-primary btn-lg w-100">Save</button>
        </div>
        <div class="col-md-6 ps-md-2">
        <a href="collabor.php" type="button" class="btn bg-gradient-primary btn-lg w-100">Add a collaborator </a>
        </div>
    </div>



</div>