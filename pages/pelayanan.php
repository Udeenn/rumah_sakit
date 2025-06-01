<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan Kesehatan - Sistem Kesehatan</title>
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
            max-width: 1400px;
            margin: 0 auto;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(139, 92, 246, 0.1), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .header h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #8B5CF6, #A855F7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .header p {
            color: #6B7280;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            animation: fadeIn 1s ease-out 0.3s both;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .data-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .panel-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6B46C1;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group {
            margin-bottom: 20px;
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

        .required {
            color: #EF4444;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
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

        .btn-success {
            background: linear-gradient(135deg, #10B981, #059669);
            color: white;
        }

        .btn-warning {
            background: linear-gradient(135deg, #F59E0B, #D97706);
            color: white;
        }

        .btn-danger {
            background: linear-gradient(135deg, #EF4444, #DC2626);
            color: white;
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 0.875rem;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .search-filters {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .search-group {
            flex: 1;
            min-width: 200px;
        }

        .services-table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .table-header {
            background: linear-gradient(135deg, #8B5CF6, #A855F7);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .service-list {
            max-height: 600px;
            overflow-y: auto;
        }

        .service-item {
            padding: 20px;
            border-bottom: 1px solid #E5E7EB;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .service-item:hover {
            background: rgba(139, 92, 246, 0.05);
            transform: translateX(5px);
        }

        .service-item:last-child {
            border-bottom: none;
        }

        .service-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 10px;
        }

        .service-id {
            font-weight: 700;
            color: #8B5CF6;
            font-size: 1.1rem;
        }

        .service-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-antri {
            background: #FEF3C7;
            color: #D97706;
        }

        .status-sedang_dilayani {
            background: #DBEAFE;
            color: #2563EB;
        }

        .status-selesai {
            background: #D1FAE5;
            color: #059669;
        }

        .status-batal {
            background: #FEE2E2;
            color: #DC2626;
        }

        .service-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
        }

        .detail-label {
            font-size: 0.875rem;
            color: #6B7280;
            margin-bottom: 2px;
        }

        .detail-value {
            font-weight: 600;
            color: #374151;
        }

        .service-actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
            justify-content: flex-end;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #8B5CF6;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #6B7280;
            font-size: 0.875rem;
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

        .empty-state {
            text-align: center;
            padding: 40px;
            color: #6B7280;
        }

        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 15px;
        }

        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .form-panel {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .search-filters {
                flex-direction: column;
            }
            
            .search-group {
                min-width: auto;
            }
            
            .service-details {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏥  Sistem Pelayanan Kesehatan</h1>
            <p>Manajemen Pelayanan Pasien RS Husada</p>
        </div>

        <div class="main-content">
            <div class="form-panel">
                <h2 class="panel-title">📋 Tambah Pelayanan Baru</h2>
                
                <form id="serviceForm">
                    <div class="form-group">
                        <label for="id_pasien">Pasien <span class="required">*</span></label>
                        <select id="id_pasien" name="id_pasien" required>
                            <option value="">Pilih Pasien</option>
                            <option value="1">John Doe (NIK: 1234567890123456)</option>
                            <option value="2">Jane Smith (NIK: 2345678901234567)</option>
                            <option value="3">Ahmad Wijaya (NIK: 3456789012345678)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_dokter">Dokter <span class="required">*</span></label>
                        <select id="id_dokter" name="id_dokter" required>
                            <option value="">Pilih Dokter</option>
                            <option value="1">dr. Wijaya Kusuma, Sp.PD</option>
                            <option value="2">dr. Sarah Melati, Sp.A</option>
                            <option value="3">dr. Bambang Hartono, Sp.JP</option>
                            <option value="4">dr. Ratna Sari, Sp.OG</option>
                            <option value="5">dr. Hendra Gunawan, Sp.B</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_admin">Admin</label>
                        <select id="id_admin" name="id_admin">
                            <option value="">Pilih Admin</option>
                            <option value="1">Christa Bintang Ardine</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_ruangan">Ruangan</label>
                        <select id="id_ruangan" name="id_ruangan">
                            <option value="">Pilih Ruangan</option>
                            <option value="1">Ruang VIP Melati</option>
                            <option value="2">Ruang Kelas 1 Mawar</option>
                            <option value="3">Ruang Kelas 2 Tulip</option>
                            <option value="4">Ruang Kelas 3 Anggrek</option>
                            <option value="5">Ruang Operasi 1</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pelayanan">Tanggal & Waktu Pelayanan <span class="required">*</span></label>
                        <input type="datetime-local" id="tanggal_pelayanan" name="tanggal_pelayanan" required>
                    </div>

                    <div class="form-group">
                        <label for="diagnosis">Diagnosis</label>
                        <textarea id="diagnosis" name="diagnosis" rows="3" placeholder="Masukkan diagnosis..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="biaya_pelayanan">Biaya Pelayanan (Rp)</label>
                        <input type="number" id="biaya_pelayanan" name="biaya_pelayanan" min="0" step="1000" placeholder="0">
                    </div>

                    <div class="form-group">
                        <label for="status_pelayanan">Status Pelayanan</label>
                        <select id="status_pelayanan" name="status_pelayanan">
                            <option value="antri">Antri</option>
                            <option value="sedang_dilayani">Sedang Dilayani</option>
                            <option value="selesai">Selesai</option>
                            <option value="batal">Batal</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-primary" onclick="resetForm()">Reset</button>
                        <button type="submit" class="btn btn-primary">💾 Simpan</button>
                    </div>
                </form>
            </div>

            <div class="data-panel">
                <h2 class="panel-title">📊 Data Pelayanan</h2>
                
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number" id="totalServices">0</div>
                        <div class="stat-label">Total Pelayanan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="queueServices">0</div>
                        <div class="stat-label">Dalam Antrian</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="activeServices">0</div>
                        <div class="stat-label">Sedang Dilayani</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="completedServices">0</div>
                        <div class="stat-label">Selesai</div>
                    </div>
                </div>

                <div class="search-filters">
                    <div class="search-group">
                        <input type="text" id="searchInput" placeholder="🔍 Cari pelayanan..." onkeyup="filterServices()">
                    </div>
                    <div class="search-group">
                        <select id="statusFilter" onchange="filterServices()">
                            <option value="">Semua Status</option>
                            <option value="antri">Antri</option>
                            <option value="sedang_dilayani">Sedang Dilayani</option>
                            <option value="selesai">Selesai</option>
                            <option value="batal">Batal</option>
                        </select>
                    </div>
                </div>

                <div class="services-table">
                    <div class="table-header">
                        <h3>📋 Daftar Pelayanan</h3>
                        <button class="btn btn-primary btn-sm" onclick="refreshData()">🔄 Refresh</button>
                    </div>
                    <div class="service-list" id="serviceList"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="notification" class="notification"></div>

    <script>
        // Sample data untuk simulasi
        let services = [
            {
                id: 1,
                pasien: "John Doe",
                nik: "1234567890123456",
                dokter: "dr. Wijaya Kusuma, Sp.PD",
                admin: "Christa Bintang Ardine",
                ruangan: "Ruang VIP Melati",
                tanggal: "2025-06-01 10:00",
                diagnosis: "Hipertensi Stadium 1",
                biaya: 500000,
                status: "sedang_dilayani"
            },
            {
                id: 2,
                pasien: "Jane Smith",
                nik: "2345678901234567",
                dokter: "dr. Sarah Melati, Sp.A",
                admin: "Christa Bintang Ardine",
                ruangan: "Ruang Kelas 1 Mawar",
                tanggal: "2025-06-01 11:30",
                diagnosis: "Demam pada Anak",
                biaya: 300000,
                status: "antri"
            },
            {
                id: 3,
                pasien: "Ahmad Wijaya",
                nik: "3456789012345678",
                dokter: "dr. Bambang Hartono, Sp.JP",
                admin: "Christa Bintang Ardine",
                ruangan: "Ruang Kelas 2 Tulip",
                tanggal: "2025-06-01 09:00",
                diagnosis: "Pemeriksaan Jantung Rutin",
                biaya: 750000,
                status: "selesai"
            }
        ];

        let editingId = null;

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            loadServices();
            updateStats();
            
            // Set default datetime to now
            const now = new Date();
            now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
            document.getElementById('tanggal_pelayanan').value = now.toISOString().slice(0, 16);
        });

        // Load services
        function loadServices() {
            const serviceList = document.getElementById('serviceList');
            
            if (services.length === 0) {
                serviceList.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-state-icon">📋</div>
                        <h3>Belum ada data pelayanan</h3>
                        <p>Tambah pelayanan baru untuk memulai</p>
                    </div>
                `;
                return;
            }

            serviceList.innerHTML = services.map(service => `
                <div class="service-item" data-id="${service.id}">
                    <div class="service-header">
                        <div class="service-id">#${service.id.toString().padStart(3, '0')}</div>
                        <div class="service-status status-${service.status}">${getStatusText(service.status)}</div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <div class="detail-label">Pasien</div>
                            <div class="detail-value">${service.pasien}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">NIK</div>
                            <div class="detail-value">${service.nik}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Dokter</div>
                            <div class="detail-value">${service.dokter}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Ruangan</div>
                            <div class="detail-value">${service.ruangan || '-'}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Tanggal & Waktu</div>
                            <div class="detail-value">${formatDateTime(service.tanggal)}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Diagnosis</div>
                            <div class="detail-value">${service.diagnosis || '-'}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Biaya</div>
                            <div class="detail-value">${formatCurrency(service.biaya)}</div>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-primary btn-sm" onclick="editService(${service.id})">✏️ Edit</button>
                        <button class="btn btn-success btn-sm" onclick="updateStatus(${service.id}, 'selesai')">✅ Selesai</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteService(${service.id})">🗑️ Hapus</button>
                    </div>
                </div>
            `).join('');
        }

        // Update statistics
        function updateStats() {
            const total = services.length;
            const queue = services.filter(s => s.status === 'antri').length;
            const active = services.filter(s => s.status === 'sedang_dilayani').length;
            const completed = services.filter(s => s.status === 'selesai').length;

            document.getElementById('totalServices').textContent = total;
            document.getElementById('queueServices').textContent = queue;
            document.getElementById('activeServices').textContent = active;
            document.getElementById('completedServices').textContent = completed;
        }

        // Form submission
        document.getElementById('serviceForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Get selected option texts
            const pasienSelect = document.getElementById('id_pasien');
            const dokterSelect = document.getElementById('id_dokter');
            const adminSelect = document.getElementById('id_admin');
            const ruanganSelect = document.getElementById('id_ruangan');
            
            const serviceData = {
                id: editingId || Date.now(),
                pasien: pasienSelect.options[pasienSelect.selectedIndex].text.split(' (')[0],
                nik: pasienSelect.options[pasienSelect.selectedIndex].text.match(/\d{16}/)?.[0] || '',
                dokter: dokterSelect.options[dokterSelect.selectedIndex].text,
                admin: adminSelect.value ? adminSelect.options[adminSelect.selectedIndex].text : '',
                ruangan: ruanganSelect.value ? ruanganSelect.options[ruanganSelect.selectedIndex].text : '',
                tanggal: data.tanggal_pelayanan,
                diagnosis: data.diagnosis,
                biaya: parseFloat(data.biaya_pelayanan) || 0,
                status: data.status_pelayanan
            };

            if (editingId) {
                // Update existing service
                const index = services.findIndex(s => s.id === editingId);
                if (index !== -1) {
                    services[index] = serviceData;
                    showNotification('Pelayanan berhasil diperbarui!', 'success');
                }
                editingId = null;
            } else {
                // Add new service
                services.push(serviceData);
                showNotification('Pelayanan baru berhasil ditambahkan!', 'success');
            }

            loadServices();
            updateStats();
            resetForm();
        });

        // Edit service
        function editService(id) {
            const service = services.find(s => s.id === id);
            if (!service) return;

            editingId = id;
            
            // Fill form with service data
            document.getElementById('id_pasien').value = getOptionValueByText('id_pasien', service.pasien);
            document.getElementById('id_dokter').value = getOptionValueByText('id_dokter', service.dokter);
            document.getElementById('id_admin').value = getOptionValueByText('id_admin', service.admin);
            document.getElementById('id_ruangan').value = getOptionValueByText('id_ruangan', service.ruangan);
            document.getElementById('tanggal_pelayanan').value = service.tanggal;
            document.getElementById('diagnosis').value = service.diagnosis || '';
            document.getElementById('biaya_pelayanan').value = service.biaya || '';
            document.getElementById('status_pelayanan').value = service.status;

            // Change button text
            document.querySelector('button[type="submit"]').innerHTML = '💾 Update';
            
            showNotification('Data pelayanan dimuat untuk diedit', 'success');
        }

        // Update service status
        function updateStatus(id, status) {
            const service = services.find(s => s.id === id);
            if (service) {
                service.status = status;
                loadServices();
                updateStats();
                showNotification(`Status pelayanan diubah menjadi ${getStatusText(status)}`, 'success');
            }
        }

        // Delete service
        function deleteService(id) {
            if (confirm('Apakah Anda yakin ingin menghapus pelayanan ini?')) {
                services = services.filter(s => s.id !== id);
                loadServices();
                updateStats();
                showNotification('Pelayanan berhasil dihapus!', 'success');
            }
        }

        // Filter services
        function filterServices() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const statusFilter = document.getElementById('statusFilter').value;
            
            const filtered = services.filter(service => {
                const matchesSearch = !searchTerm || 
                    service.pasien.toLowerCase().includes(searchTerm) ||
                    service.dokter.toLowerCase().includes(searchTerm) ||
                    service.diagnosis.toLowerCase().includes(searchTerm);
                
                const matchesStatus = !statusFilter || service.status === statusFilter;
                
                return matchesSearch && matchesStatus;
            });

            // Update display with filtered results
            const serviceList = document.getElementById('serviceList');
            if (filtered.length === 0) {
                serviceList.innerHTML = `
                    <div class="empty-state">
                        <div class="empty-state-icon">🔍</div>
                        <h3>Tidak ada hasil</h3>
                        <p>Coba ubah kata kunci pencarian</p>
                    </div>
                `;
            } else {
                // Similar to loadServices but with filtered data
                serviceList.innerHTML = filtered.map(service => `
                    <div class="service-item" data-id="${service.id}">
                        <div class="service-header">
                            <div class="service-id">#${service.id.toString().padStart(3, '0')}</div>
                            <div class="service-status status-${service.status}">${getStatusText(service.status)}</div>
                        </div>
                        <div class="service-details">
                            <div class="detail-item">
                                <div class="detail-label">Pasien</div>
                                <div class="detail-value">${service.pasien}</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">NIK</div>
                                <div class="detail-value">${service.nik}</div>
                            </div>
                            <div class="detail-item">
                                <div class<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Data Pelayanan</title>
  </head>
  <body>
    <h2>Data Pelayanan</h2>
    <table border="1" width="100%" cellpadding="10">
      <thead>
        <tr>
          <th>ID</th>
          <th>Pasien</th>
          <th>Dokter</th>
          <th>Ruangan</th>
          <th>Diagnosa</th>
          <th>Biaya</th>
        </tr>
      </thead>
    </table>
  </body>
</html>
