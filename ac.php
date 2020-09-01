
<!DCOTYPE html>
<html>
        <head>
                <meta charset="utf-8"/>
        </head>
        
    <?php
    
if (isset($_POST['password']) AND $_POST['password'] == "GBesic974!")
{

        header('location: sites.php');
    
}
else
{
    header('location: error.php');
}
    ?>

</body>
</html>