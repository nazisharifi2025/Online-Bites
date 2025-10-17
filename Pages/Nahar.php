<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <script src="nav.js" defer></script>
</head>
<body>
    <div class="flex relative justify-between px-4 items-center w-full h-20 text-white bg-red-300">
        <h1 class="text-2xl font-bold">رستورانت آنلاین</h1>
        <ul class="flex space-x-6 justify-center  items-center font-bold text-white">
            <li><a href="home.php">صفحه اصلی</a></li>
            <li><a href="Catagori.php">دسته بندی ها </a></li>
            <li><a href="foods.php">غذا ها</a></li>
            <li><a href="About.php">درباره ما</a></li>
            <li><a href="contuct.php">تماس با ما </a></li>
            <li><a href="AdmenPage.php">بخش مدریت</a></li>
            <li id="a">عضویت</li>
            <li id="ao">ورود</li>
        </ul>
          <div id="opening" class="h-screen w-full  justify-center hidden absolute top-0 right-0 items-start py-12 bg-black/45">
            <i id="close" class="fas fa-times text-4xl absolute top-5 right-6"></i>
                <form action="" class="w-[700px] h-[40vh] text-gray-500 bg-white gap-4 flex flex-col justify-center   p-3 shadow-lg shadow-gray-400">
        <h1 class="text-2xl font-bold">ورود به حساب کاربری</h1>
        <div>
            <label for="Email" class="font-bold">ایمیل</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div>
            <label for="Email" class="font-bold">کلمه عبور</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <button class=" bg-cyan-700 text-white py-3 px-6 rounded-md mx-auto w-fit">ثبت نام</button>
       </form>
        </div>
        <!-- one dev added -->
              <div id="open" class="h-screen w-full  justify-center hidden absolute top-0 right-0 items-start py-12 bg-black/45">
            <i id="times" class="fas fa-times text-4xl absolute top-5 right-6"></i>
                <form action="" class="w-[700px] h-[60vh] text-gray-500 bg-white gap-4 flex flex-col justify-center   p-3 shadow-lg shadow-gray-400">
        <h1 class="text-2xl font-bold">عضویت در رستورانت</h1>
        <div>
            <label for="Email" class="font-bold">نام و نام خانوادگی</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div>
            <label for="Email" class="font-bold">ایمیل</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div class="grid grid-cols-2 w-full gap-3">
             <div>
            <label for="Email" class="font-bold">کلمه عبور</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
         <div>
            <label for="Email" class="font-bold"> تکرار کلمه عبور</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        </div>
        <button class=" bg-cyan-700 text-white py-3 px-6 rounded-md mx-auto w-fit">ثبت نام</button>
       </form>
        </div>
    </div>
</body>
</html>