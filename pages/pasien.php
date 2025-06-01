<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien - Sistem Kesehatan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            background: linear-gradient(135deg, #8B5CF6, #A855F7);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .form-container {
            padding: 40px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #6B46C1;
            font-size: 0.95rem;
        }

        input, select, textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #8B5CF6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
            transform: translateY(-2px);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .required {
            color: #EF4444;
        }

        .btn-container {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, #8B5CF6, #A855F7);
            color: white;
            box-shadow: 0 4px 15px rgba(139, 92, 246, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.4);
        }

        .btn-secondary {
            background: #F3F4F6;
            color: #6B7280;
            border: 2px solid #E5E7EB;
        }

        .btn-secondary:hover {
            background: #E5E7EB;
            transform: translateY(-2px);
        }

        .progress-bar {
            height: 4px;
            background: linear-gradient(90deg, #8B5CF6, #A855F7);
            border-radius: 2px;
            margin-bottom: 20px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .notification.success {
            background: linear-gradient(135deg, #10B981, #059669);
        }

        .notification.error {
            background: linear-gradient(135deg, #EF4444, #DC2626);
        }

        .notification.show {
            transform: translateX(0);
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #8B5CF6;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .btn-container {
                flex-direction: column;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏥 Registrasi Pasien</h1>
            <p>Sistem Kesehatan RS Waras Husada</p>
        </div>
        
        <div class="progress-bar" id="progressBar"></div>
        
        <div class="form-container">
            <form id="registrationForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nama_pasien">Nama Lengkap <span class="required">*</span></label>
                        <div class="input-group">
                            <input type="text" id="nama_pasien" name="nama_pasien" required>
                            <span class="input-icon">👤</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="nik">NIK <span class="required">*</span></label>
                        <div class="input-group">
                            <input type="text" id="nik" name="nik" maxlength="16" pattern="[0-9]{16}" required>
                            <span class="input-icon">🆔</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>
                        <div class="input-group">
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                            <span class="input-icon">📅</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin <span class="required">*</span></label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="golongan_darah">Golongan Darah</label>
                        <select id="golongan_darah" name="golongan_darah">
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <div class="input-group">
                            <input type="tel" id="no_telepon" name="no_telepon" maxlength="15">
                            <span class="input-icon">📱</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <input type="email" id="email" name="email">
                            <span class="input-icon">📧</span>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="alamat">Alamat Lengkap <span class="required">*</span></label>
                        <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap..." required></textarea>
                    </div>
                </div>
                
                <div class="btn-container">
                    <button type="button" class="btn btn-secondary" onclick="resetForm()">Reset Form</button>
                    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </div>

    <div id="notification" class="notification"></div>

    <script>
        const form = document.getElementById('registrationForm');
        const progressBar = document.getElementById('progressBar');
        const notification = document.getElementById('notification');
        
        // Update progress bar based on filled fields
        function updateProgress() {
            const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
            const filled = Array.from(inputs).filter(input => input.value.trim() !== '').length;
            const progress = (filled / inputs.length) * 100;
            progressBar.style.transform = `scaleX(${progress / 100})`;
        }
        
        // Add event listeners to update progress
        form.addEventListener('input', updateProgress);
        form.addEventListener('change', updateProgress);
        
        // NIK validation
        document.getElementById('nik').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
            if (e.target.value.length > 16) {
                e.target.value = e.target.value.slice(0, 16);
            }
        });
        
        // Phone number validation
        document.getElementById('no_telepon').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9+]/g, '');
        });
        
        // Show notification
        function showNotification(message, type) {
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }
        
        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate NIK length
            const nik = document.getElementById('nik').value;
            if (nik.length !== 16) {
                showNotification('NIK harus terdiri dari 16 digit!', 'error');
                return;
            }
            
            // Simulate form submission
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Mendaftar...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                console.log('Data pasien:', data);
                showNotification('Registrasi berhasil! Data pasien telah disimpan.', 'success');
                
                // Reset form after successful submission
                setTimeout(() => {
                    resetForm();
                }, 2000);
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
        
        // Reset form function
        function resetForm() {
            form.reset();
            updateProgress();
            showNotification('Form telah direset.', 'success');
        }
        
        // Add floating animation to form inputs
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
        
        // Initialize progress bar
        updateProgress();
    </script>
</body>
</html>