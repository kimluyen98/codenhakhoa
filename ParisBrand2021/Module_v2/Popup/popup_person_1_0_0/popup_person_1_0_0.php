<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module_v2/Popup/popup_person_1_0_0/';
?>

<style>
    .popup_person_1_0_0 {
    position: fixed;
    z-index: 14;
    opacity: 0;
    left: 80px;
    bottom: 10px;
    padding: 10px 15px;
    border-radius: 50px;
    background: #053D7C;
    display: flex;
    justify-content: space-between;
    color: #fff;
    }
    .popup_person_1_0_0__pic {
    width: 60px;
    height: 60px;
    }
    .popup_person_1_0_0__pic img {
    width: 100%;
    border-radius: 100%;
    }
    .popup_person_1_0_0__box {
    padding-left: 15px;
    }
    .popup_person_1_0_0__name {
    font-size: 14px;
    }
    .popup_person_1_0_0__ct, .popup_person_1_0_0__time {
    font-size: 13px;
    }

    @media (max-width: 414px) {
    .popup_person_1_0_0 {
        display: none !important;
    }
    }

</style>
<?php
    if (wp_is_mobile() == false ) :
?>
<div class="popup_person_1_0_0" id="popup_person_1_0_0">
    <div class="popup_person_1_0_0__pic ">
        <img width="60" height="60" id="pop_img" class="lazy" data-src="<?php echo $path ?>images/trang-trinh.jpg" alt="Phạm Phương Anh">
    </div>
    <div class="popup_person_1_0_0__box ">
        <div class="popup_person_1_0_0__name" id="pop_name"><b>Phạm Phương Anh</b></div>
        <div class="popup_person_1_0_0__ct" id="pop_ct"><i>Đã đặt lịch tại 43 Trần Duy Hưng</i></div>
        <div class="popup_person_1_0_0__time" id="pop_time">19 phút trước </div>
    </div>
</div>
  
<script>

    const popName = document.getElementById("pop_name");
    const popCt = document.getElementById("pop_ct");
    const popTime = document.getElementById("pop_time");
    const popImg = document.getElementById("pop_img");

    var auto_refresh2 = setInterval(
        function() {
            showDK();
            var t = randomDK();
            var name_array = ['Nguyễn Oanh', 'Tuyết Dương', 'Tươi Vũ', 'Trang Trịnh', 'Phượng Liễu',
                'Trang Linh', 'Trang Trần', 'Trang Quỳnh', 'Trang Bùi', 'Trần Thúy', 'Trần Thảo', 'Trần Mai', 'Ánh Trần',
                'Đặng Hằng', 'Hằng Nga', 'Hoa Lê', 'Hoa Trương', 'Kim Thơ', 'Lê Mai', 'Mai Nguyễn', 'Nguyễn Hoa', 'Oanh Lê',
                'Quỳnh Nhu', 'Thu Hoàng', 'Thủy Tiên', 'Ánh Tuyến', 'Diễm Quỳnh', 'Hằng Nguyễn', 'Hoa Ngân', 'Huệ Em', 'Kin Xuyến',
                'Lệ Quyên', 'Mai Tình', 'Thanh Hằng', 'Thùy Anh', 'Tiêu Phụng', 'Băng Băng', 'Dung Bùi', 'Hân Hân', 'Hoàng Anh', 'Hương Diệu',
                'Lâm Phạm', 'Lệ Thu', 'Minh Huệ', 'Nguyễn Thu', 'Phương Trần', 'Thùy Dương', 'Tố Uyên', 'Trần Hảo', 'Anh Hoa', 'Bee Hoa', 'Giang Hoa',
                'Hoa Hằng', 'Hoàng Hương', 'Hương Giang', 'Lanh Anh', 'Liên Phạm', 'Mộng Tuyền', 'Nhất Nhất', 'Phú Thoa', 'Thanh Thu', 'Thúy Hà', 'Bùi Nguyệt',
                'Giang Nhi', 'Hoài Nguyễn', 'Hoa Phạm', 'Hương Ly', 'Lan Hương', 'Loan Nguyễn', 'Nga Trương', 'Nhung Hoàng', 'Quyên Đỗ', 'Thoa Nguyễn', 'Thúy Hương',
                'Chuyên Yến', 'Hằng Anna', 'Hoài Trang', 'Hoa Trang', 'Kiều Oanh', 'Lan Xuân', 'Ly Ly', 'Ngọc Ánh', 'Nhung Trang', 'Quỳnh Hoa', 'Thu Hiền', 'Thúy Nguyễn'
            ];
            var pic_array = ['nguyen-oanh', 'tuyet-duong', 'tuoi-vu', 'trang-trinh', 'phuong-lieu',
                'trang-linh', 'trang-tran', 'trang-quynh', 'trang-bui', 'tran-thuy', 'tran-thao', 'tran-mai', 'anh-tran',
                'dang-hang', 'hang-nga', 'hoa-le', 'hoa-truong', 'kim-tho', 'le-mai', 'mai-nguyen', 'nguyen-hoa', 'oanh-le',
                'quynh-nhu', 'thu-hoang', 'thuy-tien', 'anh-tuyen', 'diem-quynh', 'hang-nguyen', 'hoa-ngan', 'hue-em', 'kin-xuyen',
                'le-quyen', 'mai-tinh', 'thanh-hang', 'thuy-anh', 'tieu-phung', 'bang-bang', 'dung-bui', 'han-han', 'hoang-anh', 'huong-dieu',
                'lam-pham', 'le-thu', 'minh-hue', 'nguyen-thu', 'phuong-tran', 'thuy-duong', 'to-uyen', 'tran-hao', 'anh-hoa', 'bee-hoa', 'giang-hoa',
                'hoa-hang', 'hoang-huong', 'huong-giang', 'lan-anh', 'lien-pham', 'mong-tuyen', 'nhat-nhat', 'phu-thoa', 'thanh-thu', 'thuy-ha', 'bui-nguyet',
                'giang-nhi', 'hoai-nguyen', 'hoa-pham', 'huong-ly', 'lan-huong', 'loan-nguyen', 'nga-truong', 'nhung-hoang', 'quyen-do', 'thoa-nguyen', 'thuy-huong',
                'chuyen-yen', 'hang-anna', 'hoai-trang', 'hoa-trang', 'kieu-oanh', 'lan-xuan', 'ly-ly', 'ngoc-anh', 'nhung-trang', 'quynh-hoa', 'thu-hien', 'thuy-nguyen'
            ];

            var t1 = name_array[t];
            var t2 = pic_array[t];

            popName.innerHTML = t1;
            var t2 = '<?php echo $path ?>images/' + t2 + '.jpg';
            popImg.setAttribute("src", t2);
            popImg.setAttribute("alt", t1);

            var ct = randomDK1();
            popCt.innerHTML = ct;

            var p = randomDK2();
            popTime.innerHTML = p;

        }, 10000);

    var customReg = document.getElementById("popup_person_1_0_0");
    function showDK() {
        customReg.style.opacity = customReg.style.opacity == "1" ? "0" : "1";
    }

    function randomDK() {
        var t = Math.floor(Math.random() * 86);
        return t;
        console.log(t);
    }

    function randomDK1() {
        const random = arr => arr[Math.floor(Math.random() * arr.length)];

        var ct = random(['Đã đăng ký bọc răng sứ Nano', 'Đã đăng ký dán sứ Veneer', 'Đã đăng ký cầu răng sứ', 'Đã đăng ký răng sứ kim loại',
            'Đã đăng ký niềng răng mắc cài kim loại', 'Đã đăng ký niềng răng mắc cài sứ', 'Đã đăng ký niềng răng mắc cài pha lê', 'Đã đăng ký niềng răng mặt trong',
            'Đã đăng ký niềng răng trong suốt', 'Đã đăng ký trồng răng Implant', 'Đã đăng ký ghép xương răng', 'Đã đăng ký nâng xoang',
            'Đã đăng ký trồng răng nguyên hàm', 'Đã đăng ký Implant all on', 'Đã đăng ký tẩy trắng răng', 'Đã đăng ký trám răng',
            'Đã đăng ký nhổ răng siêu âm', 'Đã đăng ký lấy cao răng', 'Đã đăng ký đính đá kim cương', 'Đã đăng ký điều trị tủy răng',
            'Đã đăng ký điều trị áp xe răng', 'Đã đăng ký cắt lợi trùm', 'Đã đăng ký gói chăm sóc răng', 'Đã đăng ký dịch vụ Teeth Spa',
            'Đã đăng ký niềng răng mắc cài', 'Đã đăng ký niềng răng khay trong', 'Đã đăng ký niềng răng trả góp', 'Đã đăng ký răng sứ trả góp',
            'Đã đăng ký trồng răng Implamt', 'Đã đăng ký trồng răng trả góp', 'Đã đăng ký tư vấn trồng răng', 'Đã đăng ký nhổ răng khôn',
            'Đã đăng ký nhổ răng sữa',
        ]);
        return ct;
        console.log(ct);
    }

    function randomDK2() {
        const random = arr => arr[Math.floor(Math.random() * arr.length)];

        var p = random([
            '5 phút trước',
            '6 phút trước',
            '7 phút trước',
            '8 phút trước',
            '9 phút trước',
            '12 phút trước',
            '14 phút trước',
            '15 phút trước',
            '16 phút trước',
            '17 phút trước',
            '18 phút trước',
            '19 phút trước',
            '20 phút trước',
        ]);
        return p;
        console.log(p);
    }
</script>

<?php
    endif;
?>


