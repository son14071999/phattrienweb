
<?php $__env->startSection('content'); ?>
<style>
     #donvi {
        width: 130px;
    }
    #hoanthanh {
        width: 130px;
    }
</style>
    <div class="row">

        <div class="chitieu-select">
            <form method="post" action="<?php echo e(route('loc')); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <label for="tieuchi">Tiêu chí:</label>
                <select name="tieuchi" id="tieuchi" class="custom-select">
                    <?php if($select_tc=='all'): ?>
                        <option value="all" selected>Tổng</option>
                    <?php else: ?>
                        <option value="all">Tổng</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $tieuchi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($tc->ten==$select_tc): ?>
                            <option value="<?php echo e($tc->ten); ?>" selected><?php echo e($tc->ten); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($tc->ten); ?>"><?php echo e($tc->ten); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <label for="truong" class="lable-tieuchi">Trường:</label>
                <select name="truong" id="truong" class="custom-select">
                    <?php if($select_tr=='all'): ?>
                        <option value="all" selected>Tổng</option>
                    <?php else: ?>
                        <option value="all">Tổng</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $truong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($t->ten==$select_tr): ?>
                            <option value="<?php echo e($t->ten); ?>" selected><?php echo e($t->ten); ?></option>
                        <?php else: ?>
                                <option value="<?php echo e($t->ten); ?>"><?php echo e($t->ten); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>


                <label for="donvi" class="lable-tieuchi">Đơn vị:</label>
                <select name="donvi" id="donvi" class="custom-select">
                    <?php if($select_dv=='all'): ?>
                        <option value="all" selected>Tổng</option>
                    <?php else: ?>
                        <option value="all">Tổng</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($d->ten==$select_dv): ?>
                            <option value="<?php echo e($d->ten); ?>" selected><?php echo e($d->ten); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($d->ten); ?>"><?php echo e($d->ten); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>


                <label for="hoanthanh" class="lable-tieuchi">Hoàn thành:</label>
                <select name="hoanthanh" id="hoanthanh" class="custom-select">
                    <?php if($select_ht=='all'): ?>
                        <option value="all" selected>Tổng</option>
                    <?php else: ?>
                        <option value="all">Tổng</option>
                    <?php endif; ?>
                    <?php $__currentLoopData = $hoanThanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($t==$select_ht): ?>
                            <option value="<?php echo e($t); ?>" selected><?php echo e($t); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($t); ?>"><?php echo e($t); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>


                <button type="submit" class="btn btn-success">Lọc</button>
            </form>
        </div>


    </div>




    <table class="responstable">
        <thead>
        <tr>
            <th><span>Stt</span></th>
            <th><span>Tiêu chí</span></th>
            <th><span>Năm</span></th>
            <th><span>Hoàn thành</span></th>
            <th><span>Tổng</span></th>
            <th><span>Đơn vị</span></th>
            <th><span>Trường</span></th>
            <th><span>Phần trăm</span></th>
        </tr>
        </thead>
        <tbody>
        <?php for($i=0;$i<count($daihan);$i++): ?>
            <tr>
                <td><?php echo e($i + 1); ?></td>
                <td><?php echo e($daihan[$i]-> ma_tc); ?></td>
                <td><?php echo e($daihan[$i]->nam); ?></td>
                <td><?php echo e($daihan[$i]->xong); ?></td>
                <td><?php echo e($daihan[$i]->tong); ?></td>
                <td><?php echo e($daihan[$i]->don_vi); ?></td>
                <td><?php echo e($daihan[$i]->ma_truong); ?></td>
                <td><?php echo e($daihan[$i]->phantram); ?></td>

            </tr>
        <?php endfor; ?>

        </tbody>
    </table>
    <div class="paginate">
       
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/loctieuchi.blade.php ENDPATH**/ ?>