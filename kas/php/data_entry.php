<?php
include './connection.php';
if(isset($_POST['submit'])){
    // parameters
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $date=$_POST['date'];
    $kas_type=$_POST['kasType'];
    $description=$_POST['description'];
    $sql_query = "INSERT INTO buku_kas (name,amount,date,kas_type,description) values ('$name',$amount,'$date','$kas_type','$description')";

    if(mysqli_query($conn, $sql_query)){
        ?>
        <div>
            <p>Data baru telah ditambahkan.
                <a href="../manajemen.html">Kembali ke laman manajemen</a>
            </p>
        </div>
        <?php
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}


?>
