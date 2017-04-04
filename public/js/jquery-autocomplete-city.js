$(function(){
    var currencies = [
        { value: 'Hà Nội' },
        { value: 'Hải Phòng' },
        { value: 'Đà Nẵng' },
        { value: 'Bình Dương' },
        { value: 'Hồ Chí Minh' },
        { value: 'Cần Thơ' },
        { value: 'Bắc Cạn' },
        { value: 'Bắc Giang' },
        { value: 'Bắc Ninh' },
        { value: 'Cao Bằng' },
        { value: 'Điện Biên' },
        { value: 'Hà Giang' },
        { value: 'Hà Nam' },
        { value: 'Hải Dương' },
        { value: 'Hòa Bình' },
        { value: 'Hưng Yen' },
        { value: 'Lai Châu' },
        { value: 'Lạng Sơn' },
        { value: 'Lào Cai' },
        { value: 'Nam Định' },
        { value: 'Ninh Bình' },
        { value: 'Phú Thọ' },
        { value: 'Quảng Ninh' },
        { value: 'Sơn La' },
        { value: 'Thái Bình' },
        { value: 'Thái Nguyên' },
        { value: 'Thanh Hóa' },
        { value: 'Tuyên Quang' },
        { value: 'Vĩnh Phúc' },
        { value: 'Yên Bái' },
        { value: 'Bình Định' },
        { value: 'Bình Phước' },
        { value: 'Bình Thuận' },
        { value: 'Đắk Lắk' },
        { value: 'Đắk Nông' },
        { value: 'Gia Lai' },
        { value: 'Hà Tĩnh' },
        { value: 'Khánh Hòa' },
        { value: 'Kontum' },
        { value: 'Lâm Đồng' },
        { value: 'Nghệ An' },
        { value: 'Ninh Thuận' },
        { value: 'Phú Yên' },
        { value: 'Quảng Bình' },
        { value: 'Quảng Nam' },
        { value: 'Quảng Ngãi' },
        { value: 'Quảng Trị' },
        { value: 'Huế' },
        { value: 'Vinh' },
        { value: 'An Giang' },
        { value: 'Bà Rịa - Vũng Tàu' },
        { value: 'Bạc Liêu' },
        { value: 'Bến Tre' },
        { value: 'Cà Mau' },
        { value: 'Đồng Nai' },
        { value: 'Đồng Tháp' },
        { value: 'Hậu Giang' },
        { value: 'Kiên Giang' },
        { value: 'Long An' },
        { value: 'Sóc Trăng' },
        { value: 'Tây Ninh' },
        { value: 'Tiền Giang' },
        { value: 'Trà Vinh' },
        { value: 'Vĩnh Long' },
    ];
    // setup autocomplete function pulling from currencies[] array
    $('#autocomplete').autocomplete({
        minLength:1,
        delay:500,
        source: currencies
    });

});
