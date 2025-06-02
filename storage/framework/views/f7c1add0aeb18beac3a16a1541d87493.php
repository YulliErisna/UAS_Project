<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeuanganKu - Aplikasi Pengatur Keuangan</title>

    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    
    <link href="<?php echo e(asset('css/style.css')); ?>?v=<?php echo e(filemtime(public_path('css/style.css'))); ?>" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 gradient-bg text-white flex flex-col py-6 px-4 hidden md:flex">
        <div class="flex items-center justify-center mb-8">
            <i class="fas fa-wallet text-2xl mr-2"></i>
            <h1 class="text-2xl font-bold">KeuanganKu</h1>
        </div>
        <nav class="flex-1">
            <ul>
                <li>
                    <a href="#" class="sidebar-item active flex items-center py-3 px-4 rounded-lg mb-2" data-page="dashboard">
                        <i class="fas fa-home w-6"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="transaksi">
                        <i class="fas fa-exchange-alt w-6"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="riwayat">
                        <i class="fas fa-history w-6"></i>
                        <span>Riwayat Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="tagihan">
                        <i class="fas fa-file-invoice w-6"></i>
                        <span>Tagihan Berkala</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="grafik">
                        <i class="fas fa-chart-line w-6"></i>
                        <span>Grafik Keuangan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="ewallet">
                        <i class="fas fa-credit-card w-6"></i>
                        <span>E-Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="profil">
                        <i class="fas fa-user w-6"></i>
                        <span>Profil</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="border-t border-white border-opacity-20 pt-4 mt-4">
            <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg">
                <i class="fas fa-sign-out-alt w-6"></i>
                <span>Keluar</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Navbar -->
        <header class="bg-white shadow-sm z-10">
            <div class="py-4 px-6 flex justify-between items-center">
                <div class="flex items-center">
                    <button id="sidebar-toggle" class="mr-2 md:hidden">
                        <i class="fas fa-bars text-gray-700 text-xl"></i>
                    </button>
                    <h2 id="page-title" class="text-xl font-semibold text-gray-800">Dashboard</h2>
                </div>
                <div class="flex items-center">
                    <div class="relative mr-4">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-bell text-gray-400"></i>
                        </span>
                        <div class="w-2 h-2 bg-red-500 rounded-full absolute top-1 right-1"></div>
                    </div>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Profil" class="w-9 h-9 rounded-full mr-2">
                        <span class="text-gray-700 font-medium hidden sm:inline">yullierisna</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Sidebar -->
        <div id="mobile-sidebar" class="fixed inset-0 z-20 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="gradient-bg text-white w-64 h-full py-6 px-4 overflow-y-auto">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <i class="fas fa-wallet text-2xl mr-2"></i>
                        <h1 class="text-2xl font-bold">KeuanganKu</h1>
                    </div>
                    <button id="close-sidebar" class="text-white">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item active flex items-center py-3 px-4 rounded-lg mb-2" data-page="dashboard">
                                <i class="fas fa-home w-6"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="transaksi">
                                <i class="fas fa-exchange-alt w-6"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="riwayat">
                                <i class="fas fa-history w-6"></i>
                                <span>Riwayat Transaksi</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="tagihan">
                                <i class="fas fa-file-invoice w-6"></i>
                                <span>Tagihan Berkala</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="grafik">
                                <i class="fas fa-chart-line w-6"></i>
                                <span>Grafik Keuangan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="ewallet">
                                <i class="fas fa-credit-card w-6"></i>
                                <span>E-Wallet</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mobile-nav sidebar-item flex items-center py-3 px-4 rounded-lg mb-2" data-page="profil">
                                <i class="fas fa-user w-6"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="border-t border-white border-opacity-20 pt-4 mt-4">
                    <a href="#" class="sidebar-item flex items-center py-3 px-4 rounded-lg">
                        <i class="fas fa-sign-out-alt w-6"></i>
                        <span>Keluar</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
            <!-- Dashboard Page -->
            <div id="dashboard-page" class="page active">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-xl shadow-md p-6 card">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 font-medium">Saldo Total</h3>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center gradient-bg">
                                <i class="fas fa-wallet text-white"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800" id="total-balance">Rp0</p>
                        <div class="flex items-center mt-2 text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>0%
                            </span>
                            <span class="ml-2 text-gray-500">dari bulan lalu</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 card">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 font-medium">Pemasukan Bulan Ini</h3>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center bg-green-500">
                                <i class="fas fa-arrow-down text-white"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800" id="monthly-income">Rp0</p>
                        <div class="flex items-center mt-2 text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>0%
                            </span>
                            <span class="ml-2 text-gray-500">dari bulan lalu</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 card">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 font-medium">Pengeluaran Bulan Ini</h3>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center bg-red-500">
                                <i class="fas fa-arrow-up text-white"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800" id="monthly-expense">Rp0</p>
                        <div class="flex items-center mt-2 text-sm">
                            <span class="text-red-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>0%
                            </span>
                            <span class="ml-2 text-gray-500">dari bulan lalu</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-md p-6 lg:col-span-2 card">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-semibold text-lg text-gray-800">Grafik Pengeluaran & Pemasukan</h3>
                            <div class="relative">
                                <select class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option>7 Hari Terakhir</option>
                                    <option>30 Hari Terakhir</option>
                                    <option>3 Bulan Terakhir</option>
                                    <option>1 Tahun Terakhir</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="h-80">
                            <canvas id="finance-chart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 card">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-semibold text-lg text-gray-800">Tagihan Mendatang</h3>
                            <a href="#" data-page="tagihan" class="text-indigo-600 text-sm hover:text-indigo-800 transition">Lihat Semua</a>
                        </div>
                        <div id="upcoming-bills" class="space-y-4">
                            <div class="text-center py-10 text-gray-500">
                                <i class="fas fa-file-invoice text-4xl mb-3 opacity-30"></i>
                                <p>Belum ada tagihan berkala</p>
                                <button data-page="tagihan" class="mt-3 text-sm text-indigo-600 hover:text-indigo-800">+ Tambah Tagihan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 mt-6 card">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">Transaksi Terbaru</h3>
                        <a href="#" data-page="riwayat" class="text-indigo-600 text-sm hover:text-indigo-800 transition">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody id="recent-transactions" class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                        <i class="fas fa-exchange-alt text-4xl mb-3 opacity-30"></i>
                                        <p>Belum ada transaksi</p>
                                        <button data-page="transaksi" class="mt-3 text-sm text-indigo-600 hover:text-indigo-800">+ Tambah Transaksi</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Transaksi Page -->
            <div id="transaksi-page" class="page hidden">
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <h3 class="font-semibold text-lg text-gray-800 mb-6">Tambah Transaksi Baru</h3>
                    <form id="transaction-form" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <div class="flex space-x-4 mb-6">
                                <div class="flex-1">
                                    <input type="radio" id="jenis-pemasukan" name="jenis-transaksi" value="pemasukan" class="hidden peer" checked>
                                    <label for="jenis-pemasukan" class="flex items-center justify-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-indigo-500 peer-checked:bg-indigo-50 peer-checked:text-indigo-600 transition-all">
                                        <i class="fas fa-arrow-down mr-2"></i>
                                        <span>Pemasukan</span>
                                    </label>
                                </div>
                                <div class="flex-1">
                                    <input type="radio" id="jenis-pengeluaran" name="jenis-transaksi" value="pengeluaran" class="hidden peer">
                                    <label for="jenis-pengeluaran" class="flex items-center justify-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-red-500 peer-checked:bg-red-50 peer-checked:text-red-600 transition-all">
                                        <i class="fas fa-arrow-up mr-2"></i>
                                        <span>Pengeluaran</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="relative floating-label">
                            <input type="text" id="deskripsi" name="deskripsi" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                            <label for="deskripsi" class="absolute top-3 left-4 text-gray-500 transition-all">Deskripsi</label>
                        </div>

                        <div class="relative floating-label">
                            <select id="kategori" name="kategori" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white appearance-none cursor-pointer placeholder-transparent" required>
                                <option value="" selected disabled hidden></option>
                                <option value="Gaji">Gaji</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Investasi">Investasi</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Transportasi">Transportasi</option>
                                <option value="Belanja">Belanja</option>
                                <option value="Tagihan">Tagihan</option>
                                <option value="Hiburan">Hiburan</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <label for="kategori" class="absolute top-3 left-4 text-gray-500 transition-all">Kategori</label>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>

                        <div class="relative floating-label">
                            <input type="number" id="jumlah" name="jumlah" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                            <label for="jumlah" class="absolute top-3 left-4 text-gray-500 transition-all">Jumlah (Rp)</label>
                        </div>

                        <div class="relative floating-label">
                            <input type="date" id="tanggal" name="tanggal" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" required>
                            <label for="tanggal" class="absolute top-3 left-4 text-gray-500 transition-all">Tanggal</label>
                        </div>

                        <div class="md:col-span-2">
                            <button type="submit" class="w-full py-3 px-6 gradient-button text-white rounded-lg shadow-md hover:shadow-lg transition">
                                <i class="fas fa-save mr-2"></i>Simpan Transaksi
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Riwayat Transaksi Page -->
            <div id="riwayat-page" class="page hidden">
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <h3 class="font-semibold text-lg text-gray-800 mb-6">Filter Transaksi</h3>
                    <form id="filter-form" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="relative">
                            <select id="filter-periode" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white appearance-none">
                                <option value="all">Semua Periode</option>
                                <option value="this-month" selected>Bulan Ini</option>
                                <option value="last-month">Bulan Lalu</option>
                                <option value="last-3-months">3 Bulan Terakhir</option>
                                <option value="this-year">Tahun Ini</option>
                                <option value="custom">Periode Tertentu</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>

                        <div class="relative">
                            <select id="filter-jenis" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white appearance-none">
                                <option value="all">Semua Jenis</option>
                                <option value="pemasukan">Pemasukan</option>
                                <option value="pengeluaran">Pengeluaran</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>

                        <div class="relative">
                            <select id="filter-kategori" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white appearance-none">
                                <option value="all">Semua Kategori</option>
                                <option value="Gaji">Gaji</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Investasi">Investasi</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Transportasi">Transportasi</option>
                                <option value="Belanja">Belanja</option>
                                <option value="Tagihan">Tagihan</option>
                                <option value="Hiburan">Hiburan</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full py-3 px-6 gradient-button text-white rounded-lg shadow-md hover:shadow-lg transition">
                                <i class="fas fa-filter mr-2"></i>Terapkan Filter
                            </button>
                        </div>

                        <div id="custom-date-range" class="md:col-span-4 grid grid-cols-1 md:grid-cols-2 gap-4 hidden">
                            <div class="relative">
                                <input type="date" id="date-start" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white">
                            </div>
                            <div class="relative">
                                <input type="date" id="date-end" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">Riwayat Transaksi</h3>
                        <div class="flex space-x-2">
                            <button class="text-gray-500 hover:text-indigo-600 transition p-2">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-500 hover:text-indigo-600 transition p-2">
                                <i class="fas fa-print"></i>
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="transactions-history" class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                        <i class="fas fa-search text-4xl mb-3 opacity-30"></i>
                                        <p>Belum ada transaksi ditemukan</p>
                                        <button data-page="transaksi" class="mt-3 text-sm text-indigo-600 hover:text-indigo-800">+ Tambah Transaksi</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tagihan Berkala Page -->
            <div id="tagihan-page" class="page hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-1">
                        <div class="bg-white rounded-xl shadow-md p-6 sticky top-20">
                            <h3 class="font-semibold text-lg text-gray-800 mb-6">Tambah Tagihan Berkala</h3>
                            <form id="bill-form" class="space-y-4">
                                <div class="relative floating-label">
                                    <input type="text" id="nama-tagihan" name="nama-tagihan" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                                    <label for="nama-tagihan" class="absolute top-3 left-4 text-gray-500 transition-all">Nama Tagihan</label>
                                </div>

                                <div class="relative floating-label">
                                    <input type="number" id="jumlah-tagihan" name="jumlah-tagihan" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                                    <label for="jumlah-tagihan" class="absolute top-3 left-4 text-gray-500 transition-all">Jumlah (Rp)</label>
                                </div>

                                <div class="relative floating-label">
                                    <select id="kategori-tagihan" name="kategori-tagihan" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white appearance-none cursor-pointer placeholder-transparent" required>
                                        <option value="" selected disabled hidden></option>
                                        <option value="Listrik">Listrik</option>
                                        <option value="Air">Air</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Telepon">Telepon</option>
                                        <option value="Sewa">Sewa</option>
                                        <option value="Cicilan">Cicilan</option>
                                        <option value="Asuransi">Asuransi</option>
                                        <option value="Langganan">Langganan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <label for="kategori-tagihan" class="absolute top-3 left-4 text-gray-500 transition-all">Kategori</label>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <i class="fas fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div class="relative floating-label">
                                    <input type="number" id="tanggal-jatuh-tempo" name="tanggal-jatuh-tempo" min="1" max="31" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                                    <label for="tanggal-jatuh-tempo" class="absolute top-3 left-4 text-gray-500 transition-all">Tanggal Jatuh Tempo</label>
                                </div>

                                <div class="relative floating-label">
                                    <select id="pengingat-tagihan" name="pengingat-tagihan" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white appearance-none cursor-pointer placeholder-transparent" required>
                                        <option value="" selected disabled hidden></option>
                                        <option value="1">1 hari sebelumnya</option>
                                        <option value="3">3 hari sebelumnya</option>
                                        <option value="7">7 hari sebelumnya</option>
                                        <option value="0">Tidak ada pengingat</option>
                                    </select>
                                    <label for="pengingat-tagihan" class="absolute top-3 left-4 text-gray-500 transition-all">Pengingat</label>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <i class="fas fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <div class="pt-2">
                                    <button type="submit" class="w-full py-3 px-6 gradient-button text-white rounded-lg shadow-md hover:shadow-lg transition">
                                        <i class="fas fa-save mr-2"></i>Simpan Tagihan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="font-semibold text-lg text-gray-800">Tagihan Bulan Ini</h3>
                                <div class="relative">
                                    <select id="bill-filter" class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <option value="all">Semua Status</option>
                                        <option value="pending">Belum Lunas</option>
                                        <option value="paid">Sudah Lunas</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class="fas fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="monthly-bills" class="space-y-4">
                                <div class="text-center py-10 text-gray-500">
                                    <i class="fas fa-file-invoice text-4xl mb-3 opacity-30"></i>
                                    <p>Belum ada tagihan berkala</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-md p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="font-semibold text-lg text-gray-800">Ringkasan Tagihan Tahunan</h3>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-indigo-600 transition p-2">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Tagihan</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jatuh Tempo</th>
                                            <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah/bulan</th>
                                            <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Total Tahunan</th>
                                            <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="yearly-bills-summary" class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                                                <i class="fas fa-calendar-alt text-4xl mb-3 opacity-30"></i>
                                                <p>Belum ada tagihan berkala yang ditambahkan</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafik Keuangan Page -->
            <div id="grafik-page" class="page hidden">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-semibold text-lg text-gray-800">Grafik Pendapatan & Pengeluaran</h3>
                            <div class="relative">
                                <select id="chart-period" class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="weekly">Mingguan</option>
                                    <option value="monthly" selected>Bulanan</option>
                                    <option value="yearly">Tahunan</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="h-96">
                            <canvas id="income-expense-chart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-semibold text-lg text-gray-800">Pengeluaran Per Kategori</h3>
                            <div class="relative">
                                <select id="category-chart-period" class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="this-month" selected>Bulan Ini</option>
                                    <option value="last-month">Bulan Lalu</option>
                                    <option value="last-3-months">3 Bulan Terakhir</option>
                                    <option value="this-year">Tahun Ini</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="h-80">
                            <canvas id="category-chart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-semibold text-lg text-gray-800">Tren Tabungan</h3>
                            <div class="relative">
                                <select id="savings-chart-period" class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="6-months">6 Bulan Terakhir</option>
                                    <option value="1-year" selected>1 Tahun Terakhir</option>
                                    <option value="all-time">Semua Waktu</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="h-80">
                            <canvas id="savings-chart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-semibold text-lg text-gray-800">Perbandingan Anggaran</h3>
                            <div class="relative">
                                <select id="budget-chart-period" class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="this-month" selected>Bulan Ini</option>
                                    <option value="last-month">Bulan Lalu</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="h-80">
                            <canvas id="budget-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- E-Wallet Page -->
            <div id="ewallet-page" class="page hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-xl shadow-md p-6 card">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center gradient-bg mr-3">
                                <i class="fas fa-wallet text-white"></i>
                            </div>
                            <h3 class="text-gray-800 font-semibold">Tambahkan E-Wallet</h3>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Hubungkan e-wallet Anda untuk melacak saldo dan transaksi di satu tempat.</p>
                        <button class="w-full py-2 px-4 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-50 transition flex items-center justify-center">
                            <i class="fas fa-plus mr-2"></i>Hubungkan E-Wallet
                        </button>
                    </div>
                    <div class="col-span-2">
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <h3 class="text-gray-800 font-semibold mb-4">E-Wallet yang Didukung</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="border rounded-lg p-4 text-center hover:shadow-md transition cursor-pointer">
                                    <div class="w-12 h-12 bg-blue-500 mx-auto rounded-full flex items-center justify-center text-white mb-2">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <p class="text-sm font-medium">GoPay</p>
                                </div>
                                <div class="border rounded-lg p-4 text-center hover:shadow-md transition cursor-pointer">
                                    <div class="w-12 h-12 bg-green-500 mx-auto rounded-full flex items-center justify-center text-white mb-2">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <p class="text-sm font-medium">OVO</p>
                                </div>
                                <div class="border rounded-lg p-4 text-center hover:shadow-md transition cursor-pointer">
                                    <div class="w-12 h-12 bg-purple-500 mx-auto rounded-full flex items-center justify-center text-white mb-2">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                    <p class="text-sm font-medium">DANA</p>
                                </div>
                                <div class="border rounded-lg p-4 text-center hover:shadow-md transition cursor-pointer">
                                    <div class="w-12 h-12 bg-red-500 mx-auto rounded-full flex items-center justify-center text-white mb-2">
                                        <i class="fas fa-piggy-bank"></i>
                                    </div>
                                    <p class="text-sm font-medium">LinkAja</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">E-Wallet Terhubung</h3>
                    </div>
                    <div class="text-center py-10 text-gray-500">
                        <i class="fas fa-credit-card text-5xl mb-3 opacity-30"></i>
                        <p class="text-xl mb-2">Belum ada e-wallet yang terhubung</p>
                        <p class="text-sm max-w-md mx-auto mb-4">Hubungkan e-wallet Anda untuk melihat saldo dan transaksi secara real-time.</p>
                        <button class="py-2 px-6 gradient-button text-white rounded-lg shadow-md hover:shadow-lg transition">
                            <i class="fas fa-plus mr-2"></i>Hubungkan Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Profil Page -->
            <div id="profil-page" class="page hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-1">
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <div class="flex flex-col items-center text-center mb-6">
                                <div class="w-24 h-24 mb-4 relative">
                                    <img src="https://via.placeholder.com/96" alt="Profil" class="w-full h-full rounded-full object-cover">
                                    <div class="absolute bottom-0 right-0 bg-white p-1 rounded-full shadow-md">
                                        <i class="fas fa-camera text-gray-600"></i>
                                    </div>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Pengguna</h3>
                                <p class="text-gray-500 text-sm">yulliersina@email.com</p>
                            </div>
                            
                            <div class="border-t pt-4">
                                <div class="flex items-center py-2">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center bg-indigo-100 mr-3">
                                        <i class="fas fa-user text-indigo-600"></i>
                                    </div>
                                    <p class="text-gray-800">Informasi Profil</p>
                                </div>
                                <div class="flex items-center py-2">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center bg-indigo-100 mr-3">
                                        <i class="fas fa-lock text-indigo-600"></i>
                                    </div>
                                    <p class="text-gray-800">Keamanan</p>
                                </div>
                                <div class="flex items-center py-2">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center bg-indigo-100 mr-3">
                                        <i class="fas fa-bell text-indigo-600"></i>
                                    </div>
                                    <p class="text-gray-800">Notifikasi</p>
                                </div>
                                <div class="flex items-center py-2">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center bg-indigo-100 mr-3">
                                        <i class="fas fa-sliders-h text-indigo-600"></i>
                                    </div>
                                    <p class="text-gray-800">Preferensi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-6">Informasi Profil</h3>
                            <form class="space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="relative floating-label">
                                        <input type="text" id="nama-depan" value="yulli" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                                        <label for="nama-depan" class="absolute top-3 left-4 text-gray-500 transition-all">Nama Depan</label>
                                    </div>
                                    <div class="relative floating-label">
                                        <input type="text" id="nama-belakang" value="erisna" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" ">
                                        <label for="nama-belakang" class="absolute top-3 left-4 text-gray-500 transition-all">Nama Belakang</label>
                                    </div>
                                </div>
                                <div class="relative floating-label">
                                    <input type="email" id="email" value="yullierisna@email.com" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" " required>
                                    <label for="email" class="absolute top-3 left-4 text-gray-500 transition-all">Email</label>
                                </div>
                                <div class="relative floating-label">
                                    <input type="tel" id="telepon" value="" class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-white placeholder-transparent" placeholder=" ">
                                    <label for="telepon" class="absolute top-3 left-4 text-gray-500 transition-all">Nomor Telepon</label>
                                </div>

                                <div class="pt-2">
                                    <button type="submit" class="py-3 px-6 gradient-button text-white rounded-lg shadow-md hover:shadow-lg transition">
                                        <i class="fas fa-save mr-2"></i>Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="bg-white rounded-xl shadow-md p-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-6">Preferensi Keuangan</h3>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Mata Uang Utama</h4>
                                        <p class="text-sm text-gray-500">Mata uang untuk menampilkan semua transaksi</p>
                                    </div>
                                    <div class="relative">
                                        <select class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            <option value="IDR" selected>Rupiah (IDR)</option>
                                            <option value="USD">US Dollar (USD)</option>
                                            <option value="EUR">Euro (EUR)</option>
                                            <option value="SGD">Singapore Dollar (SGD)</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <i class="fas fa-chevron-down text-xs"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t pt-4 flex justify-between items-center">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Format Tanggal</h4>
                                        <p class="text-sm text-gray-500">Format untuk menampilkan tanggal</p>
                                    </div>
                                    <div class="relative">
                                        <select class="bg-gray-100 border-0 rounded-lg px-4 py-2 text-sm text-gray-700 appearance-none focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            <option value="DD/MM/YYYY" selected>DD/MM/YYYY</option>
                                            <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                                            <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <i class="fas fa-chevron-down text-xs"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t pt-4 flex justify-between items-center">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Notifikasi Transaksi</h4>
                                        <p class="text-sm text-gray-500">Dapatkan notifikasi untuk setiap transaksi</p>
                                    </div>
                                    <label class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggle-tx-notif" class="toggle-checkbox sr-only" checked />
                                            <div class="w-10 h-5 bg-gray-300 rounded-full shadow-inner"></div>
                                            <div class="toggle-dot absolute w-4 h-4 bg-white rounded-full shadow -left-1 -top-0.5 transition"></div>
                                        </div>
                                    </label>
                                </div>

                                <div class="border-t pt-4 flex justify-between items-center">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Notifikasi Tagihan</h4>
                                        <p class="text-sm text-gray-500">Dapatkan pengingat tagihan jatuh tempo</p>
                                    </div>
                                    <label class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggle-bill-notif" class="toggle-checkbox sr-only" checked />
                                            <div class="w-10 h-5 bg-gray-300 rounded-full shadow-inner"></div>
                                            <div class="toggle-dot absolute w-4 h-4 bg-white rounded-full shadow -left-1 -top-0.5 transition"></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo e(asset('script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>?v=<?php echo e(filemtime(public_path('js/script.js'))); ?>"></script>

</body>
</html>
<?php /**PATH C:\Users\USER DK\Desktop\new\resources\views/home.blade.php ENDPATH**/ ?>