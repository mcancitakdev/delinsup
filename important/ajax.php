<?php 

session_start();
include('connect.php');
$ajax=trim(filter_input(INPUT_POST, 'ajax', FILTER_SANITIZE_STRING));
$build=trim(filter_input(INPUT_POST, 'build', FILTER_SANITIZE_STRING));
$kategori_id=trim(filter_input(INPUT_POST, 'kategori_id', FILTER_SANITIZE_STRING));


if($ajax=="true")
{

    if($build=="kategori_list")
    {
    	$query=$db->prepare("DELETE  FROM islem_kategori  WHERE kategori_id=$kategori_id");
        $query->execute();
        if($query)
        {
        	echo 'delete';
        }
        else
        {
        	echo 'error';
        }
    }
    else if($build=="getirFiyat")
    {
        
        $query=$db->prepare("SELECT * FROM islem_kategori WHERE kategori_id=$kategori_id");
        $query->execute();

        $mum=$query->fetch(PDO::FETCH_ASSOC);
        ?>
        
        <div class="form-group mb-3">
            <label for="exampleFormControlInput12" class="mb-2"><strong>Ücret</strong></label>
            <input type="number" class="form-control"<?php if($_SESSION['userRole']<10) echo ' disabled';  ?> name="ucret" id="exampleFormControlInput12"  placeholder="Ücret" value="<?php echo $mum['ucret']; ?>">
        </div>
        <?php 

    }

}
 ?>
