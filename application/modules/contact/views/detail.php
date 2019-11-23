<div class="container-fluid">
    <div class="card-box">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>Nama Pengirim</td>
                    <td>:</td>
                    <td><?php echo $contact->contact_name; ?></td>
                </tr>
                <tr>
                    <td>Email Pengirim</td>
                    <td>:</td>
                    <td><?php echo $contact->contact_email; ?></td>
                </tr>
                <tr>
                    <td>Telepon Pengirim</td>
                    <td>:</td>
                    <td><?php echo $contact->contact_phone; ?></td>
                </tr>
                <tr>
                    <td>Isi Pesan</td>
                    <td>:</td>
                    <td><?php echo $contact->contact_desc; ?></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?php echo pretty_date($contact->contact_created_at, 'd F Y, H:i', false); ?></td>
                </tr>
            </table>
            <a href="<?= site_url('contact')?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>