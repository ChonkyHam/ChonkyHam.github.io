<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../css/login.css" rel="stylesheet">
</head>

<!-- Favicon -->
<link href="../img/resize.png" rel="icon">

<body>
    <section class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">Belum Punya Akun MindEffect?</h2>
                    <p class="user_unregistered-text">Buat Sekarang!</p>
                    <button class="user_unregistered-signup" id="signup-button">Register</button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">Sudah Punya Akun MindEffect?</h2>
                    <p class="user_registered-text">Mulai Sekarang..</p>
                    <button class="user_registered-login" id="login-button">Login</button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Login</h2>
                    <form class="forms_form" action="<?php echo base_url('login/index3')?>">
                        <div class="forms_field">
                            <input type="email" placeholder="Email" class="forms_field-input" required autofocus />
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="Password" class="forms_field-input" required />
                        </div>
                        <div class="forms_buttons">
                            <button type="button" class="forms_buttons-forgot" onclick="window.location.href='contact.html'"></button>
                            <input type="submit" value="LOGIN" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Register</h2>
                    <form class="forms_form" action="<?php base_url('login/register')?>" method="post">
                        <div class="forms_field">
                            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <input type="email" name="email" placeholder="Email" class="forms_field-input" required />
                        </div>
                        <div class="forms_field" style="position: relative;">
                            <input type="password" name="password" placeholder="Password" class="forms_field-input" id="passwordField" required />
                            <img src="../img/eyeinvis.png" id="eyeIcon" onclick="togglePasswordVisibility()" width="30" height="30" style="cursor: pointer; position: absolute; right: -1px; top: 50%; transform: translateY(-50%);" />
                        </div>
                        <div class="forms_field">
                            <select class="forms_field-jeniskelamin" name="j_kelamin" style="margin-left: -5px;" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="forms_field">
                            <input type="text" name="alamat" placeholder="Alamat" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <label for="birthdate" class="forms_field-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="birthdate" class="forms_field-input" required />
                        </div>
                        <div class="forms_field">
                            <input type="text" name="tlp" placeholder="No Telepon" class="forms_field-input" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,12)" required />
                        </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" name="register" value="REGISTER" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/login.js"></script>
</body>

</html>