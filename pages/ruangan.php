<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Ruangan Rumah Sakit</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h1 {
            color: #2c3e50;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #7f8c8d;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fff;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-group input:hover,
        .form-group select:hover {
            border-color: #bdc3c7;
        }

        .btn-container {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-secondary {
            background: #ecf0f1;
            color: #2c3e50;
            border: 2px solid #bdc3c7;
        }

        .btn-secondary:hover {
            background: #d5dbdb;
            transform: translateY(-2px);
        }

        .status-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .status-tersedia {
            background-color: #27ae60;
        }

        .status-terpakai {
            background-color: #e74c3c;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 25px;
                margin: 10px;
            }

            .form-header h1 {
                font-size: 24px;
            }

            .btn-container {
                flex-direction: column;
            }
        }

        /* Animasi untuk form */
        .form-container {
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>📋 Data Ruangan</h1>
            <p>Sistem Manajemen Ruangan Rumah Sakit</p>
        </div>

        <form id="roomForm" action="#" method="POST">
            <div class="form-group">
                <label for="roomId">ID Ruangan</label>
                <input type="text" id="roomId" name="roomId" required placeholder="Contoh: R001">
            </div>

            <div class="form-group">
                <label for="roomName">Nama Ruangan</label>
                <input type="text" id="roomName" name="roomName" required placeholder="Contoh: Ruang Mawar">
            </div>

            <div class="form-group">
                <label for="roomType">Jenis Ruangan</label>
                <select id="roomType" name="roomType" required>
                    <option value="">-- Pilih Jenis Ruangan --</option>
                    <option value="rawat_inap">🏥 Rawat Inap</option>
                    <option value="rawat_jalan">🚶 Rawat Jalan</option>
                    <option value="operasi">⚕️ Operasi</option>
                    <option value="icu">🏨 ICU</option>
                    <option value="ugd">🚨 UGD</option>
                    <option value="laboratorium">🔬 Laboratorium</option>
                    <option value="radiologi">📡 Radiologi</option>
                    <option value="konsultasi">💬 Konsultasi</option>
                    <option value="administrasi">📄 Administrasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="roomStatus">Status Ruangan</label>
                <select id="roomStatus" name="roomStatus" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="tersedia"><span class="status-indicator status-tersedia"></span>✅ Tersedia</option>
                    <option value="terpakai"><span class="status-indicator status-terpakai"></span>❌ Terpakai</option>
                </select>
            </div>

            <div class="btn-container">
                <button type="submit" class="btn btn-primary">💾 Simpan Data</button>
                <button type="reset" class="btn btn-secondary">🔄 Reset Form</button>
            </div>
        </form>
    </div>

    <script>
        // Form validation dan handling
        document.getElementById('roomForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ambil data form
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Validasi data
            if (!data.roomId || !data.roomName || !data.roomType || !data.roomStatus) {
                alert('⚠️ Mohon lengkapi semua field yang diperlukan!');
                return;
            }
            
            // Simulasi penyimpanan data
            console.log('Data ruangan:', data);
            alert(`✅ Data ruangan berhasil disimpan!\n\nID: ${data.roomId}\nNama: ${data.roomName}\nJenis: ${data.roomType}\nStatus: ${data.roomStatus}`);
            
            // Reset form setelah berhasil
            this.reset();
        });

        // Reset form dengan konfirmasi
        document.querySelector('.btn-secondary').addEventListener('click', function(e) {
            if (!confirm('🤔 Apakah Anda yakin ingin mengosongkan form?')) {
                e.preventDefault();
            }
        });

        // Auto-generate ID ruangan jika kosong
        document.getElementById('roomType').addEventListener('change', function() {
            const roomIdField = document.getElementById('roomId');
            if (!roomIdField.value) {
                const typeMap = {
                    'rawat_inap': 'RI',
                    'rawat_jalan': 'RJ',
                    'operasi': 'OP',
                    'icu': 'IC',
                    'ugd': 'UG',
                    'laboratorium': 'LB',
                    'radiologi': 'RD',
                    'konsultasi': 'KS',
                    'administrasi': 'AD'
                };
                
                const prefix = typeMap[this.value];
                if (prefix) {
                    const randomNum = Math.floor(Math.random() * 900) + 100;
                    roomIdField.value = `${prefix}${randomNum}`;
                }
            }
        });
    </script>
</body>
</html>