<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Password Change </h1>
                <p>Bootstrap default form components</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item"><a href="#"> Password Change </a></li>
            </ul>
        </div>
        <div  class="col-md-6 offset-md-3">
                 <div class="tile">
                         <div class="col-lg-12">
                             <div>
                                 <div>
                                 <img width="60 px" class="app-sidebar__user-avatar"  src="<?php echo e(asset('images/user/'.Auth::user()->image)); ?>" alt="User Image">
                                    <p><span class="badge badge-dark"><?php echo e(Auth::user()->fullname); ?></span></p>
                                  </div>
                             </div>
                             <form method="POST" action="<?php echo e(route('password.update')); ?>">
                                 <?php echo csrf_field(); ?>

                                 <input type="hidden" name="token" value="<?php echo e($token); ?>">

                                 <div class="form-group row">
                                     <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                                     <div class="col-md-6">
                                         <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus>

                                         <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                         <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                         <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                     </div>
                                 </div>

                                 <div class="form-group row">
                                     <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                                     <div class="col-md-6">
                                         <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                         <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                         <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                         <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                     </div>
                                 </div>

                                 <div class="form-group row">
                                     <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                                     <div class="col-md-6">
                                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                     </div>
                                 </div>

                                 <div class="form-group row mb-0">
                                     <div class="col-md-6 offset-md-4">
                                         <button type="submit" class="btn btn-primary">
                                             <?php echo e(__('Reset Password')); ?>

                                         </button>
                                     </div>
                                 </div>
                             </form>
                        </div>
                     <div class="tile-footer">
                    </div>
             </div>
        </div>
     </main>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\SalesERP-Laravel\resources\views/profile/password.blade.php ENDPATH**/ ?>