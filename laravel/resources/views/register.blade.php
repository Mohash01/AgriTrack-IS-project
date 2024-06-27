
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
    <title>AGRITRACK | Register</title>
</head>
<body class="bg-lightGray mb-48">
    <!-- Registration Form -->
    <div class="flex items-center justify-center min-h-screen bg-lightGray">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4">Register</h2>
            <form id="registration-form" action="{{ route('register')}}" method='post'>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700">Role</label>
                    <select id="role" name="role" class="w-full p-2 border border-gray-300 rounded mt-1">
                        <option value="admin">Admin</option>
                        <option value="farmer">Farmer</option>
                        <option value="extension-officer">Extension Officer</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label for="town" class="block text-gray-700">Town of Residence</label>
                    <input type="text" id="town" name="town" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="flex justify-end">
                    <button type="reset" class="bg-darkGreen text-white px-4 py-2 rounded mr-2">Cancel</button>
                    <button type="submit" class="bg-darkGreen text-white px-4 py-2 rounded">Register</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('registration-form').addEventListener('submit', function (event) {
            event.preventDefault();

            // Here you can add code to handle the form submission, e.g., sending data to your server
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData.entries());

            console.log('Form Data:', data);

            // Here you can add code to redirect the user or show a success message
            // For example:
            // alert('Registration successful!');

            // Redirect to the login page
            // window.location.href = '/';
        });
    </script>
</body>
</html>