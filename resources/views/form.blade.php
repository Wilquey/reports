<html>
<head>
    @vite('resources/css/app.css')
</head>
<body class="h-screen w-screen flex flex-col items-center justify-center">
    <form action="{{ route('form') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <label for='avatar'>Avatar</label>
            <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 rounded">
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
    </form>
</body>
</html>
