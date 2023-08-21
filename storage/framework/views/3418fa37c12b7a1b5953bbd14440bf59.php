
<?php $__env->startPush('styles'); ?>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/dashboardstyles.css" rel="stylesheet" />
    
    
    <link href="images/favicon.png" rel="icon" type="image/png"> 
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div id="layoutSidenav_content">
    <main class="container">
        
            <h1 class="mt-4">User Management</h1>
            <div class="pull-right">
               
                
            </div>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            
                <div class="card-body">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th width="200px">No</th>
                                    <th width="150px">Name</th>
                                    <th width="150px">Email</th>
                                    <th width="150px">Roles</th>
                                    <th width="280px">Action</th>
                                    
                                </tr>
                            </thead>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>user</td>
                                    
                                    <td>
                                        <a href = 'delete/<?php echo e($user->id); ?>'>Delete</a>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </table>
                    </div>
                </div>
                
               <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('home')); ?>"> Back</a>
                </div> 
    </main>
   
</div>
<?php $__env->stopSection(); ?>
                                        

                                 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/users.blade.php ENDPATH**/ ?>