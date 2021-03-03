<?php get_template_part( 'villas/banner' ); ?>
<?php get_template_part( 'villas/filter' ); ?>

<script>
  $(document).ready(function() {
    // Read value on page load
    $(".selected-range span").html($("#priceRange").val());

    // Read value on change
    $("#priceRange").change(function() {
      $(".selected-range span").html($(this).val());
    });
  });
</script>