
<?php $__env->startSection('title'); ?>
Danh sách ban quản lý
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content">
      <div class="wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Danh sách ban quản lý </h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="<?php echo e(URL::to('/admin/tieuchi')); ?>">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Dữ liệu</a> </li>
            <li class="breadcrumb-item active"> <strong>Danh sách ban quản lý</strong> </li>
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
                <h5>Tất cả ban quản lý </h5>
              </div>
              <div class="ibox-content collapse show">
                <div class="widgets-container">
                  <div >
                    <table id="example" class="table  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Tên ban quản lý</th>
                          
                          
                          <th>Sửa/Xóa</th>
                         
                        </tr>
                      </thead>
                      <?php $__currentLoopData = $donvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tbody>
                         <tr>
                          <td><?php echo e($ac->id); ?></td>
                          <td><?php echo e($ac->ten); ?></td>
                          
                          
                         
                          
                          <td>
                            <span class="sua" style="font-size: 22px"><a href="<?php echo e(URL::to('/admin/daotao'.'/'.$ac->id.'/edit')); ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></span>
                           
                            <span class="xoa" style="font-size: 22px"><a onclick="return confirm('Are you sure to delete?')" href="<?php echo e(URL::to('/delete-donvi/'.$ac->id)); ?>"><i class="fa fa-times" aria-hidden="true"></i></a></span>
                            
                          </td>
                        </tr>
                      </tbody>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                <!-- phan trang -->
                <div class="phantrang">
                
                  
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
<?php echo $__env->make('admin.layout.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/admin/education/all_donvi.blade.php ENDPATH**/ ?>