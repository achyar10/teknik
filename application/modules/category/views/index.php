<div class="container-fluid">
  <div class="card-box">
    <button type="button" class="btn btn-primary btn-xs mb-2 btnAdd" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</button>
    </h4>

    <div class="table-responsive">
      <table class="table dataTable table-hover mb-0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($category as $row) :
            ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $row->category_name ?></td>
              <td>
                <a href="#" class="btn btn-info btn-xs btnEdit mb-1" data-toggle="modal" data-target="#add" data-id="<?php echo $row->category_id ?>" data-name="<?php echo $row->category_name ?>"><i class="fas fa-edit"></i> Ubah</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="titleModal">Tambah <?php echo $title ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form id="form" action="<?php echo site_url('category/add') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="_id">
          <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="category_name" class="form-control" id="category_name" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(function() {

    $('.btnAdd').on('click', function() {
      $('#titleModal').html('Tambah <?php echo $title ?>');
      $('.modal-footer button[type=submit]').html('Simpan');
      $('#form').attr('action', '<?php echo site_url('category/add') ?>');
      $('#category_name').val('');
      $('#_id').val('');
      $('#category_code').attr('readonly', false);

    })

    $('.btnEdit').on('click', function() {
      var id = $(this).data('id');
      var category = $(this).attr('data-name');
      $('#titleModal').html('Ubah <?php echo $title ?>');
      $('.modal-footer button[type=submit]').html('Ubah');
      $('#form').attr('action', '<?php echo site_url('category/edit') ?>');
      $('#category_name').val(category);
      $('#_id').val(id);
    })


  });
</script>