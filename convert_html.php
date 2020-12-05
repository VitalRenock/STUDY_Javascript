<script type="text/javascript" src='includes/js/custom_func.js'></script>
<script type="text/javascript">
    htmlCode = <?php echo $_POST['convert_html'] ?>;
    stringCode = ConvertSTRINGtoHTML(htmlCode);
</script>
<?php 
    $stringCode = "<script>document.write(stringCode);</script>";
    header("Location: page_test.php?convert_string=<h1>".$stringCode."</h1>");
?>