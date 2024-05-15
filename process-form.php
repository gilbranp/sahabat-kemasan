<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $pesanku = $_POST["pesanku"];

    // Ganti email_penerima dengan alamat email Anda
    $email_penerima = "koperasicks@gmail.com";

    // Subjek email
    $subjek = "Pesan dari Formulir Kontak";

    // Isi pesan email
    $pesan = "Nama: $nama\n";
    $pesan .= "Email: $email\n";
    $pesan .= "No Hp: $no_hp\n";
    $pesan .= "Pesan: $pesanku\n";

    // Kirim email
    mail($email_penerima, $subjek, $pesan);

    // Redirect pengguna setelah pengiriman formulir
    header("Location: thank-you.html");
    exit();
}
?>
