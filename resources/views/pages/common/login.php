<?php include_once 'header.php' ?>
<?php include_once 'navbar.php' ?>

<div class="pl-10 font-Poppins h-full">
    <div class=" grid-cols-2 flex h-full">
        <div class="block_contain-lefl w-1/2  mr-30  ">
            <button class="material-symbols-outlined ml-3 ">arrow_back</button>
            <h3 class="title text-center text-5xl text-blue-900 animate-fadeIn font-bold leading-tight">
                Mental Health Care
            </h3>
            <p class="text-center">Vui lòng nhập mật khẩu và email để tiếp tục</p>
            <form action="" method="post" id="form">
                <div id="inputEmail"></div>
                <div id="inputPassword"></div>
                <div id="button"></div>
            </form>

        </div>

        <div class="block_contain ml-10 bg-gray-300 ">
            <p class="text-6xl mt-20 text-center" style="font-family: Beau Rivage; ">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
            <img class="mt-5 mb-20" src="https://image.baophapluat.vn/1200x630/Uploaded/2023/athlraqhpghat/2022_10_11/minh-hoa-1617.jpg" alt="bac si">
        </div>
    </div>
</div>


<?php require '../../components/Button.php' ?>
<?php require '../../components/Input.php' ?>


<script>
    Input
        .new()
        .setID("email")
        .setName("email")
        .setType("email")
        .setPlaceholder("Email của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Email")
        .setLabel("email")
        // appendTo
        .appendTo("inputEmail")

    Input
        .new()
        .setID("password")
        .setName("password")
        .setType("password")
        .setPlaceholder("Nhập mật khẩu của bạn")
        .setCustomClass("mt-5 block px-3 py-2 mt-2 mb-4 w-full")
        // set label
        .setContent("Password")
        .setLabel("password")
        // appendTo
        .appendTo("inputPassword")
    Button
        .new()
        .setOnClick(() => {
            console.log("abc")
        })
        .setCustomClass("mt-10 mb-3 px-1 py-1 text-white flex justify-center items-center")
        .setLabel("Tiếp tục")
        .appendTo("button")
</script>

<?php include_once 'footer.php' ?>