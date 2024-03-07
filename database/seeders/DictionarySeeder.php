<?php

namespace Database\Seeders;

use App\Models\Dictionary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Buku', 'Buch', 'Kata Benda', 'Saya membaca buku.', 'Benda untuk membaca tulisan.'],
            ['Makan', 'Essen', 'Kata Kerja', 'Saya suka makan nasi.', 'Proses mengonsumsi makanan.'],
            ['Pintu', 'Tür', 'Kata Benda', 'Saya membuka pintu.', 'Benda untuk masuk dan keluar dari ruangan.'],
            ['Kucing', 'Katze', 'Kata Benda', 'Saya memiliki kucing.', 'Hewan peliharaan yang lucu.'],
            ['Berbicara', 'Sprechen', 'Kata Kerja', 'Saya suka berbicara dengan teman-teman.', 'Aktivitas menyampaikan pikiran lewat kata-kata.'],
            ['Lampu', 'Lampe', 'Kata Benda', 'Saya menyalakan lampu.', 'Sumber cahaya untuk penerangan.'],
            ['Tidur', 'Schlafen', 'Kata Kerja', 'Saya suka tidur nyenyak di malam hari.', 'Aktivitas istirahat untuk memulihkan energi.'],
            ['Mobil', 'Auto', 'Kata Benda', 'Saya memiliki mobil warna biru.', 'Kendaraan bermotor untuk transportasi.'],
            ['Belajar', 'Lernen', 'Kata Kerja', 'Saya senang belajar bahasa baru.', 'Aktivitas mendapatkan pengetahuan baru.'],
            ['Komputer', 'Computer', 'Kata Benda', 'Saya bekerja dengan komputer setiap hari.', 'Alat elektronik untuk pengolahan data.'],
            ['Menulis', 'Schreiben', 'Kata Kerja', 'Saya menulis surat kepada teman.', 'Aktivitas menyampaikan pikiran lewat tulisan.'],
            ['Kopi', 'Kaffee', 'Kata Benda', 'Saya suka minum kopi di pagi hari.', 'Minuman berkafein yang populer.'],
            ['Tari', 'Tanz', 'Kata Benda', 'Saya belajar menari salsa.', 'Seni gerakan tubuh yang terstruktur.'],
            ['Lapar', 'Hungrig', 'Kata Sifat', 'Saya merasa lapar, mari makan.', 'Kondisi tidak memiliki cukup makanan.'],
            ['Senang', 'Glücklich', 'Kata Sifat', 'Saya merasa senang setelah menyelesaikan proyek.', 'Kondisi perasaan bahagia.'],
            ['Pintar', 'Klug', 'Kata Sifat', 'Dia adalah anak yang pintar di kelas.', 'Memiliki kecerdasan tinggi.'],
            ['Rumah', 'Haus', 'Kata Benda', 'Saya tinggal di sebuah rumah kecil.', 'Tempat tinggal yang nyaman.'],
            ['Berjalan', 'Gehen', 'Kata Kerja', 'Saya suka berjalan-jalan di taman.', 'Aktivitas bergerak kaki.'],
            ['Hujan', 'Regen', 'Kata Benda', 'Hari ini cuaca hujan.', 'Air yang turun dari langit dalam bentuk butiran air.'],
            ['Bunga', 'Blume', 'Kata Benda', 'Dia memberi saya bunga sebagai hadiah.', 'Tanaman berbunga yang cantik.'],
        ];

        foreach ($data as $item) {
            Dictionary::create([
                'kata_indonesia' => $item[0],
                'kata_jerman' => $item[1],
                'jenis_kata' => $item[2],
                'contoh_penggunaan' => $item[3],
                'keterangan' => $item[4],
            ]);
        }
    }
}
