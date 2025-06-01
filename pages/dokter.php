<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dokter - Rumah Sakit</title>
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
            color: #2c3e50;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
        }

        .doctor-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .doctor-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .doctor-details h3 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .doctor-details p {
            color: #7f8c8d;
            font-size: 14px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border-left: 5px solid;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card.patients {
            border-left-color: #3498db;
        }

        .stat-card.appointments {
            border-left-color: #e74c3c;
        }

        .stat-card.completed {
            border-left-color: #27ae60;
        }

        .stat-card.pending {
            border-left-color: #f39c12;
        }

        .stat-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .stat-number {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #7f8c8d;
            font-size: 14px;
        }

        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #ecf0f1;
        }

        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-success {
            background: #27ae60;
            color: white;
        }

        .btn-warning {
            background: #f39c12;
            color: white;
        }

        .patient-list {
            list-style: none;
        }

        .patient-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            margin-bottom: 10px;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .patient-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .patient-info h4 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .patient-info p {
            color: #7f8c8d;
            font-size: 14px;
        }

        .appointment-time {
            background: #667eea;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .action-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .action-card:hover {
            transform: translateY(-3px);
        }

        .action-icon {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .notification-badge {
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            padding: 4px 8px;
            font-size: 12px;
            position: absolute;
            top: -5px;
            right: -5px;
        }

        .schedule-item {
            display: flex;
            align-items: center;
            padding: 12px;
            margin-bottom: 8px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #3498db;
        }

        .schedule-time {
            font-weight: 600;
            color: #2c3e50;
            margin-right: 15px;
            min-width: 60px;
        }

        .schedule-desc {
            flex: 1;
            color: #7f8c8d;
        }

        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .quick-actions {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }
            
            .quick-actions {
                grid-template-columns: 1fr;
            }
        }

        /* Animasi */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content-card, .stat-card, .action-card {
            animation: slideIn 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div>
                <h1>🏥 Dashboard Dokter</h1>
                <p>Selamat datang di sistem manajemen rumah sakit</p>
            </div>
            <div class="doctor-info">
                <div class="doctor-avatar">DR</div>
                <div class="doctor-details">
                    <h3>Dr. Ahmad Santoso</h3>
                    <p>Spesialis Penyakit Dalam</p>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card patients">
                <div class="stat-icon">👥</div>
                <div class="stat-number">24</div>
                <div class="stat-label">Pasien Hari Ini</div>
            </div>
            <div class="stat-card appointments">
                <div class="stat-icon">📅</div>
                <div class="stat-number">8</div>
                <div class="stat-label">Janji Temu</div>
            </div>
            <div class="stat-card completed">
                <div class="stat-icon">✅</div>
                <div class="stat-number">16</div>
                <div class="stat-label">Selesai Ditangani</div>
            </div>
            <div class="stat-card pending">
                <div class="stat-icon">⏳</div>
                <div class="stat-number">3</div>
                <div class="stat-label">Menunggu</div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <div class="action-card" onclick="openPatientRecords()">
                <div class="action-icon">📋</div>
                <h3>Rekam Medis</h3>
                <p>Lihat dan edit rekam medis pasien</p>
            </div>
            <div class="action-card" onclick="viewSchedule()">
                <div class="action-icon">📅</div>
                <h3>Jadwal Praktek</h3>
                <p>Kelola jadwal dan appointment</p>
            </div>
            <div class="action-card" onclick="prescriptionManager()">
                <div class="action-icon">💊</div>
                <h3>Resep Obat</h3>
                <p>Buat dan kelola resep pasien</p>
            </div>
            <div class="action-card" onclick="emergencyAlert()">
                <div class="action-icon">🚨</div>
                <h3>Darurat</h3>
                <p>Notifikasi kasus darurat</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Patient Queue -->
            <div class="content-card">
                <div class="card-header">
                    <h2 class="card-title">📋 Antrian Pasien Hari Ini</h2>
                    <button class="btn btn-primary" onclick="refreshQueue()">🔄 Refresh</button>
                </div>
                <ul class="patient-list">
                    <li class="patient-item">
                        <div class="patient-info">
                            <h4>Siti Aminah</h4>
                            <p>No. RM: 123456 | Keluhan: Demam tinggi</p>
                        </div>
                        <div class="appointment-time">09:00</div>
                        <button class="btn btn-success" onclick="startConsultation('123456')">Mulai</button>
                    </li>
                    <li class="patient-item">
                        <div class="patient-info">
                            <h4>Budi Hartono</h4>
                            <p>No. RM: 123457 | Keluhan: Kontrol rutin diabetes</p>
                        </div>
                        <div class="appointment-time">09:30</div>
                        <button class="btn btn-warning" onclick="viewHistory('123457')">Riwayat</button>
                    </li>
                    <li class="patient-item">
                        <div class="patient-info">
                            <h4>Maria Gonzales</h4>
                            <p>No. RM: 123458 | Keluhan: Sakit kepala berkepanjangan</p>
                        </div>
                        <div class="appointment-time">10:00</div>
                        <button class="btn btn-primary" onclick="viewPatient('123458')">Detail</button>
                    </li>
                </ul>
            </div>

            <!-- Today's Schedule -->
            <div class="content-card">
                <div class="card-header">
                    <h2 class="card-title">⏰ Jadwal Hari Ini</h2>
                </div>
                <div class="schedule-list">
                    <div class="schedule-item">
                        <div class="schedule-time">08:00</div>
                        <div class="schedule-desc">Mulai praktek pagi</div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-time">10:30</div>
                        <div class="schedule-desc">Rapat tim medis</div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-time">13:00</div>
                        <div class="schedule-desc">Istirahat</div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-time">14:00</div>
                        <div class="schedule-desc">Praktek sore</div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-time">16:00</div>
                        <div class="schedule-desc">Visite bangsal</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function untuk menangani berbagai aksi
        function openPatientRecords() {
            alert('🔍 Membuka sistem rekam medis...');
            // Redirect ke halaman rekam medis
            // window.location.href = 'rekam-medis.php';
        }

        function viewSchedule() {
            alert('📅 Membuka jadwal praktek...');
            // Redirect ke halaman jadwal
            // window.location.href = 'jadwal.php';
        }

        function prescriptionManager() {
            alert('💊 Membuka sistem resep obat...');
            // Redirect ke halaman resep
            // window.location.href = 'resep.php';
        }

        function emergencyAlert() {
            alert('🚨 Checking emergency notifications...');
            // Logic untuk notifikasi darurat
            showEmergencyNotification();
        }

        function startConsultation(patientId) {
            if (confirm(`Mulai konsultasi dengan pasien ${patientId}?`)) {
                alert(`✅ Memulai konsultasi dengan pasien ${patientId}`);
                // Logic untuk memulai konsultasi
                // window.location.href = `konsultasi.php?id=${patientId}`;
            }
        }

        function viewHistory(patientId) {
            alert(`📋 Membuka riwayat pasien ${patientId}`);
            // window.location.href = `riwayat.php?id=${patientId}`;
        }

        function viewPatient(patientId) {
            alert(`👤 Membuka detail pasien ${patientId}`);
            // window.location.href = `detail-pasien.php?id=${patientId}`;
        }

        function refreshQueue() {
            // Simulasi refresh data
            const button = event.target;
            button.innerHTML = '🔄 Memuat...';
            button.disabled = true;
            
            setTimeout(() => {
                button.innerHTML = '🔄 Refresh';
                button.disabled = false;
                alert('✅ Data antrian telah diperbarui');
            }, 2000);
        }

        function showEmergencyNotification() {
            // Simulasi notifikasi darurat
            const emergencyData = [
                'Pasien IGD - Kecelakaan lalu lintas',
                'ICU - Pasien kritis membutuhkan perhatian',
                'Ruang Operasi - Konsultasi segera diperlukan'
            ];
            
            const randomEmergency = emergencyData[Math.floor(Math.random() * emergencyData.length)];
            
            if (Math.random() > 0.5) {
                alert(`🚨 DARURAT: ${randomEmergency}`);
            } else {
                alert('✅ Tidak ada notifikasi darurat saat ini');
            }
        }

        // Update waktu real-time
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID');
            const dateString = now.toLocaleDateString('id-ID', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });
            
            document.title = `Dashboard Dokter - ${timeString}`;
        }

        // Update setiap detik
        setInterval(updateTime, 1000);

        // Inisialisasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            updateTime();
            console.log('Dashboard dokter telah dimuat');
            
            // Simulasi notifikasi berkala
            setInterval(() => {
                if (Math.random() > 0.95) { // 5% chance setiap 10 detik
                    showEmergencyNotification();
                }
            }, 10000);
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey || e.metaKey) {
                switch(e.key) {
                    case '1':
                        e.preventDefault();
                        openPatientRecords();
                        break;
                    case '2':
                        e.preventDefault();
                        viewSchedule();
                        break;
                    case '3':
                        e.preventDefault();
                        prescriptionManager();
                        break;
                    case 'r':
                        e.preventDefault();
                        refreshQueue();
                        break;
                }
            }
        });
    </script>
</body>
</html>