<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu <www.facebok.com/wusthanhdieu>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Quangg Toàn | HOME";
    public $description = "Hi my name is ThanhDieu / A freelance / web developer / vexer";
    public $keywords = "thanhdieu,web thanh dieu,vuong thanh dieu,thanhdieutv,wsteam,wusteam,thanhdieu home,profile thanhdieu";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "QuanggToan | HOME";
    public $avatar = "./res/v5/img/avatar.jpg";
    public $userName = ["Hello Everybody", "My name is Quangg Toàn.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Thích ngồi ở nhà xem...";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = " Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại không tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://www.facebook.com/profile.php?id=61571467222346", // Thay link facebook
        "instagram" => "https://www.instagram.com/toan.pervis", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/@tshooop555", // Thay link tiktok
        "telegram" => "https://t.me/qtoan3306" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Quangg Toàn", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "No ", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "28/03/2024" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/un6bax.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Người ấy  ",
            "author" => "Ngô Kinh Remix"
        ],
        [
            "url" => "https://files.catbox.moe/z1hphy.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Vì Người Không Xứng Đáng",
            "author" => "Tuấn Hưng] - Remix "
        ],
        [
            "url" => "https://files.catbox.moe/o627sg.mp3 ",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "TLỐI NHỎ x 424 ",
            "author" => "???"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://files.catbox.moe/58ekqy.png",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
