

<?php $__env->startSection('content'); ?>


    <div>Kết quả tìm kiếm cho:"<b><?php echo e($search); ?></b>"</div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>stt</th>
            <th>Tiêu chí</th>
            <th>Mô tả</th>
            <th>Năm</th>
            <th>Hoàn thành</th>
            <th>Tổng</th>
            <th>Đơn vị</th>
            <th>Trường</th>
        </tr>
        </thead>
        <tbody>
        <?php for($i=0;$i<count($nganhan);$i++): ?>
            <tr>
                <td><?php echo e($i + 1); ?></td>
                <td><?php echo $nganhan[$i]-> tieuchi; ?></td>
                <td><?php echo $nganhan[$i]->mota; ?></td>
                <td><?php echo $nganhan[$i]->nam; ?></td>
                <td><?php echo $nganhan[$i]->xong; ?></td>
                <td><?php echo $nganhan[$i]->tong; ?></td>
                <td><?php echo $nganhan[$i]->donvi; ?></td>
                <td><?php echo $nganhan[$i]->truong; ?></td>
            </tr>
        <?php endfor; ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/search.blade.php ENDPATH**/ ?>