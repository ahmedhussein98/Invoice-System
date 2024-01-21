<?php $__env->startSection('title', 'Invoice | '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
                <p>A Printable Invoice Format</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Invoice</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <section class="invoice">
                        <div class="row mb-4">
                            <div class="col-6">
                                <h2 class="page-header"><i class="fa fa-file"></i> I M S</h2>
                            </div>
                            <div class="col-6">
                                <h5 class="text-right">Date: <?php echo e($invoice->created_at->format('Y-m-d')); ?></h5>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-4">From
                                <address><strong>CodeAstro</strong><br>Aupool,<br>Westworth11<br>codeastro.com</address>
                            </div>
                            <div class="col-4">To
                                 <address><strong><?php echo e($invoice->customer->name); ?></strong><br><?php echo e($invoice->customer->address); ?><br>Phone: <?php echo e($invoice->customer->mobile); ?><br>Email: <?php echo e($invoice->customer->email); ?></address>
                             </div>
                            <div class="col-4"><b>Invoice #<?php echo e(1000+$invoice->id); ?></b><br><br><b>Order ID:</b> 4F3S8J<br><b>Payment Due:</b> <?php echo e($invoice->created_at->format('Y-m-d')); ?><br><b>Account:</b> 000-12345</div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Amount</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                    <div style="display: none">
                                        <?php echo e($total=0); ?>

                                    </div>
                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($sale->product->name); ?></td>
                                        <td><?php echo e($sale->qty); ?></td>
                                        <td><?php echo e($sale->price); ?></td>
                                        <td><?php echo e($sale->dis); ?>%</td>
                                        <td><?php echo e($sale->amount); ?></td>
                                        <div style="display: none">
                                            <?php echo e($total +=$sale->amount); ?>

                                        </div>
                                     </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Total</b></td>
                                        <td><b class="total"><?php echo e($total); ?></b></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row d-print-none mt-2">
                            <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:void(0);" onclick="printInvoice();"><i class="fa fa-print"></i> Print</a></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>


    <script>
    function printInvoice() {
        window.print();
    }
    </script>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\SalesERP-Laravel\resources\views/invoice/show.blade.php ENDPATH**/ ?>