<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kosiwa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="content">
                <div class="brand-logo">
                    <img src="{{ asset('assets/images/Frame_32.png') }}" alt="kosiwa" style="width: 50px; height: 50px;"><span style="font-size: 24px">osiwa</span>
                </div>

                <div class="header-text">
                    <h2>Welcome Back!</h2>
                    <h3>Masukkan kredensial untuk mengakses dashboard.</h3>
                </div>

                @if ($errors->any())
                    <div class="alert-error">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login.action') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" placeholder="Email Address" name="email" required value="{{ old('email') }}" />
                    </div>

                    <div class="input-group password-group">
                        <input type="password" id="passwordInput" placeholder="Password" name="password" required />
                        <span class="toggle-password" onclick="togglePassword()">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </span>
                    </div>

                    <button type="submit">Log In</button>
                </form>

                <p class="signup-link">Tidak punya akun? <a href="https://deva-syaiful.my.id/">Hubungi Admin</a></p>
            </div>

            <div class="hero">
                <div class="hero-overlay"></div>

                <div class="hero-content">
                    <h1>Demo Access</h1>
                    <p class="subtitle">Gunakan akun berikut untuk pengujian:</p>

                    <div class="credentials-grid">
                        <div class="cred-card" onclick="fillCreds('admin@kosiwa.com', 'password')">
                            <div class="position-badge" style="background: #f59e0b;">Admin</div>
                            <div class="cred-detail">
                                <span>E:</span> <strong>admin@kosiwa.com</strong>
                            </div>
                            <div class="cred-detail">
                                <span>P:</span> <strong>password</strong>
                            </div>
                        </div>

                        <div class="cred-card" onclick="fillCreds('mahasiswa@kosiwa.com', 'password')">
                            <div class="position-badge" style="background: #10b981;">Admin 2</div>
                            <div class="cred-detail">
                                <span>E:</span> <strong>mahasiswa@kosiwa.com</strong>
                            </div>
                            <div class="cred-detail">
                                <span>P:</span> <strong>password</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <svg class="graphic" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FFFFFF" d="M44.7,-76.4C58.9,-69.2,71.8,-59.1,81.6,-46.6C91.4,-34.1,98.2,-19.2,95.8,-4.9C93.4,9.5,81.8,23.3,71.8,35.8C61.9,48.4,53.6,59.7,42.8,67.4C32,75.1,18.7,79.2,4.8,70.9C-9.1,62.6,-23.6,41.9,-36.3,28.8C-49,15.7,-59.9,10.2,-63.9,-0.6C-67.9,-11.4,-65,-27.5,-55.8,-39.3C-46.6,-51.1,-31.1,-58.6,-17.1,-65.4C-3.1,-72.2,9.4,-78.3,22.2,-80.3L30.5,-83.6Z" transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </div>

    <script>
        // Fitur Toggle Password
        function togglePassword() {
            const passwordInput = document.getElementById('passwordInput');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.style.stroke = "#2563eb"; // Warna Biru saat aktif
            } else {
                passwordInput.type = 'password';
                eyeIcon.style.stroke = "#9ca3af"; // Warna Abu saat mati
            }
        }

        // Fitur Klik Kartu untuk Auto-Fill (Opsional)
        function fillCreds(email, password) {
            document.querySelector('input[name="email"]').value = email;
            document.querySelector('input[name="password"]').value = password;
        }
    </script>
</body>

</html>