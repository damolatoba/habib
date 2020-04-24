<?php $__env->startSection('content'); ?>
<!-- content -->
<!-- Update a branch modal  -->
<div id="myModal2" class="modal2">

        <!-- Modal content -->
    <div class="modal-content2">
        <a class="close2" data-role="close">&times;</a>
        <h3 style="color:#32a852;padding:0 0 10px 0;text-align:center;">Edit this product.</h3>
        <form method="POST" action="/account/products/update" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <!-- <?php echo method_field('PUT'); ?> -->

                <div class="form-group row">
                    <label for="branch" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Product Name')); ?></label>

                    <div class="col-md-6">
                        <input id="product" type="text" name="product" required autocomplete="product name" autofocus>
                        <input id="productId" type="hidden" name="productId" required autofocus>

                        <!-- <?php $__errorArgs = ['branch'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Type')); ?></label>

                    <div class="col-md-6">
                        <!-- <input id="location" type="text" name="location" required autocomplete="location"> -->
                        <select name="product_type" id="productType">
                            <option>Select product type</option>
                            <option value="1">Regular</option>
                            <option value="2">Special</option>
                        </select>

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="product_size" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Product Size')); ?></label>

                    <div class="col-md-6">
                        <input id="productSize" type="text" name="product_size" required autocomplete="product size">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="product_prize" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Product Prize')); ?></label>

                    <div class="col-md-6">
                        <input id="productPrize" type="text" name="product_prize" required autocomplete="product prize">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="manager-mobile" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>

                    <div class="col-md-6">
                        <input id="description" type="text" name="description" required autocomplete="Description">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row" id="imgDiv">
                    <p href="#" id="showimg" style="text-align:center;color:#4287f5;">Click here to change product image</p>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" style="width:100%;">
                                <?php echo e(__('Edit Product')); ?>

                            </button>
                        </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
    </div>
</div>


<!-- Create a new product modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3 style="color:#32a852;padding:0 0 10px 0;text-align:center;">Add a new product.</h3>
            <form method="POST" action="/account/products/create" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <!-- <?php echo method_field('PUT'); ?> -->

                <div class="form-group row">
                    <label for="branch" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Product Name')); ?></label>

                    <div class="col-md-6">
                        <input id="product" type="text" name="product" required autocomplete="product name" autofocus>

                        <!-- <?php $__errorArgs = ['branch'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Type')); ?></label>

                    <div class="col-md-6">
                        <!-- <input id="location" type="text" name="location" required autocomplete="location"> -->
                        <select name="product_type">
                        <option>Select product type</option>
                        <option value="1">Regular</option>
                        <option value="2">Special</option>
                        </select>

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="product_size" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Product Size')); ?></label>

                    <div class="col-md-6">
                        <input id="product_size" type="text" name="product_size" required autocomplete="product size">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="product_prize" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Product Prize')); ?></label>

                    <div class="col-md-6">
                        <input id="product_prize" type="text" name="product_prize" required autocomplete="product prize">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="manager-mobile" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>

                    <div class="col-md-6">
                        <input id="description" type="text" name="description" required autocomplete="Description">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="manager-mobile" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>

                    <div class="col-md-6">
                        <input type="file" name="product_image" id="profile_image">

                        <!-- <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" style="width:100%;">
                                <?php echo e(__('Add New Product')); ?>

                            </button>
                        </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
    </div>

</div>


<!-- delete a branch modal -->
<div id="myModal3" class="modal3">

<!-- Modal content -->
    <div class="modal-content3">
        <a class="close2" data-role="close">&times;</a>
        <h3 style="color:#32a852;padding:0 0 10px 0;text-align:center;">Delete Product.</h3>
        <p style="color:black;text-align:center;">Are you sure you want to delete product <b><span id="delproductName" style="color:#32a852;"></span></b></p>
            <form method="POST" action="/account/products/delete">
                <?php echo csrf_field(); ?>

                <!-- <?php echo method_field('PUT'); ?> -->

                <div class="form-group row mb-0">
                    <div class="col-md-4"></div>
                        <div class="col-md-4">
                        <input id="delid" type="hidden" name="delid" required autocomplete="branch name" autofocus>
                            <button type="submit" class="btn btn-danger" style="width:100%;">
                                <?php echo e(__('Delete')); ?>

                            </button>
                            <!-- <button href="/account/branches/" class="btn btn-warning" style="width:100%;">
                                <?php echo e(__('Cancel')); ?>

                            </button> -->
                        </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
    </div>
</div>


    <div class="row">
        <div class="col-md-9">
            <h1 style="padding:0 10px;">Product Manager</h1>
        </div>
        <div class="col-md-3">
            <button  id="myBtn" class="btn btn-primary" style="width:100%;margin:10px;"><?php echo e(__('Create New Product')); ?></button>
        </div>
    </div>


    


        <?php if(count($products)>0): ?>
            <div style="padding:0 10px 30px; 10px;">
                <h3 style="color:#32a852;padding:10px;text-align:center;">Products List</h3>
                <table id="customers">
                    <tr>
                        <th>Item</th>
                        <th>Info</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id = "<?php echo e($product->id); ?>">
                        <td width="40%">
                            <img src="<?php echo e(url('')); ?>/uploads/images/<?php echo e($product->product_image); ?>" alt="image" style="max-width:100%;"><br/>
                            <p><?php echo e($product->product_name); ?></p>
                        </td>
                        <td>
                            <?php if($product->product_type == 1): ?>
                            <p>Regular</p><br/>
                            <?php else: ?>
                            <p>Special</p><br/>
                            <?php endif; ?>
                            <p>&#8358;<?php echo e(number_format($product->product_prize)); ?></p><br/>
                            <p><?php echo e($product->product_size); ?></p><br/>
                            <p><?php echo e($product->description); ?></p><br/>
                        </td>
                        <td data-target="productName" style="display:none;"><?php echo e($product->product_name); ?></td>
                        <td data-target="productType" style="display:none;"><?php echo e($product->product_type); ?></td>
                        <td data-target="productPrize" style="display:none;"><?php echo e($product->product_prize); ?></td>
                        <td data-target="productSize" style="display:none;"><?php echo e($product->product_size); ?></td>
                        <td data-target="description" style="display:none;"><?php echo e($product->description); ?></td>
                        <td><button data-role="update" data-id="<?php echo e($product->id); ?>" class="btn btn-primary" style="width:100%;"><?php echo e(__('Edit')); ?></button></td>
                        <td><button data-role="delete" data-id="<?php echo e($product->id); ?>" class="btn btn-danger" style="width:100%;"><?php echo e(__('Delete')); ?></button></td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php echo e($products->links()); ?>

            </div>
        <?php else: ?>
            <div style="background-color:white;padding:25px;margin:150px 10px;text-align:center;">
                <p>No records available for branches/stores at the moment. Please create one.</p>
            </div>
        <?php endif; ?>
        

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        
        }




$(document).ready(function(){

//  append values in input fields
  $(document).on('click','button[data-role=update]',function(){
        var id  = $(this).data('id');
        var productName  = $('#'+id).children('td[data-target=productName]').text();
        var productType  = $('#'+id).children('td[data-target=productType]').text();
        var productPrize  = $('#'+id).children('td[data-target=productPrize]').text();
        var productSize  = $('#'+id).children('td[data-target=productSize]').text();
        var description  = $('#'+id).children('td[data-target=description]').text();

        $('#productId').val(id);
        $('#product').val(productName);
        $('#productType').val(productType);
        $('#productPrize').val(productPrize);
        $('#productSize').val(productSize);
        $('#description').val(description);

        

        $('#myModal2').css("display", "block");
        console.log(typeof(id));

        

  });

  $(document).on('click','button[data-role=delete]',function(){
        var id  = $(this).data('id');
        var productName  = $('#'+id).children('td[data-target=productName]').text();

        $('#delid').val(id);
        $('#delproductName').text(productName);

        

        $('#myModal3').css("display", "block");
        // console.log(id);

        

  });

  

  $(document).on('click','a[data-role=close]',function(){
        var id  = $(this).data('id');
        $('#myModal2').css("display", "none");
        var div_data = '<div class="form-group row" id="imgDiv"><p href="#" id="showimg" style="text-align:center;color:#4287f5;">Click here to change product image</p></div>';
        $("#imgDiv").html(div_data);
  });

  $(document).on('click','a[data-role=close]',function(){
        var id  = $(this).data('id');
        $('#myModal3').css("display", "none");
  });


});


function showitnow() {
    var div_data = '<div class="form-group row" id="imgDiv"><label for="manager-mobile" class="col-md-6 col-form-label text-md-right"><?php echo e(__('Image')); ?></label><div class="col-md-6"><input type="file" name="product_image" id="profile_image"></div></div>';
    $("#imgDiv").html(div_data);

}

$("#showimg").click(function() {
     showitnow();
});



    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Notebook 3\projects\hbyo\resources\views/account/products.blade.php ENDPATH**/ ?>