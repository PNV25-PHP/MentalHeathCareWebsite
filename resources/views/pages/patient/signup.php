<?php include_once '../../pages/common/header.php' ?>
<?php include_once '../../pages/common/navbar.php' ?>

<div class="pl-10 font-Poppins h-full">
    <div class=" grid-cols-2 flex h-full">
        <div class="block_contain-lefl w-1/2  mr-30  ">
            <button class="material-symbols-outlined ml-3 ">arrow_back</button>
            <h3 class="title text-center text-5xl text-blue-900 animate-fadeIn font-bold leading-tight">
                Mental Health Care
            </h3>
            <p class="text-center">Vui lòng nhập mật khẩu và email để tiếp tục</p>
            <form action="" method="post" id="form">
                <div id="name"></div>
                <div id="email"></div>
                <div id="sdt"></div>
                <div id="mk1"></div>
                <div id="mk2"></div>
                <div id="button"></div>
            </form>

        </div>

        <div class="block_contain ml-10 pt-20 bg-gray-300 ">
            <p class="text-6xl mt-20 text-center" style="font-family: Beau Rivage; ">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
            <img class="mt-5 mb-20" src="https://image.baophapluat.vn/1200x630/Uploaded/2023/athlraqhpghat/2022_10_11/minh-hoa-1617.jpg" alt="bac si">
        </div>
    </div>
</div>

<!-- require script -->
<?php require_once '../../components/Input.php' ?>
<?php require_once '../../components/Button.php' ?>

<script>
    Input
        .new()
        .setID("name")
        .setName("name")
        .setType("text")
        .setPlaceholder("Tên của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Họ và tên")
        .setLabel("email")
        // appendTo
        .appendTo("name")
    Input
        .new()
        .setID("email")
        .setName("email")
        .setType("email")
        .setPlaceholder("Email của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Email của bạn")
        .setLabel("Email")
        // appendTo
        .appendTo("email")
    Input
        .new()
        .setID("sdt")
        .setName("sdt")
        .setType("phone")
        .setPlaceholder("Số điện thoại của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Số điện thoại")
        .setLabel("Số điện thoại")
        // appendTo
        .appendTo("sdt")
    Input
        .new()
        .setID("password1")
        .setName("password1")
        .setType("password")
        .setPlaceholder("Mật khẩu của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Mật khẩu")
        .setLabel("Mật khẩu")
        // appendTo
        .appendTo("mk1")
    Input
        .new()
        .setID("password2")
        .setName("password2")
        .setType("password")
        .setPlaceholder("Mật khẩu của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Nhập lại mật khẩu")
        .setLabel("Nhập lại mật khẩu")
        // appendTo
        .appendTo("mk2")
    Button
        .new()
        .setOnClick(() => {
            console.log("abc")
        })
        .setCustomClass("mt-10 mb-20 px-1 py-1 text-white flex justify-center items-center")
        .setLabel("Đăng ký")
        .appendTo("button")
</script>
<?php include_once '../../pages/common/footer.php' ?>