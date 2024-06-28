<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkGreen: "#2E8B57",
                        white: "#FFFFFF",
                        gray: "#8B8B8B",
                        lightGray: "#f5f5f5"
                    },
                },
            },
        };
    </script>
    <title>AGRITRACK | Login</title>
</head>
<body class="bg-lightGray mb-48">
    <!-- Login Form -->
    <div class="flex items-center justify-center min-h-screen bg-lightGray">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="flex justify-end">
                    <button type="reset" class="bg-darkGreen text-white px-4 py-2 rounded mr-2">Cancel</button>
                    <button type="submit" class="bg-darkGreen text-white px-4 py-2 rounded">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
