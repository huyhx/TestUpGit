<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Tên:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Xác nhận mật khẩu:</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Đăng ký</button>
</form>
