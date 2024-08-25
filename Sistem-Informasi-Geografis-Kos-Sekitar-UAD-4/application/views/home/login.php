<div class="container">
    <br><br><br>
    <div class="card">
        <div class="card-header">
            Login Admin
        </div>
        <div class="card-body">
            <?php if ($this->session->flashdata('message')): ?>
                <?= $this->session->flashdata('message'); ?>
            <?php endif; ?>
            <?php echo form_open_multipart('home/verifikasi', ['class' => 'row g-2 needs-validation', 'novalidate' => 'novalidate']); ?>
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" required>
                    <div class="valid-feedback">
                        Data sudah terisi!
                    </div>
                    <div class="invalid-feedback">
                        Data belum terisi!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <div class="valid-feedback">
                        Data sudah terisi!
                    </div>
                    <div class="invalid-feedback">
                        Data belum terisi!
                    </div>
                </div>
                <div class="col-12 text-end"><br>
                    <button type="submit" class="btn btn-primary" name="upload">Login</button>
                </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form.needs-validation');
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
</script>
