<h2>Quét mã QR bằng Google Authenticator</h2>
<img src="{{ $qrCodeUrl }}" alt="QR Code">
<p>Mã bí mật: {{ $secret }}</p>

<form method="POST" action="{{ route('2fa.enable') }}">
    @csrf
    <label for="code">Nhập mã xác thực từ Google Authenticator:</label>
    <input type="text" name="code" required>
    <button type="submit">Xác minh & Kích hoạt 2FA</button>
</form>
