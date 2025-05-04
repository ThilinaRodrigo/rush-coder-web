<!DOCTYPE html>
<html lang="en" class="bg-black">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-black/80 backdrop-blur-md">

  <div class="max-w-md w-full bg-black/60 rounded-2xl p-8 shadow-xl border border-orange-500">
    <h2 class="text-2xl font-bold text-white text-center mb-6">Login to Your Account</h2>

    <form action="/login" method="POST" class="space-y-4">
      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-300 mb-1">Email</label>
        <input id="email" type="email" name="email" required
          class="w-full px-4 py-2 rounded-lg bg-gray-900 text-white border border-gray-700 focus:border-orange-500 focus:ring-0"
          placeholder="you@example.com">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-gray-300 mb-1">Password</label>
        <input id="password" type="password" name="password" required
          class="w-full px-4 py-2 rounded-lg bg-gray-900 text-white border border-gray-700 focus:border-orange-500 focus:ring-0"
          placeholder="••••••••">
      </div>

      <!-- Remember Me -->
      <div class="flex items-center">
        <input id="remember" type="checkbox" name="remember"
          class="text-orange-500 focus:ring-orange-500 border-gray-600 bg-gray-800 rounded">
        <label for="remember" class="ml-2 text-sm text-gray-400">Remember me</label>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition">
        Login
      </button>

      <div class="text-sm text-center text-gray-400 mt-4">
        <a href="/forgot-password" class="hover:underline text-orange-400">Forgot your password?</a>
      </div>

      <p class="text-gray-400 text-sm text-center mt-4">
        Don't have an account?
        <a href="/signup" class="text-orange-400 hover:underline">Sign up</a>
      </p>
    </form>
  </div>

</body>
</html>
