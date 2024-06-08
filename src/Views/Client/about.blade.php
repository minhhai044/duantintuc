@extends('layouts.master')

{{-- @section('title')
    Quản lý Sản phẩm
@endsection --}}

@section('content')
    <div class="container">
        <h2 style="margin-top:30px">Giới thiệu</h2>
        <section class="article-page">
            <article>
                <h2 style="text-align: center">Chào mừng bạn đến với NewsHot</h2>
                <div style="display: grid;  grid-template-columns:auto auto ;">
                    <img src="{{ asset('assets/uploads/anh.jpg') }}" style="height: 300px; width:200px; margin-top: 32px ;"
                        alt="">
                    <p style="margin:20px">Chào mừng bạn đến với trang web tin tức hàng đầu của chúng tôi! Đây là nơi bạn có
                        thể cập nhật những thông tin mới nhất, nóng hổi nhất từ khắp nơi trên thế giới. Với đội ngũ biên tập
                        viên chuyên nghiệp và giàu kinh nghiệm, chúng tôi cam kết mang đến cho bạn những bài viết phân tích
                        sâu sắc, những câu chuyện chân thực và những bản tin chính xác nhất.

                        Giao diện của trang web được thiết kế thân thiện, dễ dàng tìm kiếm và truy cập thông tin. Dù bạn
                        quan tâm đến chính trị, kinh tế, văn hóa, thể thao, khoa học công nghệ hay giải trí, chúng tôi đều
                        có những nội dung phong phú và đa dạng để phục vụ nhu cầu của bạn. Ngoài ra, chúng tôi còn cung cấp
                        các chuyên mục đặc biệt, như phân tích chuyên sâu, bình luận từ các chuyên gia và các bài viết độc
                        quyền chỉ có tại trang web của chúng tôi.
                        
                        Hãy truy cập trang web của chúng tôi mỗi ngày để không bỏ lỡ bất kỳ tin tức quan trọng nào và cùng
                        chúng tôi khám phá thế giới xung quanh qua những góc nhìn mới mẻ và đa chiều!</p>
                </div>

            </article>

            <article>
                <h3>Tin tức liên quan</h3>
                <ul>
                    <li>Thể Thao</li>
                    <li>Giải Trí</li>
                    <li>Công Nghệ</li>
                    <li>Thời Trang</li>
                    <li>Mua Sắm</li>
                </ul>
            </article>

            <article>
                <h3>Tham gia câu lạc bộ của chúng tôi</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, id?</p>
                <a href="#">Tham gia ngay</a>
            </article>
        </section>
    </div>
@endsection
