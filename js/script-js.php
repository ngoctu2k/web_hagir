<script>
    wow=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!1,live:!0});
    wow.init();

    $(document).ready(function () {
        $('.header-contact').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: $(document).height() - 1000}, 1000);
        })
        $(".owl-carousel").owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            dots: false,
            dotsEach: true,
            autoplay: true,
            margin: 30,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                }
            }
        });
    });

    if(endDate && new Date() <= new Date(endDate)) {
        $('.timer').countdown(endDate, function(event) {
            // $(this).find('.days').text(event.offset.totalDays);
            var h0 = event.offset.hours < 10 ? 0 : event.offset.hours.toString().substr(0, 1);
            var h1 = event.offset.hours < 10 ? event.offset.hours : event.offset.hours.toString().substr(1, 1);
            var m0 = event.offset.minutes < 10 ? 0 : event.offset.minutes.toString().substr(0, 1);
            var m1 = event.offset.minutes < 10 ? event.offset.minutes : event.offset.minutes.toString().substr(1, 1);
            var s0 = event.offset.seconds < 10 ? 0 : event.offset.seconds.toString().substr(0, 1);
            var s1 = event.offset.seconds < 10 ? event.offset.seconds : event.offset.seconds.toString().substr(1, 1);
            $(this).find('.h0').text(h0);
            $(this).find('.h1').text(h1);
            $(this).find('.m0').text(m0);
            $(this).find('.m1').text(m1);
            $(this).find('.s0').text(s0);
            $(this).find('.s1').text(s1);
        });
    }

    var scriptURL = 'https://script.google.com/macros/s/AKfycbwTQCmuIFT-ofB3BwOfUOrT2FYVbn42VlZyD7iVgG3aP2VvW97u/exec';
    var form = document.forms['submit-form'];
    form.addEventListener('submit', function (e) {
        var TenTranh = $('input[name="TenTranh"]').val();
        var KichThuocTranh = $('select[name="KichThuocTranh"]').find('option:selected').val();
        var TenKhachHang = $('input[name="TenKhachHang"]').val();
        var SoDienThoai = $('input[name="SoDienThoai"]').val();
        var Email = $('input[name="Email"]').val();
        var DiaChi = $('input[name="DiaChi"]').val();
        var YeuCau = $('textarea[name="YeuCau"]').val();
        if (TenKhachHang !== '' && SoDienThoai !== '' && DiaChi !== '' && TenTranh !== '' && KichThuocTranh !== '') {
            e.preventDefault();
            showLoadingIndicator();
            fetch(scriptURL, {
                method: 'POST', body: new FormData(form)
            }).then(response => showSuccessMessage(response)).catch(error => showErrorMessage(error))
        } else {
            alert('Vui lòng nhập đầy đủ dữ liệu');
        }
    });
    function showLoadingIndicator () {
        $('.button-submit').addClass('disabled');
        $('.button-submit').text('Vui lòng chờ...');
    }
    function showSuccessMessage (response) {
        setTimeout(function () {
            reset();
            alert('Yêu cầu của bạn đã được gửi đi, chúng tôi sẽ liên hệ sớm tới bạn, Xin cảm ơn!');
        }, 500)
    }
    function showErrorMessage (error) {
        setTimeout(function () {
            reset();
            alert('Yêu cầu thất bại, Có lỗi trong quá trình xử lý!');
        }, 500)
    }
    function reset() {
        $('.button-submit').removeClass('disabled');
        $('.button-submit').text('Đăng ký ngay');
        $('input[name="TenTranh"]').val('');
        $('input[name="TenKhachHang"]').val('');
        $('input[name="SoDienThoai"]').val('');
        $('input[name="Email"]').val('');
        $('input[name="DiaChi"]').val('');
        $('textarea[name="YeuCau"]').val('');
    }
</script>