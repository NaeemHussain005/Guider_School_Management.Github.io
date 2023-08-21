

<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('asset/css/style.css')); ?>">
    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="">
    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">

        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

<h1>Applicants</h1>


<table class="table">
    <thead>
              <tr class="filters">
                            <tr  class="filters">
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="S.No" disabled></th> 
                  <th style="font-size:9px";><input  style="font-size:12px"; type="text" class="form-control" placeholder="Name" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Father Name" disabled></th>
                  <th style="font-size:9px";><input  style="font-size:12px"; type="text" class="form-control" placeholder="Date Of Birth" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Phone No" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Address" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Gender" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="CNIC No" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Degree" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Passing-Year" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Board" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Obtained Marks" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Total Marks" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="School Name" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="CV(FILE)" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Result(file)" disabled></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($data->id); ?></td>   
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->father_name); ?></td>
                   <td><?php echo e(date('d-m-Y', strtotime($data->dob))); ?>

                    <td><?php echo e($data->phone_no); ?></td>
                    <td><?php echo e($data->address); ?></td>
                    <td><?php echo e($data->gender); ?></td>
                    <td><?php echo e($data->cnic_no); ?></td>
                    <td><?php echo e($data->degree); ?></td>
                    <td><?php echo e($data->passing_year); ?></td>
                    <td><?php echo e($data->board); ?></td>
                    <td><?php echo e($data->obtained_marks); ?></td>
                    <td><?php echo e($data->total_marks); ?></td>
                    <td><?php echo e($data->school_name); ?></td>
                    <td><a href="<?php echo e(url('/view',$data->id)); ?>"><span class="cv-link-icon">&#128065;</span></a>
                    <a href="<?php echo e(url('download', ['file' => $data->cv_file])); ?>"><span class="cv-link-icon">&#128229;</span></a>
                    <td><a href="<?php echo e(url('/viewfile',$data->id)); ?>"><span class="cv-link-icon">&#128065;</span></a>
                    <a href="<?php echo e(url('downloadresult', ['file' => $data->result_file])); ?>"><span class="cv-link-icon">&#128229;</span></a></td> 
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
    <br>
    <a href="<?php echo e(route('admissions')); ?>" >Back</a>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/applicants.blade.php ENDPATH**/ ?>