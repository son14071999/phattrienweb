@extends('index')
@section('content')
<html lang="en">
    <header>
        <style>
            .content {
                text-align: left;
                padding: 0px 25px;
            }
            .gioithieu-trai {
                background: gray;
            }
            .gioithieu-phai {
                background: gray;
            }
            h5 {
                color: red;
            }
            .image-gioithieu {
                padding: 20px 30px;
            }
            h6 {
                font-size: 12px;
                text-align: center;
                padding: 0px 38px 20px 38px;
            }
            .so-do {
                margin-left: 200px;
            }
            h2 {
                font-size: 15px;
            }
            p {
              color: black;
                font-size: 13px;
            }
        </style>
    </header>
    <body>
    <div class="gioithieu">
        <table border="0" width="100%">
            <tr>
                <th width="25%" class="gioithieu-trai"></th>
                <td class="content">
                    </br>
                    <p>
                    <h5>LỊCH SỬ HÌNH THÀNH VÀ PHÁT TRIỂN</h5></br></br>
                    <p>Đại học Quốc gia Hà Nội (ĐHQGHN - tên giao dịch bằng tiếng Anh: Vietnam National University, Hanoi; viết tắt là VNU) là  trung tâm đào tạo, nghiên cứu khoa học, chuyển giao tri thức và công nghệ đa ngành, đa lĩnh vực, chất lượng cao; ngang tầm khu vực, dần đạt trình độ quốc tế; đáp ứng yêu cầu phát triển của đất nước, phù hợp với xu hướng phát triển giáo dục đại học tiên tiến.
                    </p>

                    <p>
                        ĐHQGHN có 3 cấp quản lý hành chính:
                    </p>

                    <p>
                        1) ĐHQGHN là đầu mối được Chính phủ giao các chỉ tiêu, kế hoạch hàng năm; có tư cách pháp nhân, có con dấu mang hình Quốc huy. Giám đốc và các Phó Giám đốc ĐHQGHN do Thủ tướng Chính phủ bổ nhiệm, miễn nhiệm.
                    </p>

                    <p>
                        2) Các trường đại học, viện nghiên cứu khoa học thành viên; các khoa, trung tâm đào tạo, nghiên cứu khoa học và công nghệ; các đơn vị phục vụ công tác đào tạo, nghiên cứu khoa học trực thuộc ĐHQGHN là các đơn vị cơ sở có tư cách pháp nhân, có con dấu và tài khoản riêng.
                    </p>

                    <p>
                        3) Các khoa, phòng nghiên cứu và tương đương thuộc trường đại học, viện nghiên cứu khoa học thành viên và các đơn vị trực thuộc.
                    </p>

                    <p>
                        ĐHQGHN hoạt động theo cơ chế tự chủ, tự chịu trách nhiệm cao; được làm việc trực tiếp với các Bộ, cơ quan ngang Bộ, cơ quan thuộc Chính phủ, Ủy ban nhân dân tỉnh, thành phố trực thuộc Trung ương về những vấn đề liên quan đến hoạt động và phát triển của ĐHQGHN. Các trường đại học, viện nghiên cứu khoa học thành viên thuộc ĐHQGHN là những cơ sở đào tạo, nghiên cứu khoa học và công nghệ có quyền tự chủ cao, có pháp nhân như các trường đại học, viện nghiên cứu khoa học khác được quy định trong Luật Giáo dục, Luật Giáo dục đại học và Luật Khoa học - Công nghệ.</p>
                    </p>
                    <img class="image-gioithieu" src="{{asset('images/gioithieu/nam_1956.PNG')}}"/>
                    <h6><i>Tòa nhà trụ sở của Đại học Đông Dương tại 19 phố Lê Thánh Tông, Quận Hoàn Kiếm, thành phố Hà Nội được thành lập từ năm 1906 nay là Đại học Học Quốc gia Hà Nội</i></h6>
                    <h5>Những mốc lịch sử quan trọng của ĐHQGHN</h5>
                    <h2><b><i>Năm 1906</i></b></h2>
                    <p>
                        Đại học Đông Dương được thành lập theo Quyết định số 1514a ngày 16/5/1906 của Toàn quyền Đông Dương, đặt trụ sở tại số 19 phố Lê Thánh Tông, quận Hoàn Kiếm, thành phố Hà Nội (thời Pháp thuộc là phố Boulevard Bobillot).</p>
                    </p>
                    <img class="image-gioithieu" src="{{asset('images/gioithieu/nam_1906.PNG')}}"/>
                    <h6><i>
                            Toàn cảnh của Đại học Đông Dương được chụp từ máy bay (hình ảnh hồi đầu thế kỷ XX)
                        </i></h6>
                    <h2><b><i>Năm 1945</i></b></h2>
                    <p>
                        Trên cơ sở Đại học Đông Dương, Trường Đại học Quốc gia Việt Nam được thành lập, khai giảng khoá đầu tiên vào ngày 15/11/1945 dưới sự chủ toạ của Chủ tịch Hồ Chí Minh. Đây là trường đại học đa ngành, đa lĩnh vực đầu tiên được thành lập dưới chính thể Việt Nam Dân chủ Cộng hoà. Trụ sở của Trường vẫn đặt tại số 19 phố Lê Thánh Tông, Hà Nội.
                    </p>
                    <h2><b><i>Năm 1951</i></b></h2>
                    <p>
                        Nhà nước ta thành lập Trường Khoa học Cơ bản (tại Chiến khu Việt Bắc). Đây là một trong những Trường tiền thân của Trường Đại học Tổng hợp Hà Nội sau này.
                    </p>
                    <h2><b><i>Năm 1956</i></b></h2>
                    <p>
                        Theo Quyết định số 2183/TC ngày 04/6/1956 của Chính phủ, Trường Đại học Tổng hợp Hà Nội và Trường Đại học Sư phạm Hà Nội được thành lập.
                        Trường Đại học Tổng hợp Hà Nội (ĐHTH) là trường đại học khoa học cơ bản (khoa học tự nhiên và khoa học xã hội & nhân văn) đầu tiên ở miền Bắc sau hoà bình lập lại. Trường ĐHTH Hà Nội trực tiếp kế thừa truyền thống và cơ sở vật chất, kỹ thuật của Đại học Đông Dương (1906), Trường Đại học Quốc gia Việt Nam (1945) và Trường Khoa học Cơ bản (1951).
                        Trong Trường Đại học Sư phạm Hà Nội có Khoa Ngoại ngữ, sau này phát triển thành Trường Đại học Sư phạm Ngoại ngữ Hà Nội.
                    </p>
                    <img class="image-gioithieu" src="{{asset('images/gioithieu/nam_1956_2.PNG')}}"/>
                    <h6><i>Tòa nhà Đại học Học Quốc gia Hà Nội tại 19 phố Lê Thánh Tông,
                            Quận Hoàn Kiếm, Hà Nội ngày nay.
                        </i></h6>
                    <h2><b><i>Năm 1967</i></b></h2>
                    <p>
                        Trường Đại học Sư phạm Ngoại ngữ Hà Nội được thành lập trên cơ sở Khoa Ngoại ngữ của Trường Đại học Sư phạm Hà Nội.
                    </p>
                    <h2><b><i>Năm 1993 - 2000</i></b></h2>
                    <p>
                        Với tầm nhìn chiến lược, Đảng và Nhà nước ta đã xác định giáo dục và khoa học - công nghệ là quốc sách hàng đầu. Theo phương châm đó, ngày 14/01/1993, Hội nghị lần thứ tư Ban chấp hành Trung ương Đảng Cộng sản Việt Nam (Khóa VII) đã ra Nghị quyết, trong đó chỉ rõ nhiệm vụ “xây dựng một số trường đại học trọng điểm quốc gia” để làm đầu tầu và nòng cột cho giáo dục đại học nước nhà. Đại học Quốc gia Hà Nội (ĐHQGHN) được thành lập với vai trò và sứ mệnh đó.
                        ĐHQGHN được thành lập trên cơ sở tổ chức, sắp xếp lại 3 trường đại học lớn ở Hà Nội: Trường Đại học Tổng hợp Hà Nội, Trường Đại học Sư phạm Hà Nội I và Trường Đại học Sư phạm Ngoại ngữ Hà Nội (theo Nghị định số 97/CP ngày 10/12/1993 của Chính phủ). ĐHQGHN hoạt động theo Quy chế về Tổ chức và hoạt động do Thủ tướng Chính phủ ban hành theo Quyết định số 477/QĐ-TTg ngày 05/9/1994.
                        Cho đến năm 2000, ĐHQGHN có 05 trường đại học, 01 viện nghiên cứu: Trường Đại học Khoa học Tự nhiên, Trường Đại học Khoa học Xã hội và Nhân văn, Trường Đại học Ngoại ngữ, Trường Đại học Sư phạm, Trường Đại học Đại cương và một số đơn vị khác.
                    </p>
                    <img class="image-gioithieu" src="{{asset('images/gioithieu/nam_2000.PNG')}}"/>
                    <h6><i>Trụ sở điều hành ĐHQGHN tại số 144 đường Xuân Thủy, Quận Cầu Giấy, Hà Nội.</i></h6>
                    <h2><b><i>Năm 2000</i></b></h2>
                    <p>
                        Trong năm 2000, Trường Đại học Sư phạm tách khỏi cơ cấu tổ chức ĐHQGHN trở thành trường đại học trực thuộc Bộ Giáo dục và Đào tạo. Vào thời điểm này, ĐHQGHN mới có các ngành và lĩnh vực: toán và khoa học tự nhiên, công nghệ thông tin và điện tử viễn thông (Trường Đại học Khoa học Tự nhiên), khoa học xã hội và nhân văn, kinh tế, luật (Trường Đại học Khoa học Xã hội và Nhân văn) và ngoại ngữ.
                    </p>
                    <h2><b><i>Năm 2001</i></b></h2>
                    <p>
                        Thực hiện Kết luận của Thường vụ Bộ Chính trị, Chính phủ ban hành Nghị định số 07/2001/NĐ-CP ngày 01/02/2001 về ĐHQG; ngày 12/02/2001 Thủ tướng Chính phủ ra Quyết định số 14/2001/QĐ-TTg và Quyết định số 16/2001/QĐ-TTg về việc tổ chức lại và ban hành Quy chế về Tổ chức và hoạt động của ĐHQG. Đây là mốc lịch sử quan trọng đánh dấu bước phát triển mới của ĐHQGHN.
                        Theo Quyết định số 14/2001/QĐ-TTg, ĐHQGHN có 03 trường đại học thành viên: Trường Đại học Khoa học Tự nhiên, Trường Đại học Khoa học Xã hội và Nhân văn, Trường Đại học Ngoại ngữ; Viện Công nghệ Thông tin; các khoa, trung tâm nghiên cứu trực thuộc; các đơn vị phục vụ; Văn phòng và các Ban chức năng.
                    </p>
                    <h2><b><i>Năm 2003</i></b></h2>
                    <p>
                        Ngày 20/12/2003, Thủ tướng Chính phủ Phan Văn Khải đã chính thức động thổ xây dựng ĐHQGHN tại Hoà Lạc.
                    </p>
                    <h2><b><i>Năm 2004</i></b></h2>
                    <p>
                        Ngày 19/3/2004, thành lập Viện Việt Nam học và Khoa học phát triển theo Quyết định số 40/2004/QĐ-TTg của Thủ tướng Chính phủ nước Cộng hoà Xã hội Chủ nghĩa Việt Nam trên cơ sở Trung tâm Nghiên cứu Việt Nam và Giao lưu văn hóa trực thuộc ĐHQGHN. Trung tâm này là sự tiếp nối Trung tâm Hợp tác nghiên cứu Việt Nam (Trường ĐHTH Hà Nội) do Bộ trưởng Bộ Giáo dục và Đào tạo ký Quyết định thành lập số 529/QĐ ngày 17/5/1989.
                        Ngày 25/5/2004, thành lập Trường Đại học Công nghệ trên cơ sở nâng cấp và phát triển Khoa Công nghệ và Trung tâm Hợp tác Đào tạo và Bồi dưỡng Cơ học trực thuộc ĐHQGHN theo Quyết định số 92/2004/QĐ-TTg củaThủ tướng Chính phủ.
                    </p>
                    <h2><b><i>Năm 2007</i></b></h2>
                    <p>
                        Ngày 06/3/2007, thành lập Trường Đại học Kinh tế trên cơ sở nâng cấp Khoa Kinh tế, theo Quyết định số 290/QĐ-TTg của Thủ tướng Chính phủ.
                        Ngày 24/5/2007, thành lập Viện Vi sinh vật và Công nghệ sinh học trên cơ sở nâng cấp Trung tâm Công nghệ sinh học, theo Quyết định số 661 QĐ-TTg của Thủ tướng Chính phủ.
                    </p>
                    <h2><b><i>Năm 2009</i></b></h2>
                    <p>
                        Ngày 03/4/2009, thành lập Trường Đại học Giáo dục trên cơ sở Khoa Sư phạm theo Quyết định số 441/QĐ-TTg của Thủ tướng Chính phủ
                        Trong năm này Giám đốc ĐHQGHN đã ký quyết định thành lập 02 đơn vị trực thuộc: Trung tâm Nghiên cứu Biển và Đảo và Trung tâm Quốc tế Nghiên cứu Biến đổi Toàn cầu.
                    </p>
                    <h2><b><i>Năm 2010</i></b></h2>
                    <p>
                        Trong năm 2010, thành lập các đơn vị trực thuộc: Trung tâm Nghiên cứu Đô thị, Khoa Y dược, Trung tâm Ứng dụng công nghệ thông tin và nâng cấp Trung tâm Đảm bảo chất lượng đào tạo và Nghiên cứu phát triển giáo dục thành Viện Đảm bảo Chất lượng Giáo dục trực thuộc ĐHQGHN.
                        Ngày 15/11/2010, Bộ Giáo dục và Đào tạo giao cho ĐHQGHN phối hợp với Tổ chức AUPELF-UREF (nay là Cơ quan Đại học Pháp ngữ - AUF) tổ chức, quản lý và điều hành Viện Tin học Pháp ngữ (nay là Viện Quốc tế Pháp ngữ) theo Quyết định số 5206/QĐ-BGDĐT của Bộ trưởng Bộ Giáo dục và Đào tạo.
                    </p>
                    <h2><b><i>Năm 2011</i></b></h2>
                    <p>
                        Trong năm 2011, thành lập các đơn vị trực thuộc: Trung tâm Nhân lực Quốc tế, Trung tâm Phát triển ĐHQGHN, Bệnh viện ĐHQGHN, Trung tâm Hợp tác và Chuyển giao tri thức và Trung tâm Nano và Năng lượng.
                        Về cơ bản ĐHQGHN đã trở thành một trung tâm đào tạo đại học, sau đại học, nghiên cứu khoa học và chuyển giao tri thức đa ngành, đa lĩnh vực chất lượng cao gồm tổng số 43 đơn vị trong đó bao gồm: 09 đơn vị thành viên với 06 trường đại học thành viên (có quyền tự chủ, tự chịu trách nhiệm cao, có tư cách pháp nhân như các trường đại học trực thuộc Bộ Giáo dục và Đào tạo) và 03 viện nghiên cứu thành viên; 05 khoa trực thuộc; 14 đơn vị đào tạo và nghiên cứu trực thuộc (gồm 02 viện và 12 trung tâm đào tạo và nghiên cứu), 15 đơn vị phục vụ đào tạo và nghiên cứu trực thuộc.
                        Mặc dù còn một số khó khăn, nhưng Nghị định số 07/2001/NĐ-CP ngày 01/02/2001 về ĐHQG và Quy chế về Tổ chức và hoạt động của ĐHQG ban hành theo Quyết định số 16/2001/QĐ-TTg ngày 12/02/2001 của Thủ tướng Chính phủ đã tạo điều kiện thuận lợi cho ĐHQG phát huy được quyền tự chủ, tự chịu trách nhiệm cao trong sự quản lý nhà nước của Bộ Giáo dục và Đào tạo và các Bộ liên quan trong các hoạt động về tổ chức bộ máy, nhân sự, tài chính, hợp tác quốc tế, đào tạo, nghiên cứu khoa học; hình thành được mô hình đơn vị sự nghiệp giáo dục có thực thể hữu cơ, liên thông, liên kết, hợp tác toàn diện giữa các đơn vị thành viên và đơn vị trực thuộc, khai thác hiệu quả mọi nguồn lực, lợi thế đa ngành, đa lĩnh vực, sự đa dạng và thế mạnh của từng đơn vị trong ĐHQGHN để nâng cao chất lượng mọi hoạt động, gia tăng các giá trị, tạo nên các sản phẩm độc đáo, có sức cạnh tranh cao; được tổ chức QS xếp hạng vào nhóm 250 các trường đại học hàng đầu Châu Á trong đó lĩnh vực khoa học tự nhiên xếp thứ 61, lĩnh vực khoa học sự sống và y sinh xếp thứ 84 (topuniversities.com), góp phần nâng cao vị thế, thương hiệu của từng đơn vị, của ĐHQGHN và của cả hệ thống giáo dục đại học Việt Nam; tích cực thúc đẩy quá trình công nghiệp hóa, hiện đại hóa và hội nhập quốc tế của đất nước.
                        Đánh giá mô hình các đại học, Phó Thủ tướng Nguyễn Thiện Nhân đã khẳng định ĐHQGHN đã đi đúng hướng trong việc xây dựng và phát triển mô hình đại học đa ngành, đa lĩnh vực chất lượng cao theo Nghị định số 07/2001/NĐ-CP của Chính phủ và Quy chế số 16/2001/QĐ-TTg của Thủ tướng Chính phủ (nguồn: Báo điện tử Chính phủ).
                    </p>
                    <h2><b><i>Năm 2013</i></b></h2>
                    <p>
                        Triển khai thực hiện Luật Giáo dục đại học, hai Đại học Quốc gia đã phối hợp với Bộ Giáo dục và Đào tạo để soạn thảo Nghị định mới về Đại học Quốc gia và Quy chế về Tổ chức và hoạt động của Đại học Quốc gia và các cơ sở giáo dục đại học thành viên, trình Chính phủ và Thủ tướng Chính phủ ban hành. Đến ngày 17/11/2013, thay mặt Chính phủ, Thủ tướng Chính phủ đã ký ban hành Nghị định số 186/2013/NĐ-CP về Đại học quốc gia (thay thế cho Nghị định số 07/2001/NĐ-CP ngày 01/02/2001 của Chính phủ về Đại học Quốc gia).
                        Để đảm bảo phù hợp với những quy định mới của pháp luật, đồng thời với việc xác định vị trí việc làm trong các đơn vị thành viên, đơn vị trực thuộc, ĐHQGHN đã và đang tiến hành triển khai thực hiện Đề án điều chỉnh, sắp xếp lại và phát triển tổ chức trong ĐHQGHN theo hướng tinh giản đầu mối, tăng cường nguồn lực cho các đơn vị thành viên và đầu tư phát triển cho các đơn vị trực thuộc sau khi điều chỉnh, sắp xếp lại. Theo đó, cơ cấu tổ chức của ĐHQGHN được xác định rõ theo 4 nhóm: i) Trường đại học, viện nghiên cứu khoa học thành viên; ii) Đơn vị trực thuộc định hướng phát triển thành trường đại học, viện nghiên cứu khoa học thành viên trong thời gian tới; iii) Đơn vị phục vụ; iv) Đơn vị kinh doanh, dịch vụ.
                    </p>
                    <h2><b><i>Năm 2014</i></b></h2>
                    <p>
                        Để gia tăng tính tự chủ, tự chịu trách nhiệm trong các cơ sở giáo dục đại học thành viên, trên cơ sở các quy định tại Luật Giáo dục đại học, Nghị định số 186/2013/NĐ-CP ngày 17/11/2013 của Chính phủ về Đại học quốc gia, ngày 26/3/2014, Thủ tướng Chính phủ đã ký Quyết định số 26/2014/QĐ-TTg về việc ban hành Quy chế tổ chức và hoạt động của Đại học quốc gia và các cơ sở giáo dục đại học thành viên. Bản Quy chế mới này thay thế cho Quy chế tổ chức và hoạt động của Đại học quốc gia ban hành theo Quyết định số 16/2001/QĐ-TTg ngày 12/02/2001 của Thủ tướng Chính phủ. Những nội dung quy định trong bản Quy chế số 26/2014/QĐ-TTg thể hiện rõ quan điểm đổi mới về Đại học quốc gia của Chính phủ và Thủ tướng Chính phủ trong quá trình phát triển bền vững và hội nhập.
                    </p>
                    <h2><b><i>Năm 2015</i></b></h2>
                    <p>
                        Nhằm đẩy mạnh thực hiện Nghị quyết Trung ương 6 về phát triển khoa học và công nghệ, Nghị quyết Trung ương 8 về đổi mới căn bản, toàn diện giáo dục và đào tạo, thực hiện các chỉ tiêu quan trọng được đề ra trong Đại hội Đảng bộ ĐHQGHN lần thứ 5, nhiệm kỳ 2015-2020, ĐHQGHN tiếp tục triển khai và thực hiện giai đoạn 2 của Đề án điều chỉnh, sắp xếp lại và phát triển cơ cấu tổ chức của các đơn vị thành viên, đơn vị trực thuộc.
                    </p>
                    <h2><b><i>Năm 2016</i></b></h2>
                    <p>
                        Để đạt mục tiêu chiến lược phát triển thành đại học định hướng nghiên cứu, đa ngành, đa lĩnh vực, ĐHQGHN cũng đang tiến hành thành lập mới, chuyển đổi mô hình tổ chức và hoạt động của một số đơn vị, cũng như nâng cấp một số đơn vị trực thuộc thành trường đại học, viện nghiên cứu khoa học thành viên thuộc ĐHQGHN. Trong năm 2016, Thủ tướng Chính phủ đã ký Quyết định thành lập Viện Trần Nhân Tông (Quyết định số 1717/QĐ-TTg ngày 01/9/2016) và Quyết định thành lập Viện Tài nguyên và Môi trường trên cơ sở nâng cấp Trung tâm Nghiên cứu Tài nguyên và Môi trường (Quyết định số 2218/QĐ-TTg ngày 17/11/2016). Giám đốc ĐHQGHN đã ban hành Quyết định nâng cấp Trung tâm Trung tâm Khảo thí ĐHQGHN trực thuộc Viện Đảm bảo chất lượng giáo dục thành Trung tâm Khảo thí ĐHQGHN trực thuộc ĐHQGHN (Quyết định số 2099/QĐ-ĐHQGHN ngày 21/7/2016). Đồng thời, điều chỉnh tên gọi và chức năng, nhiệm vụ của Khoa Quản trị Kinh doanh thành Khoa Quản trị và Kinh doanh (Quyết định số 2211/QĐ-ĐHQGHN ngày 29/7/2016). Đổi tên Ban Quản lý Trường Đại học Việt Nhật thành Ban Quản lý Dự án Trường Đại học Việt Nhật (Quyết định số 3170/QĐ-ĐHQGHN ngày 14/10/2016).
                    </p>
                    <img class="image-gioithieu so-do" src="{{asset('images/gioithieu/so_do_to_chuc.PNG')}}"/>
                    <h2><b><i>Năm 2017</i></b></h2>
                    <p>
                        Trên cơ sở rà soát, đánh giá thực trạng cũng như tiềm năng, năng lực và hiệu quả hoạt động của các đơn vị, Đảng ủy và Hội đồng ĐHQGHN đã ban hành Nghị quyết về điều chỉnh, sắp xếp lại và phát triển tổ chức trong ĐHQGHN. Theo đó, trong Quý I/2017, ĐHQGHN đã tiến hành kiện toàn, điều chỉnh, sắp xếp lại để ổn định tổ chức và hoạt động của một số đơn vị: Điều chỉnh tên gọi và chức năng, nhiệm vụ của Khoa Sau đại học thành Khoa Các khoa học liên ngành (Quyết định số 248/QĐ-ĐHQGHN ngày 20/01/2017); đổi tên Trung tâm Hợp tác và Chuyển giao tri thứcthành Trung tâm Chuyển giao tri thức và Hỗ trợ khởi nghiệp (Quyết định số 269/QĐ-ĐHQGHN ngày 24/01/2017); hợp nhất Nhà khách ĐHQGHN + Cơ sở 2 của Trung tâm Phát triển ĐHQGHN tại xã Tản Lĩnh, huyện Ba Vì + Trung tâm Nghiên cứu Đô thị thành Trung tâm Phát triển ĐHQGHN tại Hòa Lạc (Quyết định số 307/QĐ-ĐHQGHN ngày 06/02/2017); điều chuyển các chức năng, nhiệm vụ còn lại ở Cơ sở 1 của Trung tâm Phát triển ĐHQGHN tại số 144 Xuân Thủy về Văn phòng ĐHQGHN và sau đó giải thể Trung tâm Phát triển ĐHQGHN; điều chuyển Trung tâm Ứng dụng công nghệ thông tin từ Viện Công nghệ Thông tin về trực thuộc Văn phòng ĐHQGHN.
                        ĐHQGHN đang trong tiến trình thay đổi tổ chức và nhân sự để thực hiện các nhiệm vụ đặc biệt của ĐHQGHN: Thành lập Văn phòng Nhiệm vụ Quốc chí; triển khai các thủ tục để sẵn sàng tiếp nhận lại Dự án đầu tư xây dựng ĐHQGHN tại Hòa Lạc.
                    </p>
                    <h2><b><i>Năm 2018</i></b></h2>
                    <p>
                        Tháng 02/2018, Thủ tướng Chính phủ ký Quyết định chuyển giao Dự án đầu tư xây dựng ĐHQGHN tại Hòa Lạc từ Bộ Xây dựng sang ĐHQGHN. Đây cũng là giai đoạn ĐHQGHN hoàn thiện Đề án mô hình tổ chức bộ máy để triển khai nhiệm vụ đầu tư, xây dựng đô thị ĐHQGHN tại Hòa Lạc và báo cáo Ban Giám đốc, Ban Thường vụ Đảng ủy, Đảng uỷ và Hội đồng ĐHQGHN thông qua. Theo đó, tháng 3/2018, Giám đốc ĐHQGHN đã ký Quyết định tiếp nhận, tổ chức lại và ban hành Quy định về Tổ chức và hoạt động, triển khai các thủ tục điều chuyển nhân sự, thành lập các phòng, đơn vị trực thuộc Ban Quản lý dự án đầu tư xây dựng ĐHQGHN tại Hòa Lạc… Song song với việc hoàn thiện cơ cấu tổ chức, tháng 4/2018, Giám đốc đã ký Quyết định tiếp nhận tất cả nhân sự của Ban Quản lý dự án đầu tư xây dựng ĐHQGHN tại Hòa Lạc về ĐHQGHN công tác.
                        Ngoài ra, để đảm bảo sự liên thông, liên kết phù hợp về tỏ chức và hoạt động của các đơn vị tại khu vực Hòa Lạc, tháng 3/2018, Giám đốc cũng đã ký ban hành các Quyết định điều chỉnh chức năng, nhiệm vụ và cơ cấu tổ chức của Ban Xây dựng, Trung tâm Phát triển ĐHQGHN tại Hòa Lạc.
                        Tính đến nay,ĐHQGHN là một thực thể gắn kết hữu cơ, với quy mô hợp lý, bao gồm 35 đầu mối: Cơ quan ĐHQGHN và 34 đơn vị thành viên, đơn vị trực thuộc, trong đó có 07 trường đại học thành viên; 07 viện nghiên cứu khoa học thành viên, trực thuộc; 05 Khoa trực thuộc và 02 trung tâm đào tạo và 13 đơn vị phục vụ, dịch vụ hoạt động tương đối đầy đủ trên các lĩnh vực: khoa học tự nhiên, công nghệ, khoa học xã hội - nhân văn, kinh tế, luật, giáo dục, ngoại ngữ, y dược.
                    </p>
                </td>
                <th width="25%" class="gioithieu-phai"></th>
            </tr>
        </table>
    </div>
    </body>
</html>
@endsection
