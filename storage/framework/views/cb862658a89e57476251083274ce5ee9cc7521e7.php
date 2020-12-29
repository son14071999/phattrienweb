
<?php $__env->startSection('content'); ?>
<style>
    @media (min-width: 768px) {
        .modal-xl {
            width: 90%;
            max-width: 1200px;
        }
    }

    .container-banquanly form {
        display: flex;
        justify-content: center;
        padding: 1rem 1rem;
    }

    .main-banquanly {
        padding: 0 2rem 0 1rem;
    }

    .main-nam {
        padding: 0 0.5rem 0 1rem;
    }

    .error-bd {
        text-align: center;
        color: red;
        font-family: 'roboto';
        font-size: 18px;
    }

    .main-lable-chart p {
        text-align: center;
        color: blue;
        font-family: 'roboto';
        font-size: 20px;
    }

    .btn-showchitiet {
        text-align: center;
        padding: 0.5rem 0 1rem 0;
    }

    .btn-showchitiet button {
        width: 130px;
    }

    .danhgia-kq-main {
        padding-top: 2rem;
    }

    .label-danh-gia-ket-qua-ban-phu-trach {
        padding: 2rem 1rem 1rem 2rem;

    }

    .label-danh-gia-ket-qua-ban-phu-trach span {
        text-align: center;
        font-family: 'roboto';
        font-size: 18px;
    }



    button.close.btn-close-modal {
        width: 80px;
    }

    label.demo-modal {
        font-size: 17px;
        font-family: cursive;
    }
    .opt-hidden {
        display:none;
    }
</style>
<div class="container-banquanly">
    <form action="">
        <div class="main-banquanly">
            <label for="banquanly" style="font-family: roboto; font-size: 18px;">Ban quản lý: </label>
            <select name="banquanly" id="banquanly" class="custom-select">
                <option value="-2" class="opt-hidden1"></option>
                <?php $__currentLoopData = $banquanly; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bql): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bql->id); ?>"><?php echo e($bql->ten); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>
        <div class="main-nam">
            <label for="nam" style="font-family: roboto; font-size: 18px;">Năm: </label>
            <select name="nam" id="nam" class="custom-select">
                <option value="-2" class="opt-hidden2"></option>
                <?php for($i = $nammin-5; $i < $nammax; $i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>

            </select>
        </div>
        <button class="btn-chon btn btn-success">chon</button>
    </form>
    <p class="error-bd"></p>
    <div class="main-chart-tk">
        <!-- <div class="main-lable-chart">
            <p style="color: blue;">Bieu do thong ke ke hoach hanh thanh tieu chi do ban quan ly nam 2020</p>
        </div> -->
        <!-- <canvas class="charttk" id="myChart" width="auto" height="160" style="padding-left: 20px;"></canvas>
            <canvas class="charttk" id="myChart1" width="auto" height="160" style="padding-left: 20px;"></canvas> -->
        <!-- <table class="responstable">
                    <thead>
                        <tr>
                            <th>Ten truong</th>
                            <th>Muc tieu nam nam</th>
                            <th>Tich luy den nam</th>
                            <th> muc tieu trong nam</th>
                            <th>thuc te trong nam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>hus</td>
                            <td>100%</td>
                            <td>("20"/"100") 20%</td>
                            <td>("20"/"100") 20%</td>
                            <td>("20"/"100") 20%</td>
                        </tr>
                        
                    </tbody>
              
            </table> -->

    </div>
    <div class="danhgia-kq">
        <!-- <span style="color: red;">Tong ket : neu vuot chi tieu 4 diem, dat 3 diem, khong dat 2 diem va cac kha nang khac 1 diem</span> -->
        <!-- <table class="responstable">
                    <thead>
                        <tr>
                            <th>Ten truong</th>
                            <th>Muc tieu nam nam</th>
                            <th>Tich luy den nam</th>
                            <th> muc tieu trong nam</th>
                            <th>thuc te trong nam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>hus</td>
                            <td>100%</td>
                            <td>("20"/"100") 20%</td>
                            <td>("20"/"100") 20%</td>
                            <td>("20"/"100") 20%</td>
                        </tr>
                        
                    </tbody>
              
            </table> -->
    </div>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Open Modal</button>

 
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
    
    
      <div class="modal-content">
        <div class="modal-header">
            <label>Chi tiet tieu chi</label>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table class="responstable">
                    <thead>
                        <tr>
                            <th>Ten truong</th>
                            <th>Muc tieu nam nam</th>
                            <th>Tich luy den nam</th>
                            <th> muc tieu trong nam</th>
                            <th>thuc te trong nam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>hus</td>
                            <td>100%</td>
                            <td>("20"/"100") 20%</td>
                            <td>("20"/"100") 20%</td>
                            <td>("20"/"100") 20%</td>
                        </tr>
                        
                    </tbody>
              
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> -->

</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script>


</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let btn = document.querySelector('.btn-chon');
    let error = document.querySelector('.error-bd');
    let banquanly = document.querySelector('#banquanly');
    let nam = document.querySelector('#nam');
    let mainchart = document.querySelector('.main-chart-tk');
    let danhgiaketqua = document.querySelector('.danhgia-kq');
    nam.addEventListener('click', function(){
        document.querySelector('.opt-hidden2').classList.add('opt-hidden');
    });
    banquanly.addEventListener('click', function(){
        document.querySelector('.opt-hidden1').classList.add('opt-hidden');
    });
    



    btn.addEventListener('click', function (e) {
        e.preventDefault();
        if (banquanly.value == -2 && nam.value == -2) {
            error.innerHTML = "Vui lòng chọn ban quản lý và năm";
            return;
        }
        if (banquanly.value == -2) {
            error.innerHTML = "Vui lòng chọn ban quản lý";
            return;
        }
        if (nam.value == -2) {
            error.innerHTML = "Vui lòng chọn năm";
            return;
        }

        error.innerHTML = "";

        $.ajax({
            url: "<?php echo e(route('thongketheobanphutrach')); ?>",
            type: 'POST',
            dataType: 'json',
            data: {
                nam: nam.value,
                banquanly: banquanly.value

            }
        }).done(function (ketqua) {
            //console.log(ketqua)
            let arrtentieuchi = ketqua[0];
            let arrdaihan = ketqua[1];
            let arrnganhan = ketqua[2];
            let arrtichluy = ketqua[3];
            let arrtruong = ketqua[4];
            let label1 = [];
            //console.log(arrtichluy[0])
            let namClick = nam.value;
            let sodunam = parseInt(namClick) % 10;
            if (sodunam > 4) {
                sodunam = sodunam - 5;
            }
            let arrlength = arrtentieuchi.length;
            let arrdaihanlength = arrdaihan[0].length;

            let showchart = document.querySelectorAll('.showchart-tk');
            let btn_showchart_chitiet = document.querySelectorAll('.btn-showchitiet');
            for (let i = 0; i < showchart.length; i++) {
                showchart[i].remove();
                btn_showchart_chitiet[i].remove();
            }
            if (document.querySelector('.main-lable-chart')) {
                document.querySelector('.main-lable-chart').remove();
            }
            if (document.querySelector('.danhgia-kq-main')) {
                document.querySelector('.danhgia-kq-main').remove();
            }


            let lable_main = document.createElement('div');
            lable_main.classList.add('main-lable-chart');
            lable_main.innerHTML = `<p >Biểu đồ thống kê mức độ thực hiện tiêu chí năm ${namClick} do ban quản lý: ${banquanly.options[banquanly.selectedIndex].text} phụ trách</p>`;

            mainchart.appendChild(lable_main);
            let arrayDanhGiaNhanXet = [];
            for (let i = 0; i < arrlength; i++) {
                let strxau = "myChart" + i;
                let arrDiemDanhGia = [];
                let tongdh = [];
                let tongnh = [];
                let xongnh = [];
                let label = [];
                let char123 = document.createElement('div');
                char123.classList.add('showchart-tk')
                char123.innerHTML = `<canvas id="${strxau}" width="550" height="130" style="padding-left: 20px;"></canvas>`;
                mainchart.appendChild(char123);
                let ctx = document.getElementById(strxau);
                for (let j = 0; j < arrdaihanlength; j++) {

                    tongnh.push(arrnganhan[i][j].tong);
                    tongdh.push(arrdaihan[i][j].tong);
                    //label.push(arrdaihan[i][j].ma_truong);
                    label.push(arrtruong[j].ten);
                    xongnh.push(arrnganhan[i][j].xong);
                }
                label1 = label;
                aDatasets1 = tongdh;
                aDatasets2 = arrtichluy[i];
                aDatasets3 = tongnh
                aDatasets4 = xongnh
                //console.log(aDatasets1, 'data1')
                //console.log(aDatasets2, 'data2')
                //console.log(aDatasets3, 'data3')
                //console.log(aDatasets4, 'data4')

                let myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,

                        datasets: [{
                            label: 'Tổng cộng 5 năm',
                            fill: false,
                            data: aDatasets1,
                            backgroundColor: '#E91E63',
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(255,99,132,1)',

                            ],
                            borderWidth: 1
                        },
                        {
                            label: 'Tích lũy cho đến năm hiện tại',
                            fill: false,
                            data: aDatasets2,
                            backgroundColor: '#64FE2E',
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(255,99,132,1)',

                            ],
                            borderWidth: 1
                        },

                        {
                            label: 'Mục tiêu trong năm',
                            fill: false,
                            data: aDatasets3,
                            backgroundColor:
                                '#3F51B5'
                            ,
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(255,99,132,1)',

                            ],
                            borderWidth: 1
                        },
                        {
                            label: 'Thực tế trong năm',
                            fill: false,
                            data: aDatasets4,
                            backgroundColor:
                                '#2EFEF7'
                            ,
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(255,99,132,1)',

                            ],
                            borderWidth: 1
                        },



                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Biểu đồ: Thống kê kế hoạch hoàn thành chỉ tiêu : ' + arrtentieuchi[i] + ' năm ' + namClick
                        },
                        responsive: true,

                        tooltips: {
                            callbacks: {
                                labelColor: function (tooltipItem, chart) {
                                    return {
                                        borderColor: 'rgb(255, 0, 20)',
                                        backgroundColor: 'rgb(255,20, 0)'
                                    }
                                }
                            }
                        },
                        legend: {
                            labels: {
                                // This more specific font property overrides the global property
                                fontColor: 'red',

                            }
                        }
                    }
                });
                // let table_nx = document.createElement('table');
                // table_nx.classList.add('responstable');
                let stringfor = "";
                for (let i = 0; i < label.length; i++) {
                    let tldn = Math.round(aDatasets2[i] / aDatasets1[i] * 100 * 100) / 100;
                    let mttn = Math.round(aDatasets3[i] / aDatasets1[i] * 100 * 100) / 100;
                    let tttn = Math.round(aDatasets4[i] / aDatasets3[i] * 100 * 100) / 100;
                    let ketquadanhgia = "";
                    let scoreDanhGia = 0;
                    if (sodunam == 4) {
                        if (tttn >= 100) {
                            ketquadanhgia = "Tốt vượt dự kiến"
                            scoreDanhGia = 4;
                        } else if (tttn >= 95 && tttn < 100) {
                            ketquadanhgia = "Đạt"
                            scoreDanhGia = 3;
                        } else if (tttn >= 80 && tttn < 95) {
                            ketquadanhgia = "Khá cần cố gắng hơn nữa vào nhưng năm sau"
                            scoreDanhGia = 2;
                        } else {
                            ketquadanhgia = "Không hoàn thành chỉ tiêu"
                            scoreDanhGia = 1;
                        }
                    } else {
                        if (tttn >= 100) {
                            ketquadanhgia = "Tốt vượt dự kiến"
                            scoreDanhGia = 4;
                        } else if (tttn >= 95 && tttn < 100) {
                            ketquadanhgia = "Đạt"
                            scoreDanhGia = 3;
                        } else if (tttn >= 80 && tttn < 95) {
                            ketquadanhgia = "Khá cố gắng hơn nữa vào những năm sau"
                            scoreDanhGia = 2;
                        } else {
                            ketquadanhgia = "Khả năng cao không hoàn thành chỉ tiêu đặt ra"
                            scoreDanhGia = 1;
                        }
                    }

                    arrDiemDanhGia.push(scoreDanhGia);

                    stringfor += "<tr><td>" + label[i] + "</td><td>100%</td><td>(" + aDatasets2[i] + "/" + aDatasets1[i] + ") = " + tldn + "%</td><td>(" + aDatasets3[i] + "/" + aDatasets1[i] + ") = " + mttn + "%</td><td>(" + aDatasets4[i] + "/" + aDatasets3[i] + ") =  " + tttn + "%</td><td>" + ketquadanhgia + "</td></tr>";
                }
                arrayDanhGiaNhanXet.push(arrDiemDanhGia);

                // table_nx.innerHTML = `
                //     <thead>
                //         <tr>
                //             <th>Ten truong</th>
                //             <th>Muc tieu nam nam</th>
                //             <th>Tich luy den nam</th>
                //             <th> muc tieu trong nam</th>
                //             <th>thuc te trong nam</th>
                //             <th>ket qua</th>
                //         </tr>
                //     </thead>
                //     <tbody>

                //         `+ stringfor +
                //     `


                //     </tbody>
                // `;
                //mainchart.appendChild(table_nx)
                let btn_chitiet = document.createElement('div');
                btn_chitiet.classList.add('btn-showchitiet')
                btn_chitiet.innerHTML = `
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal${arrtentieuchi[i]}">Hiển thị chi tiết</button>


                    <div class="modal fade" id="myModal${arrtentieuchi[i]}" role="dialog">
                    <div class="modal-dialog modal-xl">
                    
                       
                        <div class="modal-content">
                        <div class="modal-header">
                            <label class="demo-modal">Chi tiết tiêu chí: ${arrtentieuchi[i]} năm ${namClick}</label>
                            <button type="button" class="close btn-close-modal" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table class="responstable">
                                    <thead>
                                        <tr>
                                            <th>Tên trường</th>
                                            <th>Mục tiêu 5 năm</th>
                                            <th>Tích lũy đến năm chọn</th>
                                            <th>Mục tiêu năm chọn</th>
                                            <th>Kết quả đạt được</th>
                                            <th>Đánh giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        `+ stringfor + `
                                        
                                    </tbody>
                                
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        
                    </div>
                    </div>`
                mainchart.appendChild(btn_chitiet);

            }



            //console.log(arrayDanhGiaNhanXet)
            let danhgiaketquamain = document.createElement('div');
            danhgiaketquamain.classList.add('danhgia-kq-main');
            let labelDanhGiaKetQua = document.createElement('span');
            labelDanhGiaKetQua.classList.add("label-danh-gia-ket-qua-ban-phu-trach");
            labelDanhGiaKetQua.innerHTML = ` <span style="color: red;">Tổng kết bảng so sánh giữa các trường do ban quản lý: ${banquanly.options[banquanly.selectedIndex].text} phụ trách trong năm ${namClick} ( Điểm được tính là 4 điểm cho vượt chỉ tiêu lớn hơn 100%, 3 điểm cho đạt từ 95% đến 100%, 2 điểm cho khá 80% đến 95%, và còn lại là 1 điểm.)</span>`;
            danhgiaketquamain.appendChild(labelDanhGiaKetQua);
            let bangTongKetDanhGiaKetQua = document.createElement('table');
            bangTongKetDanhGiaKetQua.classList.add('responstable');
            let strTongKetQuaDanhGia = "";
            let arrayTinhLaiDiemTungTieuChi = [];

            for (let i = 0; i < 7; i++) {
                let diemTC = []
                for (let j = 0; j < arrayDanhGiaNhanXet.length; j++) {
                    diemTC.push(arrayDanhGiaNhanXet[j][i]);
                }
                arrayTinhLaiDiemTungTieuChi.push(diemTC);

            }



            //console.log(arrayTinhLaiDiemTungTieuChi)
            //let label1 = ["hus", "ueb", "ued", "uet", "ulis", "ussh", "vju"];
            let arrTongScore = [];
            let arrDanhGiaKhachQuan = [];
            for (let i = 0; i < arrayTinhLaiDiemTungTieuChi.length; i++) {
                let tongScore = 0;
                let strTongKetQua = "";
                let strInkq = "";
                for (let j = 0; j < arrayTinhLaiDiemTungTieuChi[i].length; j++) {
                    tongScore += arrayTinhLaiDiemTungTieuChi[i][j];
                    strTongKetQua += arrayTinhLaiDiemTungTieuChi[i][j] + " điểm cho tiêu chí " + arrtentieuchi[j] + ", ";

                }
                arrTongScore.push(tongScore);
                arrDanhGiaKhachQuan.push(strTongKetQua);


            }
            //console.log(arrTongScore)
            //console.log(label1)
            for (let i = 0; i < arrTongScore.length - 1; i++) {
                for (let j = i + 1; j < arrTongScore.length; j++) {
                    if (parseInt(arrTongScore[i]) < parseInt(arrTongScore[j])) {
                        let k = arrTongScore[i];
                        arrTongScore[i] = arrTongScore[j];
                        arrTongScore[j] = k;
                        let m = label1[i];
                        label1[i] = label1[j];
                        label1[j] = m;
                        let l = arrDanhGiaKhachQuan[i];
                        arrDanhGiaKhachQuan[i] = arrDanhGiaKhachQuan[j];
                        arrDanhGiaKhachQuan[j] = l;

                    }
                }
            }
            for (let i = 0; i < arrTongScore.length; i++) {
                strTongKetQuaDanhGia += "<tr><td>" + label1[i] + "</td><td>" + arrTongScore[i] + "</td><td>" + arrDanhGiaKhachQuan[i] + "</td></tr>";
            }

            bangTongKetDanhGiaKetQua.innerHTML = `
                    <thead>
                        <tr>
                            <th>Tên trường</th>
                            <th>Điểm</th>
                            <th>Tổng kết</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        `+ strTongKetQuaDanhGia +
                `
                       
                     
                    </tbody>
                `;
            danhgiaketquamain.appendChild(bangTongKetDanhGiaKetQua);
            danhgiaketqua.appendChild(danhgiaketquamain);

        });

    });







</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/chart/thongkebanphutrach.blade.php ENDPATH**/ ?>