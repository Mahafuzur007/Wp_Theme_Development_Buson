<?php get_header();
?>

<!-- Breadcumb Start-->
<?php get_template_part('template-parts/partials/content', 'breadcumb'); ?>
<!-- Breadcumb End-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-not-found">
                    <h1>Sorry Nothing found.</h1>
                    <a href="<?php echo site_url(); ?>" class="btn border-t-icon-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php get_footer(); ?>