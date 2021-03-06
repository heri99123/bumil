<div class="table-responsive">
	<table class="table table-hover table-striped" width="100%" cellspacing="0">
		<thead>
			<tr>
				<td>ID. Bahan</td>
				<td>Nama Bahan</td>
				<td>Berat Takaran</td>
				<td>Golongan</td>
				<td>Energi Bahan</td>
				<td>Karbohidrat Bahan</td>
				<td>Protein Bahan</td>
				<td>Lemak Bahan</td>
                <td>Action</td>			
			</tr>
		</thead>
		<tbody>
			<?php 
				$no_data=1;
				foreach($bahans as $bahan): 				
			?>			
            <tr>
                <td>
					<?php echo $no_data; ?>
                    <input type="hidden" id="master-id_bahan-<?php echo $no_data; ?>" name="id_bahan" value="<?php echo $no_data; ?>">
                    <input type="hidden" id="master-nama_bahan-<?php echo $no_data; ?>" name="nama_bahan" value="<?php echo $bahan->nama_bahan; ?>">
                    <input type="hidden" id="master-berat_takaran-<?php echo $no_data; ?>" name="berat_takaran" value="<?php echo $bahan->berat_takaran; ?>">
                    <input type="hidden" id="master-golongan-<?php echo $no_data; ?>" name="golongan" value="<?php echo $bahan->golongan; ?>">
                    <input type="hidden" id="master-energi_bahan-<?php echo $no_data; ?>" name="energi_bahan" value="<?php echo $bahan->energi_bahan; ?>">
                    <input type="hidden" id="master-karbohidrat_bahan-<?php echo $no_data; ?>" name="karbohidrat_bahan" value="<?php echo $bahan->karbohidrat_bahan; ?>">
                    <input type="hidden" id="master-protein_bahan-<?php echo $no_data; ?>" name="protein_bahan" value="<?php echo $bahan->protein_bahan; ?>">
                    <input type="hidden" id="master-lemak_bahan-<?php echo $no_data; ?>" name="lemak_bahan" value="<?php echo $bahan->lemak_bahan; ?>">
                    <!-- <inpiut hidden untuk menampung trus diambil, bedakan dengan + no_data -->
				</td>
				<td>
					<?php echo $bahan->nama_bahan; ?>
				</td>
				<td>
					<?php echo $bahan->berat_takaran; ?> Gram
				</td>
				<td>
                    <?php
                    if ($bahan->golongan == "1")
                    $golongan = "Ringan";
                    elseif ($bahan->golongan == "2")
                    $golongan = "Daging";
                    elseif ($bahan->golongan == "3")
                    $golongan = "Ikan";
                    elseif ($bahan->golongan == "4")
                    $golongan = "Sayuran";
                    elseif ($bahan->golongan == "5")
                    $golongan = "Serelia/Umbi";
                    elseif ($bahan->golongan == "6")
                    $golongan = "Bahan Pokok";
                    elseif ($bahan->golongan == "7")
                    $golongan = "Umum";
                    else
                    $golongan = '';
                    ?>
                    <?php echo $golongan; ?>
				</td>		
				<td>
					<?php echo $bahan->energi_bahan; ?>                    
				</td>									
				<td>
					<?php echo $bahan->karbohidrat_bahan; ?>                    
				</td>
				<td>
					<?php echo $bahan->protein_bahan; ?>                    
				</td>
				<td>
					<?php echo $bahan->lemak_bahan; ?>
				</td>									
				<td>
					<button type="button" onclick='pilih(<?php echo $no_data; ?>)' class="btn btn-warning">
						<i class="fas fa-plus-circle"></i>                    
                    </button>                    
					</a>											
				</td>
			</tr>
			<?php
                $no_data++;
                endforeach;			
			?>
		</tbody>
	</table>
</div>				
<script>
    var no_edit = '<?php echo $no_edit; ?>'

    function pilih(no_data) {
        // id="name_"+no  diset valuenya sesuai komponen yg dinginkan        
        // id_bahan-no = 
        // nama_bahan-'+no_list+'
        
        var id_bahan_terpilih = $('#master-id_bahan-'+no_data).val();
        var nama_bahan = $('#master-nama_bahan-'+no_data).val();
        var berat_takaran = $('#master-berat_takaran-'+no_data).val();
        var golongan = $('#master-golongan-'+no_data).val();
        var energi_bahan = $('#master-energi_bahan-'+no_data).val();
        var karbohidrat_bahan = $('#master-karbohidrat_bahan-'+no_data).val();
        var protein_bahan = $('#master-protein_bahan-'+no_data).val();
        var lemak_bahan = $('#master-lemak_bahan-'+no_data).val();

        // console.log(no_data, id_bahan_terpilih, nama_bahan, berat_takaran, golongan, energi_bahan, karbohidrat_bahan, protein_bahan, lemak_bahan)
        // console.log(id);
        
        // inisialisasi value dari element input sesuai id
        $('#id_bahan-'+no_edit).val(id_bahan_terpilih);
        $('#nama_bahan-'+no_edit).val(nama_bahan); // + no_data
        $('#berat_takaran-'+no_edit).val(berat_takaran);
        $('#golongan-'+no_edit).val(golongan);
        $('#energi_bahan-'+no_edit).val(energi_bahan);
        $('#karbohidrat_bahan-'+no_edit).val(karbohidrat_bahan);
        $('#protein_bahan-'+no_edit).val(protein_bahan);
        $('#lemak_bahan-'+no_edit).val(lemak_bahan);

        // modale ditutup
        $('#modalBahan').modal('hide');
    }
</script>