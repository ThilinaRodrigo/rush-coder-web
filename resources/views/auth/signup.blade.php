<!DOCTYPE html>
<html lang="en" class="bg-black">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-black/80 backdrop-blur-md">

  <div class="max-w-md w-full bg-black/60 rounded-2xl p-8 shadow-xl border border-orange-500">
    <h2 class="text-2xl font-bold text-white text-center mb-6">Create Your Account</h2>

    <form class="space-y-4">
      <div>
        <label class="block text-gray-300 mb-1">Name</label>
        <input type="text" required
          class="w-full px-4 py-2 rounded-lg bg-gray-900 text-white border border-gray-700 focus:border-orange-500 focus:ring-0"
          placeholder="Jane Doe">
      </div>

      <div>
        <label class="block text-gray-300 mb-1">Email</label>
        <input type="email" required
          class="w-full px-4 py-2 rounded-lg bg-gray-900 text-white border border-gray-700 focus:border-orange-500 focus:ring-0"
          placeholder="you@example.com">
      </div>

      <div>
        <label class="block text-gray-300 mb-1">Password</label>
        <input type="password" required
          class="w-full px-4 py-2 rounded-lg bg-gray-900 text-white border border-gray-700 focus:border-orange-500 focus:ring-0"
          placeholder="••••••••">
      </div>

      <button type="submit"
        class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition">
        Sign Up
      </button>

      <p class="text-gray-400 text-sm text-center mt-4">
        Already have an account?
        <a href="/login" class="text-orange-400 hover:underline">Login</a>
      </p>
    </form>
  </div>

</body>
</html>
