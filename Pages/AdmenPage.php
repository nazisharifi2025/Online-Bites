<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/input.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
</head>
<body dir="rtl">
      <div class="flex relative justify-between px-4 shadow-md shadow-gray-600 items-center w-full h-20 text-white bg-red-300">
        <h1 class="text-2xl font-bold">رستورانت آنلاین</h1>
        <ul class="flex space-x-6 justify-center  items-center font-bold text-white">
            <li><a href="home.php">صفحه اصلی</a></li>
        </ul>
</div>
    <!-- navbar endded -->
     <div class="w-full mx-auto h-[87vh] gap-5 bg-red-400 flex flex-col justify-center items-center">
       <form action="" class="w-[500px] h-[40vh] bg-white gap-4 flex flex-col justify-center   p-3 shadow-lg shadow-gray-400">
        <h1 class="text-2xl font-bold">ورود به بخش مدریت</h1>
        <div>
            <label for="Email" class="font-bold">ایمیل</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div>
            <label for="Email" class="font-bold">رمز عبور</label>
            <input type="text" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <button class=" bg-red-400 text-white py-3 px-4 w-full">ورود</button>
       </form>
     </div>
 <!-- endded -->
</body>
</html>