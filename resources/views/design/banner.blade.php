
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>this is title</title>
    <!-- plugins:css -->
    <script src="//cdn.tailwindcss.com?plugins=forms,typography"></script>
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>

<div class="max-w-screen-xl mx-auto px-4 md:px-8">
    <div class="items-start justify-between py-4 border-b md:flex">
        <div>
            <h3 class="text-gray-800 text-2xl font-bold">
                Shop Information
            </h3>
        </div>
        <div class="items-center gap-x-3 mt-6 md:mt-0 sm:flex">
            <a
                href="javascript:void(0)"
                class="block px-4 py-2 text-center text-white duration-150 font-medium bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-700 md:text-sm"
            >
                Collection
            </a>
            <a
                href="javascript:void(0)"
                class="block px-4 py-2 mt-3 text-center text-gray-700 duration-150 font-medium rounded-lg border hover:bg-gray-50 active:bg-gray-100 sm:mt-0 md:text-sm"
            >
                Product
            </a>
        </div>
    </div>
</div>
</body>
</html>