<?php $__env->startSection('title', 'Profile | '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Update Profile </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item"><a href="#"> Profile Update </a></li>
            </ul>
        </div>
        <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
        <div  class="col-md-6 offset-md-3">
                 <div class="tile">
                         <div class="col-lg-12">
                             <div>
                                 <div>
                                 <img width="60 px" class="app-sidebar__user-avatar"  src="<?php echo e(asset('images/user/'.Auth::user()->image)); ?>" alt="User Image">
                                    <p><span class="badge badge-dark"><?php echo e(Auth::user()->fullname); ?></span></p>
                                  </div>
                             </div>
                            <form action="<?php echo e(route('update_profile', Auth::user()->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                 <div class="form-group">
                                    <label for="Inputfname">First Name</label>
                                    <input value="<?php echo e(Auth::user()->f_name); ?>" name="f_name" class="form-control" id="Inputfname" type="text" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp"></small>
                                </div>
                                <div class="form-group">
                                    <label for="Inputlname">Last Name </label>
                                    <input value="<?php echo e(Auth::user()->l_name); ?>" name="l_name" class="form-control" id="Inputlname" type="text" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp"></small>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail1">Email address</label>
                                    <input value="<?php echo e(Auth::user()->email); ?>" name="email" class="form-control" id="InputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp"></small>
                                </div>

                                <!-- Password change section -->
                        <hr>
                        <h4>Password Change</h4>
                        <div class="form-group">
                            <label for="InputPassword">Current Password</label>
                            <input name="current_password" class="form-control" id="InputPassword" type="password" placeholder="Enter current password">
                        </div>
                        <div class="form-group">
                            <label for="InputNewPassword">New Password</label>
                            <input name="new_password" class="form-control" id="InputNewPassword" type="password" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <label for="InputConfirmPassword">Confirm New Password</label>
                            <input name="confirm_password" class="form-control" id="InputConfirmPassword" type="password" placeholder="Confirm new password">
                        </div>

                                <div class="form-group">
                                    <label  >Profile Picture</label>
                                    <input class="form-control" name="image"   type="file" >
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                     <div class="tile-footer">
                    </div>
             </div>
        </div>
     </main>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\SalesInvoice-Laravel\resources\views/profile/edit_profile.blade.php ENDPATH**/ ?>