<?php

namespace Lieurcode\Controllers;

use Lieurcode\Core\Controller;

class TopupController extends Controller
{
    public function index()
    {
        return $this->view('topup/index');
    }

    public function store()
    {
        try {
            // Ambil inputan dari form POST
            $username = $_POST['username'] ?? null;
            $email    = $_POST['email'] ?? null;
            $amount   = $_POST['amount'] ?? null;

            // Validasi manual (karena belum ada sistem validasi otomatis)
            $errors = [];

            if (!$username || strlen($username) < 3) {
                $errors['username'] = 'Username minimal 3 karakter.';
            }

            if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email tidak valid.';
            }

            if (!$amount || !is_numeric($amount) || $amount < 1) {
                $errors['amount'] = 'Jumlah topup minimal 1.';
            }

            if (!empty($errors)) {
                throw new \Exception(json_encode($errors));
            }

            // Simpan ke database atau lakukan proses topup di sini...

            return $this->json([
                'success' => true,
                'message' => 'Topup berhasil diproses.'
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'errors' => json_decode($e->getMessage(), true)
            ]);
        }
    }
}
