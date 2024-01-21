<?php $__env->startSection('titel', 'Sales | '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Sales Table</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Sales</li>
                <li class="breadcrumb-item active"><a href="#">Sales Table</a></li>
            </ul>
        </div>
        <div class="">
            <a class="btn btn-primary" href="<?php echo e(route('invoice.create')); ?>"><i class="fa fa-plus"></i> Create New Invoice</a>
        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Product </th>
                                <th>Qty </th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Date </th>
                            </tr>
                            </thead>
                            <tbody>
            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sale->product->name); ?></td>
                    <td><?php echo e($sale->qty); ?></td>
                    <td><?php echo e($sale->price); ?></td>
                    <td><?php echo e($sale->amount); ?></td>
                    <td><?php echo e($sale->created_at); ?></td>
                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\SalesInvoice-Laravel\resources\views/sales/index.blade.php ENDPATH**/ ?>