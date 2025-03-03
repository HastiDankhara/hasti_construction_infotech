<?php
include 'config.php';

// Fetch data
$sql = "SELECT * FROM user";
$num = 1;
$result = $conn->query($sql);

?>
<title>admin data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<center>
<table  border="2px" cellpadding="10px">
<tr> 
    <th>id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Type</th>
    <th clospan="2">Actions</th>

</tr>
<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td> $num </td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["pass"] . "</td>";
                            echo "<td>" . $row["type"] . "</td>";
                            echo "<td>";
                            echo "<a href='updateadd.php?id=" . $row["id"] . "' class='btnup btn-sm'><i class='fa-solid fa-pen-to-square'></i></a> ";
                            echo "<a href='deleteadd.php?id=" . $row["id"] . "' class='btndel btn-sm'><i class='fa-solid fa-trash'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                            $num++;
                        }
                    } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                    ?>
 

</table>
</center>

<style>
/* Center the table and add margin */
center {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

/* Table styling */
table {
    border-collapse: collapse;
    width: 80%;
    max-width: 900px;
    background-color: #f9f9f9;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    font-family: Arial, sans-serif;
}

/* Table borders and padding */
table, th, td {
    border: 2px solid #ddd;
    padding: 12px;
    text-align: left;
}

/* Header styling */
th {
    /* background-color: #4CAF50; */
    background-color:#feb900;
    color: white;
    font-weight: bold;
}

/* Alternate row coloring for readability */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover effect on rows */
tr:hover {
    background-color: #ddd;
}

/* Table cell text styling */
td {
    font-size: 16px;
    color: #333;
}

/* First column width (ID) */
td:first-child {
    width: 5%;
}

/* Adjust username and type column widths */
td:nth-child(2) {
    width: 25%;
}

td:nth-child(3) {
    width: 20%;
}

td:nth-child(4) {
    width: 15%;
}

/* Responsive design */
@media screen and (max-width: 768px) {
    table {
        width: 100%;
    }

    th, td {
        font-size: 14px;
    }

    td:first-child {
        width: 10%;
    }
}
</style>