<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css"  href="css/app.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/alert.css">
    <link href="images/favicon.png" rel="icon" type="image/png"> 
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<script>
    $(document).ready(function() {
      $('#togglePassword').click(function() {
        var passwordInput = $('#password');
        var type = passwordInput.attr('type');
        
        if (type === 'password') {
          passwordInput.attr('type', 'text');
          $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordInput.attr('type', 'password');
          $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        }
      });
    });
</script>
<?php $__env->stopPush(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="log-container">
        <div  class="logo" style="height: 100px";>
            
        </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>    
                </div>
                <div class="signin-form">
                    <div class="row p-2 justify-content-center " id="successMessage">
                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success warning-msg">
                            <i class="fa fa-close"></i>
                            <?php echo e(session()->get('success')); ?>

                        </div>
                        <?php endif; ?>

                    </div>
                    <h2 class="form-title">Login</h2>
                    <form method="POST" action="<?php echo e(route('login')); ?>" class="register-form" id="login-form">
                        <?php echo csrf_field(); ?>
                        
                        

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text"  id="email" placeholder="Your Email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            <div class="col-md-6">
                                <?php $__errorArgs = ['email'];
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
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input id="password" type="password" placeholder="Your Passowrd" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" autofocud>
                            <div class="col-md-6">
                            <?php $__errorArgs = ['password'];
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
unset($__errorArgs, $__bag); ?>
                            <i class="fas fa-eye eye-icon" id="togglePassword"></i>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-submit">
                                <?php echo e(__('Login')); ?>

                            </button>
                        </div>
                        <div class="form-group">
                            <?php if(Route::has('password.request')): ?>
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                     <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/auth/login.blade.php ENDPATH**/ ?>