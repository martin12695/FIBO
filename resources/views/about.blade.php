@extends('layouts.master')
@section('title', 'Giới thiệu FiBo')
@section('custom-css')
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        #header {
            height: 50px;
        }

        .SDT {
            float: right;
        }

        .image {
            width: 80px;
            height: 80px;
            margin-top: 20px;
            margin-left: 10px;
            float: left;
        }

        .Tab {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 350px;
            margin-right: 350px;
            margin-top: 100px;
            margin-bottom: 200px;
        }
        .bang{
            font-family: Arial;
        }

        td {
            margin-left: 20px !important;
        }

        h1 {
            text-align: center;
        }
        .bang p{
            margin-left: 15px;
        }
    </style>
@endsection
@section('content')

    <div class="MB">
        <div class="Tab">
            <div class="chu">
                <h3 class="tw3-h3">Những câu hỏi thường gặp về dịch vụ FiBo</h3>
                <hr>
            </div>
            <div class="bang">
                <table class="table table-hover" style="width: 100%">
                    <thead>
                    <tr >
                        <th>STT</th>
                        <th>Câu hỏi</th>
                        <th>Câu trả lời</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>I</th>
                        <th align="left" colspan="2">TRONG QUÁ TRÌNH ĐĂNG KÍ VÀ ĐĂNG NHẬP</th>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>FiBo là gì?</td>
                        <td>
                            <p>- Web kết nối hẹn hò online.</p>
                            <p>- Các dịch vụ hỗ trợ và chăm sóc cuộc hẹn.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Các điều kiện và tiêu chí gia nhập cộng đồng này?</td>
                        <td>
                            <p>- Độ tuổi trên 18.</p>
                            <p>- Trình độ: Đại Học.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Đối tượng tham gia?</td>
                        <td>Sinh viên đại học.</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Khác biệt giữa FiBo với các ứng dụng/ dịch vụ hẹn hò khác?</td>
                        <td>
                            <p>- Cộng đồng thành viên chất lượng, được chọn lọc và thẩm định kĩ càng.</p>
                            <p>- Công cụ book lịch hẹn tiền lợi.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Phạm vi hoạt động của FiBo?</td>
                        <td>
                            <p>- Đại học Công nghệ thông tin.</p>
                            <p>- Đại học Khoa học xã hội và nhân văn. </p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Làm thế nào để có account để đăng nhập vào trang web?</td>
                        <td>
                            <p><b>Bước 1:</b> Tham khảo kĩ các thông tin, điều khoản và dịch vụ.</p>
                            <p><b>Bước 2:</b> Đăng kí. (Lưu ý: Để nâng cao chất lượng và tính xác thực, các thành viên muốn tham gia sẽ chụp ảnh chứng minh nhân dân và thẻ sinh viên )</p>
                            <p><b>Bước 3:</b> Nhận thư xác nhận và chờ thẩm định từ FiBo</p>
                            <p><b>Bước 4:</b> Nhận thư mời gia nhập cộng đồng nếu hồ sơ phù hợp (hoặc thư cáo lỗi nếu hồ sơ không phù hợp).</p>
                            <p><b>Bước 5:</b> Nhận account và password; nghiên cứu kĩ quy trình và điều khoản dịch vụ để đảm bảo sử dụng đúng mục đích và đúng quy định của cộng đồng.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Profile của thành viên trên ứng dụng sẽ hiển thị những thông tin gì?</td>
                        <td>
                            <p>- Họ và tên.</p>
                            <p>- Giới tính. </p>
                            <p>- Năm sinh.</p>
                            <p>- Chuyên ngành.</p>
                            <p>- Sở thích.</p>
                            <p>- Câu nói ưa thích.</p>
                            <p>- Các icon thể hiện tính cách do FiBo thẩm định và đánh giá.</p>
                            <p>- Tình trạng hiện tại.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Phương pháp thẩm định hồ sơ thành viên?</td>
                        <td>
                            <p>- FiBo sẽ tiến hành các phương thức thẩm định hồ sơ bằng 1 trong số hoặc toàn bộ các phương thức sau:</p>
                            <p>- Thông qua các thông tin, tư liệu, tương tác, giao tiếp trên Facebook của người tham gia.</p>
                            <p>- Thông qua các mối quan hệ xã hội, người quen, bạn bè chung, các nguồn thông tin đáng tin cậy và các phương pháp thẩm định gián tiếp khác theo kinh nghiệm chuyên môn của FiBo... </p>
                            <p>- Thông qua các giấy tờ, tài liệu có giá trị xác thực của thành viên (Cụ thể là CMND và thẻ sinh viên).</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Gia nhập FiBo có chắc chắn tìm được người yêu/đối tượng quan tâm ?</td>
                        <td>
                            <p>- Mục đích kết nối trong cộng đồng FiBo không chỉ giới hạn ở việc tìm người yêu hay đối tượng để tiến tới hôn nhân mà còn là mở rộng các mối quan hệ xã hội phong phú và hữu ích cho công việc, cuộc sống, học tập...</p>
                            <p>- FiBo sẽ giúp thành viên có thêm sự lựa chọn và mở rộng cơ hội để có thêm những người bạn thú vị, đối tác tin cậy hoặc có thể tiến đến tình yêu và hôn nhân nếu thấy phù hợp. </p>
                        </td>
                    </tr>
                    <tr>
                        <th>II</th>
                        <th align="left" colspan="2">CÁC THẮC MẮC VỀ CHI PHÍ</th>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Những chi phí phải trả để tham gia FiBo gồm những khoản gì?</td>
                        <td>
                            <p>Vì mục đích xây dựng một mối quan hệ gắn kế giữa 2 trường đại học nên web sẽ không lấy phí dịch vụ.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Có được đăng kí nhiều tài khoản cùng lúc không?</td>
                        <td>
                            <p>1 thành viên chỉ được đăng kí và sử dụng 1 tài khoản của cá nhân mình (không được cung cấp tài khoản cho người khác dùng chung).</p>
                        </td>
                    </tr>
                    <tr>
                        <th>III</th>
                        <th align="left" colspan="2">TRONG QUÁ TRÌNH SỬ DỤNG</th>
                    </tr>
                    <tr>
                        <td scope="row">12</td>
                        <td>Trách nhiệm của FiBo khi thành viên gặp rắc rối với đối tượng hẹn hò?</td>
                        <td>
                            <p>FiBo chỉ là dịch vụ trung gian, tạo điều kiện để các thành viên có hồ sơ phù hợp có cơ hội kết nối, giao lưu và gặp gỡ nhau. FiBo không chịu trách nhiệm hay can thiệp vào các vấn đề liên đới trong diễn biến các mối quan hệ sau đó cũng như các hậu quả liên quan có thể xảy ra trong mối quan hệ giữa các thành viên . </p>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">13</td>
                        <td>Các dịch vụ chăm sóc hẹn hò là như thế nào?</td>
                        <td>
                            <p>- Nội dung website 2 chức năng chính của trang web này là để kết bạn, tìm một nửa của mình</p>
                            <p>- Chức năng kết bạn: Có các phòng thuộc nhiều lĩnh vực khác nhau cho các thành viên có thể vào trò chuyện, kết bạn.</p>
                            <p>- Chức năng tìm người yêu:
                            <p><b>Vòng 1 :</b> Giấu mặt - Khi người dùng có nhu cầu tìm người yêu , hệ thống sẽ tìm đối tượng phù hợp để sắp xếp một cuộc nói chuyện(Messenger) với thông tin của 2 người đều bị giấu đi.</p>
                            <p><b>Vòng 2 :</b> Đối đầu Khi 2 người nói chuyện thấy hợp thì đồng ý kết bạn, tìm hiểu thì thông tin của 2 người được xuất hiện cho đối phương.</p>
                            <p><b>Vòng 3 :</b> Liveshow Sau khi nói chuyện, 2 người đồng ý gặp mặt thì hệ thống sẽ gợi ý các công việc cho cuộc hẹn đầu tiên ( như cách ăn mặc, các chuyện để nói, địa điểm ăn uống, vui chơi). Mở rộng :Có thể liên kết với các địa điểm để đặt chỗ trước , lấy voucher, mã giảm giá.</p>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">14</td>
                        <td>Trong quá trình FiBo nếu gặp vấn đề gì thì liên hệ với ai? (gặp lỗi kĩ thuật trên ứng dụng, cần hỗ trợ, tư vấn, giải đáp thắc mắc…)</td>
                        <td>
                            <p>- Liên hệ đến sđt 01265043821 – 0986607599.</p>
                            <p>- Gửi mail về ducaotien@gmail.com</p>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">15</td>
                        <td>Nếu nhận thấy hoặc phát hiện các thành viên khác có vấn đề thì làm thế nào? (đã kết hôn, có hành vi - ứng xử không phù hợp với tiêu chuẩn của cộng đồng…)</td>
                        <td>
                            <p>Sau khi nhận được report, FiBo sẽ thẩm định và xác minh rồi mới xử lí nên không lo vấn đề bị report sai.</p>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">16</td>
                        <td>Nếu bị thành viên khác report sai thì làm thế nào?</td>
                        <td>
                            <p>Sau khi nhận được report, FiBo sẽ thẩm định và xác minh rồi mới xử lí nên không lo vấn đề bị report sai.</p>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">17</td>
                        <td>Cung cấp thông tin liên hệ và thông tin cá nhân cho FiBo có sợ bị tiết lộ cho bên thứ 3 không?</td>
                        <td>
                            <p>- FiBo cam kết bảo mật thông tin liên hệ và thông tin cá nhân cho thành viên trừ trường hợp có yêu cầu của cơ quan pháp luật.</p>
                            <p>- Với các thông tin trong profile hiển thị trên ứng dụng: Khi đăng kí sử dụng dịch vụ đồng nghĩa với việc thành viên đồng ý công bố và chia sẻ các thông tin đó cho các thành viên khác trong cộng đồng FiBo.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
