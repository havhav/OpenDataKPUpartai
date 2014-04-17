<div class="form_input">
    <?echo $frm->form("partai.php",$hidden);?>
    <div>
    Masukkan ID Partai:   <span><?echo $frm->textbox("text","partai_id","20","16");?></span>
    <span class="button_position"><?echo $frm->button("Submit");?></span>
    </form>
    </div>    
</div>
<div class="result">
    <h2>Json Text<h2>
    <div class="result_content"><pre><?echo $partai;?></pre></div>
</div>
