<style>
.form_input {
font-family: verdana,arial,sans-serif;
font-size: 14px;
line-height: 2.0;
}

.form_input b{
color: #d65c02;
font-size:14px;
}
</style>

<div class="form_input">

<table border="0" cellpadding="4" cellspacing="1" width="100%" bgcolor="#D6D6DA" style="font-size:12px;">
	<tr bgcolor="#E2EBE8">
		<th>No</th>
		<th>Parameter</th>
		<th>Keterangan</th>
	</tr>
		<tr bgcolor="#f6f6f5">
		<td align = "right">1</td>
		<td align = "left">cmd</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat dua method yaitu search dan browse</td>
    </tr>
    <tr bgcolor="#f6f6f5">
		<td align = "right">2</td>
		<td align = "left">partai_id</td>
		<td align = "left">adalah parameter untuk method yang akan dipanggil, terdapat 1 method yaitu search</td>
    </tr>	
</table>

<div class="result">
    <h2><b>Contoh Request Search</b><h2>
    <div class="result_content">http://partai.kpu.go.id/api.php?cmd=search&partai_id=2</div>
</div>

<div class="result">
    <h2><b>Contoh Response Search</b><h2>
    <div class="result_content">
    <?
        $result=$api->get_partai(2);
        echo str_replace(",",",<br/>",$result);
    ?>
    </div>
</div>

</div>
