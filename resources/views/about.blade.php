@extends('layouts.master')
@section('title', 'Giới thiệu FiBo')
@section('custom-css')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .Tab {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 100px;
            margin-bottom: 218px;
        }

        td {
            margin-left: 20px !important;
        }

        h1 {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="Tab">
        <div class="chu">
            <hr>
            <h1>Những câu hỏi thường gặp về dịch vụ FiBo</h1>
        </div>
        <div class="bang">
            <table style="width:100%">
                <tr>
                    <th>STT</th>
                    <th>Câu hỏi</th>
                    <th>Câu trả lời</th>
                </tr>
                <tr>
                    <th>I</th>
                    <th align="left" colspan="2">TRONG QUÁ TRÌNH ĐĂNG KÍ VÀ ĐĂNG NHẬP</th>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>FiBo là gì?</td>
                    <td>
                        <li> Web kết nối hẹn hò online.</li>
                        <li> Các dịch vụ hỗ trợ và chăm sóc cuộc hẹn.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td>Các điều kiện và tiêu chí gia nhập cộng đồng này?</td>
                    <td>
                        <li> Độ tuổi trên 18.</li>
                        <li> Trình độ: Đại Học.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td>Đối tượng tham gia?</td>
                    <td>Sinh viên đại học.</td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td>Khác biệt giữa FiBo với các ứng dụng/ dịch vụ hẹn hò khác?</td>
                    <td>
                        <li>Cộng đồng thành viên chất lượng, được chọn lọc và thẩm định kĩ càng.</li>
                        <li>Công cụ book lịch hẹn tiền lợi.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td>Phạm vi hoạt động của FiBo?</td>
                    <td>
                        <li>Đại học Công nghệ thông tin.</li>
                        <li>Đại học Khoa học xã hội và nhân văn. </li>
                    </td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td>Làm thế nào để có account để đăng nhập vào trang web?</td>
                    <td>
                        <li><b>Bước 1:</b> Tham khảo kĩ các thông tin, điều khoản và dịch vụ.</li>
                        <li><b>Bước 2:</b> Đăng kí. (Lưu ý: Để nâng cao chất lượng và tính xác thực, các thành viên muốn tham gia sẽ chụp ảnh chứng minh nhân dân và thẻ sinh viên )</li>
                        <li><b>Bước 3:</b> Nhận thư xác nhận và chờ thẩm định từ FiBo</li>
                        <li><b>Bước 4:</b> Nhận thư mời gia nhập cộng đồng nếu hồ sơ phù hợp (hoặc thư cáo lỗi nếu hồ sơ không phù hợp).</li>
                        <li><b>Bước 5:</b> Nhận account và password; nghiên cứu kĩ quy trình và điều khoản dịch vụ để đảm bảo sử dụng đúng mục đích và đúng quy định của cộng đồng.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">7</td>
                    <td>Profile của thành viên trên ứng dụng sẽ hiển thị những thông tin gì?</td>
                    <td>
                        <li>Họ và tên.</li>
                        <li>Giới tính. </li>
                        <li>Năm sinh.</li>
                        <li>Chuyên ngành.</li>
                        <li>Sở thích.</li>
                        <li>Câu nói ưa thích.</li>
                        <li>Các icon thể hiện tính cách do FiBo thẩm định và đánh giá.</li>
                        <li>Tình trạng hiện tại.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">8</td>
                    <td>Phương pháp thẩm định hồ sơ thành viên?</td>
                    <td>
                        <p>FiBo sẽ tiến hành các phương thức thẩm định hồ sơ bằng 1 trong số hoặc toàn bộ các phương thức sau:</p>
                        <li>Thông qua các thông tin, tư liệu, tương tác, giao tiếp trên Facebook của người tham gia.</li>
                        <li>Thông qua các mối quan hệ xã hội, người quen, bạn bè chung, các nguồn thông tin đáng tin cậy và các phương pháp thẩm định gián tiếp khác theo kinh nghiệm chuyên môn của FiBo... </li>
                        <li>Thông qua các giấy tờ, tài liệu có giá trị xác thực của thành viên (Cụ thể là CMND và thẻ sinh viên).</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">9</td>
                    <td>Gia nhập FiBo có chắc chắn tìm được người yêu/đối tượng quan tâm ?</td>
                    <td>
                        <li>Mục đích kết nối trong cộng đồng FiBo không chỉ giới hạn ở việc tìm người yêu hay đối tượng để tiến tới hôn nhân mà còn là mở rộng các mối quan hệ xã hội phong phú và hữu ích cho công việc, cuộc sống, học tập...</li>
                        <li>FiBo sẽ giúp thành viên có thêm sự lựa chọn và mở rộng cơ hội để có thêm những người bạn thú vị, đối tác tin cậy hoặc có thể tiến đến tình yêu và hôn nhân nếu thấy phù hợp. </li>
                    </td>
                </tr>
                <tr>
                    <th>II</th>
                    <th align="left" colspan="2">CÁC THẮC MẮC VỀ CHI PHÍ</th>
                </tr>
                <tr>
                    <td align="center">10</td>
                    <td>Những chi phí phải trả để tham gia FiBo gồm những khoản gì?</td>
                    <td>
                        <li>Vì mục đích xây dựng một mối quan hệ gắn kế giữa 2 trường đại học nên web sẽ không lấy phí dịch vụ.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">11</td>
                    <td>Có được đăng kí nhiều tài khoản cùng lúc không?</td>
                    <td>
                        <li>1 thành viên chỉ được đăng kí và sử dụng 1 tài khoản của cá nhân mình (không được cung cấp tài khoản cho người khác dùng chung).</li>
                    </td>
                </tr>
                <tr>
                    <th>III</th>
                    <th align="left" colspan="2">TRONG QUÁ TRÌNH SỬ DỤNG</th>
                </tr>
                <tr>
                    <td align="center">12</td>
                    <td>Trách nhiệm của FiBo khi thành viên gặp rắc rối với đối tượng hẹn hò?</td>
                    <td>
                        <li>FiBo chỉ là dịch vụ trung gian, tạo điều kiện để các thành viên có hồ sơ phù hợp có cơ hội kết nối, giao lưu và gặp gỡ nhau. FiBo không chịu trách nhiệm hay can thiệp vào các vấn đề liên đới trong diễn biến các mối quan hệ sau đó cũng như các hậu quả liên quan có thể xảy ra trong mối quan hệ giữa các thành viên . </li>
                    </td>
                </tr>
                <tr>
                    <td align="center">13</td>
                    <td>Các dịch vụ chăm sóc hẹn hò là như thế nào?</td>
                    <td>
                        <p>Nội dung website 2 chức năng chính của trang web này là để kết bạn, tìm một nửa của mình</p>
                        <li>Chức năng kết bạn: Có các phòng thuộc nhiều lĩnh vực khác nhau cho các thành viên có thể vào trò chuyện, kết bạn.</li>
                        <li>Chức năng tìm người yêu:
                            <p><b>Vòng 1 :</b> Giấu mặt - Khi người dùng có nhu cầu tìm người yêu , hệ thống sẽ tìm đối tượng phù hợp để sắp xếp một cuộc nói chuyện(Messenger) với thông tin của 2 người đều bị giấu đi.</p>
                            <p><b>Vòng 2 :</b> Đối đầu Khi 2 người nói chuyện thấy hợp thì đồng ý kết bạn, tìm hiểu thì thông tin của 2 người được xuất hiện cho đối phương.</p>
                            <p><b>Vòng 3 :</b> Liveshow Sau khi nói chuyện, 2 người đồng ý gặp mặt thì hệ thống sẽ gợi ý các công việc cho cuộc hẹn đầu tiên ( như cách ăn mặc, các chuyện để nói, địa điểm ăn uống, vui chơi). Mở rộng :Có thể liên kết với các địa điểm để đặt chỗ trước , lấy voucher, mã giảm giá.</p>
                        </li>
                    </td>
                </tr>
                <tr>
                    <td align="center">14</td>
                    <td>Trong quá trình FiBo nếu gặp vấn đề gì thì liên hệ với ai? (gặp lỗi kĩ thuật trên ứng dụng, cần hỗ trợ, tư vấn, giải đáp thắc mắc…)</td>
                    <td>
                        <li>Liên hệ đến sđt 01265043821 – 0986607599.</li>
                        <li>Gửi mail về ducaotien@gmail.com</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">15</td>
                    <td>Nếu nhận thấy hoặc phát hiện các thành viên khác có vấn đề thì làm thế nào? (đã kết hôn, có hành vi - ứng xử không phù hợp với tiêu chuẩn của cộng đồng…)</td>
                    <td>
                        <li>Sau khi nhận được report, FiBo sẽ thẩm định và xác minh rồi mới xử lí nên không lo vấn đề bị report sai.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">16</td>
                    <td>Nếu bị thành viên khác report sai thì làm thế nào?</td>
                    <td>
                        <li>Sau khi nhận được report, FiBo sẽ thẩm định và xác minh rồi mới xử lí nên không lo vấn đề bị report sai.</li>
                    </td>
                </tr>
                <tr>
                    <td align="center">17</td>
                    <td>Cung cấp thông tin liên hệ và thông tin cá nhân cho FiBo có sợ bị tiết lộ cho bên thứ 3 không?</td>
                    <td>
                        <li>FiBo cam kết bảo mật thông tin liên hệ và thông tin cá nhân cho thành viên trừ trường hợp có yêu cầu của cơ quan pháp luật.</li>
                        <li>Với các thông tin trong profile hiển thị trên ứng dụng: Khi đăng kí sử dụng dịch vụ đồng nghĩa với việc thành viên đồng ý công bố và chia sẻ các thông tin đó cho các thành viên khác trong cộng đồng FiBo.</li>
                    </td>
                </tr>
            </table>
        </div>
    </div>


@endsection
@section('custom-js')

@endsection