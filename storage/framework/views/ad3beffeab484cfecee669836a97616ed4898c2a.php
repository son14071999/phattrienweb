
<?php $__env->startSection('title'); ?>
Tất cả tiêu chí
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Danh sách tiêu chí dài hạn </h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/tieuchi')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Dữ liệu</a> </li>
            <li class="breadcrumb-item active"> <strong>Danh sách tiêu chí</strong> </li>
            <li class="breadcrumb-item active"> <strong>
                    <?php
                                $massage = Session::get('massage');
                                if(!empty($massage)){
                                    echo '<span class="text-align"><h50 text-align="center" color="red">'.$massage.'</h50></span>';
                                    Session::put('massage', null);
                                }
                            ?>
            </strong></li>
          </ol>
        </div>
        <div class="col-lg-12"> </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Tất cả tiêu chí </h5>
              </div>
              <div class="ibox-content collapse show">
                <div class="widgets-container">
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Tiêu Chí</th>
                          <th >Mô tả</th>
                          <th>Năm</th>
                          <th>Hoàn Thành</th>
                          <th>Tổng</th>
                          <th>Đơn Vị</th>
                          <th>Trường</th>
                          <th>Sửa/Ngắn Hạn</th>
                         
                        </tr>
                      </thead>
                      <?php $__currentLoopData = $tieuchi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                         <tr>
                          <td><?php echo e($tc->id_tieuchi); ?></td>
                          <td><?php echo e($tc->tentieuchi); ?></td>
                          <td><?php echo e($tc->mota); ?></td>
                          <td><?php echo e($tc->nam); ?></td>
                          <td><?php echo e($tc->xong); ?></td>
                          <td><?php echo e($tc->tong); ?></td>
                          <td><?php echo e($tc->tendonvi); ?></td>
                          <td><?php echo e($tc->tentruong); ?></td>
                         
                          
                          <td>
                            <span class="sua" style="font-size: 22px"><a href="<?php echo e(URL::to('/admin/showtc'.'/'.$tc->id_tieuchi .'/'.$tc->id_daihan)); ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></span>
                           
                            
                            <span class="nganhan" style="font-size: 22px"><a  href="<?php echo e(URL::to('/admin/tieuchi'.'/'.$tc->id_daihan)); ?>"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                          </td>
                        </tr>
                      </tbody>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                <!-- phan trang -->
                <div class="phantrang">
               
                <?php echo e($tieuchi->links()); ?>

                             
                
                  
                </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      
        
      
       
        
      </div>
      
<!-- start footer -->
      <div class="footer">
        <div class="pull-right">
         
        </div>
        <div> <strong>Copyright</strong> Ademin &copy; 2020 </div>
      </div>
    
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/admin/tieuchi/all_tieuchi.blade.php ENDPATH**/ ?>